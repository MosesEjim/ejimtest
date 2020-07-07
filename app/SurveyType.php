<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyType extends Model
{
    public function subCategory(){
        return $this->belongsTo('App\Subcategory');
    }

    public function forms() {
        return $this->hasMany('App\Form');
    }

    public function answers(){
        return $this->hasManyThrough('App\Subcategory','App\Answer');
    }
}
