<?php
namespace App\Repositories\LGA;
use App\Repositories\LGA\LGAContract;
use App\LGA;
class EloquentLGARepository implements LGAContract {
    public function create($request) {
        $lga = new LGA();
        $lga->name = $request->name;
        $lga->state_id = $request->state;
        $slug = preg_replace('/\s+/', '-', $request->name);
        $lga->slug = strtolower($slug);
        $lga->save();
        return $lga;
    }

      // return all LGSA
    public function findAll() {
        return LGA::all();
    }

    public function getAll() {
        return LGA::latest()->paginate(20);
    }

      // return a LGSA by ID
    public function findById($id) {
        return LGA::where('id', $id)->first();
    }

      // return a LGSA by slug
    public function findBySlug($slug){
        return LGA::where('slug', $slug)->first();
    }

      // Update a LGSA
    public function update($request, $id) {
      $lga = $this->findById($id);
      $lga->name = $request->name;
      $lga->state_id = $request->state;
      $slug = preg_replace('/\s+/', '-', $request->name);
      $lga->slug = strtolower($slug);
      $lga->save();
      return $lga;
    }

      // Remove a LGSA
    public function remove($slug) {
        // ${repoName,,} = $this->findBySlug($slug);
        // return ${repoName,,}->delete();
    }
}
