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
        return view('role.create');
    }
    
    public function store(Request $request)
    {
        
    }
    
    public function show($id)
    {
        
    }
    
    public function edit($id)
    {
        
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
