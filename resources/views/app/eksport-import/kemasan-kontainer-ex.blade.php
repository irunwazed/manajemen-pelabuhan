@extends('layouts.admin')
@section('title', 'Eksport-Import')
@section('content')
    <div class="h-56 grid">
        <div class="text-2xl ">Eksport-Import / Pembuatan Dokumen PIB</div>
            <hr class="border-b-2 border-black border-solid">
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
    </div>
    <div class="grid grid-cols-4">
        <div><span class="font-bold text-2xl text-start">KEMASAN</span>
        </div>
        <div style="text-align: right; padding-top:0px;">
        <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">TAMBAH</button>
        </div>
        <div><span class="font-bold text-2xl text-start">KONTAINER</span>
        </div>
        <div style="text-align: right; padding-top:0px;">
        <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">TAMBAH</button>
        </div>
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
                    <td style="text-align: center;"> . </td>
                    <td style="text-align: center;"> . </td>
                    <td style="text-align: center;"> . </td>
                    <td style="text-align: center;"> . </td>
                </tr>
            </tbody>
        </table>
        <table class="mt-5 w-full border-solid border-2 border-slate-800">
            <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                <tr>
                    <th class="py-2 px-3">Seri</th>
                    <th>Nomor</th>
                    <th>Ukuran</th>
                    <th>Tipe</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                    <td style="text-align: center;"> . </td>
                    <td style="text-align: center;"> . </td>
                    <td style="text-align: center;"> . </td>
                    <td style="text-align: center;"> . </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection

@section('script')
@endsection