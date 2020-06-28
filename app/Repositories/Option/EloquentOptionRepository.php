<?php
namespace App\Repositories\Option;
use App\Repositories\Option\OptionContract;
use App\Option;
use App\Question;

class EloquentOptionRepository implements OptionContract {
    public function create($request, $slug) {
        $option = new Option();
        // dd($slug);

        $question = Question::where('slug', $slug)->first();
        // dd($question);
        $option->option = $request->option;
        $sluger = preg_replace('/\s/','-', $request->option);
        $option->slug = strtolower($sluger).rand();
        $option->question_id = $question->id;
        $option->type = $request->option_type;
        // dd($option);
        $option->question_type_id = $question->question_type_id;
        $option->sub_category_id = $question->sub_category_id;
        $option->survey_type_id = $question->survey_type_id;
        $option->program_id = $question->program_id;
        $option->save();
        return $option;
    }

      // return all Option
    public function findAll() {
        return Option::all();
    }

    public function getAll() {
        return Option::latest()->paginate(3);
    }

      // return a Option by ID
    public function findById($id) {
        return Option::where('id', $id)->first();
    }

      // return a Option by slug
    public function findBySlug($slug){
        return Option::where('slug', $slug)->first();
    }

      // Update a Option
    public function update($request, $slug) {
        $option = $this->findBySlug($slug);
    }

      // Remove a Option
    public function remove($slug) {
        $option = $this->findBySlug($slug);
        return $option->delete();
    }
}
