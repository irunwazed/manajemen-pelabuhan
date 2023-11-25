@extends('layouts.admin')
@section('title', 'Eksport Import')
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
    <div class="h-56 grid grid-cols-2 gap-4">
        <div>
            <table class="w-full">
                <tr class="text-start">
                    <td>Tempat Penimbunan</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Pelabuhan Muat Asal</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Pelabuhan Muat Ekspor</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Pelabuhan Bongkar</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Negara Tujuan Ekspor</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Tanggal Perkiraan Ekspor</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
            </table>
        </div>
        <div>
            <table class="w-full">
                <tr class="text-start">
                    <td>Lokasi Pemeriksaan</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Tanggal Periksa</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="text-left pt-16 mt-16 pb-9">
        <a href="#" class="text-base bg-blue-600 text-blue-100 px-6 py-2.5 rounded hover:opacity-80">SIMPAN</a>
        <!-- <a href="#" class="text-base bg-yellow-600 text-yellow-100 px-6 py-2.5 rounded hover:opacity-80">Reset</a>
        <a href="{{url('admin/aneka-usaha/permohonan-sewa-lahan')}}" class="text-base text-gray-900 bg-white border border-gray-300 px-6 py-2.5 rounded hover:opacity-80">Batal</a>
            </div> -->
    </div>
@endsection

@section('script')
@endsection