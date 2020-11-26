<?php

use Illuminate\Support\Facades\Route;

Route::view('/','home')->name('home');
Route::view('/login','login')->name('login');
Route::view('/register','register')->name('register');
Route::view('/admin', 'admin')->name('admin');

Route::get('/',[\App\Http\Controllers\TrailerController::class, 'index'])->name('/');

Route::get('/{name}',[\App\Http\Controllers\TrailerController::class, 'show'])->name('/name');

Route::post('/register', [\App\Http\Controllers\registerController::class, 'store']);
Route::post('/login', [\App\Http\Controllers\loginController::class, 'validar']);
