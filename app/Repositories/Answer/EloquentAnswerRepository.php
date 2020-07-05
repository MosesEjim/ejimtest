<?php
namespace App\Repositories\Answer;
use App\Repositories\Answer\AnswerContract;
use App\Answer;
class EloquentAnswerRepository implements AnswerContract {
    public function create($request) {
        // 
    }

      // return all Answer
    public function findAll() {
        $answers = Answer::all();
        $dataList  = collect($answers)->unique('reference_id');
        return $dataList;
    }

    public function getAll() {
        return Answer::latest()->paginate(3);
    }

      // return a Answer by ID
    public function findById($id) {
        return Answer::where('id', $id)->first();
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
