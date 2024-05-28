<?php

namespace App\Http\Controllers\Api\Authentication\Register;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\UserRegisterRequest;
use App\Http\Resources\MyProfileResource;
use App\Mail\NotifyMail;
use App\Models\User;
use App\Traits\GeneralTrait;
use App\Traits\HandleApiJsonResponseTrait;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Tymon\JWTAuth\Facades\JWTAuth;

class RegisterController extends Controller
{
    use HandleApiJsonResponseTrait,GeneralTrait;

     public function register(UserRegisterRequest $request)
    {
        $image = null;
        try{
            $data = $request->except(['image']);
         //            $data['password']  = bcrypt($request->password);
         //   $data['password']  =  Hash::make($request['password']);
            $data['status']    = 1;
            /* START STORE IMAGE */
            if ($request->hasFile('image')) {
                $image = $this->uploadImage($request->file('image'), 'uploads/users/');
                $data['image'] = $image;
            }
            /* END STORE IMAGE */
            $user = User::create($data);
            if ( !$token =  JWTAuth::fromUser( $user) ){
                return $this->error( __('api.Information Error') );
            }
            return $this->success(['user' =>  new MyProfileResource($user, $token)], 201);
        } catch (\Exception $ex){
            $this->deleteFile($image , 'uploads/users/');
            return $this->errorUnExpected($ex);
        }
    }
    ###################################### END REGISTER   ####################################
 }
