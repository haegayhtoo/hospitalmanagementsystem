<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = 
   [
        'patient_name', 'age', 'gender','address','phone_number','disease','doctor_id','start_date','end_date'
    ];
}
