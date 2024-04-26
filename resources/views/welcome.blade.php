@extends('layout.template')

{{-- @section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')

@section('content_body')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@push('css')
@endpush

@push('js')
    <script>console.log("Hi, I'm using the Laravel-AdminLTE package!");</script>
@endpush --}}
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Halo, apakabar!</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            Selamat datang, ini halaman utama
        </div>
    </div>
@endsection