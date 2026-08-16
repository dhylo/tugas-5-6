<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DivisiController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// READ
Route::get('/divisi',[DivisiController::class,'index'])->name('divisi.index');

// CREATE
Route::get('/divisi/create', [DivisiController::class, 'create'])->name('divisi.create'); 
Route::post('/divisi', [DivisiController::class,'store'])->name('divisi.store');

// UPDATE
Route::get('/divisi/{divisi}/edit', [DivisiController::class, 'edit'])->name('divisi.edit');
Route::put('/divisi/{divisi}', [DivisiController::class, 'update'])->name('divisi.update');

// DELETE
Route::delete('/divisi/{divisi}',[DivisiController::class, 'destroy'])->name('divisi.destroy');

// REGISTER
// 1. Menampilkan Halaman Register
Route::get('/register', [AuthController::class, 'register'])->name('register');

// 2. Proses Register
Route::post('/register', [AuthController::class, 'prosesregister'])->name('proses.register');

// LOGIN
// 3. Menampilkan Halaman Login
Route::get('/login', [AuthController::class, 'login'])->name('login');

// 4. Proses Login
Route::post('/login', [AuthController::class, 'proseslogin'])->name('proses.login');

// LOGOUT
// Proses Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');