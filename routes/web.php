<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/cashbook', function () {
    return view('cashbook.index');
});
