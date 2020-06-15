<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function signUp(){
      return view('auth.SignUp');
  }  
  
  public function login(){
      return view('auth.login');
  }
}
