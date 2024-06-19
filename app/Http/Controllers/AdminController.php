<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Admin;

class AdminController extends Controller
{
    public function index() //halaman tabel
    {
        $admin = Admin::all();
        return view('component/admin/dataAdmin')->with('admin', $admin);
    }
    public function create() //buat nampilin form nambah datanya
    {
        return view('component/admin/create');
    }

    public function show($id)
    {
   //
    }
    public function edit($id)
    {
        $admin = Admin::findorfail($id);
        return view('component/admin/edit', compact('admin'));
    }
    public function store(Request $request) //buat simpan data
    {
      Admin::create([
        'nama_admin'         => $request->nama_admin,
        'email'              => $request->email,
        'password'           => $request->password,
      ]);
      return redirect('admin')->with('status', 'Data Admin Berhasil ditambahkan!');
      }

      public function update(Request $request, $id)
      {
          $record = Admin::find($id);
      
          $validatedData = $request->validate([
            'nama_admin'         => $request->nama_admin,
            'email'              => $request->email,
            'password'           => $request->password,
          ]);
      
          $record->fill($validatedData);
          $record->save();
      
          return redirect('admin')->with('status', 'Data Admin Berhasil diperbarui!');
      }    
      function detail(){

    }
}
