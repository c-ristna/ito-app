<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konsumen;
use Illuminate\Support\Facades\Hash;

class KonsumenController extends Controller
{
  public function index(Request $request)
  {
    $keyword = $request->get('search');
    \Log::info('Search keyword: ' . $keyword);
    $konsumen = Konsumen::when($keyword, function ($query, $keyword) {
      return $query->where('kode_konsumen', 'LIKE', "%{$keyword}%");
    })->get();

    return view('component/konsumen/dataKonsumen', compact('konsumen', 'keyword'));
  }
  public function create()
  {
      $konsumen = new Konsumen;
      return view('component/konsumen/create', compact('konsumen'));
  }

  public function store(Request $request) //buat simpan data
  {
      Konsumen::create([
          'kode_konsumen'        => $request->kode_konsumen,
          'nama_konsumen'        => $request->nama_konsumen,
          'alamat'               => $request->alamat,
          'no_telepon'           => $request->no_telepon,
          'terakhir_pembelian'   => $request->terakhir_pembelian,
      ]);

      return redirect('konsumen')->with('status', 'Data Konsumen Berhasil ditambahkan!');
  }

  public function edit($id)
  {
      $konsumen = Konsumen::findorfail($id);
      return view('component/konsumen/edit', compact('konsumen'));
  }

  public function update(Request $request, $id)
  {
      $record = Konsumen::find($id);

      $validatedData = $request->validate([
        'kode_konsumen'       => 'required',
        'nama_konsumen'       => 'required',
        'alamat'              => 'required',
        'no_telepon'          => 'required',
        'terakhir_pembelian'  => 'required',
      ]);

      $record->fill($validatedData);
      $record->save();

      return redirect('konsumen')->with('status');
  }

  public function destroy($id)
  {
      $konsumen = Konsumen::find($id);
      $konsumen->delete();
      return redirect('konsumen')->with('success');
  }

  function detail()
  {
    //
  }
}

