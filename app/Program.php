<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    public function subCategories() {
        return $this->hasMany('App\Subcategory');
    }
    
    public function surveyTypes() {
        return $this->hasMany('App\SurveyType');
    }
    public function forms() {
        return $this->hasMany('App\Form');
    }
}
