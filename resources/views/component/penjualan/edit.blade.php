@extends('template_backend.home2')

@section('halaman', 'Edit Data Produk')

@section('content')
  @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{ Session::get('success') }}
    </div>
  @endif

<div class="container mt-5">
    <h1>Edit Data Produk</h1>
    <form method="POST" action="{{ route('penjualan.update', $penjualan->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="kode_kosnumen" class="form-label">Kode Konsumen</label>
            <input type="text" class="form-control" id="kode_konsumen" name="kode_konsumen" value="{{ $penjualan->kode_penjualan }}" required placeholder="Ketik disini">
        </div>
        <div class="mb-3">
            <label for="nama_penjualan" class="form-label">Nama penjualan</label>
            <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="{{ $produk->nama_produk }}" required placeholder="Ketik disini">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" value="{{ $produk->harga }}" required placeholder="Ketik disini">
        </div>
        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="text" class="form-control" id="stok" name="stok" value="{{ $produk->stok }}" required placeholder="Ketik disini">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $produk->deskripsi }}" required placeholder="Ketik disini">
        </div>


        <div class="button-container">
            <button type="cancel" class="btn btn-secondary">Kembali</button>
            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        </div>
    </form>
</div>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/data.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endpush
