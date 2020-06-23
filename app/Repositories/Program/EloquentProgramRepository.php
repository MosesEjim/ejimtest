<?php
namespace App\Repositories\Program;
use App\Repositories\Program\ProgramContract;
use App\Program;
class EloquentProgramRepository implements ProgramContract {

    public function create($request) {
        $program = new Program();
        $program->name = $request->name;
        $program->slug = preg_replace('/\s/','-',$request->name);
        $program->save();
        return $program;
    }

      // return all Program
    public function findAll() {
        return Program::all();
    }

    public function getAll() {
        return Program::latest()->paginate(3);
    }

      // return a Program by ID
    public function findById($id) {
        return Program::where('id', $id)->first();
    }

      // return a Program by slug
    public function findBySlug($slug){
        return Program::where('slug', $slug)->first();
    }

      // Update a Program
    public function update($request, $id) {
        $updateProgram = $this->findById($id);
        $updateProgram->name = $request->name;
        $updateProgram->save();
        return $updateProgram;
        
    }

      // Remove a Program
    public function remove($Id) {
        $product = $this->findById($Id);
        return $product->delete();
    }
}
