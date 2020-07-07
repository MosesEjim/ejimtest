<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function question(){
        return $this->belongsTo('App\Question');
    }

    public function subcategory(){
        return $this->belongsTo('App\Subcategory');
    }
    public function surveytype(){
        return $this->belongsTo('App\SurveyType');
    }
}
