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
        return view('user.index');
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
    
    public function delete($id)
    {
        //
    }
}
