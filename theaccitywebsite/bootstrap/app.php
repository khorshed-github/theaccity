<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function () {
            // Admin Auth Routes (without auth middleware)
            Route::middleware(['web'])
                ->prefix('admin')
                ->group(function () {
                    Route::get('/login', function () { 
                        return view('admin/login'); 
                    })->name('admin.login');
                    Route::post('/login', 'App\Http\Controllers\LoginController@index')->name('admin.login.post');
                    Route::get('/logout', 'App\Http\Controllers\AppController@logout')->name('admin.logout');
                });
            
            // Admin Protected Routes (with auth middleware)
            Route::middleware(['web', 'auth'])
                ->prefix('admin')
                ->group(base_path('routes/admin.php'));
        },
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
