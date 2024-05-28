<?php

use App\Console\Commands\SendMail;
use Illuminate\Support\Facades\Route;

use App\Http\Middleware\AssignGuard;
use App\Http\Middleware\ChangeLanguage;
use Illuminate\Foundation\Application;
use Illuminate\Console\Scheduling\Schedule;

use Illuminate\Foundation\Configuration\Exceptions;

use Illuminate\Foundation\Configuration\Middleware;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
            then: function () {
                Route::namespace('Teacher')->prefix('teacher')->name('teacher.')->group(base_path('routes/teacher.php'));
            },
    )
    ->withMiddleware(function (Middleware $middleware) {

        // \App\Http\Middleware\AssignGuard::class;

        //Global Middleware
        // $middleware->append(ChangeLanguage::class);
        // $middleware->append(AssignGuard::class);
            $middleware->alias([
                           'auth.guard' => \App\Http\Middleware\AssignGuard::class,


            ]);

    //     $middleware->use([
    //         // \Illuminate\Http\Middleware\TrustHosts::class,
    //         ChangeLanguage::class,
    //         AssignGuard::class

    //    ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })
    ->withSchedule(function (Schedule $schedule) {
        $schedule->command('app:send-mail')
        ->timezone('America/Chicago')
        ->everyMinute();
    })->create();
