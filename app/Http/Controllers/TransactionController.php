<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Transaction\TransactionContract;
use Sentinel;
use App\Partner;
use App\Product;
use App\Vendor;
class TransactionController extends Controller
{
    protected $repo;
    public function __construct(TransactionContract $transactionContract) {
        $this->repo = $transactionContract;
    }
    
    public function index()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        $transactions = $this->repo->findAll();
        // dd($transactions);
        return view('transaction.index')->with('transactions', $transactions);
    }
    
    public function create()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        $products = Product::all();
        $partners = Partner::all();
        $vendors = Vendor::all();
        return view('transaction.create')
        ->with('partners', $partners)
        ->with('vendors', $vendors)
        ->with('products', $products);
    }
    
    public function store(Request $request)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $this->validate($request, [
            "product_id"=>"required",
            "quantity"=>"required",
            "partner_id"=>"required"
        ]);

        try{

            $transaction = $this->repo->create($request);
            if($transaction){
             $notification = array(
                 'message' => "Transaction Created successfully!",
                 'alert-type' => 'success'
             );
             return redirect()->route('dashboard.transaction.index')->with('success', 'Transaction Created successfully!')->with($notification);
            }else {
 
             $notificationErr = array(
               'message' => "Could not create Transaction. Try again!",
               'alert-type' => 'error'
             );
             return back()
                 ->withInput()
                 ->with('error', 'Could not create Transaction. Try again!')->with($notificationErr);
         }
            
         
     }catch(QueryException $e){
 
        
 
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
        $transaction = $this->repo->findById($id);
        $products = Product::all();
        $partners = Partner::all();
        return view('transaction.edit')
        ->with('partners', $partners)
        ->with('products', $products)
        ->with('transaction', $transaction);
    }
    
    public function update(Request $request, $id)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $this->validate($request, [
            "product_id"=>"required",
            "quantity"=>"required",
            "partner_id"=>"required"
        ]);

        try{

            $transaction = $this->repo->update($request, $id);
            if($transaction){
             $notification = array(
                 'message' => "Transaction Updated successfully!",
                 'alert-type' => 'success'
             );
             return redirect()->route('dashboard.transaction.index')->with('success', 'Transaction Updated successfully!')->with($notification);
            }else {
 
             $notificationErr = array(
               'message' => "Could not updated Transaction. Try again!",
               'alert-type' => 'error'
             );
             return back()
                 ->withInput()
                 ->with('error', 'Could not create Transaction. Try again!')->with($notificationErr);
         }
            
         
     }catch(QueryException $e){
 
        
 
         }
    }
    
    public function delete($id)
    {
        //
    }
}
