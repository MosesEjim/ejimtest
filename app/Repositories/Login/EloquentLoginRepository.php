<?php
namespace App\Repositories\Login;
use App\Repositories\Login\LoginContract;
use App\Login;
class EloquentLoginRepository implements LoginContract {
    public function create($request) {
        // 
    }

      // return all Login
    public function findAll() {
        return Login::all();
    }

    public function getAll() {
        return Login::latest()->paginate(3);
    }

      // return a Login by ID
    public function findById($id) {
        return Login::where('id', $id)->first();
    }

      // return a Login by slug
    public function findBySlug($slug){
        return Login::where('slug', $slug)->first();
    }

      // Update a Login
    public function update($request, $slug) {
        $user = $this->findBySlug($slug);
    }

      // Remove a Login
    public function remove($slug) {
        $user = $this->findBySlug($slug);
        return $user->delete();
    }
}
