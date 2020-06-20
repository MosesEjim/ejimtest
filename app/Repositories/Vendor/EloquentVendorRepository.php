<?php
namespace App\Repositories\Vendor;
use App\Repositories\Vendor\VendorContract;
use App\Vendor;
class EloquentVendorRepository implements VendorContract {
    public function create($request) {
        $vendor = new Vendor();
        $vendor->vendor_id = 'trf'.str_pad(mt_rand(1,99999999),8,'0',STR_PAD_LEFT);
        $vendor->name = $request->name;
        $vendor->phone = $request->phone;
        $vendor->plate_number = $request->plate_number;
        $vendor->save();
        return $vendor;
    }

      // return all Vendor
    public function findAll() {
        return Vendor::all();
    }

    public function getAll() {
        return Vendor::latest()->paginate(3);
    }

      // return a Vendor by ID
    public function findById($id) {
        return Vendor::where('id', $id)->first();
    }

      // return a Vendor by slug
    public function findBySlug($slug){
        return Vendor::where('slug', $slug)->first();
    }

      // Update a Vendor
    public function update($request, $id) {
      $vendor = $this->findById($id);
      $vendor->vendor_id = $request->vendor_id;
      $vendor->name = $request->name;
      $vendor->phone = $request->phone;
      $vendor->plate_number = $request->plate_number;
      $vendor->save();
      return $vendor;
    }

      // Remove a Vendor
    public function remove($id) {
     $vendor = $this->findById($id);
     return $vendor->delete();
    }
}
