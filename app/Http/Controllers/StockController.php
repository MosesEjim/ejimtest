<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Stock\StockContract;
use App\Product;
use Sentinel;

class StockController extends Controller
{
    protected $repo;
    public function __construct(StockContract $stockContract) {
        $this->repo = $stockContract;
    }
    
    public function index()
    {

        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $stocks = $this->repo->findAll();
        return view('stock.index')->with('stocks', $stocks);
    }
    
    public function create()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        $products = Product::all();
        return view('stock.create')->with('products', $products);
    }
    
    public function store(Request $request)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $request->validate([
            'quantity'=>'required|Integer',
            'product_id'=>'required'
        ]);

        try{
                $stock = $this->repo->create($request);
                if($stock){
                    $notification = array(
                        'message' => "Stock Created successfully!",
                        'alert-type' => 'success'
                    );
                    return redirect()->route('dashboard.stock.index')->with('success', 'Stock Added successfully!')->with($notification);
                }else{
                    $notificationErr = array(
                        'message' => "Could not add stock. Try again!",
                        'alert-type' => 'error'
                      );
                      return back()
                          ->withInput()
                          ->with('error', 'Could not add Stock. Try again!')->with($notificationErr);
                }
        }catch(Exception $e){

        }
        
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $stock = $this->repo->findById($id);
        $products = Product::all();
        return view('stock.edit')
        ->with('stock', $stock)
        ->with('products', $products);

    }
    
    public function update(Request $request, $id)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $request->validate([
            'quantity'=>'required|Integer',
            'product_id'=>'required'
        ]);

        try{
                $stock = $this->repo->update($request, $id);
                if($stock){
                    $notification = array(
                        'message' => "Stock Updated successfully!",
                        'alert-type' => 'success'
                    );
                    return redirect()->route('dashboard.stock.index')->with('success', 'Stock updated successfully!')->with($notification);
                }else{
                    $notificationErr = array(
                        'message' => "Could not update stock. Try again!",
                        'alert-type' => 'error'
                      );
                      return back()
                          ->withInput()
                          ->with('error', 'Could not update Stock. Try again!')->with($notificationErr);
                }
        }catch(Exception $e){

        }
    }
    
    public function delete($id)
    {
        //
    }
}
