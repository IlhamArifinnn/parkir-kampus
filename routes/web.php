<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\AreaParkirController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LandingPageController::class, 'index'])->name('index');
Route::get('/about', [LandingPageController::class, 'about'])->name('about');
Route::get('/contact', [LandingPageController::class, 'contact'])->name('contact');
Route::get('/parkir-locations', [LandingPageController::class, 'parkir_locations'])->name('parkir-locations');
Route::get('/parkir-services', [LandingPageController::class, 'parkir_services'])->name('parkir-services');
Route::get('/dashboard', [HomeController::class, 'index'])->name('home');




Route::middleware(['auth'])->group(function () {
    
    Route::get('/kendaraans', [KendaraanController::class, 'index'])->name('kendaraans.index');
    Route::get('/kendaraans/create', [KendaraanController::class, 'create'])->name('kendaraans.create');
    Route::post('/kendaraans', [KendaraanController::class, 'store'])->name('kendaraans.store');
    Route::get('/kendaraans/{kendaraan}', [KendaraanController::class, 'show'])->name('kendaraans.show');
    Route::get('/kendaraans/{kendaraan}/edit', [KendaraanController::class, 'edit'])->name('kendaraans.edit');
    Route::put('/kendaraans/{kendaraan}', [KendaraanController::class, 'update'])->name('kendaraans.update');
    Route::delete('/kendaraans/{kendaraan}', [KendaraanController::class, 'destroy'])->name('kendaraans.destroy');


    Route::get('/transaksis', [TransaksiController::class, 'index'])->name('transaksis.index');
    Route::get('/transaksis/create', [TransaksiController::class, 'create'])->name('transaksis.create');
    Route::post('/transaksis', [TransaksiController::class, 'store'])->name('transaksis.store');
    Route::get('/transaksis/{transaksi}', [TransaksiController::class, 'show'])->name('transaksis.show');
    Route::get('/transaksis/{transaksi}/edit', [TransaksiController::class, 'edit'])->name('transaksis.edit');
    Route::put('/transaksis/{transaksi}', [TransaksiController::class, 'update'])->name('transaksis.update');
    Route::delete('/transaksis/{transaksi}', [TransaksiController::class, 'destroy'])->name('transaksis.destroy');


});





// Rute untuk admin yang sudah terautentikasi
Route::middleware(['auth', 'admin'])->group(function () {
    
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


    Route::get('/area_parkirs', [AreaParkirController::class, 'index'])->name('area_parkirs.index');
    Route::get('/area_parkirs/create', [AreaParkirController::class, 'create'])->name('area_parkirs.create');
    Route::post('/area_parkirs', [AreaParkirController::class, 'store'])->name('area_parkirs.store');
    Route::get('/area_parkirs/{areaParkir}', [AreaParkirController::class, 'show'])->name('area_parkirs.show');
    Route::get('/area_parkirs/{areaParkir}/edit', [AreaParkirController::class, 'edit'])->name('area_parkirs.edit');
    Route::put('/area_parkirs/{areaParkir}', [AreaParkirController::class, 'update'])->name('area_parkirs.update');
    Route::delete('/area_parkirs/{areaParkir}', [AreaParkirController::class, 'destroy'])->name('area_parkirs.destroy');



    Route::get('/transaksis', [TransaksiController::class, 'index'])->name('transaksis.index');
    Route::get('/transaksis/create', [TransaksiController::class, 'create'])->name('transaksis.create');
    Route::post('/transaksis', [TransaksiController::class, 'store'])->name('transaksis.store');
    Route::get('/transaksis/{transaksi}', [TransaksiController::class, 'show'])->name('transaksis.show');
    Route::get('/transaksis/{transaksi}/edit', [TransaksiController::class, 'edit'])->name('transaksis.edit');
    Route::put('/transaksis/{transaksi}', [TransaksiController::class, 'update'])->name('transaksis.update');
    Route::delete('/transaksis/{transaksi}', [TransaksiController::class, 'destroy'])->name('transaksis.destroy');


});




Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('registrasi.index');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

