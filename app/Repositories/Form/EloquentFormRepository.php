<?php
namespace App\Repositories\Form;
use App\Repositories\Form\FormContract;
use App\Form;
use App\Program;
use App\SurveyType;
use DB;

class EloquentFormRepository implements FormContract {
    public function create($request) {
        // 
    }

      // return all Form
    public function findAll() {
      
      // $data = DB::table('city')
      //  ->join('state', 'state.state_id', '=', 'city.state_id')
      //  ->join('country', 'country.country_id', '=', 'state.country_id')
      //  ->select('country.country_name', 'state.state_name', 'city.city_name')
      //  ->get();

      return Program::with('subcategories')->with('surveyTypes')->with('forms')->get();
      
      return DB::table('programs')
        ->join('subcategories', 'subcategories.program_id', '=', 'programs.id')
        ->join('survey_types', 'survey_types.sub_category_id', '=', 'subcategories.id')
        ->join('forms', 'forms.survey_type_id', '=', 'survey_types.id')
        ->select('survey_types.*', 'subcategories.*', 'programs.*', 'forms.*')
        ->get();
      
       

        // return Form::all();
    }

    public function getAll() {
        return Form::latest()->paginate(3);
    }

      // return a Form by ID
    public function findById($id) {
        return Form::where('id', $id)->first();
    }

      // return a Form by slug
    public function findBySlug($slug){
        return Form::where('slug', $slug)->first();
    }

      // Update a Form
    public function update($request, $slug) {
        // ${repoName,,} = $this->findBySlug($slug);
    }

      // Remove a Form
    public function remove($slug) {
        // ${repoName,,} = $this->findBySlug($slug);
        // return ${repoName,,}->delete();
    }
}
