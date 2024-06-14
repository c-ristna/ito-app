<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Konsumen;

class KonsumenController extends Controller
{
    //
    public function index() //halaman tabel
    {
        $konsumen = Konsumen::all();
        // return $konsumen;
        return view('component/konsumen/dataKonsumen')->with('konsumen', $konsumen);
    }
    public function create() //buat nampilin form nambah datanya
    {
        return view('component/konsumen/create');
    }

    public function edit(){

    }

    public function destroy($id, Request $request){

    }
    public function store(Request $request) //buat simpan data
    {
        Konsumen::create([
            'nama_konsumen'         => $request->nama_konsumen,
            'alamat'                => $request->alamat,
            'no_telepon'            => $request->no_telepon,
            'terakhir_pembelian'    => $request->terakhir_pembelian,
        ]);
        return redirect('konsumen')->with('status', 'Data Konsumen Berhasil ditambahkan!');
    }
    function detail(){

    }
}
