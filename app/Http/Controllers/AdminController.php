<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Menampilkan halaman tabel
    public function index(Request $request)
    {
    $keyword = $request->get('search');
    \Log::info('Search keyword: ' . $keyword);
    $admin = Admin::when($keyword, function ($query, $keyword) {
      return $query->where('nama_admin', 'LIKE', "%{$keyword}%");
    })->get();

    return view('component/admin/dataAdmin', compact('admin', 'keyword'));
  }

    // Menampilkan form untuk menambah data
    public function create()
    {
        $admin = new Admin;
        return view('component/admin/create', compact('admin'));
    }

    // Menampilkan detail admin (belum diimplementasikan)
    public function show($id)
    {
        //
    }

    // Menampilkan form untuk mengedit data
    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('component/admin/edit', compact('admin'));
    }
    
    // Menyimpan data admin baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_admin' => 'required',
            'email'      => 'required|email',
            'password'   => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        Admin::create($validatedData);
        return redirect('admin');
    }

    // Memperbarui data admin
    public function update(Request $request, $id)
    {
        $admin = Admin::find($id);

        $validatedData = $request->validate([
            'nama_admin' => 'required',
            'email'      => 'required|email',
            'password'   => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $admin->update($validatedData);
        return redirect('admin');
    }
/**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        return redirect('admin')->with('success');
    }

    // Detail admin (belum diimplementasikan)
    public function detail()
    {
       //
    }
}
