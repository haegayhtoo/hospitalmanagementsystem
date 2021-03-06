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

Route::get('/adminstaff','AdminStaffPageController@dashboard1')->name('dashboard1');

Route::get('/admindoctor','DoctorPageController@dashboard2')->name('dashboard2');


Route::get('doctor','DoctorController@doctorfun')->name('doctorpage');

//Route::get('doctor','DoctorController@doctorfun')->name('doctorpage');


//Route::get('staff','StaffController@stafffun')->name('staffpage');

//Route::get('room','RoomController@roomfun')->name('roompage');

Route::get('schedule','ScheduleController@schedulefun')->name('schedulepage');

Route::get('appoint','AppointController@schedulefun')->name('appointpage');



//Backend
Route::resource('room','RoomController');

//Route::get('login','FrontendPageController@login')->name('login');


Route::get('register','FrontendPageController@register')->name('register');

Route::get('doctorlist','FrontendPageController@doctor')->name('doctor');

Route::get('appointment','FrontendPageController@appointment')->name('appointment');

Route::get('index','FrontendPageController@index')->name('index');

Route::get('contact','FrontendPageController@contact')->name('contact');

Route::get('/','FrontendPageController@mainfun')->name('index');

Route::get('searchdate','FrontendPageController@searchDate')->name('searchdate');




Route::middleware('role:Admin')->group(function(){
   
Route::get('/admin','AdminPageController@dashboard')->name('dashboard');

Route::resource('staff','StaffController');

Route::resource('doctor','DoctorController');

});


Route::middleware('role:Staff')->group(function(){
   
Route::get('/adminstaff','AdminStaffPageController@dashboard1')->name('dashboard1');

Route::resource('appointments','AppointmentController');

Route::resource('patient','PatientController');

Route::resource('contacts','ContactController');



Route::get('cancel/{id}','StaffController@cancel')->name('cancel');
Route::get('confirm/{id}','StaffController@confirm')->name('confirm');

});

Route::middleware('role:Doctor')->group(function(){
   
Route::get('/admindoctor','DoctorPageController@dashboard2')->name('dashboard2');

Route::resource('schedule','ScheduleController');
Route::resource('appoint','AppointController');

});

Route::middleware('role:Patient')->group(function(){
   
Route::get('index','FrontendPageController@index')->name('index');

Route::get('viewapp','FrontendPageController@viewapp')->name('viewappform');
});


Route::get('/','FrontendPageController@mainfun')->name('index');

//Route::resource('staff','StaffController');

//Route::resource('doctor','DoctorController');

// Route::resource('patient','PatientController');

// Route::resource('schedule','ScheduleController');

Route::resource('appointments','AppointmentController');

 Route::resource('contacts','ContactController');

// Route::resource('appoint','AppointController');


Auth::routes();

Route::get('loginform','FrontendPageController@login')->name('loginform');

Route::get('registerform','FrontendPageController@register')->name('registerform');


Route::get('/home', 'HomeController@index')->name('home');

Route::post('doctorc','FrontendPageController@doctorc')->name('doctorc');

//Route::get('viewapp','FrontendPageController@viewapp')->name('viewappform');

// Route::get('cancel/{id}','StaffController@cancel')->name('cancel');
// Route::get('confirm/{id}','StaffController@confirm')->name('confirm');

