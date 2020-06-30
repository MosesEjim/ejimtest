<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\User\UserContract;
use App\Repositories\State\StateContract;
use App\Repositories\Question\QuestionContract;
use App\Repositories\Program\ProgramContract;

class PageController extends Controller
{
    
    protected $repo;
    protected $questionRepo;
    protected $programRepo;
    protected $stateRepo;

    public function __construct(
        UserContract $userContract,
        QuestionContract $questionContract, 
        ProgramContract $programContract,
        StateContract $stateContract
        ) {
          $this->repo = $userContract;
          $this->questionRepo = $questionContract;
          $this->programRepo = $programContract;
          $this->stateRepo = $stateContract;
    }

  public function index(){
    $users = $this->repo->findAll();
    dd($users);
    return view('dashboard.index')->with('users', $users);
  }
  public function signUp(){
      return view('auth.SignUp');
  }  
  
  public function login(){
      return view('login.index');
  }

  public function createRole(){
    return view('role.create');
  }

  public function roles(){
    return view('role.index');
  }

}

