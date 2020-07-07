<?php
namespace App\Repositories\SurveyType;
use App\Repositories\SurveyType\SurveyTypeContract;
use App\SurveyType;
use App\Subcategory;
class EloquentSurveyTypeRepository implements SurveyTypeContract {
    public function create($request) {
      $surveyType = new SurveyType();
      $surveyType->name = $request->name;
      $surveyType->sub_category_id = $request->sub_category_id;
      $sub_category = Subcategory::find($request->sub_category_id);
      $surveyType->program_id = $sub_category->program->id;
      $slug = preg_replace('/\s/', '-', $request->name).rand();
      $surveyType->slug = strtolower($slug);
      $surveyType->save();
      return $surveyType;
    }

      // return all SurveyType
    public function fetchdAll() {
        return SurveyType::latest()->get();
    }
      // return all SurveyType
    public function findAll() {
        return SurveyType::latest()->paginate(15)->onEachSide(2);
    }

    public function getAll() {
        return SurveyType::latest()->paginate(15)->onEachSide(2);
    }

      // return a SurveyType by ID
    public function findById($id) {
        return SurveyType::where('id', $id)->first();
    }

      // return a SurveyType by slug
    public function findBySlug($slug){
        return SurveyType::where('slug', $slug)->first();
    }

      // Update a SurveyType
    public function update($request, $id) {
        $surveyType = $this->findById($id);
        $surveyType->name = $request->name;
        $surveyType->sub_category_id = $request->sub_category_id;
        $surveyType->save();
        return $surveyType;
    }

      // Remove a SurveyType
    public function remove($id) {
      $surveyType = $this->findById($id);
      return $surveyType->delete();
    }
}
