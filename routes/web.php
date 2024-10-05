<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('pasien', App\Http\Controllers\PasienController::class);

Route::middleware(['auth'])->group(function () {
    Route::resource('pasien', App\Http\Controllers\PasienController::class);
});