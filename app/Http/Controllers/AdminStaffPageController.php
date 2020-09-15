<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminStaffPageController extends Controller
{
    public function dashboard1(){
        return view('adminstaff/dashboard1');
    }
}
