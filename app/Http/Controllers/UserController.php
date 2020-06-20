<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\User\UserContract;
use Sentinel;

class UserController extends Controller
{
    protected $repo;
    public function __construct(UserContract $userContract) {
        $this->repo = $userContract;
    }
    
    public function index()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $users = $this->repo->findAll();
        return view('user.index')->with('users', $users);
    }
    
    public function adminDashboard() {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        return view('dashboard.index');
    }

    public function create()
    {

        return view('user.create');
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
    
    public function delete($slug)
    {
        $this->repo->remove($slug);
        return redirect()->route('dashboard.user.index')->with('success','successfully deleted');
    }
}
