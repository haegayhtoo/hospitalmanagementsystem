<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;

class FrontendPageController extends Controller
{
    public function login(){
        return view('frontend.login');
    }
     public function register(){
        return view('frontend.register');
    }
    public function doctor(){
    	$doctors=Doctor::all();
        return view('frontend.doctor',compact('doctors'));
    }
    public function appointment(){
        return view('frontend.appointment');
    }
    public function home(){
        return view('frontend.home');
    }
     public function contact(){
        return view('frontend.contact');
    }
}
