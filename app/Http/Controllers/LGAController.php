<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\LGA\LGAContract;
use App\State;
use Sentinel;

class LGAController extends Controller
{
    protected $repo;
    public function __construct(LGAContract $lGAContract) {
        $this->repo = $lGAContract;
    }
    
    public function index()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        $lgas = $this->repo->findAll();
        return view('lga.index')->with('lgas', $lgas);
    }
    
    public function create()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        $states = State::all();
        return view('lga.create')->with('states', $states);
    }
    
    public function store(Request $request)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $this->validate($request, [
            "name"=>"required",
            "state"=>"required"
        ]);

        try{

            $lga = $this->repo->create($request);
            if($lga){
             $notification = array(
                 'message' => "LGA added successfully!",
                 'alert-type' => 'success'
             );
             return redirect()->route('dashboard.lga.index')->with('success', 'LGA added successfully!')->with($notification);
            }else {
 
             $notificationErr = array(
               'message' => "Could not Add LGA. Try again!",
               'alert-type' => 'error'
             );
             return back()
                 ->withInput()
                 ->with('error', 'Could not Add LGA. Try again!')->with($notificationErr);
         }
            
         
     }catch(QueryException $e){
 
         $errorCode = $e->errorInfo[1];
             if($errorCode == 1062){
                 $notification = array(
                     'message' => "OPS... An LGA with title $request->name already exists!",
                     'alert-type' => 'error'
                 );
                 return back()->withInput()->with('error', 'OPS... An LGA with title '.$request->name.' already exists!')->with($notification);
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
        $states = State::all();
        $lga = $this->repo->findById($id);
        return view('lga.edit')
        ->with('lga', $lga)
        ->with('states', $states);
    }
    
    public function update(Request $request, $id)
    {
        
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $this->validate($request, [
            "name"=>"required",
            "state"=>"required"
        ]);

        try{

            $lga = $this->repo->update($request, $id);
            if($lga){
             $notification = array(
                 'message' => "LGA added successfully!",
                 'alert-type' => 'success'
             );
             return redirect()->route('dashboard.lga.index')->with('success', 'LGA added successfully!')->with($notification);
            }else {
 
             $notificationErr = array(
               'message' => "Could not Add LGA. Try again!",
               'alert-type' => 'error'
             );
             return back()
                 ->withInput()
                 ->with('error', 'Could not Add LGA. Try again!')->with($notificationErr);
         }
            
         
     }catch(QueryException $e){
 
         $errorCode = $e->errorInfo[1];
             if($errorCode == 1062){
                 $notification = array(
                     'message' => "OPS... An LGA with title $request->name already exists!",
                     'alert-type' => 'error'
                 );
                 return back()->withInput()->with('error', 'OPS... An LGA with title '.$request->name.' already exists!')->with($notification);
             }
 
         }
    }
    
    public function delete($id)
    {
        //
    }
}
