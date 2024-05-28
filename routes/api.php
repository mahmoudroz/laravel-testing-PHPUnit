<?php

use App\Http\Controllers\Api\Authentication\Login\LoginController;
use App\Http\Controllers\Api\Authentication\Register\RegisterController;
use App\Http\Controllers\Api\Authentication\Logout\LogoutController;
use App\Http\Controllers\Api\Profile\ProfileController;
use App\Http\Middleware\AssignGuard;
use App\Http\Middleware\ChangeLanguage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['api', ChangeLanguage::class]], function () {

    ################################ START AUTHENTICATION ###################################
    Route::group(['prefix' => 'auth', 'namespace' => 'Authentication'], function () {
        ######################## START REGISTER ########################
        Route::group(['prefix' => 'register' , 'namespace' => 'Register'], function () {
            Route::post( '' , [ RegisterController::class , 'register' ])->middleware('throttle:25,1');
        });
        ########################  END REGISTER  ########################
        ######################## START LOGIN ########################
        Route::group(['prefix' => 'login' , 'namespace' => 'Login'], function () {
            Route::post('', [ LoginController::class, 'login'])->middleware('throttle:25,1');
        });
        ########################   END LOGIN   ######################

    });
    ################################ END AUTHENTICATION   ###################################
    Route::middleware('auth.guard:api')->group(function () {
        Route::get('auth/logout', [ LogoutController::class, 'logout']);

        ############################### START PROFILE ###############################
        Route::group(['prefix' => 'profile', 'namespace' => 'Profile'], function () {
            Route::get('show' , [ ProfileController::class , 'show'] )->name('profile.show');
            Route::put('update' , [ ProfileController::class , 'update'] );
            Route::delete('delete' , [ ProfileController::class , 'delete'] );
        });

    });
});
