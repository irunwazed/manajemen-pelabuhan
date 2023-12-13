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
                    <li style="padding-left: 10px; padding-right: 10px; color: green;"><a href="{{url('admin/eksport-import/kemasan-kontainer-ex')}}">KEMASAN DAN KONTAINER</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/transaksi-ex')}}">DATA TRANSAKSI</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/data-barang-ex')}}">DATA BARANG</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/pungutan-ex')}}">PUNGUTAN</a></li>
                    <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/pernyataan-ex')}}">PERNYATAAN</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="grid grid-cols-4">
        <div><span class="font-bold text-2xl text-start">KEMASAN</span>
        </div>
        <div style="text-align: right; padding-top:0px;">
        <button data-modal-toggle="defaultModalKemasan" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">TAMBAH</button>
        </div>
        <div><span class="font-bold text-2xl text-start">KONTAINER</span>
        </div>
        <div style="text-align: right; padding-top:0px;">
        <button data-modal-toggle="defaultModalKontainer" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">TAMBAH</button>
        </div>
    </div>
    <div class="grid grid-cols-2 pt-5 gap-4">
        <table class="mt-5 w-full border-solid border-2 border-slate-800">
            <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                <tr>
                    <th class="py-2 px-3">Seri</th>
                    <th>Jumlah</th>
                    <th>Jenis</th>
                    <th>Merek</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data_kemasan_peb as $key => $value) {
                    echo'
                    <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                        <td>'.$value->seri_kemasan.'</td>
                        <td>'.$value->jumlah_kemasan.'</td>
                        <td>'.$value->jenis_kemasan.'</td>
                        <td>'.$value->merk_kemasan.'</td>
                    </tr>
                    ';
                }
                ?>
            </tbody>
        </table>
        <table class="mt-5 w-full border-solid border-2 border-slate-800">
            <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                <tr>
                    <th class="py-2 px-3">Seri</th>
                    <th>Nomor</th>
                    <th>Ukuran</th>
                    <th>Tipe</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($data_kontainer_peb as $key => $value) {
                    echo'
                    <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                        <td>'.$value->seri_kontainer.'</td>
                        <td>'.$value->no_kontainer.'</td>
                        <td>'.$value->ukuran_kontainer.'</td>
                        <td>'.$value->type_kontainer.'</td>
                    </tr>
                    ';
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="font-semibold py-1 px-6 rounded-md hover:opacity-80 bg-blue-600 text-sm text-blue-100 hover:bg-purple-600">Update Tarif</button> -->
    <!-- Main modal -->
    <div id="defaultModalKemasan" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <form id="uploadForm" action="/Eksport/save_kemasan" method="POST" enctype="multipart/form-data">
                <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        KEMASAN
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModalKemasan">
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
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="seri_kemasan"
                                >
                                </td>
                            </tr>
                            <tr class="text-start mb-4">
                                <td>Jumlah</td>
                                <td>:</td>
                                <td class="py-1">
                                <input
                                    type="number"
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="jumlah_kemasan"
                                >
                                </td>
                            </tr>
                            <tr class="text-start">
                                <td>Jenis</td>
                                <td>:</td>
                                <td class="py-1">
                                <input
                                    type="text"
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="jenis_kemasan"
                                >    
                                </td>
                            </tr>
                            <tr class="text-start">
                                <td>Merek</td>
                                <td>:</td>
                                <td class="py-1">
                                <input
                                    type="text" 
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="merk_kemasan"
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
            <!-- <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="font-semibold py-1 px-6 rounded-md hover:opacity-80 bg-blue-600 text-sm text-blue-100 hover:bg-purple-600">Update Tarif</button> -->
    <!-- Main modal -->
    <div id="defaultModalKontainer" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <form id="uploadForm" action="/Eksport/save_kontainer" method="POST" enctype="multipart/form-data">
                <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        KONTAINER
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModalKontainer">
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
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="seri_kontainer"
                                >
                                </td>
                            </tr>
                            <tr class="text-start mb-4">
                                <td>Nomor</td>
                                <td>:</td>
                                <td class="py-1">
                                <input
                                    type="number"
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="no_kontainer"
                                >
                                </td>
                            </tr>
                            <tr class="text-start">
                                <td>Ukuran</td>
                                <td>:</td>
                                <td class="py-1">
                                <input
                                    type="number"
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="ukuran_kontainer"
                                >    
                                </td>
                            </tr>
                            <tr class="text-start">
                                <td>Tipe</td>
                                <td>:</td>
                                <td class="py-1">
                                <input
                                    type="text"
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="type_kontainer"
                                >    
                            </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- Modal footer -->
                <<div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
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