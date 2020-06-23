<?php
namespace App\Repositories\SurveyType;
use App\Repositories\SurveyType\SurveyTypeContract;
use App\SurveyType;
class EloquentSurveyTypeRepository implements SurveyTypeContract {
    public function create($request) {
      $surveyType = new SurveyType();
      $surveyType->name = $request->name;
      $surveyType->sub_category_id = $request->sub_category_id;
      $surveyType->slug = preg_replace('/\s/', '-', $request->name);
      $surveyType->save();
      return $surveyType;
    }

      // return all SurveyType
    public function findAll() {
        return SurveyType::all();
    }

    public function getAll() {
        return SurveyType::latest()->paginate(3);
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
        $surveyType->slug = preg_replace('/\s/', '-', $request->name);
        $surveyType->save();
        return $surveyType;
    }

      // Remove a SurveyType
    public function remove($id) {
      $surveyType = $this->findById($id);
      return $surveyType->delete();
    }
}
