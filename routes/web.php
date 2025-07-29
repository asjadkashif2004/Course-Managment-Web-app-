<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use App\Models\Course;

// Public Route
Route::get('/', function () {
    return view('welcome');
});

// Dashboard Route (Authenticated)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        $courses = Course::all(); // Fetch all courses for dashboard
        return view('dashboard', compact('courses'));
    })->name('dashboard');

    // Course CRUD Routes
    Route::resource('courses', CourseController::class);

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
