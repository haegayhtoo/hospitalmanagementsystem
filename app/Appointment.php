<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
     protected $fillable = 
   [
        'name','gender','phone_number','date_of_birth',
        'address','doctor_name','status_id','patient_id',
        'schedule_id','staff_id'
    ];
}
