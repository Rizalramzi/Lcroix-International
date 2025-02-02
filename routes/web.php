<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/sustainability', function () {
    return view('sustainability');
});

Route::get('/service', action: function () {
    return view('service');
});

Route::get('/collaboration', action: function () {
    return view('collaboration');
});

Route::get('/profile', action: function () {
    return view('profile');
});

Route::get('/leaders', action: function () {
    return view('leader');
});

Route::get('/projects', action: function () {
    return view('project');
});

Route::get('/contact', action: function () {
    return view('contact');
});

Route::get('/article', action: function () {
    return view('article');
});
