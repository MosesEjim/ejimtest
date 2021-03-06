<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public function program(){
        return $this->belongsTo('App\Program');
    }

    public function surveyTypes() {
        return $this->hasMany('App\SurveyType');
    }
}
