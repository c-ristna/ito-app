@extends('template_frontend.home')

@section('title', 'Dashboard ITO')

@section('content')
    <!-- Cards -->
    @include('template_frontend.cardbox_dash')
    <!-- Order Details List -->
    @include('template_frontend.order_dash')
    <!-- New Customers -->
    @include('template_frontend.customer_dash')
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
@endpush

@push('scripts')
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" crossorigin="anonymous"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" crossorigin="anonymous"></script>
@endpush
