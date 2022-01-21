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

Route::get('/get-data', [\App\Http\Controllers\TestingController::class, 'getData']);
Route::get('/get-data-by-id', [\App\Http\Controllers\TestingController::class, 'getDataById']);
Route::post('/create', [\App\Http\Controllers\TestingController::class, 'store']);
Route::put('/update', [\App\Http\Controllers\TestingController::class, 'update']);
Route::delete('/delete', [\App\Http\Controllers\TestingController::class, 'destroy']);
