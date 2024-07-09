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
    Route::resource('kendaraans', KendaraanController::class);
    Route::resource('transaksis', TransaksiController::class);
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('jenis', JenisController::class);
    Route::delete('/jenis/{jenis}', [JenisController::class, 'destroy'])->name('jenis.destroy');


    Route::get('/kampus', [KampusController::class, 'index'])->name('kampus.index');
    Route::get('/kampus/create', [KampusController::class, 'create'])->name('kampus.create');
    Route::post('/kampus', [KampusController::class, 'store'])->name('kampus.store');
    Route::get('/kampus/{kampus}', [KampusController::class, 'show'])->name('kampus.show');
    Route::get('/kampus/{kampus}/edit', [KampusController::class, 'edit'])->name('kampus.edit');
    Route::put('/kampus/{kampus}', [KampusController::class, 'update'])->name('kampus.update');
    Route::delete('/kampus/{kampus}', [KampusController::class, 'destroy'])->name('kampus.destroy');

    Route::resource('area_parkirs', AreaParkirController::class);
});


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
