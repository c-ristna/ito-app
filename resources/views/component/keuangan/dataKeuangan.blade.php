@extends('template_backend.home')

@section('title', 'Dashboard ITO')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Keuangan</title>
    
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="{{asset('assets/css/tabel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/data.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
     <!-- ======= Fonts ====== -->
    <script src="https://kit.fontawesome.com/df60d5ae41.js" crossorigin="anonymous"></script>
</head>
<body>
    @section('content')
          <div class="finance"></div>
            <h2 class="main--title">Data Keuangan</h2>
              <div class="tabular--wrapper">
                <div class="row-button">
                  <ul class="left">
                      <a class= "tambah" name="tambah" href="{{ url('/keuangan/create') }}">
                        <i class="fa fa-plus"></i> Tambah
                      </a>
                  </ul>
              </div>
          <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Id Keuangan</th>
                    <th scope="col">Pemasukan</th>
                    <th scope="col">Pengeluaran</th>
                    <th scope="col">Saldo</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($keuangan as $key => $item )
                <tr>
                  <th scope="row">{{ ++$key }}</th>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->tanggal_keuangan }}</td>
                  <td>{{ $item->id_keuangan }}</td>
                  <td>{{ $item->pemasukan }}</td>
                  <td>{{ $item->pengeluarann }}</td>
                  <td>{{ $item->saldo }}</td>
                  <td> 
                      <button>
                          <i class="fa-solid fa-pen-to-square"></i>
                      </button>
                      <button>
                          <i class="fa-solid fa-trash"></i>
                      </button>
                  </td> 
                </tr>   
              @endforeach
            </tbody>
          @endsection
          <tfoot>
            <tr>
              <th colspan="3">Total</th>
              <th id="totalPemasukan">0</th>
              <th class="totalpengeluaran">0</th>
              <th class="totalsaldo">0</th>
              <th class="#">
                <button><i class="fa-solid fa-pen-to-square"></i></button>
                <button><i class="fa-solid fa-trash"></i></button>
              
              </th>
            </tr>
          </tfoot>
         <script>
          var totalpengeluaran=0;
          var totalPemasukan=0;
          
         </script> 
          
          
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>