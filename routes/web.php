<?php

use Illuminate\Support\Facades\Route;

Route::view('/','home')->name('home');
Route::view('/login','login')->name('login');
Route::view('/register','register')->name('register');

Route::view('/admin', 'admin')->name('admin');
Route::view('/admin/agregar', 'agregar')->name('admin.agregar')->middleware('auth');

Route::get('/admin/editar/{id}',[\App\Http\Controllers\adminController::class, 'edit'])->name('admin.editar');
Route::patch('/admin/editar/id/{trailer}',[\App\Http\Controllers\adminController::class, 'update'])->name('admin.update');

Route::get('/admin', [\App\Http\Controllers\adminController::class, 'index'])->name('admin');
Route::post('/admin', [\App\Http\Controllers\adminController::class, 'store'])->name('admin.store');
Route::delete('/admin/id/{trailer}', [\App\Http\Controllers\adminController::class, 'delete'])->name('admin.delete');

Route::get('/',[\App\Http\Controllers\TrailerController::class, 'index'])->name('/');
Route::get('/{name}',[\App\Http\Controllers\TrailerController::class, 'show'])->name('/name');


Auth::routes();
