<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DoctorAppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::where('d_id', auth()->user()->id)->latest('id')->get();
        return view('doctor.appoinments.appointments', compact('appointments'));
    }


    public function store(Request $request, $id)
    {
        $request->validate([
            'resolve' => 'required|string',
        ]);

        $appointment = Appointment::find($id);
        $appointment->resolve = $request->resolve;
        $appointment->resolve_date = Carbon::now();
        $appointment->status = 1;
        $appointment->save();

        return redirect()->back()->with('success', 'Your prescription has been sent successfully');

    }
}
