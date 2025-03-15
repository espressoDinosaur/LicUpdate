<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('index');
});

Route::get('/{page}', [PageController::class, 'show'])
    ->where('page', 'history|precData|about|contact');
