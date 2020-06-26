<?php
namespace App\Repositories\Option;
use App\Repositories\Option\OptionContract;
use App\Option;
class EloquentOptionRepository implements OptionContract {
    public function create($request) {
        $option = new Option();
        $option->option = $request->option;
        $slug = preg_replace('/\s/','-', $request->option);
        $option->slug = strtolower($slug);
        $option->question_id = $request->question_id;
        $option->type = $request->option_type;
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
