<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\State\StateContract;
use Sentinel;

class StateController extends Controller
{
    protected $repo;
    public function __construct(StateContract $stateContract) {
        $this->repo = $stateContract;
    }
    
    public function index()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        $states = $this->repo->findAll();
        return view('state.index')->with('states', $states);
    }
    
    public function create()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        return view('state.create');
    }
    
    public function store(Request $request)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $this->validate($request, [
            "name"=>"required"
        ]);

        try{

            $state = $this->repo->create($request);
            
            if($state){
             $notification = array(
                 'message' => "Transaction Created successfully!",
                 'alert-type' => 'success'
             );
             return redirect()->route('dashboard.state.index')->with('success', 'State Added successfully!')->with($notification);
            }else {
 
             $notificationErr = array(
               'message' => "Could not add state. Try again!",
               'alert-type' => 'error'
             );
             return back()
                 ->withInput()
                 ->with('error', 'Could not add State. Try again!')->with($notificationErr);
         }
            
         
        }catch(QueryException $e){
 
        $errorCode = $e->errorInfo[1];
        if($errorCode == 1062){
            $notification = array(
                'message' => "OPS... A state with title $request->name already exists!",
                'alert-type' => 'error'
            );
            return back()->withInput()->with('error', 'OPS... A state with title '.$request->name.' already exists!')->with($notification);
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
        $state = $this->repo->findById($id);
        return view('state.edit')->with('state', $state);

    }
    
    public function update(Request $request, $id)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        try{

            $updateState = $this->repo->create($request);
            if($updateState){
             $notification = array(
                 'message' => "Transaction Created successfully!",
                 'alert-type' => 'success'
             );
             return redirect()->route('dashboard.state.index')->with('success', 'State added successfully!')->with($notification);
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
 
        $errorCode = $e->errorInfo[1];
        if($errorCode == 1062){
            $notification = array(
                'message' => "OPS... A state with title $request->name already exists!",
                'alert-type' => 'error'
            );
            return back()->withInput()->with('error', 'OPS... A state with title '.$request->name.' already exists!')->with($notification);
        }
 
    }
    }
    
    public function delete($id)
    {
        //
    }
}
