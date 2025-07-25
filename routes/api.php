<?php

use App\Http\Controllers\api\DogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('dogs', DogController::class);


//Rotas feitas manualmente
// Route::get('/dogs', [DogController::class, 'index']);
// Route::post('/store', [DogController::class, 'store']);
// Route::get('/dogs/{id}', [DogController::class, 'show']);
// Route::put('/dogs/{id}', [DogController::class, 'update']);
// Route::delete('/dogs/{id}', [Dogcontroller::class, 'destroy']);


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
