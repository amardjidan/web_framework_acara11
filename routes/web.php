<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; // Pastikan ini ada!

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(); // Menambahkan route login dan register

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
