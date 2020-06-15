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
				$card = $this->cardRepo->findByUserId($authUser->id);
				// dd($card);

				try {
				  if(Sentinel::getUser()->roles()->first()->slug === 'super') {
						// return redirect()->route('admin.index');
						return 'superadmin';
				  } elseif (Sentinel::getUser()->roles()->first()->slug === 'admin') {
						return redirect()->route('dash.admin.index');
				  } elseif (Sentinel::getUser()->roles()->first()->slug === 'user') {
				  	if (!$authUser->account_details_status) {
				  		$user = $authUser;
				  		return redirect()->route('user.profile.bank')->with('user', $user);
				  	}

				  	if ($authUser->first_charge != true) {
				  		return redirect()->route('user.profile.first_charge');
				  	}
					
					return redirect()->route('dash.user.index');
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
