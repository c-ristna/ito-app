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
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="list_produk[]" value="Puding" id="puding" {{ is_array($penjualan->list_produk) && in_array('Puding', $penjualan->list_produk) ? 'checked' : '' }}>
                <label class="form-check-label" for="puding">Puding</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="list_produk[]" value="Keripik pisang" id="keripik_pisang" {{ is_array($penjualan->list_produk) && in_array('Keripik pisang', $penjualan->list_produk) ? 'checked' : '' }}>
                <label class="form-check-label" for="keripik_pisang">Keripik Pisang</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="list_produk[]" value="Makaroni" id="makaroni" {{ is_array($penjualan->list_produk) && in_array('Makaroni', $penjualan->list_produk) ? 'checked' : '' }}>
                <label class="form-check-label" for="makaroni">Makaroni</label>
              </div>
            </div>
              <div>
              <label class="form-label">Total Harga</label>
              <input type="number" class="form-control" name="total_harga" value="{{ $penjualan->pemasukan }}" required="" placeholder="Ketik disini" />
            </div>
            <div class="form-group">
                <label for="metode_pembayaran">Metode Pembayaran</label>
                <select name="metode_pembayaran" id="metode_pembayaran" class="form-control" required>
                    <option value="">Pilih Metode Pembayaran</option>
                    <option value="Cash" {{ isset($penjualan) && $penjualan->metode_pembayaran == 'Cash' ? 'selected' : '' }}>Cash</option>
                    <option value="Dana" {{ isset($penjualan) && $penjualan->metode_pembayaran == 'Dana' ? 'selected' : '' }}>Dana</option>
                    <option value="Bank" {{ isset($penjualan) && $penjualan->metode_pembayaran == 'Bank' ? 'selected' : '' }}>Bank</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
            <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control status" required>
                            <option value="">Pilih Status Penjualan</option>
                            <option value="Terkirim" class="delivered">Terkirim</option>
                            <option value="Tertunda" class="pending">Tertunda</option>
                            <option value="Dikembalikan" class="return">Dikembalikan</option>
                            <option value="Sedang Diproses" class="inProgress">Sedang Diproses</option>
                        </select>
                    </div>
            </div>
            <div>
              <label class="form-label">Nama Konsumen</label>
              <select name="konsumens_id" class="form-control" required>
                <option value="">Pilih Konsumen</option>
                @foreach($konsumens as $konsumen)
                  <option value="{{ $konsumen->id }}" {{ $penjualan->konsumens_id == $konsumen->id ? 'selected' : '' }}>{{ $konsumen->nama_konsumen }}</option>
                @endforeach
              </select>
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
