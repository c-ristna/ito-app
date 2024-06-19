@extends('template_backend.home2')

@section('halaman', 'Edit Data')

@section('content')
  @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{ Session::get('success') }}
    </div>
  @endif

  <div class="edit-consumer">
    <h1>Edit Data Konsumen</h1>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('konsumen.update', $konsumen->id) }}" enctype="multipart/form-data">
      @csrf
      <section class="base">
        <div class="form"></div>
        <div>
          <label for="kode_konsumen">Kode Konsumen</label>
          <input type="text" id="kode_konsumen" name="kode_konsumen" value="{{ $konsumen->kode_konsumen }}" autofocus="" readonly="" placeholder="Ketik disini" />
        </div>
        <div>
          <label class="form-label" for="nama_konsumen">Nama Konsumen</label>
          <input type="text" id="nama_konsumen" name="nama_konsumen" value="{{ old('nama_konsumen', $konsumen->nama_konsumen) }}" autofocus="" required="" placeholder="Ketik disini" />
        </div>
        <div>
          <label class="form-label" for="alamat">Alamat</label>
          <input type="text" id="alamat" name="alamat" value="{{ old('alamat', $konsumen->alamat) }}" required="" placeholder="Ketik disini" />
        </div>
        <div>
          <label class="form-label" for="no_telepon">No Telepon</label>
          <input type="text" id="no_telepon" name="no_telepon" value="{{ old('no_telepon', $konsumen->no_telepon) }}" required="" placeholder="Ketik disini" />
        </div>
        <div>
          <label class="form-label" for="terakhir_pembelian">Terakhir Pembelian</label>
          <input type="date" id="terakhir_pembelian" name="terakhir_pembelian" value="{{ old('terakhir_pembelian', $konsumen->terakhir_pembelian) }}" required="" />
        </div>
        <div class="button-container">
          <a href="{{ route('konsumen.index') }}"  class="btn btn-primary">Simpan Perubahan</button>
          <a href="{{ route('konsumen.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
      </section>
    </form>
  </div>
@endsection
