<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Exception;
use Validator;
// use Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    
    public function index(Request $request)
    {
        $lang = $request->header('lang');
        try{
            
            $user = User::find($request->id);
            $image = asset('storage/' . $user->image);
            $data = [
                'name' => $user->name,
                'email' => $user->email,
                'phone' => $user->phone,
                'address' => $user->address,
                'image' => $image,
                'id' => $user->id,
            ];
                return response()->json([
                    'status' => 'success',
                    'message' => $lang == 'ar' ? 'مرحبا ' . $user->name : 'Welcome '. $user->name, 
                    'data' => $data,
                ]);
        }catch(Exception $e){
                return response()->json([
                    'status' => 'error',
                    'message' => $lang == 'ar' ? 'لم يتم العثور على بيانات' : 'failed to get Data',
                    'data' => ['message' => $e->getMessage()],
                ]);
        }
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    //  dd($request->id);
        $lang = $request->header('lang');

        try{
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone= $request->phone;
        $user->address= $request->address;
        $user->update();

        return response()->json([
            'status' => 'success',
            'message' => 'Profile Updated Successfully',
            'message' => $lang == 'ar' ? 'تم تعديل البيانات بنجاح ' : 'Data updated successfully', 
            'data' => $user,
        ]);
    }catch(Exception $e){
        return response()->json([
            'status' => 'error',
            'message' => $lang == 'ar' ? 'لم يتم تعديل البيانات' : 'failed to update data', 
            'data' => ['message' => $e->getMessage()],
        ]);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $lang = $request->header('lang');
        
        try{
            $user = User::find($request->id);
            $user->delete();

            return response([
                'status' => 'success',
                'message' => $lang == 'ar' ? 'تم حزف الحساب بنجاح' : 'Account Deleted Successfully', 
                'data' => ['message' => 'Account Deleted Successfully'],
            ]);
        }catch(Exception $e){
            return response([
                'status' => 'error',
                'message' => $lang == 'ar' ? 'لم يتم حذف الحساب' : 'failed to delete account', 
                'data' => ['message' => $e->getMessage()]
            ]);
        }
    }


    public function ProfileImage(Request $request)
    {
        $lang = $request->header('lang');

        try{
            $this->validate($request, [
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            ]);
            $image_path = $request->file('image')->store('image', 'public');
            
            $user = User::find($request->id);
            
            $user->image = $image_path;
            $user->save();
            $image = asset('storage/' . $user->image);
            return response([
                'status' => 'success',
                'message' => $lang == 'ar' ? 'تم تغيير الصورة بنجاح' : 'image uploaded successfully', 
                'data' => [
                    'image' => $image,
                    'name' => $user->name,
                    'address' => $user->address,
                    'email' => $user->email,
                    'phone' => $user->phone,
                    'id' => $user->id
                    ]
            ]);
        }catch(Exception $e){
            return response([
                'status' => 'error',
                'message' => $lang == 'ar' ? 'لم يتم تغيير الصورة' : 'Failed to uploade image', 
                'data' => ['message' => $e->getMessage()]
            ]);
        }
    }
}
