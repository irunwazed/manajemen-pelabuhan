@extends('layouts.admin')
@section('title', 'Eksport-Import')
@section('content')
    <div class="h-56 grid">
        <div class="text-2xl ">Eksport-Import / Pembuatan Dokumen PEB</div>
            <hr class="border-b-2 border-black border-solid">
            <nav>
                <ul class="menu flex">
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/header-ex')}}">HEADER</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/entitas-ex')}}">ENTITAS</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/dokumen-pendukung-ex')}}">DOKUMEN PENDUKUNG</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/pengangkutan-ex')}}">DATA PENGANGKUTAN</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/kemasan-kontainer-ex')}}">KEMASAN DAN KONTAINER</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/transaksi-ex')}}">DATA TRANSAKSI</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: green;"><a href="{{url('admin/eksport-import/data-barang-ex')}}">DATA BARANG</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/pungutan-ex')}}">PUNGUTAN</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/pernyataan-ex')}}">PERNYATAAN</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="h-56 grid">
        <div class="text-start" style="padding-top: 0px;">
            <div>
                <div style="padding-top:0px;padding-bottom:10px;text-align:left;"><span class="font-bold text-2xl text-start">Data Barang</span></div>    
            </div>
        </div>
        <div class="text-center">
            <div>
                <table class="w-full border-solid border-2 border-slate-800">
                    <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                        <tr>
                            <th class="py-2 px-3">SERI</th>
                            <th>HS CODE</th>
                            <th>URAIAN</th>
                            <th>HARGA</th>
                            <th>SATUAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data_barang_peb as $key => $value) {
                            echo'
                            <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                                <td>'.$value->no_seri.'</td>
                                <td>'.$value->hs_code.'</td>
                                <td>'.$value->uraian.'</td>
                                <td>'.$value->harga_fob.'</td>
                                <td>'.$value->satuan.'</td>
                            </tr>
                            ';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div style="padding-top:0px;padding-bottom:20px;text-align:center;"><span class="font-bold text-2xl text-start">TAMBAH BARANG</span></div>
    <div class="grid grid-cols-2 gap-4">
        <div>
        <form id="uploadForm" action="/Eksport/save_data_barang" method="POST" enctype="multipart/form-data">
            <table class="w-full">
                <tr class="text-start">
                    <td>Header PEB</td>
                    <td></td>
                    <td class="py-1">
                    <select class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="header_peb" name="header_peb">
                            <option value="">-- Pilih --</option>
                            <?php
                            foreach ($data_header_peb as $key => $value) {
                                echo'<option value="'.$value->header_peb_id.'">'.$value->no_pengajuan.'</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Seri</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="no_seri">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>HS Code</td>
                    <td></td>
                    <td class="py-1">
                         <select class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="hs_code" required>
                        <option value="">-- Pilih --</option>
                            <?php
                            foreach ($data_hs_code as $key => $value) {
                                echo'<option value="'.$value->hs_code_id.'">'.$value->hs_code.'</option>';
                            }
                            ?>
                        </select>    
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Lartas</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="lartas">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Kode</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="kode">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Uraian</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="uraian">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Merk</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="merk">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Tipe</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="type">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Ukuran</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="ukuran">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Negara Asal Barang</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="negara_asal_barang" >
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Daerah Asal Barang</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="daerah_asal_barang">
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
                        <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="satuan">
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
                    <td>Harga Fob</td>
                    <td></td>
                    <td class="py-1">
                        <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" nama="harga_fob" >
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Volume</td>
                    <td></td>
                    <td class="py-1">
                        <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" nama="volume" >
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Berat Bersih</td>
                    <td></td>
                    <td class="py-1">
                        <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" nama="berat_bersih" >
                    </td>
                </tr>
                <tr class="text-start">
                    <td>harga Satuan Fob</td>
                    <td></td>
                    <td class="py-1">
                        <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" nama="satuan">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Biaya Tambahan</td>
                    <td></td>
                    <td class="py-1">
                        <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" nama="biaya_tambahan" >
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Fob</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" nama="harga_satuan_fob">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Harga Satuan</td>
                    <td></td>
                    <td class="py-1">
                        <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="harga_satuan">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Freight</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="Freight">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Asuransi</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="Asuransi">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Cif Rupiah</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="cif_rupiah" >
                    </td>
                </tr>
            </table>
        </div>
        <div class="text-left pt-5 mt-5">
            <button type="submit"  class="text-base bg-blue-600 text-blue-100 px-6 py-2.5 rounded hover:opacity-80">SIMPAN</button>
        </div>
       </form >
    </div>
    <br>
    <div class="grid"><div class="grid grid grid-cols-4">
        <div class="text-2xl ">Dokumen Fasiltas Lartas</div>
        <button data-modal-toggle="defaultModal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800-right">TAMBAH</button>        
    </div>
    <br>
    <div class="text-center">
        <div>
            <table class="w-full border-solid border-2 border-slate-800">
                <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                    <tr>
                        <th class="py-2 px-3">Seri</th>
                        <th>Jenis</th>
                        <th>Nomor</th>
                        <th>Tanggal</th>
                        <th>Izin</th>
                        <th>File</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                        foreach ($data_lartas as $key => $value) {
                            echo'
                            <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                                <td>'.$value->no_seri.'</td>
                                <td>'.$value->jenis.'</td>
                                <td>'.$value->nomor.'</td>
                                <td>'.$value->tanggal_dok.'</td>
                                <td>'.$value->izin.'</td>
                                <td>'.$value->nama_file.'</td>
                            </tr>
                            ';
                        }
                        ?>
                    </tbody>
            </table>
        </div>
    </div>
    <!-- . MODAL -->
    <!-- <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="font-semibold py-1 px-6 rounded-md hover:opacity-80 bg-blue-600 text-sm text-blue-100 hover:bg-purple-600">Update Tarif</button> -->
    <!-- Main modal -->
    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <form id="uploadForm" action="/Eksport/save_lartas" method="POST" enctype="multipart/form-data">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Dokumen Fasiltas Lartas
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <div class="mt-5 grid grid-cols-1 gap-2">
                        <table class="w-full">
                            <tr class="text-start">
                                <td>Seri</td>
                                <td>:</td>
                                <td class="py-1">
                                <input
                                    type="text"
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="no_seri"
                                >
                                </td>
                            </tr>
                            <tr class="text-start mb-4">
                                <td>Jenis</td>
                                <td>:</td>
                                <td class="py-1">
                                <input
                                    type="text"
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="jenis"
                                >
                                </td>
                            </tr>
                            <tr class="text-start">
                                <td>Nomor</td>
                                <td>:</td>
                                <td class="py-1">
                                <input
                                    type="number"
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="nomor"
                                >    
                                </td>
                            </tr>
                            <tr class="text-start">
                                <td>Tanggal</td>
                                <td>:</td>
                                <td class="py-1">
                                <input
                                    type="date"
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="tanggal_dok"
                                >    
                                </td>
                            </tr>
                            <tr class="text-start">
                                <td>File</td>
                                <td>:</td>
                                <td class="py-1">
                                <input
                                    type="file"
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="nama_file"
                                >    
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">SIMPAN</button>
                    <button type="reset" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">BATAL</button>    
                </div>
            </div>
        </form>
        </div>
    </div>
    <!-- . MODAL -->
@endsection

@section('script')
@endsection