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




//Route::get('appointment','AppointmentController@appointmentfun')->name('appointmentpage');

//Route::get('bill','BillController@billfun')->name('billpage');

 Route::get('doctor','DoctorController@doctorfun')->name('doctorpage');

 //Route::get('patient','PatientController@patientfun')->name('patientpage');


//Route::get('patient_room','Patient_roomController@patient_roomfun')->name('patient_roompage');

 //Route::get('payment','PaymentController@paymentfun')->name('paymentpage');


 Route::get('room','RoomController@roomfun')->name('roompage');

 Route::get('schedule','ScheduleController@schedulefun')->name('schedulepage');

Route::get('staff','StaffController@stafffun')->name('staffpage');


