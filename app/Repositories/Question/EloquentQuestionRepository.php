<?php
namespace App\Repositories\Question;
use App\Repositories\Question\QuestionContract;
use App\Question;
class EloquentQuestionRepository implements QuestionContract {
    public function create($request) {
        $question = new Question();
        $question->type = $request->type;
        $question->question_text = $request->question_text;
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
