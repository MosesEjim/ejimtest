<?php
namespace App\Repositories\LGA;
interface LGAContract {
    public function create($request);
    public function findAll();
    public function findById($id);
    public function findBySlug($slug);
    public function update($request, $id);
    public function remove($id);
}
