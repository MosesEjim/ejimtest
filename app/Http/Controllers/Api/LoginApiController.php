<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Sentinel;
use Carbon\Carbon;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;

class LoginApiController extends Controller
{
    // protected $repo;

    // public function __construct(AuthenticationContract $authenticationContract) {
    //     $this->repo = $authenticationContract;
    // }

    public function authenticate(Request $request){
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);
        
        $credentials = [
            'email'    => strtolower($request->email),
            'password' => $request->password,
        ];
        
        try {
            if(Sentinel::authenticate($credentials)) {
                // Authentication passed...
                $authUser = Sentinel::getUser();
                // dd($authUser);
                $tokenResult = $authUser->createToken('71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ');
                $token = $tokenResult->token;
                $token->save();

                return response()->json([
                    'access_token' => $tokenResult->accessToken,
                    'token_type' => 'Bearer',
                    'user' => $authUser,
                    'success' => true,
                    'expires_at' => Carbon::parse(
                        $tokenResult->token->expires_at
                    )->toDateTimeString()
                    ], 200);
            } else {   
                // Authentication failed...
                return response()->json([
                    'message' => 'Ops... Your Login Credentials did not match'
                ], 404);
            }
        } catch(ThrottlingException $e) {
            $delay = $e->getDelay();
            return response()->json([
                'message' => "Ops.. You have been banned for $delay seconds."
            ], 401);
        } catch(NotActivatedException $e){
            return response()->json(['error' => 'Ops... Your account is not yet activated, please check your email for activation code or link'], 401);
        }
    }
}
