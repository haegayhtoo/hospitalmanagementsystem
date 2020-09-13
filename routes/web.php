<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    //return 'hello laravel';
});

Route::get('/testing',function($value='')
{
	return 'This is a testing page!';
});


Route::get('/admin','AdminPageController@dashboard')->name('dashboard');


//Route::get('doctor','DoctorController@doctorfun')->name('doctorpage');

Route::get('doctor','DoctorController@doctorfun')->name('doctorpage');


//Route::get('staff','StaffController@stafffun')->name('staffpage');

//Route::get('room','RoomController@roomfun')->name('roompage');

Route::get('schedule','ScheduleController@schedulefun')->name('schedulepage');



//Backend
Route::resource('room','RoomController');

Route::get('home','FrontendPageController@dashboard')->name('home');

Route::get('page',function(){
	return view('frontend.master');
});




Route::resource('staff','StaffController');

Route::resource('doctor','DoctorController');