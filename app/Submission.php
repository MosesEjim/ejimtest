<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    public function form(){
        return $this->belongsTo('App\Form');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
