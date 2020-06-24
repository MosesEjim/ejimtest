<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyType extends Model
{
    public function subCategory(){
        return $this->belongsTo('App\Subcategory');
    }
}
