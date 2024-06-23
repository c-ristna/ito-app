<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Produk;

class ProdukController extends Controller
{
    //
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        \Log::info('Search keyword: ' . $keyword);
        $produk = Produk::when($keyword, function ($query, $keyword) {
            return $query->where('nama_produk', 'LIKE', "%{$keyword}%");
        })->get();

        return view('component/produk/dataProduk', compact('produk', 'keyword'));
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
        $produk = Produk::find($id);
        return view('component/produk/edit', compact('produk'));
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

    // Memperbarui data produk
    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);

        $validatedData = $request->validate([
            'kode_produk' => 'required',
            'nama_produk' => 'required',
            'harga'       => 'required',
            'stok'        => 'required',
            'deskripsi'   => 'required',
            'status'      => 'required'
        ]);

        $produk->update($validatedData);
        return redirect('produk');
    }

    public function destroy($id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        return redirect('produk')->with('success');
    }

    function detail(){

    }
}

