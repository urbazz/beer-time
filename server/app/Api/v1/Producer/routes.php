<?php

use App\Api\V1\Producer\ProducerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProducerController::class, 'listAllProducers']);

Route::get('/{id}', [ProducerController::class, 'getOneProducer']);

Route::post('/', [ProducerController::class, 'createProducer']);

Route::put('/{id}', [ProducerController::class, 'updateProducer']);

Route::delete('/{id}', [ProducerController::class, 'deleteProducer']);
