<?php
namespace App\Repositories\Delivery;
use App\Repositories\Delivery\DeliveryContract;
use App\Delivery;
class EloquentDeliveryRepository implements DeliveryContract {
    public function create($request) {
        // 
    }

      // return all Delivery
    public function findAll() {
      return Delivery::all();
    }

    public function getAll() {
      return Delivery::latest()->paginate(3);
    }

      // return a Delivery by ID
    public function findById($id) {
        return Delivery::where('id', $id)->first();
    }

      // return a Delivery by slug
    public function findBySlug($slug){
      return Delivery::where('slug', $slug)->first();
    }

      // Update a Delivery
    public function update($request, $slug) {
      $del = $this->findBySlug($slug);
    }

      // Remove a Delivery
    public function remove($slug) {
      $del = $this->findBySlug($slug);
      return $del->delete();
    }
}
