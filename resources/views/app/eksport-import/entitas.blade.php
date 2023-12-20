@extends('layouts.admin')
@section('title', 'Eksport Import')
@section('content')
<div class="h-56 grid">
    <div class="text-2xl ">Eksport-Import / Pembuatan Dokumen PIB</div>
        <hr class="border-b-2 border-black border-solid">
        <nav>
            <ul class="menu flex">
                <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/header')}}">HEADER</a></li>
                <li style="padding-left: 10px; padding-right: 10px; color: green;"><a href="{{url('admin/eksport-import/entitas')}}">ENTITAS</a></li>
                <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/dokumen-pendukung')}}">DOKUMEN PENDUKUNG</a></li>
                <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/pengangkutan')}}">DATA PENGANGKUTAN</a></li>
                <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/kemasan-kontainer')}}">KEMASAN DAN KONTAINER</a></li>
                <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/transaksi')}}">DATA TRANSAKSI</a></li>
                <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/data-barang')}}">DATA BARANG</a></li>
                <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/pungutan')}}">PUNGUTAN</a></li>
                <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/pernyataan')}}">PERNYATAAN</a></li>
            </ul>
        </nav>
    </div>
</div>
<form action="/import/save_entitas" method="POST" enctype="multipart/form-data">
    <input type="hidden" id="header_pib" name="header_pib" value="<?= $id_param; ?>" required>
    <div class="h-56 grid grid-cols-3 gap-4">
        <div class="border-2">
            <div style="padding-top:20px;padding-bottom:20px;text-align:center;"><span class="font-bold text-2xl text-start">IMPORTIR</span></div>
            <table class="w-full content-center">
                <tr class="text-start mb-4">
                    <td>Npwp (Nomor Indentitas)</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="npwp_importir" name="npwp_importir" maxlength="20" required>
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Nama</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="nama_importir" name="nama_importir" maxlength="200" required>
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Alamat</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="alamat_importir" name="alamat_importir" maxlength="200" required>
                    </td>
                </tr>
                <tr class="text-start">
                    <td>NIB</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="nib_importir" name="nib_importir" maxlength="100" required>
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Status</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="status_importir" name="status_importir" maxlength="100" required>
                    </td>
                </tr>
            </table>
        </div>
        <div class="border-2">
            <table class="w-full text-center">
                <tr><td colspan="4" style="padding-top:20px;padding-bottom:20px;"><div><span class="font-bold text-2xl text-start">PEMILIK BARANG</span></div><td></tr>
                <tr class="text-start mb-4">
                    <td>Npwp (Nomor Indentitas)</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="npwp_pemilik_barang" name="npwp_pemilik_barang" maxlength="20" required>
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Nama</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="nama_pemilik_barang" name="nama_pemilik_barang" maxlength="200" required>
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Alamat</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="alamat_pemilik_barang" name="alamat_pemilik_barang" maxlength="200" required>
                    </td>
                </tr>
                <tr><td colspan="4" style="padding-top:20px;padding-bottom:20px;"><div><span class="font-bold text-2xl text-start">PENGIRIM</span></div><td></tr>
                <tr class="text-start mb-4">
                    <td>Npwp (Nomor Indentitas)</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="npwp_pengirim" name="npwp_pengirim" maxlength="20" required>
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Nama</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="nama_pengirim" name="nama_pengirim" maxlength="200" required>
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Alamat</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="alamat_pengirim" name="alamat_pengirim" maxlength="200" required>
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Negara</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="negara_pengirim" name="negara_pengirim" maxlength="100" required>
                    </td>
                </tr>
            </table>
        </div>
        <div class="border-2">
            <table class="w-full text-center">
                <tr><td colspan="4" style="padding-top:20px;padding-bottom:20px;"><div><span class="font-bold text-2xl text-start">NPWP PEMUSATAN</span></div><td></tr>
                <tr class="text-start mb-4">
                    <td>Npwp (Nomor Indentitas)</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="npwp_pemusatan" name="npwp_pemusatan" maxlength="20" required>
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Nama</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="nama_pemusatan" name="nama_pemusatan" maxlength="200" required>
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Alamat</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="alamat_pemusatan" name="alamat_pemusatan" maxlength="200" required>
                    </td>
                </tr>
                <tr><td colspan="4" style="padding-top:20px;padding-bottom:20px;"><div><span class="font-bold text-2xl text-start">PENJUAL</span></div><td></tr>
                <tr class="text-start mb-4">
                    <td>Npwp (Nomor Indentitas)</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="npwp_penjual" name="npwp_penjual" maxlength="20" required>
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Nama</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="nama_penjual" name="nama_penjual" maxlength="200" required>
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Alamat</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="alamat_penjual" name="alamat_penjual" maxlength="200" required>
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Negara</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="negara_penjual" name="negara_penjual" maxlength="100" required>
                    </td>
                </tr>
            </table>
        </div>
        <div class="text-left pt-16 mt-16 pb-9">
            <button type="submit" class="text-base bg-blue-600 text-blue-100 px-6 py-2.5 rounded hover:opacity-80">SIMPAN</button>
        </div>
    </div>
</form>
@endsection
@section('script')
@endsection