<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdminCredentials = [
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'phone' => '1234567890',
            'email' => 'superadmin@unicef.com',
            'username' => 'superadmin',
            'password' => 'secret',
            'sex' => 'male',
            'slug' => 'super-admin'
          ];
      
          $superAdmin = Sentinel::registerAndActivate($superAdminCredentials, true);
          $role = Sentinel::findRoleBySlug('superadmin');
          $role->users()->attach($superAdmin);
          
          $adminCredentials = [
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'phone' => '1234567890',
            'email' => 'admin@unicef.com',
            'username' => 'admin',
            'password' => 'secret',
            'sex' => 'male',
            'slug' => 'admin'      
          ];
      
          $admin = Sentinel::registerAndActivate($adminCredentials, true);
          $role = Sentinel::findRoleBySlug('admin');
          $role->users()->attach($admin);
          
          $userCredentials = [
            'first_name' => 'John',
            'last_name' => 'Snow',
            'phone' => '1234567890',
            'email' => 'user@unicef.com',
            'username' => 'guest',
            'password' => 'secret',
            'sex' => 'male',
            'slug' => 'nani-snow'
          ];
          
          $user = Sentinel::registerAndActivate($userCredentials, true);
          $role = Sentinel::findRoleBySlug('user');
          $role->users()->attach($user);
    }
}
