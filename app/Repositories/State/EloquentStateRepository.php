<?php
namespace App\Repositories\State;
use App\Repositories\State\StateContract;
use App\State;
class EloquentStateRepository implements StateContract {
    public function create($request) {
        $state = new State();
        $slug = preg_replace('/\s+/', '-', $request->name);
        $state->name = $request->name;
        $state->slug = strtolower($slug);
        $state->save();
        return $state;
    }

      // return all State
    public function findAll() {
        return State::all();
    }

    public function getAll() {
        return State::latest()->paginate(3);
    }

      // return a State by ID
    public function findById($id) {
        return State::where('id', $id)->first();
    }
    
    // return a State by Name
    public function findByName($name) {
        return State::where('name', $name)->first();
    }

      // return a State by slug
    public function findBySlug($slug){
        return State::where('slug', $slug)->first();
    }

      // Update a State
    public function update($request, $id) {
        $updateState  = $this->findById($id);
        $updateState = $request->name;
        $updateState->save();
    }

      // Remove a State
    public function remove($slug) {
        //${repoName,,} = $this->findBySlug($slug);
        //return ${repoName,,}->delete();
    }
}
