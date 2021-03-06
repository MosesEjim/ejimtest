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

          
          //
          $partnerCredentials = [
            'first_name' => 'John',
            'last_name' => 'Snow',
            'phone' => '1234567890',
            'email' => 'partner@unicef.com',
            'username' => 'partner',
            'password' => 'secret',
            'sex' => 'male',
            'slug' => 'partner-snow'
          ];
          
          $partner = Sentinel::registerAndActivate($partnerCredentials, true);
          $role = Sentinel::findRoleBySlug('partner');
          $role->users()->attach($partner);

          $dataCredentials = [
            'first_name' => 'Data',
            'last_name' => 'Collector',
            'phone' => '1234567890',
            'email' => 'data@unicef.com',
            'username' => 'data',
            'password' => 'secret',
            'sex' => 'male',
            'slug' => 'data-snow'
          ];
          
          $data = Sentinel::registerAndActivate($dataCredentials, true);
          $role = Sentinel::findRoleBySlug('data');
          $role->users()->attach($data);
    }
}
