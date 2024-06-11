<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\AdminController;


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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/', function () {
//     return view('welcome');
// })->middleware('auth');

// Login
// Route::get('/login', [AuthController::class, 'index'])->name('login');
// Route::post('post-login', [AuthController::class, 'postLogin']);

// // Logout
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('home', function (){
    return view ('home');
});
Route::get('/konsumen', [KonsumenController::class, 'index'])->name('konsumen');
Route::get('/keuangan', [KeuanganController::class, 'index']);
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/penjualan', [PenjualanController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);
