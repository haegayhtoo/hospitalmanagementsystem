<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
   protected $fillable = 
   [
        'doctor_id','date','time'
    ];
}
