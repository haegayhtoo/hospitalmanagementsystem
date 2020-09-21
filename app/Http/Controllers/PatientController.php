<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         $patients=Patient::all(); 
        return view('adminstaff.patients.index',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $patients = Patient::all();
        return view('adminstaff.patients.create',compact('patients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
        "patientname" => 'required',
        "age" => 'required',
        "gender" => 'required',
        "address" => 'required',
        "phonenumber" => 'required',
        "disease" => 'required',
        
        "doctorid" => 'required',
        "startdate" => 'required',
        "enddate" => 'required',
        
    ]);
        $patient = new Patient;

        $patient->patient_name = $request->patientname ;
        $patient->age = $request->age;
        $patient->gender = $request->gender;
        $patient->address = $request->address;
        $patient->phone_number = $request->phonenumber ;
        $patient->disease = $request->disease;
       
        $patient->doctor_id = $request->doctorid;
        $patient->start_date = $request->startdate;
        $patient->end_date = $request->enddate;

        $patient->save();

        return redirect()->route('patient.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        return view('adminstaff.patients.detail',compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        $patients = Patient::all();
       return view('adminstaff.patients.edit',compact('patients','patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        $request->validate([
        "patientname" => 'required',
        "age" => 'required',
        "gender" => 'required',
        "address" => 'required',
        "phonenumber" => 'required',
        "disease" => 'required',
        
        "doctorid" => 'required',
        "startdate" => 'required',
        "enddate" => 'required',
        
    ]);
       
        $patient->patient_name = $request->patientname ;
        $patient->age = $request->age;
        $patient->gender = $request->gender;
        $patient->address = $request->address;
        $patient->phone_number = $request->phonenumber ;
        $patient->disease = $request->disease;
       
        $patient->doctor_id = $request->doctorid;
         $patient->start_date = $request->startdate;
        $patient->end_date = $request->enddate;

        $patient->save();

        return redirect()->route('patient.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
         $patient->delete();
        return redirect()->route('patient.index');
    }
}
