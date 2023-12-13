@extends('layouts.admin')
@section('title', 'Eksport Import')
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
                    <li style="padding-left: 10px; padding-right: 10px; color: green;"><a href="{{url('admin/eksport-import/transaksi-ex')}}">DATA TRANSAKSI</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/data-barang-ex')}}">DATA BARANG</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/pungutan-ex')}}">PUNGUTAN</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/pernyataan-ex')}}">PERNYATAAN</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="grid grid-cols-2 gap-4">
        <div>
        <form id="uploadForm" action="/Eksport/save_data_transaksi" method="POST" enctype="multipart/form-data">
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
                    <td>Valuta</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="value">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>NDPBM</td>
                    <td></td>
                    <td class="py-1">
                        <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="ndpbm">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Cara Pembayaran</td>
                    <td></td>
                    <td class="py-1">
                        <select class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="cara_pembayaran_id" required>
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
                    <td>Nilai Ekspor</td>
                    <td></td>
                    <td class="py-1">
                        <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="nilai_ekspor">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Freight</td>
                    <td></td>
                    <td class="py-1">
                        <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="freight">
                    </td>
                </tr>
            </table>
        </div>
        <div>
            <table class="w-full">
                <tr class="text-start">
                    <td>Asuransi</td>
                    <td></td>
                    <td class="py-1">
                        <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="asuransi">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Nilai Maklan</td>
                    <td></td>
                    <td class="py-1">
                        <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="nilai_maklan"> 
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Nilai Bea Keluar</td>
                    <td></td>
                    <td class="py-1">
                        <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="nilai_bea_keluar">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>PPN</td>
                    <td></td>
                    <td class="py-1">
                        <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="ppn">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Berat Kotor</td>
                    <td></td>
                    <td class="py-1">
                        <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="berat_kotor">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Berat Bersih</td>
                    <td></td>
                    <td class="py-1">
                        <input type="number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="berat_bersih">
                    </td>
                </tr>
            </table>
        </div>
        <div class="text-left pt-16 mt-16 pb-9">
            <button type="submit" class="text-base bg-blue-600 text-blue-100 px-6 py-2.5 rounded hover:opacity-80">SIMPAN</button>
        </div>
    </form>
    </div>

    <div class="grid grid-cols-3">
        <div><span class="font-bold text-2xl text-start">Bank Devisa</span></div>
        <div><button data-modal-toggle="defaultModal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">TAMBAH</button></div>
    </div>

    <div class="grid grid-cols-3">
        <table class="mt-5 w-full border-solid border-2 border-slate-800">
            <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                <tr>
                    <th class="py-2 px-3">Seri</th>
                    <th>Kode Bank</th>
                    <th>Nama Bank</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data_bank_devisa as $key => $value) {
                    echo'
                    <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                        <td>'.$value->no_seri.'</td>
                        <td>'.$value->kode_bank.'</td>
                        <td>'.$value->nama_bank.'</td>
                    </tr>
                    ';
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- . MODAL -->
    <!-- <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="font-semibold py-1 px-6 rounded-md hover:opacity-80 bg-blue-600 text-sm text-blue-100 hover:bg-purple-600">Update Tarif</button> -->
    <!-- Main modal -->
    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <form id="uploadForm" action="/Eksport/save_bank_devisa" method="POST" enctype="multipart/form-data">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Bank Devisa
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
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="seri"
                                >
                                </td>
                            </tr>
                            <tr class="text-start mb-4">
                                <td>Kode Bank</td>
                                <td>:</td>
                                <td class="py-1">
                                <input
                                    type="text"
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="kode_bank"
                                >
                                </td>
                            </tr>
                            <tr class="text-start">
                                <td>Nama Bank</td>
                                <td>:</td>
                                <td class="py-1">
                                <input
                                    type="text"
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="nama_bank"
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
            </form>
            </div>
        </div>
    </div>
    <!-- . MODAL -->
@endsection
@section('script')
@endsection