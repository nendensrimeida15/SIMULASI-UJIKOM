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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('login', [SessionController::class, 'login']);


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/data-buku', [BukuController::class, 'index'])->name('data-buku');
Route::get('/create', [BukuController::class, 'create'])->name('create');
Route::post('/store', [BukuController::class, 'store'])->name('store');


Route::get('/data-pengguna', [PenggunaController::class, 'index'])->name('data-pengguna');

Route::get('/sesi',[SessionController::class, 'index'])->name('login');
Route::post('/sesi/login', [SessionController::class, 'login'])->name('auth');
Route::get('/sesi/logout',[SessionController::class, 'logout'])->name('logout');
Route::get('/sesi/register',[SessionController::class, 'register'])->name('register');
Route::post('/sesi/create',[SessionController::class, 'create'])->name('create');


