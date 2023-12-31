<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index(){
        $users = User::latest('id')->get();


        return view('admin.users.index',compact('users'));
    }



    public function create()
    {
        $roles = Role::all();

        return view('admin.users.create',compact('roles'));
    }


    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'name'                  => 'required',
            'email'                 => 'required|unique:users',
            'phone'                 => ['required','string','regex:/^(?:\+?88|0088)?01[3-9]\d{8}$/'],
            'password_confirmation' => 'required',
            'password'              => 'required|confirmed',
            'avater'                => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'role'                  => 'required',
        ]);

        $role = Role::findOrFail($request->role);

        if ($role->name == 'Doctor') {
            $request->validate([
                'specialty'  => 'required',
                'hospital'   => 'required',
                'desigation' => 'required',
            ]);
        }


        $user = User::create([
            'name'                  => $request->name,
            'email'                 => $request->email,
            'phone'                 => $request->phone,
            'password'              => bcrypt($request->password),
            'is_admin'              => 0,
        ]);

        if ($request->hasFile('avater')){
            
            $image = $request->file('avater');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/admin/avater'), $image_name);

            $user->avater = 'uploads/admin/avater/'.$image_name;
            $user->save();
        }


        $role = Role::findOrFail($request->role);
        $user->assignRole($role);


        if ($role->name == 'Doctor') {
            Doctor::create([
                'user_id'       => $user->id,
                'specialty'     => $request->specialty,
                'hospital'      => $request->hospital,
                'desigation'    => $request->desigation,
            ]);
        }


        return redirect()->route('admin.users.index')->with('success','User Created Successfully');




    }


    

    public function destroy($id){
        
        $user = User::findOrFail($id);

        if ($user->email == auth()->user()->email){
            return response()->json([
                'error'=>'You can change your status yourself'
            ],422);
        }{
            if ($user->is_active == 1) {
                $user->is_active = 0;
                
            } else {
                $user->is_active = 1;
            }

            $user->save();
            return response()->json([
                'success'=>'User status updated'
            ],202);

        }
    }


}
