<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Keuangan;
use App\Models\Penjualan;

class KeuanganController extends Controller
{
    public function index(Request $request) //halaman tabel
    {
        $keuangan = DB::table('keuangans')
            ->join('penjualans', 'keuangans.penjualans_id', '=', 'penjualans.id')
            ->select('keuangans.*', 'penjualans.total_harga')
            ->oldest()
            ->paginate();

        $keyword = $request->get('search');
            \Log::info('Search keyword: ' . $keyword);
            $keuangan = Keuangan::when($keyword, function ($query, $keyword) {
                return $query->where('kode_keuangan', 'LIKE', "%{$keyword}%");
            })->get();
        
            return view('component/keuangan/dataKeuangan', compact('keuangan', 'keyword'));
    }
    public function create() // Display form to add new keuangan data
    {
        $penjualans = Penjualan::all(); // Retrieve all penjualans
        return view('component/keuangan/create', compact('penjualans'));
    }

    public function store(Request $request) //buat simpan data
    {
        // Validasi input
        $request->validate([
            'tanggal' => 'required|date',
            'kode_keuangan' => 'required|string|max:255',
            'pemasukan' => 'required|numeric',
            'pengeluaran' => 'required|numeric',
            'saldo' => 'required|numeric',
            'penjualans_id' => 'required|exists:penjualans,id',
        ]);

        // Memastikan bahwa penjualans_id ada di database sebelum menciptakan data keuangan
        $penjualans = Penjualan::find($request->penjualans_id);
        if (!$penjualans) {
            return view()->route('keuangan')->withErrors(['penjualans_id' => 'ID Penjualan tidak valid.']);
        }
        
        $keuangan = Keuangan::create([
            'tanggal'            => $request->tanggal,
            'kode_keuangan'      => $request->kode_keuangan,
            'pemasukan'          => $request->pemasukan,
            'pengeluaran'        => $request->pengeluaran,
            'saldo'              => $request->saldo,
            'penjualans_id'      => $request->penjualans_id,
        ]);
        $keuangan->save();
        return redirect('keuangan')->with('status', 'Data Keuangan berhasil disimpan.');
    }

    public function show($id)
    {
      //
    }

    public function edit($id)
    {
        $keuangan = Keuangan::findOrFail($id); // Retrieve single instance
        $penjualans = Penjualan::all(); // Retrieve all penjualans for the dropdown
        return view('component.keuangan.edit', compact('keuangan', 'penjualans'));
    }

    public function update(Request $request, $id)
    {
        $keuangan = Keuangan::findOrFail($id);

        $keuangan->update([
            'tanggal'       => $request->tanggal,
            'kode_keuangan' => $request->kode_keuangan,
            'pemasukan'     => $request->pemasukan,
            'pengeluaran'   => $request->pengeluaran,
            'saldo'         => $request->saldo,
            'penjualans_id' => $request->penjualans_id,
        ]);

        return redirect('keuangan')->with('status', 'Data Keuangan Berhasil Diperbarui');
    }

    public function destroy($id, Request $request)
    {
        $keuangan = Keuangan::findOrFail($id);
        $keuangan->delete();

        return redirect('keuangan')->with('status');
    }

    function detail()
    {
        //
    }
}