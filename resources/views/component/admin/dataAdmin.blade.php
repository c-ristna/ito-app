@extends('template_backend.home')

@section('title', 'Dashboard ITO')

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="customer"></div>
    <h2 class="main--title">Data Admin</h2>
    <div class="tabular--wrapper">
        <div class="row-button">
            <ul class="left">
                <a class="tambah" href="{{ route('admin.create') }}">
                    <i class="fa fa-plus"></i> Tambah
                </a>
            </ul>
        </div>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Admin</th>
                        <th scope="col">Email</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($admin as $key => $item)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $item->nama_admin }}</td>
                            <td>{{ $item->email }}</td>
                            <td class="button-container">
                                <button class="btn btn-primary fa-solid fa-pen-to-square" onclick="window.location.href='{{ url('admin/' . $item->id . '/edit') }}'"></button>
                            </td>
                            <td>
                                <form action="{{ url('admin/' . $item->id) }}" method="POST" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger fa-solid fa-trash" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/tabel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/data.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons.js"></script>
@endpush
