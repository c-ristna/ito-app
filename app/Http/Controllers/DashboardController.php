<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Konsumen;
use App\Models\Admin;
use App\Models\Keuangan;

class DashboardController extends Controller
{
    public function index() //halaman tabel
    {
        // $penjualan = DB::table('penjualans')
        //     ->join('konsumens', 'penjualans.konsumens_id', '=', 'konsumens.id')
        //     ->select('penjualans.*', 'konsumens.nama_konsumen')
        //     ->oldest()
        //     ->paginate(5);
        // return view('component/penjualan/dataPenjualan')->with('penjualan', $penjualan);
    }

    function detail(){

    }
}



