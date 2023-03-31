<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;

// Route::get('/', [BlogController::class, 'index'])->name('home');
Route::controller(BlogController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});

// Route::get('/', [BlogController::class, 'index'])->name('home');
// Route::get('post', [BlogController::class, 'post'])->name('post');

// Route::get('/post'. 'BlogController@post');