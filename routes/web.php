<?php

use App\Livewire\Counter;
use App\Livewire\Home\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/dashboard');
})->name('home|dashboard');


Route::get('/info', function () {
    dd(phpinfo());
});

Route::get('/counter', Counter::class);

Route::get('/dashboard', Dashboard::class);
Route::get('/setting', Dashboard::class);