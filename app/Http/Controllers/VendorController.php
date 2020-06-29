<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Vendor\VendorContract;
use Sentinel;

class VendorController extends Controller
{
    protected $repo;
    public function __construct(VendorContract $vendorContract) {
        $this->repo = $vendorContract;
    }
    
    public function index()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        $vendors = $this->repo->findAll();
        return view('vendor.index')->with('vendors', $vendors);
    }
    
    public function create()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        return view('vendor.create');
    }
    
    public function store(Request $request)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'plate_number'=>'required',
        ]);

        try{

            $vendor = $this->repo->create($request);
            if($vendor){
             $notification = array(
                 'message' => "vendor Added successfully!",
                 'alert-type' => 'success'
             );
             return redirect()->route('dashboard.vendor.index')->with('success', 'vendor Added successfully!')->with($notification);
            }else {
 
             $notificationErr = array(
               'message' => "Could not Add Vendor. Try again!",
               'alert-type' => 'error'
             );
             return back()
                 ->withInput()
                 ->with('error', 'Could not add vendor. Try again!')->with($notificationErr);
         }
            
         
     }catch(QueryException $e){
 
         $errorCode = $e->errorInfo[1];
             if($errorCode == 1062){
                 $notification = array(
                     'message' => "OPS... A Vendor with ID $request->vendor_id already exists!",
                     'alert-type' => 'error'
                 );
                 return back()->withInput()->with('error', 'OPS... A Vendor with ID '.$request->vendor_id.' already exists!')->with($notification);
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

        $vendor = $this->repo->findById($id);
        return view('vendor.edit')->with('vendor', $vendor);
    }
    
    public function update(Request $request, $id)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'plate_number'=>'required',
        ]);

        try{

            $vendor = $this->repo->update($request, $id);
            if($vendor){
             $notification = array(
                 'message' => "vendor Added successfully!",
                 'alert-type' => 'success'
             );
             return redirect()->route('dashboard.vendor.index')->with('success', 'vendor Added successfully!')->with($notification);
            }else {
 
             $notificationErr = array(
               'message' => "Could not Add Vendor. Try again!",
               'alert-type' => 'error'
             );
             return back()
                 ->withInput()
                 ->with('error', 'Could not add vendor. Try again!')->with($notificationErr);
         }
            
         
     }catch(QueryException $e){
 
         $errorCode = $e->errorInfo[1];
             if($errorCode == 1062){
                 $notification = array(
                     'message' => "OPS... A Vendor with ID $request->vendor_id already exists!",
                     'alert-type' => 'error'
                 );
                 return back()->withInput()->with('error', 'OPS... A Vendor with ID '.$request->vendor_id.' already exists!')->with($notification);
             }
 
         }
    }
    
    public function delete($id)
    {
       
        $this->repo->remove($id);
        return redirect()->route('dashboard.vendor.index')->with('message', 'successfully deleted');
    }
}
