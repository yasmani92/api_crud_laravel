<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/movies', [App\Http\Controllers\MovieController::class, 'index']);
// Route::get('/create_movies', [App\Http\Controllers\MovieController::class, 'create']);
Route::post('/create_movies', [App\Http\Controllers\MovieController::class, 'store']);
// Route::get('/movies/{movie}/edit', [App\Http\Controllers\MovieController::class, 'edit']);
Route::post('/movies/{movie}/edit', [App\Http\Controllers\MovieController::class, 'update']);
Route::get('/movies/{movie}', [App\Http\Controllers\MovieController::class, 'show']);
Route::post('/movies/{movie}', [App\Http\Controllers\MovieController::class, 'detroy']);
