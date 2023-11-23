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
            <li><a href="{{url('admin/eksport-import/header')}}">Header</a></li>
            <li><a href="{{url('admin/eksport-import/entitas')}}">Entitas</a></li>
            <li><a href="{{url('admin/eksport-import/dokumen-pendukung')}}">Dokumen Pendukung</a></li>
            <li><a href="{{url('admin/eksport-import/pengangkutan')}}">Pengangkutan</a></li>
            <li><a href="{{url('admin/eksport-import/kemasan-kontainer')}}">Kemasan dan Kontainer</a></li>
            <li><a href="{{url('admin/eksport-import/transaksi')}}">Data Transaksi</a></li>
            <li><a href="#">Data Barang</a></li>
            <li><a href="#">Pungutan</a></li>
            <li><a href="{{url('admin/eksport-import/pernyataan')}}">Pernyataan</a></li>
        </ul>
    </nav>
</div>
@endsection
@section('script')
@endsection
