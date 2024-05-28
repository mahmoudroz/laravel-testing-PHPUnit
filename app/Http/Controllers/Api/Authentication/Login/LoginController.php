<?php

namespace App\Http\Controllers\Api\Authentication\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\UserLoginRequest;
use App\Http\Resources\MyProfileResource as ResourcesMyProfileResource;
use App\Traits\HandleApiJsonResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Resources\MyProfileResource;

class LoginController extends Controller
{
    use HandleApiJsonResponseTrait;


    ###################################### START LOGIN #######################################
    public function login(UserLoginRequest $request)
    {
        try {
            $credentials = ['email' => $request['email'], 'password'=>$request['password']];
            $token = auth('api')->attempt($credentials);
            if (!$token){
                return $this->error( __('api.Information Error') );
            }
            $user = auth('api')->user();
            // JWTAuth::setToken($token)->toUser();


            if( $user->status === 0 ){
                return $this->error( __('api.not Active') );
            }else if( $user->status === -1 ){
                return $this->error( __('api.account blocked') );
            }else if( $user->status === -2 ){
                return $this->error( __('api.account deleted') );
            }
            return $this->success(['user' =>  new MyProfileResource($user, $token)]);
        } catch (\Exception $ex) {
            return $this->errorUnExpected($ex);
        }
    }
    ###################################### END LOGIN   #######################################
}
