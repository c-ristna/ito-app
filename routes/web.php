<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

use App\Models\Konsumen;
use App\Models\Admin;
use App\Models\Keuangan;
use App\Models\Penjualan;

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
    //Menampilkan jumlah data yang terhubung dengan tabel-tabel
    $total_konsumen = Konsumen::count();
    $total_penjualan = Penjualan::count();
    $total_admin = Admin::count();
    // $jumlahPendapatan = Keuangan::sum('jumlahPendapatan');

    //Menampilkan Customer Terbaru
    $konsumen = Konsumen::orderBy('created_at', 'desc')->take(7)->get();

    //Menampilkan Pesanan Terkini yang terhubung dengan tabel penjualan
    $penjualan = Penjualan::orderBy('created_at', 'desc')->take(7)->get();
    
    return view('dashboard', compact('total_konsumen', 'total_penjualan', 'total_admin', 'konsumen', 'penjualan'));
});

Route::get('dashboard', function () {
    //Menampilkan jumlah data yang terhubung dengan tabel-tabel
    $total_konsumen = Konsumen::count();
    $total_penjualan = Penjualan::count();
    $total_admin = Admin::count();
    // $jumlahPendapatan = Keuangan::sum('jumlahPendapatan');

    //Menampilkan Customer Terbaru
    $konsumen = Konsumen::orderBy('created_at', 'desc')->take(7)->get();

    //Menampilkan Pesanan Terkini yang terhubung dengan tabel penjualan
    $penjualan = Penjualan::orderBy('created_at', 'desc')->take(7)->get();
    
    return view('dashboard', compact('total_konsumen', 'total_penjualan', 'total_admin', 'konsumen', 'penjualan'));
});

// Route::get('home', function () {
//     return view ('home');
// });

Route::resource('/login', LoginController::class);
Route::resource('/logout', LoginController::class);

Route::resource('/konsumen', KonsumenController::class);
// Route get => konsumen => index
// Route get => konsumen/create => create
// Route post => konsumen => store
// Route get => konsumen/{id} => show
// Route put/patch => konsumen/{id} => update
// Route delete => konsumen/{id} => delete
// Route get => konsumen/{id}/edit => edit

Route::resource('/keuangan', KeuanganController::class);
Route::resource('/produk', ProdukController::class);
Route::resource('/penjualan', PenjualanController::class);

Route::resource('/admin', AdminController::class);
// Route get => admin => index
// Route get => admin/create => create
// Route post => admin => store
// Route get => admin/{id} => show
// Route put/patch => admin/{id} => update
// Route delete => admin/{id} => delete
// Route get => admin/{id}/edit => edit

