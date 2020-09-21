<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
      protected $fillable = 
   [
        'user_id', 'start_time','end_time'
    ];

    public function user(){
    return $this->belongsTo('App\User','user_id');
    }
}
