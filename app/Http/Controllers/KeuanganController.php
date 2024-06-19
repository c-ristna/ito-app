<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Keuangan;

class KeuanganController extends Controller
{
    public function index() //halaman tabel
    {
        $keuangan = Keuangan::all();
        // return $konsumen;
        return view('component/keuangan/dataKeuangan')->with('keuangan', $keuangan);
    }
    public function create() //buat nampilin form nambah datanya
    {
        return view('component/keuangan/create');
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
        ]);
        return redirect('keuangan')->with('status', 'Data Keuangan Berhasil ditambahkan!');
    }
    function detail(){

    }
}
