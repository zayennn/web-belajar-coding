<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function (Illuminate\Http\Request $request) {
    // Proses login
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);
    
    // Redirect ke dashboard setelah login sukses
    return redirect('/dashboard');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', function (Illuminate\Http\Request $request) {
    // Proses registrasi
    $data = $request->validate([
        'name' => 'required|min:3|max:50',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|confirmed'
    ]);
    
    // Redirect ke login dengan pesan sukses
    return redirect('/login')->with('success', 'Registrasi berhasil! Silakan login.');
})->name('register');