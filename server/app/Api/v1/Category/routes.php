<?php

use App\Api\V1\Category\CategoryContoller;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', [CategoryContoller::class, 'getAll']);

Route::get('/{id}', [CategoryContoller::class, 'getById']);

Route::get('/name={name}', [CategoryContoller::class, 'getByName']);

Route::post('/', [CategoryContoller::class, 'create']);

Route::put('/{id}', [CategoryContoller::class, 'update']);

Route::delete('/{id}', [CategoryContoller::class, 'delete']);
