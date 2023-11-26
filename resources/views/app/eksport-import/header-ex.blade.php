@extends('layouts.admin')
@section('title', 'Eksport Import')
@section('content')
    <div class="h-56 grid">
        <div class="text-2xl ">Eksport-Import / Pembuatan Dokumen PIB</div>
            <hr class="border-b-2 border-black border-solid">
            <nav>
                <ul class="menu flex">
                    <li style="padding-left: 10px; padding-right: 10px; color: green;"><a href="{{url('admin/eksport-import/header-ex')}}">HEADER</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/entitas-ex')}}">ENTITAS</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/dokumen-pendukung-ex')}}">DOKUMEN PENDUKUNG</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/pengangkutan-ex')}}">DATA PENGANGKUTAN</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/kemasan-kontainer-ex')}}">KEMASAN DAN KONTAINER</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/transaksi-ex')}}">DATA TRANSAKSI</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/data-barang-ex')}}">DATA BARANG</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/pungutan-ex')}}">PUNGUTAN</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/pernyataan-ex')}}">PERNYATAAN</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="h-56 grid grid-cols-2 gap-4">
    <form id="uploadForm" action="/Eksport/save_header" method="POST" enctype="multipart/form-data">
        <table class="w-full">
            <tr class="text-start mb-4">
                <td>No Pengajuan</td>
                <td></td>
                <td class="py-1">
                    <input
                    type="text"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="pengajuan" name="pengajuan"
                >
                </td>
            </tr>
            <tr class="text-start">
                <td>Kantor Pabean Muat Asal</td>
                <td></td>
                <td class="py-1">
                    <input
                    type="text"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="pabeanasal" name="pabeanasal"
                >
                </td>
            </tr>
            <tr class="text-start">
                <td>Pelabuhan Muat Ekspor</td>
                <td></td>
                <td class="py-1">
                    <select class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="pelabuhan" name="pelabuhan" required>
                        <option value="">-- Pilih --</option>
                        <?php
                        foreach ($data_pelabuhan as $key => $value) {
                            echo'<option value="'.$value->pelabuhan_id.'">'.$value->nama_pelabuhan.'</option>';
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr class="text-start">
                <td>Kantor Kepebaenan Muat Ekspor</td>
                <td></td>
                <td class="py-1">

                    <input
                    type="text"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="muatekspor" name="muatekspor"
                >
                </td>
            </tr>
            <tr class="text-start">
                <td>Jenis Eksport</td>
                <td></td>
                <td class="py-1">
                    <select class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="pelabuhan" name="pelabuhan" required>
                        <option value="">-- Pilih --</option>
                        <?php
                        foreach ($data_jenis_ekspor as $key => $value) {
                            echo'<option value="'.$value->jenis_ekspor_id.'">'.$value->jenis_ekspor.'</option>';
                        }
                        ?>
                    </select>   
                </td>
            </tr>
            <tr class="text-start">
                <td>Kategori Eksport</td>
                <td></td>
                <td class="py-1">
                <select class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="pelabuhan" name="pelabuhan" required>
                    <option value="">-- Pilih --</option>
                        <?php
                        foreach ($kategori_ekspor as $key => $value) {
                            echo'<option value="'.$value->kategori_ekspor_id.'">'.$value->kategori_ekspor.'</option>';
                        }
                        ?>
                    </select>  
                </td>
            </tr>
            <tr class="text-start">
                <td>Cara bayar</td>
                <td></td>
                <td class="py-1">
                    <select class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="pelabuhan" name="pelabuhan" required>
                    <option value="">-- Pilih --</option>
                        <?php
                        foreach ($data_cara_bayar as $key => $value) {
                            echo'<option value="'.$value->cara_bayar_id.'">'.$value->cara_bayar.'</option>';
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr class="text-start">
                <td>Cara Dagang</td>
                <td></td>
                <td class="py-1">
                    <select class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="pelabuhan" name="pelabuhan" required>
                    <option value="">-- Pilih --</option>
                        <?php
                        foreach ($data_cara_dagang as $key => $value) {
                            echo'<option value="'.$value->cara_dagang_id.'">'.$value->cara_dagang.'</option>';
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr class="text-start">
                <td>komoditi</td>
                <td></td>
                <td class="py-1">
                    <input
                    type="text"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="komoditi" name="komoditi"
                >
                </td>
            </tr>
            <tr class="text-start">
                <td>Curah</td>
                <td></td>
                <td class="py-1">
                    <input
                    type="text"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="curah" name="curah"
                >
                </td>
            </tr>
        </table>
        <div class="text-left pt-16 mt-16 pb-9">
            <button type="submit" onclick="submitForm()" class="text-base bg-blue-600 text-blue-100 px-6 py-2.5 rounded hover:opacity-80">SIMPAN</button>
        </div>
    </form>
    </div>
@endsection
@section('script')
@endsection