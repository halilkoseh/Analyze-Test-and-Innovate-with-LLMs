<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {
    return view('login'); // Ana sayfa
})->name('welcome');

Route::get('/signup', function () {
    return view('signup'); // Kayıt formu
})->name('signup');

Route::post('/signup', [RegisterController::class, 'register'])->name('register');






Route::get('/login', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }
    return view('login');
})->name('login');

Route::post('/dashboard', [LoginController::class, 'login'])->name('login.submit');










Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


});




Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');

use App\Http\Controllers\CodeController;

Route::post('/compile-code', [CodeController::class, 'compile']);
