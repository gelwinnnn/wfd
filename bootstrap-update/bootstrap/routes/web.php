<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\pengaturanController;
use App\Http\Controllers\PenggajianController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GajiController;

//login
Route::get('/', [LoginController::class, 'login_page'])->name('login');
Route::post('/', [LoginController::class, 'login'])->name('login.submit');

//signup
Route::get('/signup', [SignupController::class, 'signup_page']);
Route::post('/signup', [SignupController::class, 'signup']);

Route::get('/logout', [LoginController::class, "logout"]);

// Hanya admin
Route::middleware([])->group(function () {
    Route::get('/dashboard', [dashboardController::class, "dashboard"])->middleware('auth');

    //penggajian
    Route::get('/penggajian', [PenggajianController::class, "penggajian_page"])->middleware('auth');
    Route::get('/penggajian/tambah', [PenggajianController::class, "penggajian_tambah_page"])->middleware('auth');
    Route::post('/penggajian/tambah', [PenggajianController::class, "penggajian_tambah"])->middleware('auth');
    Route::get('/penggajian/edit/{id}', [PenggajianController::class, "penggajian_edit_page"])->middleware('auth');
    Route::post('/penggajian/edit/{id}', [PenggajianController::class, "penggajian_edit"])->middleware('auth');
    Route::get('/penggajian/delete/{id}', [PenggajianController::class, "penggajian_delete"])->middleware('auth');
// Route untuk menampilkan halaman bayar gaji (GET)
Route::get('/bayarGaji/{id}', [GajiController::class, 'bayarGajiPage'])->name('bayarGaji.page')->middleware('auth');

// Route untuk memproses pembayaran gaji (POST)
Route::post('/bayarGaji/{id}', [GajiController::class, 'prosesBayar'])->name('bayarGaji.proses')->middleware('auth');

    Route::get('/penggajian', [PenggajianController::class, 'penggajian_page'])->name('penggajian')->middleware('auth');
    
    


    //kehadiran
    Route::get('/kehadiran', [PenggajianController::class, "kehadiran_page"])->middleware('auth');

    Route::get("/pesanan", [PenjualanController::class, "pesanan_page"])->middleware('auth');
    Route::get("/pesanan/{id}", [PenjualanController::class, "pesanan_edit"])->middleware('auth');
    Route::get("/kas-masuk", [PenjualanController::class, "kasmasuk_page"])->middleware('auth');

    Route::get('/stok', [PembelianController::class, "stok_page"])->middleware('auth');
    Route::get('/pembelian', [PembelianController::class, "pembelian_page"])->middleware('auth');
    Route::get('/kas-keluar', [PembelianController::class, "kaskeluar_page"])->middleware('auth');
    Route::get('/laporan', [LaporanController::class, "laporan_page"])->middleware('auth');
    
    Route::get('/pengaturan', [pengaturanController::class, "pengaturan"])->middleware('auth');
});