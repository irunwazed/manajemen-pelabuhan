@extends('layouts.admin')
@section('title', 'Eksport Import')
@section('content')
    <div class="h-56 grid">
        <div class="text-2xl ">Eksport-Import / Manifest Pengangkut</div>
            <hr class="border-b-2 border-black border-solid">
            <nav>
            <ul>
                <li><a href="{{url('admin/eksport-import/header')}}">Data Umum</a></li>
                <li><a href="{{url('admin/eksport-import/entitas')}}">Bill Of Landing</a></li>
                <li><a href="{{url('admin/eksport-import/dokumen-pendukung')}}">Lampiran</a></li>
            </ul>
            </nav>
        </div>
    </div>
    <div class="h-56 grid grid-cols-2 gap-4">
            <div>
                <table class="w-full">
                    <tr class="text-start">
                        <td>Nama Perusahaan</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                        </td>
                    </tr>
                    <tr class="text-start mb-4">
                        <td>Alamat</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>No Pengajuan</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Biaya Tambahan</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Diskon</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                        </td>
                    </tr>
                </table>
            </div>
            <div>
                <table class="w-full">
                    <tr class="text-start">
                        <td>Freight</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                        </td>
                    </tr>
                    <tr class="text-start mb-4">
                        <td>Asuransi</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Voluntary Declaration</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Rupiah</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Berat Kotor</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Berat Bersih</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    <br>
    <br>    
    <div class="text-center pt-16 mt-16 pb-9">       
      <a href="#"  class="text-base bg-blue-600 text-blue-100 px-6 py-2.5 rounded hover:opacity-80">Simpan</a>
      <!-- <a href="#"  class="text-base bg-yellow-600 text-yellow-100 px-6 py-2.5 rounded hover:opacity-80">Reset</a>
      <a href="{{url('admin/aneka-usaha/permohonan-sewa-lahan')}}"  class="text-base text-gray-900 bg-white border border-gray-300 px-6 py-2.5 rounded hover:opacity-80">Batal</a>
        </div> -->
    </div>
@endsection

@section('script')
@endsection
