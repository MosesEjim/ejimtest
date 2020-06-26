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
            'type' => 'Text',
            'slug' => 'text'
        ]);
        
        QuestionType::firstOrCreate([
            'type' => 'Single Choice',
            'slug' => 'single_choice',
        ]);
        
        QuestionType::firstOrCreate([
            'type' => 'Multi Choice',
            'slug' => 'multi_choice',
        ]);
        
        QuestionType::firstOrCreate([
            'type' => 'Select Option',
            'slug' => 'select_option',
        ]);
        
        QuestionType::firstOrCreate([
            'type' => 'Date',
            'slug' => 'date',
        ]);
        
        QuestionType::firstOrCreate([
            'type' => 'Other',
            'slug' => 'other'
        ]);
    }
}
