<?php

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

// // 127.0.0.1:8000/ ===> view welcome
// Route::get('/siswa', function () {
//     return "<h1>SAYA SISWA</h1>";
// });

// // 127.0.0.1:8000/1 ===> <h1>SAYA SISWA DENGAN 10 1</hi>
// Route::get('/siswa/{id}', function ($id) {
//     return "<h1>SAYA SISWA DENGAN ID $id</h1>";
// })->where('id','[0-9]+');

// Route::get('/siswa/{id}/{nama}', function ($id,$nama) {
//     return "<h1>SAYA SISWA DENGAN ID $id & NAMA $nama</h1>";
// })->where(['id'=>'[0-9]+', 'nama' => '[A-Za-z]+']);

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/data-buku', [BukuController::class, 'index'])->name('data-buku');
Route::get('/create',[BukuController::class, 'create'])->name('crate');
Route::post('/store',[BukuController::class, 'store'])->name('store');
Route::get('/data-pengguna', [PenggunaController::class, 'index'])->name('data-pengguna');