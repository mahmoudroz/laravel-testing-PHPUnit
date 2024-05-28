<?php

namespace App\Http\Controllers\Api\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\UserUpdateProfileRequest;
use App\Http\Resources\MyProfileResource;
use App\Models\User;
use App\Traits\GeneralTrait;
use App\Traits\HandleApiJsonResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    use HandleApiJsonResponseTrait, GeneralTrait;

    ############################        START SHOW PROFILE    ##############################
    public function show(){
        try {
            $id         = auth('api')->id();
            $user     = User::find($id);
            $token      = request()->header('token');

            return $this->success( [
                'user'        =>  new MyProfileResource($user, $token),
            ] );

        }catch (\Exception $ex){
            return $this->errorUnExpected($ex);
        }
    }
    ############################        END SHOW PROFILE      ##############################
    ############################### START UPDATE PROFILE ###################################
    public function update(UserUpdateProfileRequest $request)
    {
        try{
            $image   = null;
            $id      = auth('api')->id();
            $user  = User::find($id);
            $data = $request->except(['image']);
            /* START STORE IMAGE */
            if ($request->hasFile('image')) {
                if ( $user['image'] ){
                    $this->deleteFile( $user['image'] , 'uploads/users/' );
                }
                $image = $this->uploadImage($request->file('image'), 'uploads/users/');
                $data['image'] = $image;
            }
            /* END STORE IMAGE */

            $user->update($data);
            return $this->success( __('api.successfully') );
        } catch (\Exception $ex){
            $this->deleteFile($image , 'uploads/users/' );
            return $this->errorUnExpected($ex);
        }
    }
    ###############################  END UPDATE PROFILE  ####################################
    ############################        START DELETE ACCOUNT  ##############################
    public function delete()
    {
        try {
            $id = auth('api')->user()->id;
            $user = User::find($id);
            $user->delete();
            return $this->success(__('api.successfully'));
        }catch (\Exception $ex){
            return $this->errorUnExpected($ex);
        }
    }
    ############################          END DELETE ACCOUNT      ##########################

}
