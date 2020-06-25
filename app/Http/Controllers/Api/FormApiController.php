<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\Form\FormContract;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use App\Form;
use App\Program;
use App\Subcategory;
use App\SurveyType;

class FormApiController extends Controller
{
    protected $repo;
    public function __construct(FormContract $formContract) {
        $this->repo = $formContract;
    }
    public function index() {
        $forms = $this->repo->findAll();
        return response()->json([
            'data' => json_decode($forms),
            'succces' => true,
        ], Response::HTTP_OK);
    }

    public function store(Request $request, $id) {
        $form = new Form();
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
