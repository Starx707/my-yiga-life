<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/index', PostController::class)
    ->name("index", "posts");

Route::controller(PostController::class)->group(function () {
    Route::post('/post-created', 'store')
        ->name('post-created');
    Route::get('/new-post', 'create')
        ->name('new-post');
    Route::get('/post/{id}', 'show');
    Route::delete('/post/{id}', 'destroy');

    Route::get('/post/{id}/edit', 'edit');

    Route::patch('/post/{id}', 'update');

    Route::get('/my-posts', 'userPosts')
        ->name('user-posts');

    Route::get('/all-posts', '')
})->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
