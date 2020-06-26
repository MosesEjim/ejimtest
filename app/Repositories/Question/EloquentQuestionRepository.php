<?php
namespace App\Repositories\Question;
use App\Repositories\Question\QuestionContract;
use App\QuestionType;
use App\Question;
use App\Program;
use App\Subcategory;
use App\SurveyType;

class EloquentQuestionRepository implements QuestionContract {
    public function create($request, $slug) {
        $question = new Question();
        // dd($request->all());
        $type = SurveyType::find($request->survey_type_name);
        $questionType = QuestionType::find($request->survey_type_name);

        $program = Program::find($type->program_id);
        $subcategory = Subcategory::find($type->sub_category_id);
        // dd($questionType);
        $question->type = $questionType->type;
        $question->question_text = $request->question_text;
        $question->program_name = $program->name;
        $question->sub_category_name = $subcategory->name;
        $question->survey_type_name = $type->name;        
        $slug = preg_replace('/\s/','-', $request->question_text);
        $question->slug = strtolower($slug);

        $question->question_type_id = $questionType->id;
        $question->program_id = $program->id;
        $question->sub_category_id = $subcategory->id;
        $question->survey_type_id = $type->id;
        // dd($question);
        $question->save();
        return $question;
    }

      // return all Question
    public function findAll() {
        return Question::all();
    }

    public function getAll() {
        return Question::latest()->paginate(3);
    }

      // return a Question by ID
    public function findById($id) {
        return Question::where('id', $id)->first();
    }

      // return a Question by slug
    public function findBySlug($slug){
        return Question::where('slug', $slug)->first();
    }

      // Update a Question
    public function update($request, $slug) {
        $question = $this->findBySlug($slug);
    }

      // Remove a Question
    public function remove($slug) {
        $question = $this->findBySlug($slug);
        return $question->delete();
    }
}
