<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth',  'verified'])->group(function () {
    Route::view('home', 'home')->name('home');
    Route::view('password/update', 'auth.passwords.update')->name('passwords.update');
});
