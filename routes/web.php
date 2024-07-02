<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\AreaParkirController;
use App\Http\Controllers\TransaksiController;

use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/jenis', [JenisController::class, 'index'])->name('jenis.index');
Route::get('/jenis/create', [JenisController::class, 'create'])->name('jenis.create');
Route::post('/jenis', [JenisController::class, 'store'])->name('jenis.store');
Route::get('/jenis/{jenis}', [JenisController::class, 'show'])->name('jenis.show');
Route::get('/jenis/{jenis}/edit', [JenisController::class, 'edit'])->name('jenis.edit');
Route::put('/jenis/{jenis}', [JenisController::class, 'update'])->name('jenis.update');
Route::delete('/jenis/{jenis}', [JenisController::class, 'destroy'])->name('jenis.destroy');


Route::get('/kampus', [KampusController::class, 'index'])->name('kampus.index');
Route::get('/kampus/create', [KampusController::class, 'create'])->name('kampus.create');
Route::post('/kampus', [KampusController::class, 'store'])->name('kampus.store');
Route::get('/kampus/{kampus}', [KampusController::class, 'show'])->name('kampus.show');
Route::get('/kampus/{kampus}/edit', [KampusController::class, 'edit'])->name('kampus.edit');
Route::put('/kampus/{kampus}', [KampusController::class, 'update'])->name('kampus.update');
Route::delete('/kampus/{kampus}', [KampusController::class, 'destroy'])->name('kampus.destroy');


Route::get('/kendaraans', [KendaraanController::class, 'index'])->name('kendaraans.index');
Route::get('/kendaraans/create', [KendaraanController::class, 'create'])->name('kendaraans.create');
Route::post('/kendaraans', [KendaraanController::class, 'store'])->name('kendaraans.store');
Route::get('/kendaraans/{kendaraan}', [KendaraanController::class, 'show'])->name('kendaraans.show');
Route::get('/kendaraans/{kendaraan}/edit', [KendaraanController::class, 'edit'])->name('kendaraans.edit');
Route::put('/kendaraans/{kendaraan}', [KendaraanController::class, 'update'])->name('kendaraans.update');
Route::delete('/kendaraans/{kendaraan}', [KendaraanController::class, 'destroy'])->name('kendaraans.destroy');


Route::get('/area-parkirs', [AreaParkirController::class, 'index'])->name('area-parkirs.index');
Route::get('/area-parkirs/create', [AreaParkirController::class, 'create'])->name('area-parkirs.create');
Route::post('/area-parkirs', [AreaParkirController::class, 'store'])->name('area-parkirs.store');
Route::get('/area-parkirs/{areaParkir}', [AreaParkirController::class, 'show'])->name('area-parkirs.show');
Route::get('/area-parkirs/{areaParkir}/edit', [AreaParkirController::class, 'edit'])->name('area-parkirs.edit');
Route::put('/area-parkirs/{areaParkir}', [AreaParkirController::class, 'update'])->name('area-parkirs.update');
Route::delete('/area-parkirs/{areaParkir}', [AreaParkirController::class, 'destroy'])->name('area-parkirs.destroy');



Route::get('/transaksis', [TransaksiController::class, 'index'])->name('transaksis.index');
Route::get('/transaksis/create', [TransaksiController::class, 'create'])->name('transaksis.create');
Route::post('/transaksis', [TransaksiController::class, 'store'])->name('transaksis.store');
Route::get('/transaksis/{transaksi}', [TransaksiController::class, 'show'])->name('transaksis.show');
Route::get('/transaksis/{transaksi}/edit', [TransaksiController::class, 'edit'])->name('transaksis.edit');
Route::put('/transaksis/{transaksi}', [TransaksiController::class, 'update'])->name('transaksis.update');
Route::delete('/transaksis/{transaksi}', [TransaksiController::class, 'destroy'])->name('transaksis.destroy');
