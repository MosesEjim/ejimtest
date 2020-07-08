<?php
namespace App\Repositories\User;
interface UserContract {
    public function create($request);
    public function findAll();
    public function getAllDataCollectors();
    public function findById($id);
    public function findBySlug($slug);
    public function update($request, $id);
    public function remove($id);
}
