<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'slug' => 'superadmin',
            'name' => 'Super Admin',
            'description' => 'Can Create other users, perform CREATE, UPDATE, READ and DELETE on the system.',
        ]);
          
        DB::table('roles')->insert([
            'slug' => 'admin',
            'name' => 'Admin',
            'description' => 'Can Create other users but not super admin, perform CREATE, UPDATE, READ and DELETE on the system.',
        ]);
          
        DB::table('roles')->insert([
            'slug' => 'user',
            'name' => 'User',
            'description' => 'Can READ on the system.',
        ]);
        
        DB::table('roles')->insert([
            'slug' => 'partner',
            'name' => 'Partner',
            'description' => 'Can READ on the system.',
        ]);
        
        DB::table('roles')->insert([
            'slug' => 'data',
            'name' => 'Data Collector',
            'description' => 'Can READ on the system.',
        ]);
          
    }
}
