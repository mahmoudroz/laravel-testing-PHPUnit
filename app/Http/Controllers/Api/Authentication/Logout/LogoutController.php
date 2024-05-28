<?php

namespace App\Http\Controllers\Api\Authentication\Logout;

use App\Http\Controllers\Controller;
use App\Traits\HandleApiJsonResponseTrait;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    use HandleApiJsonResponseTrait;

    ###################################### START  LOGOUT #####################################
    public function logout(Request $request)
    {
        try{
            // return "لا حول ولا قوة الا بالله العلي العظيم";
            auth('api')->logout(true);
            return $this->success('success');

        } catch (\Exception $ex) {
            return $this->errorUnExpected($ex);
        }
    }
    ###################################### END LOGOUT ########################################
}
