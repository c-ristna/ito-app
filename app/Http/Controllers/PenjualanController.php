<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Penjualan;
use App\Models\Konsumen;

class PenjualanController extends Controller
{
    public function index(Request $request) //halaman tabel
    {
        $keyword = $request->get('search');
        \Log::info('Search keyword: ' . $keyword);

        $penjualan = DB::table('penjualans')
            ->join('konsumens', 'penjualans.konsumens_id', '=', 'konsumens.id')
            ->select('penjualans.*', 'konsumens.nama_konsumen')
            ->when($keyword, function ($query) use ($keyword) {
                return $query->where('kode_penjualan', 'LIKE', "%{$keyword}%");
            })
            ->oldest()
            ->paginate();

        return view('component/penjualan/dataPenjualan', compact('penjualan', 'keyword'));
    }

    public function create() // Display form to add new penjualan data
    {
        $konsumens = Konsumen::all(); // Retrieve all konsumens
        return view('component/penjualan/create', compact('konsumens'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $penjualan = Penjualan::findOrFail($id); // Retrieve single instance
        $konsumens = Konsumen::all(); // Retrieve all konsumens for the dropdown
        return view('component/penjualan/edit', compact('penjualan', 'konsumens'));
    }

    public function update(Request $request, $id)
    {
        $penjualan = Penjualan::findOrFail($id);

        $penjualan->update([
            'kode_penjualan'    => $request->kode_penjualan,
            'tanggal'           => $request->tanggal,
            'list_produk'       => $request->list_produk,
            'total_harga'       => $request->total_harga,
            'metode_pembayaran' => $request->metode_pembayaran,
            'status'            => $request->status,
            'konsumens_id'      => $request->konsumens_id,
        ]);

        return redirect('penjualan')->with('status', 'Data penjualan berhasil diperbarui.');
    }

    public function store(Request $request) //buat simpan data
    {
        // Memastikan bahwa konsumens_id ada di database sebelum menciptakan data penjualan
        $konsumen = Konsumen::find($request->konsumens_id);
        if (!$konsumen) {
            return redirect('penjualan')->withErrors(['konsumens_id' => 'ID Konsumen tidak valid.']);
        }

        Penjualan::create([
            'tanggal'           => $request->tanggal,
            'kode_penjualan'    => $request->kode_penjualan,
            'list_produk'       => $request->list_produk,
            'total_harga'       => $request->total_harga,
            'metode_pembayaran' => $request->metode_pembayaran,
            'status'            => $request->status,
            'konsumens_id'      => $request->konsumens_id,
        ]);
        return redirect('penjualan')->with('status', 'Data penjualan berhasil disimpan.');
    }

    public function destroy($id, Request $request)
    {
        $penjualan = Penjualan::findOrFail($id);
        $penjualan->delete();

        return redirect('penjualan')->with('status', 'Data penjualan berhasil dihapus.');
    }

    function detail()
    {
        //
    }
}
