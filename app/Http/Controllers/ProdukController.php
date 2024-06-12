<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    //
     //public function data(){
         //$produk = DB::table('produks')->get();
         //return view('component/produk/dataProduk', ['produk' => $produk]);
     //}

    public function index() //halaman tabel
    {
        $produk = Produk::all();
        return view('component/produk/dataProduk')->with('produk', $produk);
    }
    public function create() //buat nampilin form nambah datanya
    {
        return view('component/produk/add');
    }

    public function edit(){
    }

    public function destroy($id, Request $request){

    }
    public function store(Request $request) //buat simpan data
    {
        Produk::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
            'status_produk' => $request->status_produk,
        ]);
            return redirect('produk')->with('status', 'Data Produk Berhasil ditambahkan!');
    }
    function detail(){

    }
}
