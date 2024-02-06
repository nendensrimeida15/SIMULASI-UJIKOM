<?php

use App\Http\Controllers\PeminjamanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BukuController;
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
Route::get('/data-buku', [BukuController::class, 'index'])->name('data-buku');
Route::get('/create', [BukuController::class, 'create'])->name('create');
Route::post('/store', [BukuController::class, 'store'])->name('store');
Route::get('edit/{id}', [BukuController::class, 'edit'])->name('edit');
Route::put('update/{id}', [BukuController::class, 'update'])->name('update');
Route::get('delete/{id}', [BukuController::class, 'destroy'])->name('delete');

// Route Peminjaman
Route::get('peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman');
Route::get('create-peminjaman', [PeminjamanController::class, 'create'])->name('create-peminjaman');

// Route Pengguna
Route::get('/data-pengguna', [PenggunaController::class, 'index'])->name('data-pengguna');
Route::get('/create-pengguna', [PenggunaController::class, 'create'])->name('create-pengguna');
Route::post('/store-pengguna', [PenggunaController::class, 'store'])->name('store-pengguna');
Route::get('/delete-pengguna/{id}', [PenggunaController::class, 'destroy'])->name('delete-pengguna');
Route::get('/login/register',[SessionController::class,'register']);