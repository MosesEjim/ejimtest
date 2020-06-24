<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $casts = [
        'content' => 'array',
    ];

    public function submissions(){
        return $this->hasMany('App\Submission');
    }
}
