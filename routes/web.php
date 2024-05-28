<?php

use App\Events\CreateCountryEvent;
use App\Http\Controllers\Dashboard\CountryController;
use App\Http\Controllers\CreateCountryEventController;
use App\Models\Country;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect;
use Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter;
use Mcamara\LaravelLocalization\Middleware\LaravelLocalizationViewPath;
use Illuminate\Support\Facades\Auth;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::get('/clear', function () {
    Artisan::call('optimize:clear');
    return 'optimize clear success';
});

Auth::routes();


Route::group(
    [
        'prefix'     => LaravelLocalization::setLocale(),
        'middleware' => [
            LocaleSessionRedirect::class,
             LaravelLocalizationRedirectFilter::class,
              LaravelLocalizationViewPath::class
            ],
    ],
    function () {
        Route::get('/', function () {

           return  __('site.name');

        });
        Route::post('/country-create-event', [CreateCountryEventController::class, 'index'])->name('country-create-event');
        Route::prefix('dashboard')->middleware(['auth', 'web'])->name('dashboard.')->group(function () {

            Route::resource('countries',CountryController::class);

        });


    });
