<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\User\UserContract;
use Sentinel;

class UserApiController extends Controller
{
    protected $repo;

    public function __construct(UserContract $userContract) {
        $this->repo = $userContract;
    }
    
    public function index()
    {
        
        $users = $this->repo->findAll();
        return response()->json([
            'data' => $users,
            'succces' => true,
        ], 200);
        
    }
    
    public function postLogin(Request $request) {
        dd($request->all());
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            // 'username' => 'required',
            'password' => 'required',
            'account_type' => 'required',
        ]);

        $user = $this->repo->create($request);

        if($user->id) {
            return response()->json([
                'data' => $user,
                'succces' => true,
            ], 201);
        } else {
            return response()->json([
                'message' => 'Could not create User. Try again!'
            ], 401);
        }
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
