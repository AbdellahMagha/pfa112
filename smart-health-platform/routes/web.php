<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/con', function () {
    return view('conseils');
});

Route::get('/rec', function () {
    return view('Recommandation');
});

Route::get('/login', function () {
    return view('login');
});