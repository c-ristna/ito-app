<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konsumen;
use Illuminate\Support\Facades\Hash;

class KonsumenController extends Controller
{
  public function index()
  {
      $konsumen = Konsumen::all();
      return view('component/konsumen/dataKonsumen', compact('konsumen'));
  }
  public function create()
  {
      $konsumen = new Konsumen;
      return view('component/konsumen/create', compact('konsumen'));
  }

  public function store(Request $request) //buat simpan data
  {
      $konsumen = new Konsumen;
      $konsumen->kode_konsumen = $request->kode_konsumen;
      $konsumen->nama_konsumen = $request->nama_konsumen;
      $konsumen->alamat = $request->alamat;
      $konsumen->no_telepon = $request->no_telepon;
      $konsumen->terakhir_pembelian = $request->terakhir_pembelian;
      $konsumen->save();

      return redirect('konsumen');
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
        'kode_konsumen' => 'required',
        'nama_konsumen' => 'required',
        'alamat' => 'required',
        'no_telepon' => 'required',
        'terakhir_pembelian' => 'required',
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

