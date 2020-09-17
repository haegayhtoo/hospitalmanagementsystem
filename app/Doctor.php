<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
   protected $fillable = 
   [
        'doctor_name', 'photo' ,'address', 'phone_number','qualification','gender'
    ];

    public function schedule(){
    return $this->hasMany('App\Schedule');
    }
}
