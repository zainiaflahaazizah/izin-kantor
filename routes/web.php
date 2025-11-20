<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/forgot-password', function () {
    return view('auth.reset-password');
});

// Route::get('/login', function () {
//     return view('auth.login'); // Memanggil file resources/views/auth/login.blade.php
// })->name('login');
