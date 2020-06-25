<?php
namespace App\Repositories\Transaction;
interface TransactionContract {
    public function create($request);
    public function findAll();
    public function findById($id);
    public function findByPartner($id);
    public function findByPartnerId($id);
    public function findBySlug($slug);
    public function update($request, $id);
    public function remove($id);
}
