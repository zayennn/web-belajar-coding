<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', fn() => view('auth.login'))->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', fn() => view('auth.register'))->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/bahasa-pemrogramman', function () {
    return view('bahasa');
})->name('bahasa-pemrogramman');

Route::get('/roadmap/java', function () {
    return view('roadmap');
})->name('roadmap');

Route::get('/roadmap/java/materi', function () {
    return view('materi');
})->name('materi');