<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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
