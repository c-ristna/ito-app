@extends('template_backend.home2')

@section('halaman', 'Edit Data')

@section('content')
  @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{ Session('success') }}
    </div>
  @endif

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Penjualan</title>
    <link rel="stylesheet" href="{{ asset('assets/css/data.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="tambah-data">
      <h1>Edit Data Penjualan</h1>
      <form method="POST" action={{ url('penjualan/' . $penjualan->id) }} enctype="multipart/form">
        @method('PATCH')    
        @csrf
        <section class="base">
          <div class="form">
            <div>
              <label for="kode_konsumen">Kode Penjualan</label>
              <input type="text" id="form-control" name="kode_penjualan" value="{{ $penjualan->kode_penjualan }}" autofocus="" required="" placeholder="Ketik disini" readonly />
            </div>
            <div>
              <label class="form-label">Tanggal</label>
              <input type="date" id="form-control" name="tanggal" value="{{ $penjualan->tanggal }}" autofocus="" required="" placeholder="Ketik disini" />
            </div>
            <div>
              <label class="form-label">List Produk</label>
              <input type="text" id="form-control" name="list_produk" value="{{ $penjualan->list_produk }}" required="" placeholder="Ketik disini" />
            </div>
            <div>
              <label class="form-label">Total Harga</label>
              <input type="decimal" id="form-control" name="total_harga" value="{{ $penjualan->total_harga }}" required="" placeholder="Ketik disini" />
            </div>
            <div class="form-group">
                        <label for="metode_pembayaran">Metode Pembayaran</label>
                        <select name="metode_pembayaran" id="metode_pembayaran" required>
                            <option value="">Pilih Metode Pembayaran</option>
                            <option value="Cash" {{ isset($penjualan) && $penjualan->metode_pembayaran == 'Cash' ? 'selected' : '' }}>Cash</option>
                            <option value="Dana" {{ isset($penjualan) && $penjualan->metode_pembayaran == 'Dana' ? 'selected' : '' }}>Dana</option>
                            <option value="Bank" {{ isset($penjualan) && $penjualan->metode_pembayaran == 'Bank' ? 'selected' : '' }}>Bank</option>
                            <!-- Add more options as needed -->
                        </select>
            </div>
            <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" required>
                            <option value="">Pilih Status Penjualan</option>
                            <option value="Terkirim">Terkirim</option>
                            <option value="Tertunda">Tertunda</option>
                            <!-- Add more options as needed -->
                        </select>
            </div>
            <div>
            <label class="form-label">Konsumens ID</label>
              <input type="number" id="form-control" name="konsumens_id" value="{{ $penjualan->konsumens_id }}" required="" /> <br>
            </div>
            <div class="button-container">
                            <button type="button" class="btn btn-secondary" onclick="window.history.back();">Kembali</button>
                            <button type="submit" class="btn btn-success" onclick="return confirm('Apakah Anda yakin ingin menyimpan perubahan?');">Simpan</button>
                        </div>
          </div>
        </section>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>
