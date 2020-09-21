<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;
use App\Appointment;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $staffs=Staff::all(); 
        return view('admin.staffs.index',compact('staffs'));
    }

     

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $staffs = Staff::all();
        return view('admin.staffs.create',compact('staffs'));
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
        "staffname" => 'required',
        "phonenumber" => 'required',
        "gender" => 'required',
        "address" => 'required',
    ]);
        $staff = new Staff;

        $staff->staff_name = $request->staffname ;//input name//
        $staff->phone_number = $request->phonenumber;
        $staff->gender = $request->gender;
        $staff->address = $request->address;
        $staff->save();

        return redirect()->route('staff.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
      return view('admin.staffs.detail',compact('staff'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response-
     */
    public function edit(Staff $staff)
    {
       $staffs = Staff::all();
       return view('admin.staffs.edit',compact('staffs','staff'));
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
          $request->validate([
        "staffname" => 'required',
        "phonenumber" => 'required',
        "gender" => 'required',
        "address" => 'required',
    ]);
        

        $staff->staff_name = $request->staffname ;//input name//
        $staff->phone_number = $request->phonenumber;
        $staff->gender = $request->gender;
        $staff->address = $request->address;
        $staff->save();

        return redirect()->route('staff.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
         $staff->delete();
        return redirect()->route('staff.index');
    }
     public function cancel($id){
        $appointments=Appointment::find($id);
        $appointments->status=0;
        $appointments->save();
        return back();
    }
    public function confirm($id){
        $appointments=Appointment::find($id);
        $appointments->status=1;
        $appointments->save();
        return back();
    
        
    }
}
