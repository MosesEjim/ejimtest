<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Product\ProductContract;
use Sentinel;

class ProductController extends Controller
{
    protected $repo;
    public function __construct(ProductContract $productContract) {
        $this->repo = $productContract;
    }
    
    public function index()
    {
        $products = $repo::all();
        return view('product.index')->with('products', $products);
    }
    
    public function create()
    {
        
        return view('product.create');
    }
    
    public function store(Request $request)
    {
        //
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        //
    }
    
    public function update(Request $request, $id)
    {
        //
    }
    
    public function delete($id)
    {
        //
    }
}
