<?php

use App\Http\Controllers\ProfileController;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
