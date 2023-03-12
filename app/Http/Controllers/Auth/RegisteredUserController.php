<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
use App\Models\Permission;
use Exception;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */

    public function index()
    {
        $users = User::get();
        return view('users.index',compact('users'));
    }

    public function create()
    {
        $roles = Role::get();
        $permissions = Permission::get();
        return view('auth.register',compact('roles','permissions'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // dd($request);
        try{

            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'type' => $request->type,
                'password' => Hash::make($request->password),
            ]);

            if($request->roles)
            {
                $user->attachRoles($request->roles);
            }
            if($request->permissions)
            {
                $user->attachPermissions($request->permissions);
            }

            if($user->type == 'doctor'){
                $doctor = new Doctor();
                $doctor->name = $user->name;
                $doctor->email = $user->email;
                $doctor->user_id = $user->id;
                $doctor->phone = $request->phone;
                $doctor->city = $request->city;
                $doctor->area = $request->area;
                $doctor->gender = $request->gender;
                $doctor->birthdate = $request->birthdate;
                $doctor->save();

            }else if ($user->type == 'patient'){
                $patient = new Patient();
                $patient->name = $user->name;
                $patient->email = $user->email;
                $patient->user_id = $user->id;
                $patient->phone = $request->phone;
                $patient->city = $request->city;
                $patient->area = $request->area;
                $patient->gender = $request->gender;
                $patient->birthdate = $request->birthdate;
                $patient->save();

            }

            return redirect()->route('users.index')
                            ->with('success','User Added Successfully');

        }catch(Exception $ex){
            return redirect()->back()->with('error' , $ex->getMessage());
        }


    }
}
