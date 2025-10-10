<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//(1) or put it here

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//My routes
Route::get('/contact', function () {
    return view('contact');
});

//(urli, [controller] (to make one: php artisan make:controller)
Route::get('/about/{name}', /*(1)*/ [\App\Http\Controllers\AboutController::class, 'index'])->name('about');

/*
 * Route::get('/about/{name}', function ($myCat) {
//    $myCat = "Dickens";
    return view('about', compact(var_name: 'myCat'));
})->name('about');*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
