@extends('layouts.admin')
@section('title', 'Eksport-Import')
@section('content')
    <div class="h-56 grid">
        <div class="text-2xl ">Eksport-Import / Pembuatan Dokumen PIB</div>
            <hr class="border-b-2 border-black border-solid">
            <nav>
                <ul class="menu flex">
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/header-ex')}}">HEADER</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/entitas-ex')}}">ENTITAS</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: green;"><a href="{{url('admin/eksport-import/dokumen-pendukung-ex')}}">DOKUMEN PENDUKUNG</a></li>
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
    <div class="h-56 grid">
        <div class="text-start" style="padding-top: 0px;">
            <div>
                <button data-modal-toggle="defaultModal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">TAMBAH DOKUMEN</button>
            </div>
        </div>
        <br>
        <span class="label label-info">Wajib melampirkan Dokumen invoice dan dokumen Bill of Lading</span><br>
        Dokumen Lampiran
        <div class="text-center mb-3 mt-5">
            <div>
                <table class="mt-5 w-full border-solid border-2 border-slate-800">
                    <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                        <tr>
                            <th class="py-2 px-3">Seri</th>
                            <th>Jenis</th>
                            <th>Nomor</th>
                            <th>Izin</th>
                            <th>Tanggal</th>
                            <th>File</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                            <td> . </td>
                            <td> . </td>
                            <td> . </td>
                            <td> . </td>
                            <td> . </td>
                            <td> . </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        <!-- <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="font-semibold py-1 px-6 rounded-md hover:opacity-80 bg-blue-600 text-sm text-blue-100 hover:bg-purple-600">Update Tarif</button> -->
    <!-- Main modal -->
    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        DOKUMEN PENDUKUNG
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
                <form id="uploadForm" action="/Eksport/save_dokumen_pendukung" method="POST" enctype="multipart/form-data">
                    <div class="mt-5 grid grid-cols-1 gap-2">
                            <table class="w-full">
                                <tr class="text-start">
                                    <td>Header PIB</td>
                                    <td class="py-1">
                                        <select class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="header_pib" name="header_pib" required>
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
                                    <td class="py-1">
                                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"  id="no_seri" name="no_seri">
                                    </td>
                                </tr>
                                <tr class="text-start mb-4">
                                    <td>Jenis</td>
                                    <td class="py-1">
                                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"  id="jenis_dokumen" name="jenis_dokumen">
                                    </td>
                                </tr>
                                <tr class="text-start">
                                    <td>Nomor</td>
                                    <td class="py-1">
                                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"  id="izin" name="izin">
                                    </td>
                                </tr>
                                <tr class="text-start">
                                    <td>Izin</td>
                                    <td class="py-1">
                                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"  id="nomor_dokumen" name="nomor_dokumen">
                                    </td>
                                </tr>
                                <tr class="text-start">
                                    <td>Tanggal</td>
                                    <td class="py-1">
                                        <input type="date" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"  id="tgl_dokumen" name="tgl_dokumen">
                                    </td>
                                </tr>
                                <tr class="text-start">
                                    <td>Browse</td>
                                    <td class="py-1">
                                        <input type="file" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"  id="nama_file" name="nama_file">
                                    </td>
                                </tr>
                            </table>
                    </div>
                </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">SIMPAN</button>
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