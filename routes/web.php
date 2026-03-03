<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LanguageController as AdminLanguageController;
use App\Http\Controllers\Admin\LessonController as AdminLessonController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome'); // ganti dari welcome ke landing
})->name('landing');

/*
|--------------------------------------------------------------------------
| Authenticated User Routes
|--------------------------------------------------------------------------
*/

// Route::middleware(['auth', 'verified'])->group(function () {

//     // List semua bahasa (card Python, Java, C)
//     Route::get('/languages', [LanguageController::class, 'index'])
//         ->name('languages.index');

//     // Detail bahasa (misalnya: /languages/java)
//     Route::get('/languages/{slug}', [LanguageController::class, 'show'])
//         ->name('languages.show');

//     // Detail lesson
//     Route::get('/lessons/{lesson}', [LessonController::class, 'show'])
//         ->name('lessons.show');

//     // Halaman latihan / mini project
//     Route::get('/lessons/{lesson}/exercise', [ExerciseController::class, 'show'])
//         ->name('lessons.exercise');

//     // Submit code
//     Route::post('/lessons/{lesson}/exercise', [ExerciseController::class, 'submit'])
//         ->name('lessons.exercise.submit');

//     /*
//     |--------------------------------------------------------------------------
//     | Profile (Breeze Default)
//     |--------------------------------------------------------------------------
//     */

//     Route::get('/profile', [ProfileController::class, 'edit'])
//         ->name('profile.edit');

//     Route::patch('/profile', [ProfileController::class, 'update'])
//         ->name('profile.update');

//     Route::delete('/profile', [ProfileController::class, 'destroy'])
//         ->name('profile.destroy');
// });


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

// Route::prefix('admin')
//     ->name('admin.')
//     ->middleware(['auth', 'is_admin']) // bikin middleware sendiri
//     ->group(function () {

//         Route::get('/dashboard', [DashboardController::class, 'index'])
//             ->name('dashboard');

//         // CRUD Language
//         Route::resource('languages', AdminLanguageController::class);

//         // CRUD Lesson
//         Route::resource('lessons', AdminLessonController::class);
// });


require __DIR__.'/auth.php';