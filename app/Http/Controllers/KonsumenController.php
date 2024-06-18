<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Konsumen;

class KonsumenController extends Controller
{
    //
    public function index()
    {
        $konsumen = Konsumen::all();
        return view('component/konsumen/dataKonsumen', ['konsumen' => $konsumen]);
    }

    public function create()
    {
        return view('component/konsumen/create');
    }

    public function store(Request $request)
    {
        Konsumen::create([
            'nama_konsumen'         => $request->nama_konsumen,
            'alamat'                => $request->alamat,
            'no_telepon'            => $request->no_telepon,
            'terakhir_pembelian'    => $request->terakhir_pembelian,
        ]);
        return redirect('konsumen')->with('status', 'Data Konsumen Berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // code for editing the data
    }

    public function update(Request $request, $id)
    {
        // code for updating the data
    }

    public function destroy($id)
    {
        // code for deleting the data
    }

    public function detail($id)
    {
        // code for showing the detail
    }
}