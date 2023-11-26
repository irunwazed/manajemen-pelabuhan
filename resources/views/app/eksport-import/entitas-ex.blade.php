@extends('layouts.admin')
@section('title', 'Eksport Import')
@section('content')
<div class="h-56 grid">
    <div class="text-2xl ">Eksport-Import / Pembuatan Dokumen PIB</div>
        <hr class="border-b-2 border-black border-solid">
        <nav>
            <ul class="menu flex">
                <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/header-ex')}}">HEADER</a></li>
                <li style="padding-left: 10px; padding-right: 10px; color: green;"><a href="{{url('admin/eksport-import/entitas-ex')}}">ENTITAS</a></li>
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
    <form id="uploadForm" action="/Eksport/save_entitas" method="POST" enctype="multipart/form-data">
        <div class="h-56 grid grid-cols-3 gap-4">
            <div class="border-2">
                <div style="padding-top:20px;padding-bottom:20px;text-align:center;"><span class="font-bold text-2xl text-start">EKSPORTIR</span></div>
                <table class="w-full content-center">
                    <tr class="text-start mb-4">
                        <td>Npwp (Nomor Indentitas)</td>
                        <td></td>
                        <td class="py-1">
                            <input
                                type="text"
                                class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="npwpEks" name="npwpEks"
                            >
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Nama</td>
                        <td></td>
                        <td class="py-1">
                            <input
                                type="text"
                                class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="namaEks" name="namaEks"
                            >
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Alamat</td>
                        <td></td>
                        <td class="py-1">
                            <input
                                type="text"
                                class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="alamatEks" name="alamatEks"
                            >
                        </td>
                    </tr>
                </table>
            </div>
            <div class="border-2">
                <table class="w-full text-center">
                    <tr><td colspan="4" style="padding-top:20px;padding-bottom:20px;"><div><span class="font-bold text-2xl text-start">PENERIMA</span></div><td></tr>
                    <tr class="text-start mb-4">
                        <td>Nama</td>
                        <td></td>
                        <td class="py-1">
                            <input
                                type="text"
                                class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="namaPen" name="namaPen"
                            >
                        </td>
                    </tr>
                    <tr class="text-start mb-4">
                        <td>Negara</td>
                        <td></td>
                        <td class="py-1">
                            <input
                                type="text"
                                class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="negaraPen" name="negaraPen"
                            >
                        </td>
                    </tr>
                    <tr class="text-start mb-4">
                        <td>Alamat</td>
                        <td></td>
                        <td class="py-1">
                            <input
                                type="text"
                                class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="alamatPen" name="alamatPen"
                            >
                        </td>
                    </tr>
                </table>
            </div>
            <div class="border-2">
                <table class="w-full text-center">
                    <tr><td colspan="4" style="padding-top:20px;padding-bottom:20px;"><div><span class="font-bold text-2xl text-start">PEMBELI</span></div><td></tr>
                    <tr class="text-start mb-4">
                        <td>Nama</td>
                        <td></td>
                        <td class="py-1">
                            <input
                                type="text"
                                class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="namaPem" name="namaPem"
                            >
                        </td>
                    </tr>
                    <tr class="text-start mb-4">
                        <td>Negara</td>
                        <td></td>
                        <td class="py-1">
                            <input
                                type="text"
                                class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="namaNeg" name="namaNeg"
                            >
                        </td>
                    </tr>
                    <tr class="text-start mb-4">
                        <td>Alamat</td>
                        <td></td>
                        <td class="py-1">
                            <input
                                type="text"
                                class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="alamatNeg" name="alamatNeg"
                            >
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="text-left pt-16 mt-16 pb-9">
            <button type="submit" onclick="submitForm()" class="text-base bg-blue-600 text-blue-100 px-6 py-2.5 rounded hover:opacity-80">SIMPAN</button>
        </div>
    </form>
    <div class="grid grid-cols-2">
        <div><span class="font-bold text-2xl text-start">Pemilik Barang</span></div>
        <div><button data-modal-toggle="defaultModal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">TAMBAH</button></div>
    </div>
    <div class="h-56 grid grid-cols-1">
        <table class="mt-5 w-full border-solid border-2 border-slate-800">
            <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                <tr>
                    <th class="py-2 px-3">Seri</th>
                    <th>Nomor Identitas</th>
                    <th>Alamat</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                    <td style="text-align: center;"> . </td>
                    <td style="text-align: center;"> . </td>
                    <td style="text-align: center;"> . </td>
                    <td style="text-align: center;"> . </td>
                </tr>
            </tbody>
        </table>
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
                        PEMILIK BARANG
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
                                <td>Npwp (Nomor Identitas)</td>
                                <td>:</td>
                                <td class="py-1">
                                <input
                                    type="text"
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                >
                                </td>
                            </tr>
                            <tr class="text-start mb-4">
                                <td>Nama</td>
                                <td>:</td>
                                <td class="py-1">
                                <input
                                    type="text"
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                >
                                </td>
                            </tr>
                            <tr class="text-start">
                                <td>Alamat</td>
                                <td>:</td>
                                <td class="py-1">
                                <input
                                    type="text"
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                >    
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">SIMPAN</button>
                    <button data-modal-hide="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">BATAL</button>
                </div>
            </div>
        </div>
    </div>
    <!-- . MODAL -->
@endsection

@section('script')
@endsection