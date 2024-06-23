<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Konsumen;
use App\Models\Admin;
use App\Models\Keuangan;

class DashboardController extends Controller
{
    public function index()
    {   
        // $totalKonsumen = Konsumen::count();
        // $totalPenjualan = Penjualan::count();
        // $totalAdmin = Admin::count();
        // $totalPendapatan = Keuangan::sum('jumlah');
        // return view('dashboard', compact('totalKonsumen', 'totalPenjualan', 'totalAdmin'));
    }
    function detail(){

    }
}
