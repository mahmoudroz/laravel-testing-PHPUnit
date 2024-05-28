<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait HandleApiJsonResponseTrait
{
    //******************** لا حول ولا قوة إلا بالله العلي العظيم  **********************//
    //*****************************   MADE BY MAHMOUD ROZ ***************************//
    //*****************************   PHONE : 01140465989 ***************************//
    ###############################  START ERROR VALIDATE #############################
    public function errorValidate($validator, $code = 422):JsonResponse{
        return response()->json([
            'status' => false,
            'msg'    => $validator->errors()->first(),
            'data'   => (object)[],
        ],$code);
    }
    ###############################  END ERROR VALIDATE   #############################
    ###############################    START NOT FOUND    #############################
    public function errorNotFound($code = 404): JsonResponse
    {
        return response()->json([
            'status' => false,
            'msg'    => __('api.not_found'),
            'data'   => (object)[],
        ],$code);
    }
    ###############################    END NOT FOUND      #############################
    ###############################    START SUCCESS      #############################
    public function success($data, $code = 200): JsonResponse
    {
        return response()->json([
            'status' => true,
            'msg'    => "success",
            'data'   => (object)$data,
        ],$code);
    }
    ###############################    END SUCCESS        #############################
    ###############################    START UNEXPECTED   #############################
    public function errorUnExpected($ex, $code = 404): JsonResponse
    {
        return response()->json([
            'status' => false,
            'msg'    => $ex->getMessage(),
            'data'   => (object)[]
        ],$code);
    }
    ###############################    END UNEXPECTED     #############################
    ###############################    START ERROR        #############################
    public function error($message, $code = 404): JsonResponse
    {
        return response()->json([
            'status' => false,
            'msg'    => $message,
            'data'   => (object)[],
        ],$code);
    }
    ###############################    END ERROR          #############################
    ###############################    START ERROR        #############################
    public function manyRequests(): JsonResponse
    {
        return response()->json([
            'status' => false,
            'msg'    => __('api.You have been blocked due to too many Request, try again later'),
            'data'   => (object)[],
        ],429);
    }
    ###############################        END ERROR      #############################
    //*****************************   MADE BY MAHMOUD ROZ ***************************//
    //*****************************   PHONE : 01140465989 ***************************//
 }


