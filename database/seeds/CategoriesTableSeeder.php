<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'slug' => 'nutrition',
            'title' => 'Nutrition',
            'active_status' => true,
            'description' => 'Nutrition',
        ]);
          
        DB::table('categories')->insert([
            'slug' => 'wash',
            'title' => 'Wash',
            'active_status' => true,
            'description' => 'Wash',
        ]);
          
        DB::table('categories')->insert([
            'slug' => 'education',
            'title' => 'Education',
            'active_status' => true,
            'description' => 'Education',
        ]);
        
        DB::table('categories')->insert([
            'slug' => 'health',
            'title' => 'Health',
            'active_status' => true,
            'description' => 'Health',
        ]);
    }
}
