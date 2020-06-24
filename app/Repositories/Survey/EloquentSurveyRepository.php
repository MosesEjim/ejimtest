<?php
namespace App\Repositories\Survey;
use App\Repositories\Survey\SurveyContract;
use App\Survey;
class EloquentSurveyRepository implements SurveyContract {
    public function create($request) {
        // 
    }

      // return all Survey
    public function findAll() {
        return Survey::all();
    }

    public function getAll() {
        return Survey::latest()->paginate(3);
    }

      // return a Survey by ID
    public function findById($id) {
        return Survey::where('id', $id)->first();
    }

      // return a Survey by slug
    public function findBySlug($slug){
        return Survey::where('slug', $slug)->first();
    }

      // Update a Survey
    public function update($request, $slug) {
        ${repoName,,} = $this->findBySlug($slug);
    }

      // Remove a Survey
    public function remove($slug) {
        ${repoName,,} = $this->findBySlug($slug);
        return ${repoName,,}->delete();
    }
}
