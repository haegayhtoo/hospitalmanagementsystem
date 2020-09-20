<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('admin.doctors.index',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors = Doctor::all();
        return view('admin.doctors.create',compact('doctors'));
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
        "doctorname" => 'required',
        "photo" => 'required|image',
        "address" => 'required',
        "phonenumber" => 'required',
        "qualification" => 'required',
       "gender" => 'required',

    ]);
        $imageName = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('frontend/doctorimg'),$imageName);
        $path = 'frontend/doctorimg/'.$imageName;

        $doctor = new Doctor;

        $doctor->doctor_name = $request->doctorname ;//input name//
        $doctor->photo = $path;
        $doctor->address = $request->address;
        $doctor->phone_number = $request->phonenumber;
        $doctor->qualification = $request->qualification;
        $doctor->gender = $request->gender;
        $doctor->save();

        return redirect()->route('doctor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        return view('admin.doctors.detail',compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
       $doctors = Doctor::all();
       return view('admin.doctors.edit',compact('doctors','doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
         $request->validate([
        "doctorname" => 'required',
        "photo" => 'sometimes',
        "address" => 'required',
        "phonenumber" => 'required',
        "qualification" => 'required',
        "gender" => 'required',

    ]);
        if($request->hasFile('photo')){
           $imageName = time().'.'.$request->photo->extension();
           $request->photo->move(public_path('frontend/doctorimg'),$imageName);
           $path = 'frontend/doctorimg/'.$imageName;
        }else{
           $path= $request->oldphoto;
       }

        

        $doctor->doctor_name = $request->doctorname ;//input name//
        $doctor->photo = $path;
        $doctor->address = $request->address;
        $doctor->phone_number = $request->phonenumber;
        $doctor->qualification = $request->qualification;
        $doctor->gender = $request->gender;
        $doctor->save();


        return redirect()->route('doctor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('doctor.index');
    }
}
