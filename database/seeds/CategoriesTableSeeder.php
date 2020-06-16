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
            'description' => 'Nutrition',
        ]);
          
        DB::table('categories')->insert([
            'slug' => 'wash',
            'title' => 'Wash',
            'description' => 'Wash',
        ]);
          
        DB::table('categories')->insert([
            'slug' => 'education',
            'title' => 'Education',
            'description' => 'Education',
        ]);
        
        DB::table('categories')->insert([
            'slug' => 'health',
            'title' => 'Health',
            'description' => 'Health',
        ]);
    }
}
