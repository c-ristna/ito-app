<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Penjualan;

class PenjualanController extends Controller
  {
    public function index() //halaman tabel
    {
        $penjualan = DB::table('penjualans')
            ->join('konsumens', 'penjualans.konsumens_id', '=', 'konsumens.id')
            ->select('penjualans.*', 'konsumens.nama_konsumen')
            ->oldest()
            ->paginate(5);
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
      $penjualan = Penjualan::findOrFail($id);
      return view('component/penjualan/edit', compact('penjualan'));
    }

    public function store(Request $request) //buat simpan data
    {
      $listProduk = $request->list_produk;

    // Check if list_produk is an array (multiple selections)
    if (is_array($listProduk)) {
        $encodedProduk = json_encode($listProduk); // Encode to JSON
    } else {
        // If only one product selected, convert it to a single-element array
        $encodedProduk = json_encode([$listProduk]);
    }

        Penjualan::create([
            'kode_penjualan'        => $request->kode_penjualan,
            'tanggal'               => $request->tanggal,
            'list_produk'           => json_encode($request->list_produk), // Encode to JSON
            'total_harga'           => $request->total_harga,
            'metode_pembayaran'     => $request->metode_pembayaran,
            'status'                => $request->status,
            'konsumens_id'          => $request->konsumens_id,
        ]);

      return redirect('penjualan')->with('status', 'Data Penjualan Berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $record = Penjualan::find($id);

        $validatedData = $request->validate([
            'kode_penjualan'        => $request->kode_penjualan,
            'tanggal'               => $request->tanggal,
            'list_produk'           => $request->list_produk,
            'total_harga'           => $request->total_harga,
            'metode_pembayaran'     => $request->metode_pembayaran,
            'status'                => $request->status,
            'konsumens_id'          => $request->konsumens_id,
        ]);
        $validatedData['list_produk'] = json_encode($request->list_produk); // Encode to JSON
        $penjualan = Penjualan::findOrFail($id);
        $penjualan->update($validatedData);

        return redirect('penjualan')->with('status');
    }

    public function destroy($id)
    {
        $penjualan = Penjualan::findOrFail($id);
        $penjualan->delete();

        return redirect('penjualan')->with('status');
    }

    public function detail()
    {
        // Method implementation here
    }
}