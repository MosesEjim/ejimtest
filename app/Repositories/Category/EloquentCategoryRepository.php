<?php
namespace App\Repositories\Category;
use App\Repositories\Category\CategoryContract;
use App\Category;
class EloquentCategoryRepository implements CategoryContract {
    public function create($request) {
        $category = new Category();
        $category->title = $request->title;
        $category->description = $request->description;
        $slug = preg_replace('/\s/', '-', $request->title);
        $category->slug = strtolower($slug);
        $category->save();
        return $category;
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

    public function findAllDisabled(){
        return Category::where('active_status', false)->get();
    }

      // Update a Category
    public function update($request, $id) {
        $cat = $this->findById($id);
        $cat->title = $request->title;
        $cat->description = $request->description;
        $cat->save();
        return $cat;
    }

      // Remove a Category
    public function remove($slug) {
        $cat = $this->findBySlug($slug);
        return $cat->delete();
    }
}
