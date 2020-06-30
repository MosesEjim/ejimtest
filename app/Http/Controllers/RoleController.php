<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Role\RoleContract;
use Sentinel;

class RoleController extends Controller
{
    protected $repo;
    public function __construct(RoleContract $roleContract) {
        $this->repo = $roleContract;
    }
    
    public function index()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.get.login');
        }

        $roles = $this->repo->findAll();
        return view('role.index')->with('roles', $roles);
    }
    
    public function create()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.get.login');
        }
        
        return view('role.create');
    }
    
    public function store(Request $request)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.get.login');
        }

        try{
            $role = $this->repo->create($request);
            if($role){
                return redirect()->route('dashboard.role.index')->with('success', 'role created Successfully');
            }else{
                return back()->withInput()->with('error', 'failed to create role, try again');
            }
        }catch(QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                $notification = array(
                    'message' => "OPS... A role with title $request->name already exists!",
                    'alert-type' => 'error'
                );
                return back()->withInput()->with('error', 'OPS... A Progroleram with title '.$request->name.' already exists!')->with($notification);
            }

        }
    }
    
    public function show($id)
    {
        
    }
    
    public function edit($id)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.get.login');
        }
        $role = $this->repo->findById($id);
        return view('role.edit')->with('role', $role);
    }
    
    public function update(Request $request, $id)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.get.login');
        }

        try{
            $role = $this->repo->update($request, $id);
            if($role){
                return redirect()->route('dashboard.role.index')->with('success', 'role updated Successfully');
            }else{
                return back()->withInput()->with('error', 'failed to update role, try again');
            }
        }catch(QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                $notification = array(
                    'message' => "OPS... A role with title $request->name already exists!",
                    'alert-type' => 'error'
                );
                return back()->withInput()->with('error', 'OPS... A role with title '.$request->name.' already exists!')->with($notification);
            }

        }

    }
    
    public function delete($id)
    {
        //
    }
}
