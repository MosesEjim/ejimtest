<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    public function transactions(){
        return $this->hasMany('App\Transaction');
    }

    public function state() {
        return $this->belongsTo('App\State');
    }
}
