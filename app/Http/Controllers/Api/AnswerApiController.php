<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Answer;

class AnswerApiController extends Controller
{
    protected $repo;
    public function __construct(FormContract $formContract) {
        $this->repo = $formContract;
    }



    public function store(Request $request, $id) {
        $form = new Answer();

        dd($form);
        $form->content = $request->all();

        $surveyType = SurveyType::find($id);
        
        $cat = Subcategory::find($surveyType->id);
        $form->sub_category_id = $cat->id;
        
        $program = Program::find($cat->id);
        $form->program_id = $program->id;

        $form->survey_type_id = $surveyType->id;
        
        $form->save();

        return response()->json([
            'data' => $form,
            'succces' => true,
        ], 201);
    }
}
