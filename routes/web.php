<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

// Route::get('/', [BlogController::class, 'index'])->name('home');
Route::controller(PageController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('post/{title}', 'post')->name('post');
});

// Route::get('/', [BlogController::class, 'index'])->name('home');
// Route::get('post', [BlogController::class, 'post'])->name('post');

// Route::get('/post'. 'BlogController@post');