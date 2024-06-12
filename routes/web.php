<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\AdminController;
//use App\Http\Controllers\HomeController;

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

//Route::get('/produk', function () {
//});



// Route::get('/', function () {
//     return view('welcome');
// })->middleware('auth');

// Login
// Route::get('/login', [AuthController::class, 'index'])->name('login');
// Route::post('post-login', [AuthController::class, 'postLogin']);

// // Logout
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('dashboard', function () {
    return view ('dashboard');
});
Route::get('home', function () {
    return view ('home');
});

//Route::get('homecontroller', 'HomeController@data');
Route::get('/login', [AdminController::class, 'login']);
Route::post('/login', [AdminController::class, 'loginStore'])->name('loginStore');
Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
//Route::get('login', 'LoginController@data');


Route::resource('/konsumen', KonsumenController::class);


Route::resource('/keuangan', KeuanganController::class);
Route::resource('/produk', ProdukController::class);
Route::resource('/penjualan', PenjualanController::class);
Route::resource('/admin', AdminController::class);
