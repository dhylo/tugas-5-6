<?php

use App\Http\Controllers\DivisiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/divisi',[DivisiController::class,'index'])->name('divisi.index');
route::get('/divisi/create', [DivisiController::class, 'create'])->name('divisi.create');
route::post('/divisi', [DivisiController::class,'store'])->name('divisi.store');