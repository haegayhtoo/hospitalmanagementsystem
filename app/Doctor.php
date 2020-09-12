<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
   protected $fillable = 
   [
        'doctor_name', 'address', 'phone_number','qualification','gender'
    ];
}
