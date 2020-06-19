<?php
namespace App\Repositories\Stock;
use App\Repositories\Stock\StockContract;
use App\Stock;
class EloquentStockRepository implements StockContract {
    public function create($request) {
        // 
    }

      // return all Stock
    public function findAll() {
        return Stock::all();
    }

    public function getAll() {
        return Stock::latest()->paginate(3);
    }

      // return a Stock by ID
    public function findById($id) {
        return Stock::where('id', $id)->first();
    }

      // return a Stock by slug
    public function findBySlug($slug){
        return Stock::where('slug', $slug)->first();
    }

      // Update a Stock
    public function update($request, $slug) {
        $stock = $this->findBySlug($slug);
    }

      // Remove a Stock
    public function remove($slug) {
        $stock = $this->findBySlug($slug);
        return $stock->delete();
    }
}
