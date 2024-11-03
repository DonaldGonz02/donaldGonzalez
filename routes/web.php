<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
