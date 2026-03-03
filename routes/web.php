<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/bahasa-pemrogramman', function () {
    return view('bahasa');
})->name('bahasa-pemrogramman');

Route::get('/roadmap/java', function () {
    return view('roadmap-java');
})->name('bahasa-pemrogramman');

Route::get('/roadmap/java/materi', function () {
    return view('materi-java-program-pertama');
})->name('materi');