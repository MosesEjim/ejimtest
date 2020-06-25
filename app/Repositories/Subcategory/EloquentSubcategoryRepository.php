<?php
namespace App\Repositories\Subcategory;
use App\Repositories\Subcategory\SubcategoryContract;
use App\Subcategory;
class EloquentSubcategoryRepository implements SubcategoryContract {
    public function create($request) {
        $subcategory = new SubCategory();
        $subcategory->name = $request->name;
        $subcategory->program_id = $request->program_id;
        $slug = preg_replace('/\s/', '-', $request->name);
        $subcategory->slug = strtolower($slug);
        $subcategory->save();
        return $subcategory;
    }

      // return all Subcategory
    public function findAll() {
        return Subcategory::all();
    }

    public function getAll() {
        return Subcategory::latest()->paginate(3);
    }

      // return a Subcategory by ID
    public function findById($id) {
        return Subcategory::where('id', $id)->first();
    }

      // return a Subcategory by slug
    public function findBySlug($slug){
        return Subcategory::where('slug', $slug)->first();
    }

      // Update a Subcategory
    public function update($request, $id) {
        $updateSubCategory = $this->findById($id);
        $updateSubCategory->name = $request->name;
        $updateSubCategory->category_id = $request->category_id;
        $updateSubCategory->save();
        return $updateSubCategory;
    }

      // Remove a Subcategory
    public function remove($id) {
        $subcategory = $this->findById($slug);
        return $subcategory->delete();
    }
}
