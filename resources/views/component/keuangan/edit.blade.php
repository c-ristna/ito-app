@extends('template_backend.home2')

@section('halaman', 'Edit Data Keuangan')

@section('content')
  @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{ Session('success') }}
    </div>
  @endif

<div class="container mt-5">
    <h1>Edit Data Keuangan</h1>
    <form method="POST" action="{{ route('keuangan/update', $keuangan->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="kode_keuangan" class="form-label">Kode keuangan</label>
            <input type="text" class="form-control" id="kode_keuangan" name="kode_keuangan" value="{{ $keuangan->kode_keuangan }}" required placeholder="Ketik disini">
        </div>
        <div class="mb-3">
            <label for="nama_keuangan" class="form-label">Nama keuangan</label>
            <input type="text" class="form-control" id="nama_keuangan" name="nama_konsumen" value="{{ $konsumen->nama_konsumen }}" required placeholder="Ketik disini">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $konsumen->alamat }}" required placeholder="Ketik disini">
        </div>
        <div class="mb-3">
            <label for="no_telepon" class="form-label">No Telepon</label>
            <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="{{ $konsumen->no_telepon }}" required placeholder="Ketik disini">
        </div>
        <div class="mb-3">
            <label for="terakhir_pembelian" class="form-label">Terakhir Pembelian</label>
            <input type="date" class="form-control" id="terakhir_pembelian" name="terakhir_pembelian" value="{{ $konsumen->terakhir_pembelian }}" required>
        </div>
        <div class="button-container">
            <button type="cancel" class="btn btn-secondary">Kembali</button>
            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        </div>
    </form>
</div>

@endsection
