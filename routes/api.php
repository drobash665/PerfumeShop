<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandsControllerApi;
use App\Http\Controllers\FragranceControllerApi;
use App\Http\Controllers\OrderControllerApi;
use App\Http\Controllers\UserControllerApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/brand', [BrandsControllerApi::class, 'index']);
Route::get('/brand/{id}', [BrandsControllerApi::class, 'show']);
Route::get('/order', [OrderControllerApi::class, 'index']);
Route::get('/order/{id}', [OrderControllerApi::class, 'show']);
Route::get('/fragrance', [FragranceControllerApi::class, 'index']);
Route::get('/fragrance/{id}', [FragranceControllerApi::class, 'show']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/user/{id}', [UserControllerApi::class, 'show']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->get('/logout', [AuthController::class, 'logout']);
route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/brand', [BrandsControllerApi::class, 'index']);
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    route::get('/logout', [AuthController::class, 'logout']);
});
