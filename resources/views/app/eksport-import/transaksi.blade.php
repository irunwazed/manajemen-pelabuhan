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
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/pengangkutan')}}">DATA PENGANGKUTAN</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/kemasan-kontainer')}}">KEMASAN DAN KONTAINER</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: green;"><a href="{{url('admin/eksport-import/transaksi')}}">DATA TRANSAKSI</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/data-barang')}}">DATA BARANG</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/pungutan')}}">PUNGUTAN</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/pernyataan')}}">PERNYATAAN</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <form action="/import/save_transaksi" method="POST" enctype="multipart/form-data">
        <div class="h-56 grid grid-cols-2 gap-4">
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
                        <td>Valuta</td>
                        <td></td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="valuta_pib" maxlength="100" required>
                        </td>
                    </tr>
                    <tr class="text-start mb-4">
                        <td>NDPBM</td>
                        <td></td>
                        <td class="py-1">
                            <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="ndpbm_pib" maxlength="20" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Jenis Transaksi</td>
                        <td></td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="jenis_transaksi" maxlength="100" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Biaya Tambahan</td>
                        <td></td>
                        <td class="py-1">
                            <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="biaya_tambahan" maxlength="20" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Diskon</td>
                        <td></td>
                        <td class="py-1">
                            <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="diskon" maxlength="20" required>
                        </td>
                    </tr>
                </table>
            </div>
            <div>
                <table class="w-full">
                    <tr class="text-start">
                        <td>Freight</td>
                        <td></td>
                        <td class="py-1">
                            <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="freight" maxlength="20" required>
                        </td>
                    </tr>
                    <tr class="text-start mb-4">
                        <td>Asuransi</td>
                        <td></td>
                        <td class="py-1">
                            <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="asuransi" maxlength="20" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Voluntary Declaration</td>
                        <td></td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="voluntary_declaration" maxlength="100" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Rupiah</td>
                        <td></td>
                        <td class="py-1">
                            <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="rupiah" maxlength="20" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Berat Kotor</td>
                        <td></td>
                        <td class="py-1">
                            <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="berat_kotor" maxlength="11" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Berat Bersih</td>
                        <td></td>
                        <td class="py-1">
                            <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="berat_bersih" maxlength="11" required>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="text-left pt-16 mt-16 pb-9">
            <button type="submit" class="text-base bg-blue-600 text-blue-100 px-6 py-2.5 rounded hover:opacity-80">SIMPAN</button>
        </div>
    </form>
@endsection

@section('script')
@endsection