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
        // return $konsumen;
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
        'kode_penjualan'         => $request->kode_konsumen,
        'nama_konsumen'         => $request->nama_konsumen,
        'alamat'                => $request->alamat,
        'no_telepon'            => $request->no_telepon,
        'terakhir_pembelian'    => $request->terakhir_pembelian,
      ]);
      return redirect('penjualan')->with('status', 'Data Penjualan Berhasil ditambahkan!');
      }

      public function update(Request $request, $id)
      {
          $record = Penjualan::find($id);
      
          $validatedData = $request->validate([
            'kode_penjualan'         => $request->kode_penjualan, 
            'nama_penjualan'         => $request->nama_penjualan,
            'alamat'                => $request->alamat,
            'no_telepon'            => $request->no_telepon,
            'terakhir_pembelian'    => $request->terakhir_pembelian,
          ]);
      
          $record->fill($validatedData);
          $record->save();
      
          return redirect('penjualan')->with('status', 'Data Penjualan Berhasil diperbarui!');
      }    
      function detail(){

    }
}
