<?php
namespace App\Repositories\User;
use App\Repositories\User\UserContract;
use App\User;
use Sentinel;

class EloquentUserRepository implements UserContract {
    public function create($request) {
      $name_slug = preg_replace('/\s+/', '-', $request->first_name. ' '. $request->last_name);
      
      if ($request->account_type === 'partner') {
        $credentials = [
          'first_name' => $request->first_name,
          // 'last_name' => $request->last_name,
          'phone' => $request->telephone1,
          'email'    => $request->email,
          'username'    => $request->username,
          'password' => $request->password ?: 'secret',
          'account_type' => $request->account_type,
          'sex' => $request->sex,
          'dob' => $request->dob,
          'staff_id' => $request->staff_id,
          'slug' => strtolower($name_slug),
        ];
      } else {
             
        $credentials = [
          'first_name' => $request->first_name,
          'last_name' => $request->last_name,
          'phone' => $request->phone,
          'email'    => $request->email,
          'username'    => $request->username,
          'password' => $request->password ?: 'secret',
          'account_type' => $request->account_type,
          'sex' => $request->sex,
          'dob' => $request->dob,
          'staff_id' => $request->staff_id,
          'slug' => strtolower($name_slug),
        ];
      }
      

      $user = Sentinel::registerAndActivate($credentials);
      $role = Sentinel::findRoleBySlug($request->account_type);
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
    public function remove($id) {
        $user = $this->findById($id);
        return $user->delete();
    }
}
