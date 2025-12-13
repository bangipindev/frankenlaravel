<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/info', function () {
    dd(phpinfo());
});

Route::get('/coba', function () {
    return "OKE";
});

Route::get('/terserah', function () {
    return "Terserah";
});


Route::get('/test', function () {
    return "TESTING";
});
