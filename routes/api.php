<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
Use App\Http\Controllers\Api\MovieController;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('movies', [AuthController::class, 'allMovies']);
});





// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

