@extends('layouts.admin')
@section('title', 'Eksport Import')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<div class="">
    <div class="text-2xl ">Eksport-Import / Pembuatan Dokumen PEB</div>
    <hr class="border-b-2 border-black border-solid">
    <!-- Horizontal Navbar -->
    <br>
    <nav>
        <ul>
            <li><a href="{{url('admin/eksport-import/header-ex')}}">HEADER</a></li>
            <li><a href="{{url('admin/eksport-import/entitas-ex')}}">ENTITAS</a></li>
            <li><a href="{{url('admin/eksport-import/dokumen-pendukung-ex')}}">DOKUMEN PENDUKUNG</a></li>
            <li><a href="{{url('admin/eksport-import/pengangkutan-ex')}}">DATA PENGANGKUTAN</a></li>
            <li><a href="{{url('admin/eksport-import/kemasan-kontainer-ex')}}">KEMASAN DAN KONTAINER</a></li>
            <li><a href="{{url('admin/eksport-import/transaksi-ex')}}">DATA TRANSAKSI</a></li>
            <li><a href="{{url('admin/eksport-import/data-barang-ex')}}">DATA BARANG</a></li>
            <li><a href="{{url('admin/eksport-import/pungutan-ex')}}">PUNGUTAN</a></li>
            <li><a href="{{url('admin/eksport-import/pernyataan-ex')}}">PERNYATAAN</a></li>
        </ul>
    </nav>
</div>
@endsection
@section('script')
@endsection
