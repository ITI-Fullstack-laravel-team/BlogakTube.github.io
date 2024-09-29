<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserController;



Route::get('/', function () {
    return view('register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Profile Route Routes 
// --------------------

// Route for displaying the user's profile
Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');

// Route for editing the user's profile
Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');

// Route for updating the profile (POST method for form submission)
Route::post('/profile/{id}/edit', [ProfileController::class, 'update'])->name('profile.update');

// route that accepts the PUT method:
Route::put('/profile/{id}/edit', [ProfileController::class, 'update'])->name('profile.update');




require __DIR__.'/auth.php';

// post controller
Route::get('/post', [PostController::class, 'index'])->name('post.index');

    Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/post/store', [PostController::class, 'store'])->name('post.store');

Route::get('/post/details/{id}', [PostController::class, 'showPostPage'])->name('post.showPostPage');
Route::get('/post/delete/{id}', [postController::class, 'delete']);
Route::put('/post/update/{id}', [postController::class, 'update']);
Route::get('/post/edit/{id}', [postController::class, 'edit']);

