<?php
namespace App\Repositories\Product;
use App\Repositories\Product\ProductContract;
use App\Product;
class EloquentProductRepository implements ProductContract {
    
    public function create($request) {
        $product = new Product();
        $product->material_no = $request->material_no;
        $product->batch_no = $request->batch_no;
        $product->product_name = $request->product_name;
        $product->brand = $request->brand;
        $product->category_id = $request->category_id;
        $product->save();
        return $product;

    }

      // return all Product
    public function findAll() {
        return Product::all();
    }

    public function getAll() {
        return Product::latest()->paginate(3);
    }

      // return a Product by ID
    public function findById($id) {
        return Product::where('id', $id)->first();
    }

      // return a Product by slug
    public function findBySlug($slug){
        return Product::where('slug', $slug)->first();
    }

      // Update a Product
    public function update($request, $slug) {
        $updateProduct = $this->findBySlug($slug);
        $updateProduct->material_no = $request->material_no;
        $updateProduct->batch_no = $request->batch_no;
        $updateProduct->product_name = $request->product_name;
        $updateProduct->brand = $request->brand;
        $updateProduct->category_id = $request->category_id;
        return $updateProduct;
        // ${repoName,,} = $this->findBySlug($slug);
    }

      // Remove a Product
    public function remove($slug) {
        // ${repoName,,} = $this->findBySlug($slug);
        // return ${repoName,,}->delete();
    }
}
