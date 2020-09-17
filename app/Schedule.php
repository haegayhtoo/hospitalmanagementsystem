<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
      protected $fillable = 
   [
        'doctor_id', 'date', 'start_time','end_time'
    ];

    public function doctor(){
    return $this->belongsTo('App\Doctor','doctor_id');
    }
}
