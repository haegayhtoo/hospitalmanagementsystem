<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments=Appointment::all();
        
        return view('adminstaff.appointments.index',compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
         $appointments=Appointment::all();
        return view('adminstaff.appointments.create',compact('appointments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request);
       $request->validate([
        "appointmentname" => 'required',
        "gender" => 'required',
        "phonenumber" => 'required',
        "date" => 'required',
        "address" => 'required',
        "doctorname" => 'required',
        "statusid" => 'required',
        "patientid" => 'required',
        "scheduleid" => 'required',
        "staffid" => 'required',
    ]);
        $appointment = new Appointment;

        $appointment->name = $request->appointmentname;
        $appointment->gender = $request->gender;
        $appointment->phone_number = $request->phonenumber;
        $appointment->date_of_birth = $request->date;
        $appointment->address = $request->address ;
        $appointment->doctor_name = $request->doctorname;
        $appointment->status_id = $request->statusid;
        $appointment->patient_id = $request->patientid;
        $appointment->schedule_id = $request->scheduleid;
        $appointment->staff_id = $request->staffid;
        $appointment->save();

        return redirect()->route('appointments.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        return view('adminstaff.appointments.detail',compact('appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
         $appointments = Appointment::all();
       return view('adminstaff.appointments.edit',compact('appointments','appointment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
         $request->validate([
        "appointmentname" => 'required',
        "gender" => 'required',
        "phonenumber" => 'required',
        "date" => 'required',
        "address" => 'required',
        "doctorname" => 'required',
        "statusid" => 'required',
        "patientid" => 'required',
        "scheduleid" => 'required',
        "staffid" => 'required',
    ]);
        

        $appointment->name = $request->appointmentname;
        $appointment->gender = $request->gender;
        $appointment->phone_number = $request->phonenumber;
        $appointment->date_of_birth = $request->date;
        $appointment->address = $request->address ;
        $appointment->doctor_name = $request->doctorname;
        $appointment->status_id = $request->statusid;
        $appointment->patient_id = $request->patientid;
        $appointment->schedule_id = $request->scheduleid;
        $appointment->staff_id = $request->staffid;
        $appointment->save();

        return redirect()->route('appointments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
       $appointment->delete();
        return redirect()->route('appointments.index');
    }
}
