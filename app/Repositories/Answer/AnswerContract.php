<?php
namespace App\Repositories\Answer;
interface AnswerContract {
    public function create($request);
    public function findAll();
    public function findAllByRef();
    public function findById($id);
    public function findByQuestionId($id);
    public function findBySlug($slug);
    public function update($request, $id);
    public function remove($id);
}
