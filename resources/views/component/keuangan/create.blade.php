@extends('template_backend.home2')

@section('halaman', 'Tambah Data')

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
    <title>Keuangan</title>
    <link rel="stylesheet" href="{{ asset('assets/css/data.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
    <body>
        <div class="tambah-data">
            <h1>Tambah Data Keuangan</h1>
        <form method="POST" action="{{ url('keuangan') }}" enctype="multipart/form">
            @csrf
            <section class="base">
                <div class="form"></div>
                    <div>
                        <label class="form-label">Tanggal</label>
                        <input type="date" id="form-control" name="tanggal" autofocus="" required=""
                            placeholder="Ketik disini" />
                    </div>
                    <div>
                        <label for="kode_keuangan">Kode Keuangan</label>
                        <input type="text" id="form-control" name="kode_keuangan" autofocus="" required=""
                            placeholder="Ketik disini" />
                    </div>
                    <div>
                        <label class="form-label">Pemasukan</label>
                        <input type="text" id="form-control" name="pemasukan" required="" placeholder="Ketik disini" />
                    </div>
                    <!-- <div>
                        <label class="form-label">Pemasukan</label>
                        <select class="form-control" name="pemasukan" required="">
                            @foreach ($penjualans as $penjualan)
                                <option value="{{ $penjualan->total_harga }}">{{ formatRupiah($penjualan->total_harga) }}</option>
                            @endforeach
                        </select>
                    </div> -->
                    <div>
                        <label class="form-label">Pengeluaran</label>
                        <input type="text" id="form-control" name="pengeluaran" required="" placeholder="Ketik disini" />
                    </div>
                    <div>
                        <label class="form-label">Saldo</label>
                        <input type="text" id="form-control" name="saldo" value="{{ old('pemasukan') - old('pengeluaran') }}" required="" placeholder="Ketik disini" readonly /> <br>
                    </div>
                    <div>
                        <label class="form-label">Penjualan ID</label>
                        <input type="number" class="form-control" name="penjualans_id" required="" placeholder="Ketik disini" /> 
                    </div>
                    <div class="button-container">
                        <button type="button" class="btn btn-secondary" onclick="window.history.back();">Kembali</button>
                        <button type="submit" class="btn btn-success" onclick="this.form.submit();">Simpan</button>
                    </div>
            </section>
        </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>