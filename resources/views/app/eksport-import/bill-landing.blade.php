@extends('layouts.admin')
@section('title', 'Eksport Import')
@section('content')
    <div class="h-56 grid">
        <div class="text-2xl ">Eksport-Import / Pembuatan Dokumen PIB</div>
            <hr class="border-b-2 border-black border-solid">
            <nav>
            <ul class="menu flex">
                <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/data-umum')}}">Data Umum</a></li>
                <li style="padding-left: 10px; padding-right: 10px; color: green;"><a href="{{url('admin/eksport-import/bill-landing')}}">Bill Of Landing</a></li>
                <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/lampiran')}}">Lampiran</a></li>
            </ul>
            </nav>
        </div>
    </div>
    <div class="h-56 grid grid-cols-2 gap-4">
        <div>
            <table class="w-full">
                <tr class="text-start">
                    <td>Kelompok POS</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="kelompok_pos">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Master BOL</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="master_bol">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Pelabuhan Asal</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="pelabuhan_asal">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Pelabuhan Bongkar</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="pelabuhan_bongkar">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Nama Kapal</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="nama_kapal">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Pengirim</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="nama_pengirim">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Berat</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="berat">
                    </td>
                </tr>
                <!-- <tr class="text-start">
                    <td>Dimensi</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="nama_kapal">
                    </td>
                </tr> -->
            </table>
        </div>
        <div>
            <table class="w-full">
                <tr class="text-start">
                    <td>Nomor Pos</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="nomor_pos">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Bol</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="bol">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Pelabuhan Transit</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="pelabuhan_transit">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Pelabuhan Akhir</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="pelabuhan_akhir">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Nama Penerima/Cosignee</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="nama_penerima">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>NPWP Pengirim</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="npwp_pengirim">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Nama Kemasan</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="nama_kemasan">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Total Kemasan</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="total_kemasan">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Npwp penerima</td>
                    <td></td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="npwp_penerima">
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="text-left pt-16 mt-16 pb-9">
        <a href="#" class="text-base bg-blue-600 text-blue-100 px-6 py-2.5 rounded hover:opacity-80">SIMPAN</a>
    </div>
    <div class="h-56 grid grid-cols-3">
        <div><span class="font-bold text-2xl text-start">Data HS</span></div>
        <div><button data-modal-toggle="defaultModal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">TAMBAH</button></div>
    </div>
    <div class="h-56 grid grid-cols-3">
        <table class="mt-5 w-full border-solid border-2 border-slate-800">
            <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                <tr>
                    <th class="py-2 px-3">HS</th>
                    <th>Uraian</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                    <td style="text-align: center;"> . </td>
                    <td style="text-align: center;"> . </td>
                </tr>
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
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Tambah HS
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
                                <td>Hs Code</td>
                                <td>:</td>
                                <td class="py-1">
                                <input
                                    type="text"
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="hscode"
                                >
                                </td>
                            </tr>
                            <tr class="text-start mb-4">
                                <td>uraian</td>
                                <td>:</td>
                                <td class="py-1">
                                <input
                                    type="text"
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="uraian"
                                >
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                    <button data-modal-hide="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- . MODAL -->
@endsection

@section('script')
@endsection