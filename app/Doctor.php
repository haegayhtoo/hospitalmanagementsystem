<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
   protected $fillable = 
   [
        'user_id', 'photo' ,'address', 'phone_number','qualification','gender'
    ];

    public function schedule(){
    return $this->hasMany('App\Schedule');
    }

    public function appointments(){
        return $this->hasMany('App\Appointment');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
