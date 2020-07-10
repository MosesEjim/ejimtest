<?php
namespace App\Repositories\Answer;
use App\Repositories\Answer\AnswerContract;
use App\Answer;
class EloquentAnswerRepository implements AnswerContract {
    public function create($request) {
        
    }

      // return all Answer
    public function findAll() {
      $answers = Answer::distinct()->count('reference_id');
      // return collect($answers)->unique('reference_id');
      return $answers;
    }
      // return all Answer
    public function findAllByRef() {
      $answers = Answer::latest()->paginate(20);
      // dd($answers);
      // return collect($answers)->unique('reference_id');
      return $answers;
    }

    public function getAll() {
        return Answer::latest()->paginate(20);
    }

    public function findByRefId($id){
      return Answer::where('reference_id', $id)->get();
    }

      // return a Answer by ID
    public function findById($id) {
        return Answer::where('id', $id)->first();
    }
     
    // return a Answer by ID
    public function findByQuestionId($id) {
      return Answer::where('question_id', $id)->get();
    }

      // return a Answer by slug
    public function findBySlug($slug){
        return Answer::where('slug', $slug)->first();
    }

      // Update a Answer
    public function update($request, $slug) {
        $answer = $this->findBySlug($slug);
    }

      // Remove a Answer
    public function remove($slug) {
        $answer = $this->findBySlug($slug);
        return $answer->delete();
    }
}
