<?php
namespace App\Repositories\User;
use App\Repositories\User\UserContract;
use App\User;
class EloquentUserRepository implements UserContract {
    public function create($request) {
      $name_slug = preg_replace('/\s+/', '-', $request->first_name. ' '. $request->last_name);
	  
      $credentials = [
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'phone' => $request->phone,
        'email'    => $request->email,
        'username'    => $request->username,
        'password' => $request->password ?: 'secret',
        'user_role' => $request->user_role,
        'sex' => $request->sex,
        'dob' => $request->dob,
        'staff_id' => $request->staff_id,
        'slug' => strtolower($name_slug),
      ];

      $user = Sentinel::registerAndActivate($credentials);
      $role = Sentinel::findRoleBySlug($request->user_role);
      $role->users()->attach($user);
          
      return $user;
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
        $user = $this->findBySlug($slug);
    }

      // Remove a User
    public function remove($slug) {
        $user = $this->findBySlug($slug);
        return $user->delete();
    }
}
