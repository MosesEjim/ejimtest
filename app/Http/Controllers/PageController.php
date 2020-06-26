<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

  public function index(){
    return view('dashboard.index');
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

