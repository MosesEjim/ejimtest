<?php
namespace App\Repositories\Form;
use App\Repositories\Form\FormContract;
use App\Form;
class EloquentFormRepository implements FormContract {
    public function create($request) {
        // 
    }

      // return all Form
    public function findAll() {
        return Form::all();
    }

    public function getAll() {
        return Form::latest()->paginate(3);
    }

      // return a Form by ID
    public function findById($id) {
        return Form::where('id', $id)->first();
    }

      // return a Form by slug
    public function findBySlug($slug){
        return Form::where('slug', $slug)->first();
    }

      // Update a Form
    public function update($request, $slug) {
        // ${repoName,,} = $this->findBySlug($slug);
    }

      // Remove a Form
    public function remove($slug) {
        // ${repoName,,} = $this->findBySlug($slug);
        // return ${repoName,,}->delete();
    }
}
