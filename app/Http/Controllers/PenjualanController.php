<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    //
    public function data(){
        $penjualan = DB::table('penjualans')->get();
        return view('component/penjualan/dataPenjualan', ['penjualan' => $penjualan]);
    }
}
