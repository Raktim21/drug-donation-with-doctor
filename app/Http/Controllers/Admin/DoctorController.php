<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('admin.doctor.index', compact('doctors'));
    }


    public function store()
    {
        $this->validate(request(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        
        $doctor = new Doctor();
        $doctor->name = request('name');
        $doctor->email = request('email');
        $doctor->password = bcrypt(request('password'));
        $doctor->save();
        return redirect()->back();
    }
}
