<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
     protected $fillable = 
   [
        'staff_name','phone_number','gender','address'
    ];
}
