<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\FragranceController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello', ['title' => 'Hello Mir!']);
});
Route::get('/brands', [BrandController::class, 'index']);
Route::get('/brand/{id}', [BrandController::class, 'show']);
Route::get('/fragrance', [FragranceController::class, 'index']);

Route::get('/order/{id}', [OrderController::class, 'show']);
