<?php

use App\Api\V1\Product\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'listAllProducts']);

Route::get('/{id}', [ProductController::class, 'getOneProduct']);

Route::post('/', [ProductController::class, 'createProduct']);

Route::put('/{id}', [ProductController::class, 'updateProduct']);

Route::delete('/{id}', [ProductController::class, 'updateProduct']);
