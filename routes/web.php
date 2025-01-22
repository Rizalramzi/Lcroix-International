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
