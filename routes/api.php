<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
Use App\Http\Controllers\Api\MovieController;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('movies', [MovieController::class, 'allMovies']);
    Route::get('showmovie/{id}', [MovieController::class, 'showMovie']);
    Route::get('director/{id}', [MovieController::class, 'getDirector']);
    Route::get('actor/{id}', [MovieController::class, 'getActor']);
});





// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

