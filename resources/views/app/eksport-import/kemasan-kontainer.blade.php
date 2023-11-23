@extends('layouts.admin')
@section('title', 'Eksport-Import')
@section('content')
    <div class="h-56 grid">
        <div class="text-2xl ">Eksport-Import / Pembuatan Dokumen PIB</div>
            <hr class="border-b-2 border-black border-solid">
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
    </div>
    <div class="grid grid-cols-4 pt-8 gap-4">
            <div><span class="font-bold text-2xl text-start">Kemasan</span></div>
            <button  class="text-white mt-7 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah Dokumen</button>
            <div><span class="font-bold text-2xl text-start">Kontainer</span></div>
            <button  class="text-white mt-7 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah Dokumen</button>
    </div>
     <div class="grid grid-cols-2 pt-5 gap-4">
        <table class="mt-5 w-full border-solid border-2 border-slate-800">
            <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
            <tr>
                <th class="py-2 px-3">Seri</th>
                <th>Jumlah</th>
                <th>Jenis</th>
                <th>Merek</th>
            </tr>
            </thead>
            <tbody>
            <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                <td>1</td>
                <td>2023</td>
                <td>2023-10-25</td>
                <td>Jaya Sakti</td>
            </tr>
            </tbody>
        </table>
        <table class="mt-5 w-full border-solid border-2 border-slate-800">
            <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
            <tr>
                <th class="py-2 px-3">Seri</th>
                <th>Jumlah</th>
                <th>Jenis</th>
                <th>Merek</th>
            </tr>
            </thead>
            <tbody>
            <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                <td>1</td>
                <td>2023</td>
                <td>2023-10-25</td>
                <td>Jaya Sakti</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection

@section('script')
@endsection
