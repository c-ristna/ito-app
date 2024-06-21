<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Keuangan;
use App\Models\Penjualan;

class KeuanganController extends Controller
{
    public function index() //halaman tabel
    {
        $keuangan = DB::table('keuangans')
            ->join('penjualans', 'keuangans.penjualans_id', '=', 'penjualans.id')
            ->select('keuangans.*', 'penjualans.total_harga')
            ->latest()
            ->paginate(5);
        return view('component/keuangan/dataKeuangan')->with('keuangan', $keuangan);
    }
    public function create() // Display form to add new keuangan data
    {
        $penjualans = Penjualan::all(); // Retrieve all penjualans
        return view('component/keuangan/create', compact('penjualans'));
}
    public function show($id)
    {
   //
    }
    public function edit($id)
    {
        $keuangan = Keuangan::all();
        return view('component/keuangan/edit')->with('keuangan', $keuangan);
    }

    public function destroy($id, Request $request)
    {
        //
    }
    public function store(Request $request) //buat simpan data
    {
        Keuangan::create([
            'tanggal'            => $request->tanggal,
            'kode_keuangan'      => $request->kode_keuangan,
            'pemasukan'          => $request->pemasukan,
            'pengeluaran'        => $request->pengeluaran,
            'saldo'              => $request->saldo,
            'penjualans_id'      => $request->penjualans_id,
        ]);
        return redirect('keuangan')->with('status', 'Data Keuangan Berhasil ditambahkan!');
    }
    function detail(){

    }
}

