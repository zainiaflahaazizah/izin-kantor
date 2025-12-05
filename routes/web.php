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

Route::get('/reset-password', function () {
    return view('auth.reset-password');
});

Route::get('/home', function () {
    return view('home');
});


//FORM IZIN//
Route::get('/form-izin', function () {
        return view('form-izin');
});
Route::get('/tabel-izin', function () {
    return view('tabel-izin');
});
Route::get('/form-izin-2', function () {
    return view('anggota.form-izin-2');
});


//FORM DIKUMENTASI//
Route::get('/form-dokumentasi', function () {
        return view('anggota.form-dokumentasi');
});
Route::get('/form-doc', function () {
    return view('anggota.form-doc');
});


//APPROVAL//
Route::get('/approval', function () {
        return view('approval');
});


//PEGAWAI//
Route::get('/index-pegawai', function () {
        return view('pegawai.index');
});














// Route::get('/approval', function () {
//         return view('kepala-bps.approval');
// });

// Route::resource('/pegawai', PegawaiController::class);

// Route::get('/pegawai', function () {
//         return view('admin.pegawai');
// });

// Route::get('/login', function () {
//     return view('auth.login'); // Memanggil file resources/views/auth/login.blade.php
// })->name('login');
