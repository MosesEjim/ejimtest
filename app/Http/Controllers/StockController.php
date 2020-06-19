<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Stock\StockContract;
use Sentinel;

class StockController extends Controller
{
    protected $repo;
    public function __construct(StockContract $stockContract) {
        $this->repo = $stockContract;
    }
    
    public function index()
    {
        $stocks = $this->repo->findAll();
        return view('stock.index')->with('stocks', $stock);
    }
    
    public function create()
    {
        return view('stock.create');
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
