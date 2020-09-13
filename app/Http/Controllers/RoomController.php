<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $rooms=Room::all();
        
        return view('admin.rooms.index',compact('rooms'));
    }

     

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $rooms=Room::all();
        return view('admin.rooms.create',compact('rooms'));
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
        "roomno" => 'required',
        "roomtype" => 'required',
        "dailycharges" => 'required',
        
    ]);
        $room = new Room;

        $room->room_no = $request->roomno ;//input name//
        $room->room_type = $request->roomtype;
        $room->daily_charges = $request->dailycharges;
        $room->save();

        return redirect()->route('room.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
      return view('admin.rooms.detail',compact('room'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response-
     */
    public function edit(Room $room)
    {
       $rooms = Room::all();
       return view('admin.rooms.edit',compact('rooms','room'));
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
         $request->validate([
        "roomno" => 'required',
        "roomtype" => 'required',
        "dailycharges" => 'required',
        
        ]);

       
        $room->room_no = $request->roomno;//input name//
        $room->room_type = $request->roomtype;
        $room->daily_charges = $request->dailycharges;
        $room->save();

        return redirect()->route('room.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $room->delete();
        return redirect()->route('room.index');
    }
}
