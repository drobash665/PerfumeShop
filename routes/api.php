<?php

use App\Http\Controllers\BrandsControllerApi;
use App\Http\Controllers\FragranceControllerApi;
use App\Http\Controllers\OrderControllerApi;
use App\Http\Controllers\UserControllerApi;
use Illuminate\Support\Facades\Route;

Route::get('/brand', [BrandsControllerApi::class, 'index']);
Route::get('/brand/{id}', [BrandsControllerApi::class, 'show']);
Route::get('/order', [OrderControllerApi::class, 'index']);
Route::get('/order/{id}', [OrderControllerApi::class, 'show']);
Route::get('/fragrance', [FragranceControllerApi::class, 'index']);
Route::get('/fragrance/{id}', [FragranceControllerApi::class, 'show']);
Route::get('/user', [UserControllerApi::class, 'index']);
Route::get('/user/{id}', [UserControllerApi::class, 'show']);
