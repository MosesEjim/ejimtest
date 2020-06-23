<?php
namespace App\Repositories\Response;
use App\Repositories\Response\ResponseContract;
use App\Response;
class EloquentResponseRepository implements ResponseContract {
    public function create($request) {
        // 
    }

      // return all Response
    public function findAll() {
        return Response::all();
    }

    public function getAll() {
        return Response::latest()->paginate(3);
    }

      // return a Response by ID
    public function findById($id) {
        return Response::where('id', $id)->first();
    }

      // return a Response by slug
    public function findBySlug($slug){
        return Response::where('slug', $slug)->first();
    }

      // Update a Response
    public function update($request, $slug) {
        ${repoName,,} = $this->findBySlug($slug);
    }

      // Remove a Response
    public function remove($slug) {
        ${repoName,,} = $this->findBySlug($slug);
        return ${repoName,,}->delete();
    }
}
