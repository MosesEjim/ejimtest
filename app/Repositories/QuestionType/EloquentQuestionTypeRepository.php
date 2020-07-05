<?php
namespace App\Repositories\QuestionType;
use App\Repositories\QuestionType\QuestionTypeContract;
use App\QuestionType;

class EloquentQuestionTypeRepository implements QuestionTypeContract {
    public function create($request) {
      $type = new QuestionType();
      $type->type = $request->type;
      $slug = preg_replace('/\s/','-',$request->type);
      $type->slug = strtolower($slug);

      $type->save();
      return $type;
    }

      // return all QuestionType
    public function findAll() {
        return QuestionType::all();
    }

    public function getAll() {
        return QuestionType::latest()->paginate(15)->onEachSide(2);
    }

      // return a QuestionType by ID
    public function findById($id) {
        return QuestionType::where('id', $id)->first();
    }

      // return a QuestionType by slug
    public function findBySlug($slug){
        return QuestionType::where('slug', $slug)->first();
    }

      // Update a QuestionType
    public function update($request, $id) {
        $type = $this->findById($id);
        $type->type = $request->type;
        $type->save();
        return $type;
    }

      // Remove a QuestionType
    public function remove($id) {
        $type = $this->findById($id);
        return $type->delete();
    }
}
