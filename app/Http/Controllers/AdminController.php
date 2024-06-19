<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Menampilkan halaman tabel
    public function index()
    {
        $admin = Admin::all();
        return view('component/admin/dataAdmin', compact('admin'));
    }

    // Menampilkan form untuk menambah data
    public function create()
    {
        return view('component/admin/create');
    }

    // Menampilkan detail admin (belum diimplementasikan)
    public function show($id)
    {
        //
    }

    // Menampilkan form untuk mengedit data
    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
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
        return redirect('admin')->with('status', 'Data Admin berhasil ditambahkan!');
    }

    // Memperbarui data admin
    public function update(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);

        $validatedData = $request->validate([
            'nama_admin' => 'required',
            'email'      => 'required|email',
            'password'   => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $admin->update($validatedData);
        return redirect('admin')->with('status', 'Data Admin berhasil diperbarui!');
    }

    // Detail admin (belum diimplementasikan)
    public function detail()
    {
        //
    }
}
