<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JenisController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/jenis', [JenisController::class, 'index'])->name('jenis.index');
Route::get('/jenis/create', [JenisController::class, 'create'])->name('jenis.create');
Route::post('/jenis', [JenisController::class, 'store'])->name('jenis.store');
Route::get('/jenis/{jenis}', [JenisController::class, 'show'])->name('jenis.show');
Route::get('/jenis/{jenis}/edit', [JenisController::class, 'edit'])->name('jenis.edit');
Route::put('/jenis/{jenis}', [JenisController::class, 'update'])->name('jenis.update');
Route::delete('/jenis/{jenis}', [JenisController::class, 'destroy'])->name('jenis.destroy');
