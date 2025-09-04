<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/book', [BookController::class, 'getAll']);
Route::get('/book/random', [BookController::class, 'getRandom']);
Route::get('/book/id/{id}', [BookController::class, 'getById']);
Route::post('/book', [BookController::class, 'store']);
Route::put('/book/id/{id}', [BookController::class, 'update']);
Route::delete('/book/id/{id}', [BookController::class, 'destroy']);
