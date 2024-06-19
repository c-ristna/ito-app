<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Konsumen;

class KonsumenController extends Controller
{
    //
    public function index() //halaman tabel
    {
        $konsumen = Konsumen::all();
        // return $konsumen;
        return view('component/konsumen/dataKonsumen')->with('konsumen', $konsumen);
    }
    public function create() //buat nampilin form nambah datanya
    {
        return view('component/konsumen/create');
    }

    public function show($id)
    {
   //
    }
    public function edit($id)
    {
        $konsumen = Konsumen::findorfail($id);
        return view('component/konsumen/edit', compact('konsumen'));
    }
    public function store(Request $request) //buat simpan data
    {
      Konsumen::create([
        'kode_konsumen'         => $request->kode_konsumen,
        'nama_konsumen'         => $request->nama_konsumen,
        'alamat'                => $request->alamat,
        'no_telepon'            => $request->no_telepon,
        'terakhir_pembelian'    => $request->terakhir_pembelian,
      ]);
      return redirect('konsumen')->with('status', 'Data Konsumen Berhasil ditambahkan!');
      }

    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'name' => 'required|min:3'
      ]);

      $konsumen_data = [
        'nama_konsumen' => $request->nama_konsumen,
      ];

      Konsumen::whereId($id)->update($konsumen_data);

      return redirect()->route('konsumen/dataKonsumen')->with('success', 'Data Konsumen Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $konsumen = Konsumen::findorfail($id);
        $konsumen->delete();

        return redirect()->back()->with('success', 'Data Konsumen Berhasil Dihapus');
    }
    function detail(){

    }
}