<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Post;

//maybe remove later on
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//My routes
Route::get('/about/{name}', [\App\Http\Controllers\AboutController::class, 'index'])
    ->name('about')
    ->middleware(['auth', 'verified']);

Route::resource('/index', PostController::class)
    ->middleware(['auth', 'verified'])
    ->name("index", "posts");

Route::post('/post-created', function () {
    //validation
    Post::create([
        'category_id' => 1,
        'user_id' => 1,
        'yiga_points' => 0,
        'title' => request('title'),
        'details' => request('description'),
        'likes' => 0,
        'private' => 0,
        'hidden' => 0
    ]);

    return redirect('/index');
})
    ->name('post-created');

Route::get('/new-post', function () {
    return view('post.create');
})
    ->middleware(['auth', 'verified'])
    ->name('new-post');

Route::get('/post', function () {
    return view('post.show');
})
    ->middleware('auth', 'verified')
    ->name('my-posts');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
