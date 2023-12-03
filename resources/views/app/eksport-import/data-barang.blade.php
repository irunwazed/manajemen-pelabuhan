@extends('layouts.admin')
@section('title', 'Eksport-Import')
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
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/transaksi')}}">DATA TRANSAKSI</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: green;"><a href="{{url('admin/eksport-import/data-barang')}}">DATA BARANG</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/pungutan')}}">PUNGUTAN</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/pernyataan')}}">PERNYATAAN</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="grid">
        <!-- <div class="text-start" style="padding-top: 0px;">
            <div>
                <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">TAMBAH</button>
            </div>
        </div> -->
        <div class="text-center">
            <div>
                <table class="w-full border-solid border-2 border-slate-800">
                    <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                        <tr>
                            <th>NO. PENGAJUAN</th>
                            <th>SERI</th>
                            <th>HS CODE</th>
                            <th>URAIAN</th>
                            <th>HARGA</th>
                            <th>SATUAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // SELECT a.no_seri_barang,a.hs_code_barang,a.uraian_barang,a.harga_satuan,b.satuan,c.no_pengajuan
                        foreach ($data_barang_pib as $key => $value) {
                            echo'
                            <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                                <td>'.$value->no_pengajuan.'</td>
                                <td>'.$value->no_seri_barang.'</td>
                                <td>'.$value->hs_code_barang.'</td>
                                <td>'.$value->uraian_barang.'</td>
                                <td>'.$value->harga_satuan.'</td>
                                <td>'.$value->satuan.'</td>
                            </tr>
                            ';
                        }
                        ?>
                    </tbody>
                </table>
                @include('components.pagination')
            </div>
        </div>
    </div>
    <br>
    <div style="padding-top:0px;padding-bottom:20px;text-align:center;"><span class="font-bold text-2xl text-start">TAMBAH BARANG</span></div>
    <form action="/import/save_barang" method="POST" enctype="multipart/form-data">
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
                        <td>Seri</td>
                        <td></td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="no_seri_barang" name="no_seri_barang" maxlength="10" required>
                        </td>
                    </tr>
                    <tr class="text-start mb-4">
                        <td>HS Code</td>
                        <td></td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="hs_code_barang" name="hs_code_barang" maxlength="20" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Lartas</td>
                        <td></td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="lartas_barang" name="lartas_barang" maxlength="200" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Kode</td>
                        <td></td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="kode_barang" name="kode_barang" maxlength="20" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Uraian</td>
                        <td></td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="uraian_barang" name="uraian_barang" maxlength="200" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Merk</td>
                        <td></td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="merk_barang" name="merk_barang" maxlength="100" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Tipe</td>
                        <td></td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="type_barang" name="type_barang" maxlength="100" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Ukuran</td>
                        <td></td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="ukuran_barang" name="ukuran_barang" maxlength="100" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Kondisi Barang</td>
                        <td></td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="kondisi_barang" name="kondisi_barang" maxlength="200" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Negara</td>
                        <td></td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="negara" name="negara" maxlength="100" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Berat Bersih</td>
                        <td></td>
                        <td class="py-1">
                            <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="berat_bersih" name="berat_bersih" maxlength="10" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Dokumen Lartas</td>
                        <td></td>
                        <td class="py-1">
                            <input type="file" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="dokumen_lartas" name="dokumen_lartas" required>
                        </td>
                    </tr>
                </table>
            </div>
            <div>
                <table class="w-full">
                    <tr class="text-start">
                        <td>Satuan</td>
                        <td></td>
                        <td class="py-1">
                            <select class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="satuan_id" name="satuan_id" required>
                                <option value="">-- Pilih --</option>
                                <?php
                                foreach ($data_satuan as $key => $value) {
                                    echo'<option value="'.$value->satuan_id.'">'.$value->satuan.'</option>';
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr class="text-start mb-4">
                        <td>Kemasan</td>
                        <td></td>
                        <td class="py-1">
                            <select class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="kemasan_id" name="kemasan_id" required>
                                <option value="">-- Pilih --</option>
                                <?php
                                foreach ($data_kemasan as $key => $value) {
                                    echo'<option value="'.$value->m_kemasan_id.'">'.$value->kemasan.'</option>';
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Amount</td>
                        <td></td>
                        <td class="py-1">
                            <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="amount" name="amount" maxlength="10" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Jenis Nilai</td>
                        <td></td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="jenis_nilai" name="jenis_nilai" maxlength="100" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Jatuh Tempo</td>
                        <td></td>
                        <td class="py-1">
                            <input type="date" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="jatuh_tempo" name="jatuh_tempo" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Voluntary Declaration</td>
                        <td></td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="voluntary_declaration" name="voluntary_declaration" maxlength="200" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Biaya Tambahan</td>
                        <td></td>
                        <td class="py-1">
                            <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="biaya_tambahan" name="biaya_tambahan" maxlength="10" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Fob</td>
                        <td></td>
                        <td class="py-1">
                            <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="fob" name="fob" maxlength="10" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Harga Satuan</td>
                        <td></td>
                        <td class="py-1">
                            <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="harga_satuan" name="harga_satuan" maxlength="10" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Freight</td>
                        <td></td>
                        <td class="py-1">
                            <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="freight" name="freight" maxlength="10" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Asuransi</td>
                        <td></td>
                        <td class="py-1">
                            <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="asuransi" name="asuransi" maxlength="10" required>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Cif Rupiah</td>
                        <td></td>
                        <td class="py-1">
                            <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="cif_rupiah" name="cif_rupiah" maxlength="10" required>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="text-left pt-5 mt-5">
                <button type="submit" class="text-base bg-blue-600 text-blue-100 px-6 py-2.5 rounded hover:opacity-80">SIMPAN</button>
                <!-- <a href="#" class="text-base bg-yellow-600 text-yellow-100 px-6 py-2.5 rounded hover:opacity-80">Reset</a>
                <a href="{{url('admin/aneka-usaha/permohonan-sewa-lahan')}}" class="text-base text-gray-900 bg-white border border-gray-300 px-6 py-2.5 rounded hover:opacity-80">Batal</a>
                    </div> -->
            </div>
        </div>
    </form>
@endsection

@section('script')
@endsection