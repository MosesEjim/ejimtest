<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Product\ProductContract;
use App\Repositories\Partner\PartnerContract;
use App\Repositories\State\StateContract;
use App\Repositories\Transaction\TransactionContract;
use App\Repositories\Vendor\VendorContract;
use App\Category;
use Sentinel;

class ProductController extends Controller
{
    protected $repo;
    protected $partnerRepo;
    protected $stateRepo;
    protected $transRepo;
    protected $vendorRepo;

    public function __construct(
        ProductContract $productContract, 
        PartnerContract $partnerContract,
        StateContract $stateContract,
        TransactionContract $transactionContract,
        VendorContract $vendorContract
    ) {
        $this->repo = $productContract;
        $this->partnerRepo = $partnerContract;
        $this->stateRepo = $stateContract;
        $this->transRepo = $transactionContract;
        $this->vendorRepo = $vendorContract;
    }
    
    public function index() {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        $products = $this->repo->findAll();
        return view('product.index')->with('products', $products);
        
    }
    
    public function create()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        $categories = Category::all();
        return view('product.create')->with('categories', $categories);
    }
    
    public function dispatchProduct()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        $products = $this->repo->findAll();
        $partners = $this->partnerRepo->findAll();
        $states = $this->stateRepo->findAll();
        $vendors = $this->vendorRepo->findAll();

        return view('product.dispatch')
            ->with('products', $products)
            ->with('partners', $partners)
            ->with('vendors', $vendors)
            ->with('states', $states);
    }

    public function dispatchProductPost(Request $request) {
        // dd($request->all());
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $this->validate($request, [
            "product_id"=>"required",
            "quantity"=>"required",
            "partner_id"=>"required",
            "vendor_id"=>"required",
            "state_dispatched_to"=>"required",
        ]);


        try{

            $dispatch = $this->transRepo->create($request);
            if($dispatch){
             $notification = array(
                 'message' => "Dispatch Created successfully!",
                 'alert-type' => 'success'
             );
             return redirect()->route('dashboard.transaction.index')->with('success', 'Product Dispatched successfully!')->with($notification);
            }
            else {
 
                $notificationErr = array(
                    'message' => "Could not Dispatch Product. Try again!",
                    'alert-type' => 'error'
                );
                return back()
                    ->withInput()
                    ->with('error', 'Could not Dispatch Product. Try again!')->with($notificationErr);
            }
        }catch(QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                $notification = array(
                    'message' => "OPS... A Product with title $request->product_name already exists!",
                    'alert-type' => 'error'
                );
                return back()->withInput()->with('error', 'OPS... A Product with title '.$request->product_name.' already exists!')->with($notification);
            }
    
        }
        
    }
    
    public function store(Request $request)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $this->validate($request, [
            "material_no"=>"required",
            "batch_no"=>"required",
            "product_name"=>"required",
            "brand"=>"required",
            "category_id"=>"required"
        ]);

        try{

           $product = $this->repo->create($request);
           if($product){
            $notification = array(
                'message' => "Product Created successfully!",
                'alert-type' => 'success'
            );
            return redirect()->route('dashboard.product.index')->with('success', 'Product Created successfully!')->with($notification);
           }else {

            $notificationErr = array(
              'message' => "Could not create Product. Try again!",
              'alert-type' => 'error'
            );
            return back()
                ->withInput()
                ->with('error', 'Could not create Product. Try again!')->with($notificationErr);
        }
           
        
    }catch(QueryException $e){

        $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                $notification = array(
                    'message' => "OPS... A Product with title $request->product_name already exists!",
                    'alert-type' => 'error'
                );
                return back()->withInput()->with('error', 'OPS... A Product with title '.$request->product_name.' already exists!')->with($notification);
            }

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
        $categories = Category::all();
        $product = $this->repo->findById($id);
        return view('product.edit')
        ->with('product', $product)
        ->with('categories', $categories);
    }
    
    public function update(Request $request, $id)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        $this->validate($request, [
            "material_no"=>"required",
            "batch_no"=>"required",
            "product_name"=>"required",
            "brand"=>"required",
            "category_id"=>"required"
        ]);
        try{

            $updateProduct = $this->repo->update($request, $id);
            if($updateProduct){
                $notification = array(
                    'message' => "Product Created successfully!",
                    'alert-type' => 'success'
                );
                return redirect()->route('dashboard.product.index')->with('success', 'Product Created successfully!')->with($notification);
            } else {

                $notificationErr = array(
                    'message' => "Could not create Product. Try again!",
                    'alert-type' => 'error'
                );

                return back()
                    ->withInput()
                    ->with('error', 'Could not create Product. Try again!')->with($notificationErr);
            }

        }catch(Exception $e){

            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                $notification = array(
                    'message' => "OPS... A Product with title $request->product_name already exists!",
                    'alert-type' => 'error'
                );
                return back()->withInput()->with('error', 'OPS... A Product with title '.$request->product_name.' already exists!')->with($notification);
            }
        }
        
    }
    
    public function delete($id)
    {
        //
    }
}
