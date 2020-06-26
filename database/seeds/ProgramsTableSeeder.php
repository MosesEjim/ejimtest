<?php

use Illuminate\Database\Seeder;

class ProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programs')->insert([
            'slug' => 'nutrition',
            'name' => 'Nutrition',
            'active_status' => true,
            'description' => 'Nutrition',
        ]);
          
        DB::table('programs')->insert([
            'slug' => 'wash',
            'name' => 'Wash',
            'active_status' => true,
            'description' => 'Wash',
        ]);
          
        DB::table('programs')->insert([
            'slug' => 'education',
            'name' => 'Education',
            'active_status' => true,
            'description' => 'Education',
        ]);
        
        DB::table('programs')->insert([
            'slug' => 'health',
            'name' => 'Health',
            'active_status' => true,
            'description' => 'Health',
        ]);
        
        DB::table('programs')->insert([
            'slug' => 'logistics',
            'name' => 'Logistics',
            'active_status' => true,
            'description' => 'Logistics',
        ]);
    }
}
