<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Login\LoginContract;
use Sentinel;

class LoginController extends Controller
{
    protected $repo;
    public function __construct(LoginContract $loginContract) {
        $this->repo = $loginContract;
    }
    
    public function index()
    {
        return view('login.index');
    }
    
    public function create()
    {
        return view('login.create');
    }
    
    public function login(Request $request) {
		$request->validate([
			'login' => 'required|string',
			'password' => 'required|string'
		]);

		$credentials = [
			'login'    => $request->login,
			'password' => $request->password,
		];

		try {
		  if(Sentinel::authenticate($credentials)) {
				$authUser = Sentinel::getUser();
				
				try {
				  if(Sentinel::getUser()->roles()->first()->slug === 'super') {
						// return redirect()->route('admin.index');
						return 'superadmin';
				  } elseif (Sentinel::getUser()->roles()->first()->slug === 'admin') {              
						return redirect()->route('dashboard.admin.index');
				  } elseif (Sentinel::getUser()->roles()->first()->slug === 'user') {					
						return redirect()->route('dashboard.user.index');
				  }
				} catch (\BadMethodCallException $e) {
				  return redirect()->route('auth.login.get')->with('error', 'Your Session has expired. Please login again!');
				}
			} else {
				return redirect()->back()->withInput()->with('error', 'Ops... Your Login Credentials did not match');
			}
		} catch(ThrottlingException $e) {
			$delay = $e->getDelay();
			return redirect()->back()->with(['error' => "Ops.. You have been banned for $delay seconds."]);
		} catch(NotActivatedException $e){
			return redirect()->back()->with(['error' => 'Ops... Your account is not yet activated, please check your email for activation code or link']);
		}
	}
}
