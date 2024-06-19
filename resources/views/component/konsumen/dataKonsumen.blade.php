@extends('template_backend.home')

@section('title', 'Dashboard ITO')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Konsumen</title>
    
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="{{asset('assets/css/tabel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/data.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
     <!-- ======= Fonts ====== -->
    <script src="https://kit.fontawesome.com/df60d5ae41.js" crossorigin="anonymous"></script>
</head>
<body>
  @section('content')
    @if (Session::has('success'))
      <div class="alert alert-success" role="alert">
        {{ Session('success') }}
      </div>
    @endif
          <div class="customer"></div>
            <h2 class="main--title">Data Konsumen</h2>
              <div class="tabular--wrapper">
                <div class="row-button">
                  <ul class="left">
                      <a class= "tambah" name="tambah" href="{{ url('/konsumen/create') }}">
                        <i class="fa fa-plus"></i> Tambah
                      </a>
                  </ul>
              </div>
          <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Konsumen</th>
                    <th scope="col">Nama Konsumen</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Terakhir Pembelian</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($konsumen as $key => $item )
                <tr>
                  <th scope="row">{{ ++$key }}</th>
                  <td>{{ $item->kode_konsumen }}</td>
                  <td>{{ $item->nama_konsumen }}</td>
                  <td>{{ $item->alamat }}</td>
                  <td>{{ $item->no_telepon }}</td>
                  <td>{{ $item->terakhir_pembelian }}</td>
                  <td class="button-container"> 
                      <button>
                        <a href="{{ url('/konsumen/edit') . $item->id }}">
                          <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                      </button>
                      <button>
                      <a href="{{ url('/konsumen/destroy') . $item->id }}">
                          <i class="fa-solid fa-trash"></i>
                      </button>
                    </form>
                  </td> 
                </tr>   
              @endforeach
            </tbody>
          @endsection
          
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>
          