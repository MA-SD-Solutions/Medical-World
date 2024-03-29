<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;
use Illuminate\Http\Request;
use Route;

use function PHPUnit\Framework\isEmpty;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:users-create',['only' => ['create', 'store']]);
        $this->middleware('permission:users-read');
        $this->middleware('permission:users-update',['only' => ['edit', 'update']]);
        $this->middleware('permission:users-delete',['only' => ['destroy']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            if($_GET['status'] == 'doctor'){
                $users = User::where('type', 'doctor')->get();
            }elseif($_GET['status'] == 'patient'){
                $users = User::where('type', 'patient')->get();
            }elseif($_GET['status'] == 'admin'){
                $users = User::where('type', 'admin')->get();
            }else{
                $users = User::get();
            }
            return view('users.index',compact('users'));
        }catch(\Exception $e){
            if($e->getMessage() == 'Undefined array key "status"')
            {
                $users = User::get();
                return view('users.index',compact('users'));
            }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $userRoles = $user->roles()->pluck('display_name');
        $userPermissions = $user->permissions()->pluck('display_name');
        if($userRoles->isEmpty())
        {
            $userRoles = '';
        }
        if($userPermissions->isEmpty())
        {
            $userPermissions = '';
        }
        return view('users.show',compact('user','userRoles','userPermissions'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //  return view('users.edit' , compact('user'));

        if(auth()->user()->created_by == null)
        {
            $roles = Role::get();
            $permissions = Permission::get();
        }
        else
        {
            $roles = auth()->user()->roles;
            $permissions = auth()->user()->permissions;
        }
        $userRoles = $user->roles()->pluck('id')->toArray();
        $userPermissions = $user->permissions()->pluck('id')->toArray();
        $assignedUsers = User::where('id','!=',$user->id)->get();

        return view('users.edit',compact('user', 'roles','permissions','userRoles','userPermissions','assignedUsers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
           $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $user->update($request->all());

        if($request->roles)
        {
            $user->syncRoles($request->roles);
        }
        else
        {
            $user->detachRoles($user->roles);
        }
        
        if($request->permissions)
        {
            $user->syncPermissions($request->permissions);
        }
        else
        {
            $user->detachPermissions($user->permissions);
        }

        return redirect()->route('users.index')
                        ->with('success','user updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }

    public function profile()
    {
        $id = Auth::user()->id;
        $role_id = DB::table('role_user')->where('user_id', $id)->first()->role_id;
        $userType = DB::table('roles')->where('id', $role_id)->first();
        $userType = $userType->name;
        return view('auth.profile' , compact('userType'));
    }

    public function editProfile(User $user){
        return view('auth.editProfile',compact('user'));
    }

    public function updateProfile(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => ['nullable','confirmed', 'min:6']
        ]);

        if($request->password != NULL){
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

        }else{
            $user->update([
                'name' => $request->name,
                'email' => $request->email
            ]);
        }

        return redirect()->route('profile')
                        ->with('success','Profile updated successfully');
    }
}
