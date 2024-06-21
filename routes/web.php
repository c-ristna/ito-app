<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;


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

Route::get('dashboard', function () {
    return view ('dashboard');
});
// Route::get('home', function () {
//     return view ('home');
// });
Route::resource('/login', LoginController::class);
Route::resource('/logout', LoginController::class);

Route::resource('/konsumen', KonsumenController::class);
//Route::get('/konsumen/edit/{id}', [KonsumenController::class, 'edit'])->name('konsumen.edit');
//Route::post('/konsumen/update/{id}', [KonsumenController::class, 'update'])->name('konsumen.update');

Route::resource('/keuangan', KeuanganController::class);
Route::resource('/produk', ProdukController::class);
Route::resource('/penjualan', PenjualanController::class);
Route::resource('/admin', AdminController::class);
