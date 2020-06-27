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
        return Answer::all();
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
        ${repoName,,} = $this->findBySlug($slug);
    }

      // Remove a Answer
    public function remove($slug) {
        ${repoName,,} = $this->findBySlug($slug);
        return ${repoName,,}->delete();
    }
}
