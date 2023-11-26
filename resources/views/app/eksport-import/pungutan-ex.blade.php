@extends('layouts.admin')
@section('title', 'Eksport-Import')
@section('content')
    <div class="h-56 grid">
        <div class="text-2xl ">Eksport-Import / Pembuatan Dokumen PIB</div>
            <hr class="border-b-2 border-black border-solid">
            <nav>
                <ul class="menu flex">
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/header-ex')}}">HEADER</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/entitas-ex')}}">ENTITAS</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/dokumen-pendukung-ex')}}">DOKUMEN PENDUKUNG</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/pengangkutan-ex')}}">DATA PENGANGKUTAN</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/kemasan-kontainer-ex')}}">KEMASAN DAN KONTAINER</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/transaksi-ex')}}">DATA TRANSAKSI</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/data-barang-ex')}}">DATA BARANG</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: green;"><a href="{{url('admin/eksport-import/pungutan-ex')}}">PUNGUTAN</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/pernyataan-ex')}}">PERNYATAAN</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="grid grid-cols-1 pt-5 gap-4">
        <table class="mt-5 w-full border-solid border-2 border-slate-800">
            <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
            <tr>
                <th class="py-2 px-3">Punguntan</th>
                <th>Dibayar</th>
                <th>Ditanggung Pemerintah</th>
                <th>Ditunda</th>
                <th>Tidak Dipungut</th>
                <th>Dibebaskan</th>
                <th>Telah Dilunasi</th>
            </tr>
            </thead>
            <tbody>
            <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                <td style="text-align: center;"> . </td>
                <td style="text-align: center;"> . </td>
                <td style="text-align: center;"> . </td>
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