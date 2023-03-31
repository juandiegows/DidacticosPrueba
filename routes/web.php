<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\UserPageController;
// Route::get('/', [BlogController::class, 'index'])->name('home');
Route::controller(PageController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('post/{title}', 'post')->name('post');
    Route::get('search','search')->name('search');
});
Route::controller(UserPageController::class);
Route::controller(UserPageController::class)->group(function () {
    Route::get('signIn', 'SignIn')->name('signIn');
    Route::post('/users',  'create')->name('users.create');

});
// Route::get('/', [BlogController::class, 'index'])->name('home');
// Route::get('post', [BlogController::class, 'post'])->name('post');

// Route::get('/post'. 'BlogController@post');