<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
        'content'
    ];
    protected $casts = [
        'content' => 'array',
    ];

    public function surveyType() {
        return $this->belongsTo('App\SurveyType');
    }

    public function submissions(){
        return $this->hasMany('App\Submission');
    }
}
