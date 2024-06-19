<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Penjualan;

class PenjualanController extends Controller
{
    public function index() //halaman tabel
    {
        $penjualan = Penjualan::all();
        return view('component/penjualan/dataPenjualan')->with('penjualan', $penjualan);
    }
    public function create() //buat nampilin form nambah datanya
    {
        return view('component/penjualan/create');
    }

    public function show($id)
    {
   //
    }
    public function edit($id)
    {
        $penjualan = Penjualan::findorfail($id);
        return view('component/penjualan/edit', compact('penjualan'));
    }
    public function store(Request $request) //buat simpan data
    {
      Penjualan::create([
        'kode_penjualan'        => $request->kode_penjualan,
        'tanggal_penjualan'     => $request->tanggal_penjualan,
        'list_produk'           => $request->list_produk,
        'total_harga'           => $request->total_harga,
        'metode_pembayaran'     => $request->metode_pembayaran,
        'status_penjualan'      => $request->status_penjualan,
      ]);
      return redirect('penjualan')->with('status', 'Data Penjualan Berhasil ditambahkan!');
      }

      public function update(Request $request, $id)
      {
          $record = Penjualan::find($id);
      
          $validatedData = $request->validate([
            'kode_penjualan'        => $request->kode_penjualan, 
            'tanggal_penjualan'     => $request->tanggal_penjualan,
            'list_produk'           => $request->list_produk,
            'total_harga'           => $request->total_harga,
            'metode_pembayaran'     => $request->metode_pembayaran,
            'status_penjualan'      => $request->status_penjualan,
          ]);
      
          $record->fill($validatedData);
          $record->save();
      
          return redirect('penjualan')->with('status', 'Data Penjualan Berhasil diperbarui!');
      }    
      function detail(){

    }
}
