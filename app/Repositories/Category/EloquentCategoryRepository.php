<?php
namespace App\Repositories\Category;
use App\Repositories\Category\CategoryContract;
use App\Category;
class EloquentCategoryRepository implements CategoryContract {
    public function create($request) {
      $name_slug = preg_replace('/\s+/', '-', $request->title);

      $cat = new Category;
      $cat->title = $request->title;
      $cat->description = $request->description;
      $cat->slug = strtolower($name_slug);
      $cat->save();
      return $cat;
    }

      // return all Category
    public function findAll() {
        return Category::all();
    }

    public function getAll() {
        return Category::latest()->paginate(3);
    }

      // return a Category by ID
    public function findById($id) {
        return Category::where('id', $id)->first();
    }

      // return a Category by slug
    public function findBySlug($slug){
        return Category::where('slug', $slug)->first();
    }

      // Update a Category
    public function update($request, $slug) {
        $cat = $this->findBySlug($slug);
    }

      // Remove a Category
    public function remove($slug) {
        $cat = $this->findBySlug($slug);
        return $cat->delete();
    }
}
