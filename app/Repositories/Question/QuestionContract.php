<?php
namespace App\Repositories\Question;
interface QuestionContract {
    public function create($request, $slug);
    public function findAll();
    public function surveyQuestions($id);
    public function findById($id);
    public function findBySlug($slug);
    public function update($request, $id);
    public function remove($id);
}
