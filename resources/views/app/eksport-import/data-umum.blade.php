@extends('layouts.admin')
@section('title', 'Eksport Import')
@section('content')
    <div class="h-56 grid">
        <div class="text-2xl ">Eksport-Import / Pembuatan Dokumen PIB</div>
            <hr class="border-b-2 border-black border-solid">
            <nav>
                <ul class="menu flex">
                    <li style="padding-left: 10px; padding-right: 10px; color: green;"><a href="{{url('admin/eksport-import/data-umum')}}">Data Umum</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/bill-landing')}}">Bill Of Landing</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/lampiran')}}">Lampiran</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="h-56 grid grid-cols-2 gap-4">
    <div>
    <form action="/Manifest/data_umum" method="POST" enctype="multipart/form-data">
       
            <table class="w-full">
                <tr class="text-start">
                    <td>nama perusahaan</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="nama_perusahaan">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Alamat</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="alamat">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>No Pengajuan</td>
                    <td></td>
                    <td class="py-1">
                        <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="no_pengajuan">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>kantor Pelayanan</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="kantor_pelayanan">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Nama Pengangkut</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="nama_pengangkut">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Tanggal Tiba</td>
                    <td></td>
                    <td class="py-1">
                        <input type="date" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="tgl_tiba">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Pelabuhan Asal</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="pelabuhan_asal">
                    </td>
                </tr> 
            </table>
            <div class="text-left pt-16 mt-16 pb-9">
                <button type="submit"  class="text-base bg-blue-600 text-blue-100 px-6 py-2.5 rounded hover:opacity-80">SIMPAN</button>
            </div>
            </div>
            <div>
            <table class="w-full">
                <tr class="text-start">
                    <td>NPWP</td>
                    <td></td>
                    <td class="py-1">
                        <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="npwp_perusahaan">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>No Daftar</td>
                    <td></td>
                    <td class="py-1">
                        <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="no_daftar">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>No Pengangkut</td>
                    <td></td>
                    <td class="py-1">
                        <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="no_pengangkut">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Pelabuhan Bongkar</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="pelabuhan_bongkar">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Tanggal Daftar</td>
                    <td></td>
                    <td class="py-1">
                        <input type="date" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="tgl_daftar">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Kode negara</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="kode_negara"> 
                    </td>
                </tr>
            </table>
            
    </form>
    </div>
    </div>
    
@endsection

@section('script')
@endsection