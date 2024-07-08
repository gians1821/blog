<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::redirect('dashboard', 'post')->name('dashboard');

Route::middleware('auth') -> group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(PageController::class) -> group(function () {
    Route::get('/',                 'home') -> name('home');
    Route::get('blog/{post:slug}',  'post') -> name('post');    
});

Route::resource('post', PostController::class)->middleware(['auth', 'verified'])->except(['show'])->middleware('auth');

require __DIR__.'/auth.php';
