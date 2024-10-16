<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        commands: __DIR__.'/../app/Aplication/console.php',
        health: '/up',

        //Custom routes
        using: function() {
            Route::middleware('api')
                ->prefix('api/v1/categories')
                ->group(base_path('app/Api/v1/Category/routes.php'));

            Route::middleware('api')
                ->prefix('api/v1/producers')
                ->group(base_path('app/Api/v1/Producer/routes.php'));

            Route::middleware('api')
                ->prefix('api/v1/products')
                ->group(base_path('app/Api/v1/Product/routes.php'));
        }
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
