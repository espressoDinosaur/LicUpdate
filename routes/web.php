<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/precData', function () {
    return view('precData');
});
