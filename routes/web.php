<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home.home');
});

Route::get('/service', function () {
    return view('#');
});

Route::get('/article', function () {
    return view('pages.article.article');
});

Route::get('/about', function () {
    return view('pages.about.about');
});
