<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home', ['nama' => 'Yusufnova']);
});

Route::get('/profil', function () {
    return view('profil', ['nama' => 'Yusufnova']);
});

Route::get('/produk-detail', function () {
    return view('produk-detail', ['nama' => 'Yusufnova']);
});