<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Category\CategoryContract;
use Sentinel;

class CategoryController extends Controller
{
    protected $repo;
    public function __construct(CategoryContract $categoryContract) {
        $this->repo = $categoryContract;
    }
    
    public function index()
    {
        return view('category.index');
    }
    
    public function create()
    {
        return view('category.create');
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
