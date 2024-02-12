<?php

use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\UlasanBukuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataBukuController;
use App\Http\Controllers\PenggunaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route Buku
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/data-buku', [DataBukuController::class, 'index'])->name('data-buku');
Route::get('/create-data-buku', [DataBukuController::class, 'create'])->name('create-data-buku');
Route::post('/store-data-buku', [DataBukuController::class, 'store'])->name('store-data-buku');
Route::get('/edit-data-buku/{id}', [DataBukuController::class, 'edit'])->name('edit-data-buku');
Route::put('/update-data-buku/{id}', [DataBukuController::class, 'update'])->name('update-data-buku');
Route::get('/delete-data-buku/{id}', [DataBukuController::class, 'destroy'])->name('delete-data-buku');


// Route Peminjaman
Route::get('peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman');
Route::get('create-peminjaman', [PeminjamanController::class, 'create'])->name('create-peminjaman');
Route::post('store-peminjaman', [PeminjamanController::class, 'store'])->name('store-peminjaman');
Route::get('edit-peminjaman/{id}', [PeminjamanController::class, 'edit'])->name('edit-peminjaman');
Route::put('update-peminjaman/{id}', [PeminjamanController::class, 'update'])->name('update-peminjaman');
Route::get('delete-peminjaman/{id}', [PeminjamanController::class, 'destroy'])->name('delete-peminjaman');

// Route Ulasan Buku
Route::get('/ulasan-buku', [UlasanBukuController::class, 'index'])->name('ulasan-buku');
Route::get('/create-ulasan-buku', [UlasanBukuController::class, 'create'])->name('create-ulasan-buku');
Route::post('/store-ulasan-buku', [UlasanBukuController::class, 'store'])->name('store-ulasan-buku');
Route::get('/edit-ulasan-buku/{id}', [UlasanBukuController::class, 'edit'])->name('edit-ulasan-buku');
Route::put('/update-ulasan-buku/{id}', [UlasanBukuController::class, 'update'])->name('update-ulasan-buku');
Route::get('/delete-ulasan-buku/{id}', [UlasanBukuController::class, 'destroy'])->name('delete-ulasan-buku');


// Route Pengguna
Route::get('/data-pengguna', [PenggunaController::class, 'index'])->name('data-pengguna');
Route::get('/create-pengguna', [PenggunaController::class, 'create'])->name('create-pengguna');
Route::post('/store-pengguna', [PenggunaController::class, 'store'])->name('store-pengguna');
Route::get('/edit-pengguna/{id}', [PenggunaController::class, 'edit'])->name('edit-pengguna');
Route::put('/update-pengguna/{id}', [PenggunaController::class, 'update'])->name('update-pengguna');
Route::get('/delete-pengguna/{id}', [PenggunaController::class, 'destroy'])->name('delete-pengguna');
