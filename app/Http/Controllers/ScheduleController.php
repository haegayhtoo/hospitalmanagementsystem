<?php

namespace App\Http\Controllers;

use App\Schedule;
use Illuminate\Http\Request;
use App\Doctor;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules=Schedule::all(); 
        return view('admin.schedules.index',compact('schedules'));
        return view('admin.schedules.index',compact('doctor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $schedules = Schedule::all();
        return view('admin.schedules.create',compact('schedules'));
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
        "doctorid" => 'required',
        "scheduledate" => 'required',
        "starttime" => 'required',
        "endtime" => 'required',
    ]);
        $schedule = new Schedule;
       
        $schedule->doctor_id = $request->doctorid;
         $schedule->date = $request->scheduledate;
        $schedule->start_time = $request->starttime;
        $schedule->end_time = $request->endtime;

        $schedule->save();

        return redirect()->route('schedule.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        $doctors=Doctor::all();
         return view('admin.schedules.detail',compact('schedule'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        
        $schedules = Schedule::all();
       return view('admin.schedules.edit',compact('schedules','schedule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        $request->validate([
        "doctorid" => 'required',
        "scheduledate" => 'required',
        "starttime" => 'required',
        "endtime" => 'required',
    ]);
        
       
        $schedule->doctor_id = $request->doctorid;
         $schedule->date = $request->scheduledate;
        $schedule->start_time = $request->starttime;
        $schedule->end_time = $request->endtime;

        $schedule->save();

        return redirect()->route('schedule.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return redirect()->route('schedule.index');
    }
}
