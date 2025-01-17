<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Auth::routes();

Route::get('/login', [App\Http\Controllers\HomeController::class, 'index'])->name('login');
