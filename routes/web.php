<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return redirect('/form');
});

Route::get('/form', [FormController::class, 'index'])->name('form.index');
Route::post('/form', [FormController::class, 'store'])->name('form.store');
Route::get('/table', [FormController::class, 'table'])->name('form.table');
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');


// Halaman utama
Route::get('/', function () {
    return view('home');
});

// Halaman About
Route::get('/about', function () {
    return view('about');
});



// Halaman Login
Route::get('/login', function () {
    return view('login');
});
