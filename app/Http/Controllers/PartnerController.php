<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Partner\PartnerContract;
use App\Repositories\State\StateContract;
use Illuminate\Database\QueryException;
use Sentinel;

class PartnerController extends Controller
{
    protected $repo;
    protected $stateRepo;

    public function __construct(PartnerContract $partnerContract, StateContract $stateContract) {
        $this->repo = $partnerContract;
        $this->stateRepo = $stateContract;
    }
    
    public function index()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        $partners = $this->repo->findAll();
        return view('partner.index')->with('partners', $partners);
    }
    
    public function create()
    {
        $states = $this->stateRepo->findAll();
        // dd($states);
        return view('partner.create')->with('states', $states);
    }
    
    public function store(Request $request)
    {
     
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        // dd($request->all());

        $this->validate($request, [
            "partner_name"=>"required",
            "email"=>"required",
            "payment_email"=>"required",
            "partner_type"=>"required",
            "type_description"=>"required",
            "state"=>"required",
            "lga"=>"required",
            "address"=>"required",
            "telephone1"=>"required",
            "telephone2"=>"required"
        ]);

        try{

            $partner = $this->repo->create($request);
            if($partner){
             $notification = array(
                 'message' => "Partner Added successfully!",
                 'alert-type' => 'success'
             );
             return redirect()->route('dashboard.partner.index')->with('success', 'Product Created successfully!')->with($notification);
            }else {
 
             $notificationErr = array(
               'message' => "Could not Add Partner. Try again!",
               'alert-type' => 'error'
             );
             return back()
                 ->withInput()
                 ->with('error', 'Could not add partner. Try again!')->with($notificationErr);
         }
            
         
     }catch(QueryException $e){
 
        $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                $notification = array(
                    'message' => "OPS... A Partner with ID $request->email already exists!",
                    'alert-type' => 'error'
                );
                return back()->withInput()->with('error', 'OPS... A Partner with ID '.$request->email.' already exists!')->with($notification);
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
        
        $partner = $this->repo->findById($id);
        return view('partner.edit')
        ->with('partner', $partner);   
    }
    
    public function update(Request $request, $id)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $this->validate($request, [
            "partner_id"=>"required",
            "partner_name"=>"required",
            "email"=>"required",
            "payment_email"=>"required",
            "partner_type"=>"required",
            "type_description"=>"required",
            "state"=>"required",
            "lga"=>"required",
            "address"=>"required",
            "telephone1"=>"required",
            "telephone2"=>"required"
        ]);

        try{

            $updatePartner = $this->repo->update($request, $id);
            if($updatePartner){
             $notification = array(
                 'message' => "Partner Added successfully!",
                 'alert-type' => 'success'
             );
             return redirect()->route('dashboard.partner.index')->with('success', 'Product Created successfully!')->with($notification);
            }else {
 
             $notificationErr = array(
               'message' => "Could not Add Partner. Try again!",
               'alert-type' => 'error'
             );
             return back()
                 ->withInput()
                 ->with('error', 'Could not add partner. Try again!')->with($notificationErr);
         }
            
         
     }catch(QueryException $e){
 
         $errorCode = $e->errorInfo[1];
             if($errorCode == 1062){
                 $notification = array(
                     'message' => "OPS... A Partner with ID $request->partner_id already exists!",
                     'alert-type' => 'error'
                 );
                 return back()->withInput()->with('error', 'OPS... A Partner with ID '.$request->partner_id.' already exists!')->with($notification);
             }
 
         }
    }
    
    public function delete($id)
    {
        //
    }
}
