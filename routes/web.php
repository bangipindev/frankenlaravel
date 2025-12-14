<?php

use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/info', function () {
    dd(phpinfo());
});

Route::get('/counter', Counter::class);