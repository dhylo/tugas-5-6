<?php

use App\Http\Controllers\DivisiController;
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