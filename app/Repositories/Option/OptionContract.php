<?php
namespace App\Repositories\Option;
interface OptionContract {
    public function create($request, $slug);
    public function findAll();
    public function findById($id);
    public function findBySlug($slug);
    public function update($request, $id);
    public function remove($id);
}
