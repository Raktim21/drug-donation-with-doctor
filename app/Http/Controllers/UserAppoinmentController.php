<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;

class UserAppoinmentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = User::role('Doctor')->get();

        return view('users.appoinments.index', compact('doctors'));
    }


    public function makeAppointment(Request $request, $id)
    {
        $request->validate([
           'description' => 'required|string',
           'file'        => 'nullable|file|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
        ]);

        $appointment = new Appointment();
        $appointment->d_id = $id;
        $appointment->p_id = auth()->user()->id;
        $appointment->description = $request->description;
        $appointment->save();



        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = hexdec(uniqid()).$file->getClientOriginalName();
            $file->move(public_path('uploads/appointments'), $filename);
            $appointment->file = 'uploads/appointments/'.$filename;
            $appointment->save();
        }

        return redirect()->back()->with('success', 'Appointment created successfully');
    }



    public function appointments()
    {
        $appointments = Appointment::where('p_id', auth()->user()->id)->latest('id')->get();
        return view('users.appoinments.appointments', compact('appointments'));
    }
}
