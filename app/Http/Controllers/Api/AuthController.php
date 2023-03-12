<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AuthRequest;
use App\Models\User;
use Exception;
use JWTAuth;
use Validator;


class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','register']]);
    }

    public function login(Request $request)
    {
        $lang = $request->header('lang');

        try{
            $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);
            $credentials = $request->only('email', 'password');

            $token = JWTAuth::attempt($credentials);
            if (!$token) {
                return response()->json([
                    'status' => 'error',
                    'message' => $lang == 'en' ? 'Check your Email or Password' : '',
                    'data'=> ['message'=>'Unauthorized']
                ]);
            }
            $user = Auth::user();
            // $image = asset('storage/' . $user->image);
            $data = [
                'name' => $user->name,
                'email' => $user->email,
                'phone' => $user->phone,
                'address' => $user->address,
                'id' => $user->id,
                'token' => $token,
                'image' =>  $user->image ? asset('storage/' . $user->image): ''
            ];
            return response()->json([
                'status' => 'success',
                'message' => $lang == 'ar' ? 'تم تسجيل الدخول بنجاح' : 'user logged in successfully',
                'data' => $data,
            ]);
        }catch(Exception $e){
            return response()->json([
                'status' => 'error',
                'message' => $lang == 'ar' ? 'لم يتم تسجيل الدخول' : 'failed to log in',
                'data' => ['message' => 'failed to log in'],
            ]);
        }
    }

    public function register(Request $request){

        $lang = $request->header('lang');

        try{
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            // 'phone' => 'required|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            // 'phone' => $request->phone,
            // 'address' => $request->address,
            'type' => $request->type,
            'password' => Hash::make($request->password),
        ]);
        $credentials = $request->only('email', 'password');

        $token = JWTAuth::attempt($credentials);

        $data = [
            'name' => $user->name,
            'email' => $user->email,
            'phone' => $user->phone,
            'address' => $user->address,
            'id' => $user->id,
            'token' => $token,
            'image' =>$user->image ? asset('storage/' . $user->image): ''
        ];

        return response()->json([
            'status' => 'success',
            'message' => $lang == 'ar' ? 'تم التسجيل بنجاح' : 'user signed up in successfully',
            'data' => $data,
        ]);
    }catch(Exception $e){

        return response()->json([
            'status' => 'error',
            'message' => $e->getMessage(),
            'data'=> ['message' => $e->getMessage()]
        ]);
    }


    }

    public function logout()
    {

        try{
            Auth::logout();
            return response()->json([
                'status' => 'success',
                'message' => 'logged out successfully',
                'data' => ['message'=>'logged out successfully'],
            ]);
        }catch(Exception $e){
            return response()->json([
                'status' => 'error',
                'message' => 'failed to logout',
                'data' => ['message' => 'failed to logout']
            ]);
        }
    }

    // public function refresh()
    // {
    //     $user = Auth::user();
    //     $data = [
    //         'name' => $user->name,
    //         'email' => $user->email,
    //         'phone' => $user->phone,
    //         'id' => $user->id,
    //         'token' => Auth::refresh()
    //     ];

    //     return response()->json([
    //         'status' => 'success',
    //         'data' => $data,
    //     ]);
    // }



}
