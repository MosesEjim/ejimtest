<?php
namespace App\Repositories\Category;
interface CategoryContract {
    public function create($request);
    public function findAll();
    public function findAllDisabled();
    public function findById($id);
    public function findBySlug($slug);
    public function update($request, $id);
    public function enabledStatus($id);
    public function disableStatus($id);
    public function remove($id);
}
