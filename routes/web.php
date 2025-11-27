<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\FragranceController;
use App\Http\Controllers\LoginController;
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
Route::get('/fragrances', [FragranceController::class, 'index']);

Route::get('/orders', [OrderController::class, 'index']);
Route::get('/order/{id}', [OrderController::class, 'show']);
Route::get('/fragrances/create', [FragranceController::class, 'create'])->middleware('auth');
Route::post('/fragrances', [FragranceController::class, 'store']);
Route::get('/fragrances/edit/{id}', [FragranceController::class, 'edit'])->middleware('auth');
Route::post('/fragrances/update/{id}', [FragranceController::class, 'update'])->middleware('auth');
Route::get('/fragrances/destroy/{id}', [FragranceController::class, 'destroy'])->middleware('auth');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/auth', [LoginController::class, 'authenticate']);
Route::get('/auth', function () {
    return redirect('/login');
});
Route::get('/error', function () {
    return view('error', ['message' => session('message')]);
});






