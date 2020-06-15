<?php
namespace App\Repositories\User;
use App\Repositories\User\UserContract;
use App\User;
class EloquentUserRepository implements UserContract {
    public function create($request) {
        // 
    }

      // return all User
    public function findAll() {
        return User::all();
    }

    public function getAll() {
        return User::latest()->paginate(3);
    }

      // return a User by ID
    public function findById($id) {
        return User::where('id', $id)->first();
    }

      // return a User by slug
    public function findBySlug($slug){
        return User::where('slug', $slug)->first();
    }

      // Update a User
    public function update($request, $slug) {
        ${repoName,,} = $this->findBySlug($slug);
    }

      // Remove a User
    public function remove($slug) {
        ${repoName,,} = $this->findBySlug($slug);
        return ${repoName,,}->delete();
    }
}
