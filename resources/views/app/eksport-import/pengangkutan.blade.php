@extends('layouts.admin')
@section('title', 'Eksport Import')
@section('content')
    <div class="h-56 grid">
        <div class="text-2xl ">Eksport-Import / Pembuatan Dokumen PIB</div>
            <hr class="border-b-2 border-black border-solid">
            <nav>
                <ul class="menu flex">
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/header')}}">HEADER</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/entitas')}}">ENTITAS</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/dokumen-pendukung')}}">DOKUMEN PENDUKUNG</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: green;"><a href="{{url('admin/eksport-import/pengangkutan')}}">DATA PENGANGKUTAN</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/kemasan-kontainer')}}">KEMASAN DAN KONTAINER</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/transaksi')}}">DATA TRANSAKSI</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/data-barang')}}">DATA BARANG</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/pungutan')}}">PUNGUTAN</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/pernyataan')}}">PERNYATAAN</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <form action="/import/save_pengangkutan" method="POST" enctype="multipart/form-data">
        <div class="grid grid-cols-2 gap-4">
            <div>
                <table class="w-full">
                    <tr class="text-start">
                        <td>Header PIB</td>
                        <td></td>
                        <td class="py-1">
                            <select class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="header_pib" name="header_pib" required>
                                <option value="">-- Pilih --</option>
                                <?php
                                foreach ($data_header_pib as $key => $value) {
                                    echo'<option value="'.$value->header_pib_id.'">'.$value->no_pengajuan.'</option>';
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>BC1.1</td>
                        <td></td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="no_bc11_pib" maxlength="20" required>
                        </td>
                    </tr>
                    <tr class="text-start mb-4">
                        <td>Tanggal BC1.1/1.2</td>
                        <td></td>
                        <td class="py-1">
                            <input type="date" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="tanggal_bc11_pib" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>No Post</td>
                        <td></td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="no_post_bc11_pib" maxlength="20" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Cara Pengangkutan</td>
                        <td></td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="cara_pengangkutan_pib" maxlength="5" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Nama Sarana Pengangkutan</td>
                        <td></td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="nama_sarana_pengangkut" maxlength="200" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>No Voyage</td>
                        <td></td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="no_voyage" maxlength="20" required>
                        </td>
                    </tr>
                </table>
            </div>
            <div>
                <table class="w-full">
                    <tr class="text-start">
                        <td>Bendera</td>
                        <td></td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="bendera" maxlength="100" required>
                        </td>
                    </tr>
                    <tr class="text-start mb-4">
                        <td>Perkiraan Tanggal Tiba</td>
                        <td></td>
                        <td class="py-1">
                            <input type="date" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="perkiraan_tgl_tiba" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Pelabuhan Muat</td>
                        <td></td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="pelabuhan_muat" maxlength="100" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Pelabuhan Transit</td>
                        <td></td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="pelabuhan_transit" maxlength="100" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Pelabuhan Tujuan</td>
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
                        <td>Tempat Penimbunan</td>
                        <td></td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="tempat_penimbunan" maxlength="100" required>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="text-left pt-16 pb-9">
            <button type="submit" class="text-base bg-blue-600 text-blue-100 px-6 py-2.5 rounded hover:opacity-80">SIMPAN</button>
        </div>
    </form>
@endsection
@section('script')
@endsection