<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Answer;
use App\Repositories\Answer\AnswerContract;
use App\SurveyType;
use App\Subcategory;
use App\Program;
use App\Question;

class AnswerApiController extends Controller
{
    protected $repo;
    public function __construct(AnswerContract $answerContract) {
        $this->repo = $answerContract;
    }



    public function store(Request $request) {        
        
        $array = $request->all();
        // dd($array);
        foreach($array as $answer){
            $form = new Answer();
            $form->answer = $answer['answer'];
            $form->question_id = $answer['question_id'];
            $form->reference_id = $answer['reference_id'];

            $question = Question::where('id', $answer['question_id'])->first();

            $form->question_type_id = $question->question_type_id;
            $form->sub_category_id = $question->sub_category_id;
            $form->program_id = $question->program_id;
            $form->survey_type_id = $question->survey_type_id;
            $form->save();
        }

        return response()->json([
            'succces' => true,
            'message' => 'Saved successfuly'
        ], 201);
    }
}
