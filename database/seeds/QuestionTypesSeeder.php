<?php

use Illuminate\Database\Seeder;
use App\QuestionType;

class QuestionTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QuestionType::firstOrCreate([
            'type' => 'text',
            'slug' => 'text'
        ]);
        
        QuestionType::firstOrCreate([
            'type' => 'single_choice',
            'slug' => 'single_choice',
        ]);
        
        QuestionType::firstOrCreate([
            'type' => 'multi_choice',
            'slug' => 'multi_choice',
        ]);
        
        QuestionType::firstOrCreate([
            'type' => 'select_option',
            'slug' => 'select_option',
        ]);
        
        QuestionType::firstOrCreate([
            'type' => 'date',
            'slug' => 'date',
        ]);
        
        QuestionType::firstOrCreate([
            'type' => 'other',
            'slug' => 'other'
        ]);
    }
}
