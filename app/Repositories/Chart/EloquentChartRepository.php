<?php
namespace App\Repositories\Chart;
use App\Repositories\Chart\ChartContract;
use App\Chart;
use App\Answer;
use App\Question;
class EloquentChartRepository implements ChartContract {
    public function create($request) {
        // 
    }

      // return all Chart
    public function findAll() {
        $questions = Question::all();
        $dataList = collect($questions)->unique('survey_type_id');
        return $dataList;
    }

    public function getAll() {
        return Chart::latest()->paginate(3);
    }

      // return a Chart by ID
    public function findById($id) {
        return Chart::where('id', $id)->first();
    }

    public function mapQuestionToResponse($surveyTypeId){
      $questions = Question::where('survey_type_id', $surveyTypeId)->get();
      $questionResponseMap = [];
      foreach($questions as $question){
        if($question->type != 'Text'){
          $responses = Answer::where('question_id', $question->id)->get();
          $questionResponseMap[$question->question_text] = $responses;
        }
        
      }
      return $questionResponseMap;
    }
      // return a Chart by slug
    public function findBySlug($slug){
        return Chart::where('slug', $slug)->first();
    }

      // Update a Chart
    public function update($request, $slug) {
        // ${repoName,,} = $this->findBySlug($slug);
    }

      // Remove a Chart
    public function remove($slug) {
        // ${repoName,,} = $this->findBySlug($slug);
        // return ${repoName,,}->delete();
    }
}
