@extends('layouts.admin')
@section('title', 'Eksport Import')
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
<div class="h-56 grid grid-cols-3 gap-4">
    <div class="border-2">
        <div><span class="font-bold text-2xl text-start">Importir</span></div>
        <table class="w-full content-center">
            <tr  class="text-start mb-4">
                <td>NPWP (Nomor Indentitas)</td>
                <td>:</td>
                <td class="py-1">
                    <input
                        type="text"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                    >
                </td>
            </tr>
            <tr  class="text-start">
                <td>Nama</td>
                <td>:</td>
                <td class="py-1">
                    <input
                        type="text"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                    >
                </td>
            </tr>
            <tr  class="text-start">
                <td>Alamat</td>
                <td>:</td>
                <td class="py-1">
                    <input
                        type="text"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                    >
                </td>
            </tr>
            <tr  class="text-start">
                <td>NIB</td>
                <td>:</td>
                <td class="py-1">
                    <input
                        type="text"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                    >
                </td>
            </tr>
            <tr  class="text-start">
                <td>Status</td>
                <td>:</td>
                <td class="py-1">
                    <input
                        type="text"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                    >
                </td>
            </tr>
        </table>
    </div>
    <div class="border-2">
        <table class="w-full text-center">
            <tr><td><div><span class="font-bold text-2xl text-start">Pemilik Barang</span></div></td></tr>
            <tr  class="text-start mb-4">
                <td>NPWP (Nomor Identitas)</td>
                <td>:</td>
                <td class="py-1">
                    <input
                        type="text"
                        class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                    >
                </td>
            </tr>
            <tr  class="text-start mb-4">
                <td>Nama</td>
                <td>:</td>
                <td class="py-1">
                    <input
                        type="text"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                    >
                </td>
            </tr>
            <tr  class="text-start mb-4">
                <td>Alamat</td>
                <td>:</td>
                <td class="py-1">
                    <input
                        type="text"
                        class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                    >
                </td>
            </tr>
            <tr><td><div><span class="font-bold text-2xl text-start">Pengirim</span></div><td></tr>
            <tr  class="text-start mb-4">
                <td>NPWP (Nomor Identitas)</td>
                <td>:</td>
                <td class="py-1">
                    <input
                        type="text"
                        class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                    >
                </td>
            </tr>
            <tr  class="text-start mb-4">
                <td>Nama</td>
                <td>:</td>
                <td class="py-1">
                    <input
                        type="text"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                    >
                </td>
            </tr>
            <tr  class="text-start mb-4">
                <td>Alamat</td>
                <td>:</td>
                <td class="py-1">
                    <input
                        type="text"
                        class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                    >
                </td>
            </tr>
            <tr class="text-start mb-4">
                <td>Negara</td>
                <td>:</td>
                <td class="py-1">
                    <input
                        type="text"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                    >
                </td>
            </tr>
        </table>
    </div>
    <div class="border-2">
        <table class="w-full text-center">
            <tr><td><div><span class="font-bold text-2xl text-start">NPWP Pemusatan</span></div></td></tr>
            <tr  class="text-start mb-4">
                <td>NPWP (Nomor Identitas)</td>
                <td>:</td>
                <td class="py-1">
                    <input
                        type="text"
                        class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                    >
                </td>
            </tr>
            <tr  class="text-start mb-4">
                <td>Nama</td>
                <td>:</td>
                <td class="py-1">
                    <input
                        type="text"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                    >
                </td>
            </tr>
            <tr  class="text-start mb-4">
                <td>Alamat</td>
                <td>:</td>
                <td class="py-1">
                    <input
                        type="text"
                        class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                    >
                </td>
            </tr>
            <tr><td><div><span class="font-bold text-2xl text-start">Pengirim</span></div><td></tr>
            <tr  class="text-start mb-4">
                <td>NPWP (Nomor Identitas)</td>
                <td>:</td>
                <td class="py-1">
                    <input
                        type="text"
                        class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                    >
                </td>
            </tr>
            <tr  class="text-start mb-4">
                <td>Nama</td>
                <td>:</td>
                <td class="py-1">
                    <input
                        type="text"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                    >
                </td>
            </tr>
            <tr  class="text-start mb-4">
                <td>Alamat</td>
                <td>:</td>
                <td class="py-1">
                    <input
                        type="text"
                        class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                    >
                </td>
            </tr>
            <tr class="text-start mb-4">
                <td>Negara</td>
                <td>:</td>
                <td class="py-1">
                    <input
                        type="text"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                    >
                </td>
            </tr>
        </table>
    </div>
    <br>
    <br>    
    <div class="text-center pt-16 mt-16 pb-9">       
      <a href="#"  class="text-base bg-blue-600 text-blue-100 px-6 py-2.5 rounded hover:opacity-80">Simpan</a>
      <!-- <a href="#"  class="text-base bg-yellow-600 text-yellow-100 px-6 py-2.5 rounded hover:opacity-80">Reset</a>
      <a href="{{url('admin/aneka-usaha/permohonan-sewa-lahan')}}"  class="text-base text-gray-900 bg-white border border-gray-300 px-6 py-2.5 rounded hover:opacity-80">Batal</a>
        </div> -->
    </div>
</div>
@endsection

@section('script')
@endsection
