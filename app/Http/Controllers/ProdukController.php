<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Produk;

class ProdukController extends Controller
{
    //
    public function index() //halaman tabel
    {
        $produk = Produk::all();
        return view('component/produk/dataProduk')->with('produk', $produk);
    }
    public function create() //buat nampilin form nambah datanya
    {
        return view('component/produk/create');
    }

    public function show($id)
    {
   //
    }
    public function edit($id)
    {
        $produk = Produk::all();
        return view('component/produk/edit')->with('produk', $produk);
    }

    public function destroy($id, Request $request)
    {
        //
    }
    public function store(Request $request) //buat simpan data
    {
        Produk::create([
            'kode_produk'        => $request->kode_produk,
            'nama_produk'        => $request->nama_produk,
            'harga'              => $request->harga,
            'stok'               => $request->stok,
            'deskripsi'          => $request->deskripsi,
            'status'             => $request->status,
        ]);
        return redirect('produk')->with('status', 'Data Produk Berhasil ditambahkan!');
    }
    function detail(){

    }
}
