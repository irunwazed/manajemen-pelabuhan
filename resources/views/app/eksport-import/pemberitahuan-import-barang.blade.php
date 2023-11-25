@extends('layouts.admin')
@section('title', 'Eksport Import')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<div class="">
    <div class="text-2xl ">Eksport-Import / Pembuatan Dokumen PIB</div>
    <hr class="border-b-2 border-black border-solid">
    <!-- Horizontal Navbar -->
    <br>
    <nav>
        <ul>
            <li><a href="{{url('admin/eksport-import/header')}}">HEADER</a></li>
            <li><a href="{{url('admin/eksport-import/entitas')}}">ENTITAS</a></li>
            <li><a href="{{url('admin/eksport-import/dokumen-pendukung')}}">DOKUMEN PENDUKUNG</a></li>
            <li><a href="{{url('admin/eksport-import/pengangkutan')}}">DATA PENGANGKUTAN</a></li>
            <li><a href="{{url('admin/eksport-import/kemasan-kontainer')}}">KEMASAN DAN KONTAINER</a></li>
            <li><a href="{{url('admin/eksport-import/transaksi')}}">DATA TRANSAKSI</a></li>
            <li><a href="{{url('admin/eksport-import/data-barang')}}">DATA BARANG</a></li>
            <li><a href="{{url('admin/eksport-import/pungutan')}}">PUNGUTAN</a></li>
            <li><a href="{{url('admin/eksport-import/pernyataan')}}">PERNYATAAN</a></li>
        </ul>
    </nav>
</div>
@endsection
@section('script')
@endsection
