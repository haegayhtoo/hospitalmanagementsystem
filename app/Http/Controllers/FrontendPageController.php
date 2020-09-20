<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;


class FrontendPageController extends Controller
{
    public function mainfun($value=''){
        return view('frontend.index');
    }
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
        $doctors=Doctor::all();
        return view('frontend.appointment',compact('doctors'));
    }
    public function index(){
        return view('frontend.index');
    }
     public function contact(){
        return view('frontend.contact');
    }

    public function searchDate($value='')
    {
    return "hello";    
    }
   
}
