@extends('layouts.admin')
@section('title', 'Pelayanan Barang')
@section('content')
<div class="">
    <div class="text-2xl ">
        Pelayanan Barang /
        <a href="{{url('admin/pelayanan-barang/penumpukan-2b1')}}"> Penumpukan 2B1 </a>
        / Create 2B1
    </div>
    <hr class="border-b-2 border-black border-solid">
    <div class="text-center mb-3 mt-5">
        <div class="mt-5 grid grid-cols-2 gap-2">
            <div>
                <table class="w-full">
                    <tr class="text-start">
                        <td>No PKK</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" disabled class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" value="Auto Fill">
                        </td>
                    </tr>
                    <tr class="text-start mb-4">
                        <td>No RKBM</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" disabled class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" value="Auto Fill">
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>No Form 2B1</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Nama PBM</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" disabled class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" value="Auto Fill">
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Nama Kapal</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" disabled class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" value="Auto Fill">
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Kegiatan</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" disabled class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" value="Auto Fill">
                        </td>
                    </tr>
                </table>
            </div>
            <div>
                <table class="w-full">
                    <tr class="text-start">
                        <td></td>
                        <td></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr class="text-start">
                        <td></td>
                        <td></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr class="text-start mb-4">
                        <td></td>
                        <td></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr class="text-start">
                        <td></td>
                        <td>&nbsp;</td>
                        <td></td>
                    </tr>
                    <tr class="text-start">
                        <td>Tanggal 2B1</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="date" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="pt-5">
            <div class="text-start">
                <span class="text-black font-bold ">List Barang</span>
            </div>
            <table class="mt-5 w-full border-solid border-2 border-slate-800">
                <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                    <tr>
                        <th class="py-5 px-3">Nama Barang</th>
                        <th>Tuslag</th>
                        <th>No Bol</th>
                        <th>Jenis Kegiatan</th>
                        <th>Lokasi</th>
                        <th>Penyaluran</th>
                        <th>Jumlah Barang</th>
                        <th>Satuan</th>
                        <th>Tarif Dermaga</th>
                        <th>Tarif Penumpukan</th>
                        <th>Masa Penumpukan</th>
                        <th class="px-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-solid border-2 border-slate-800 bg-slate-200 hover:bg-slate-300">
                        <td>xxxx</td>
                        <td>xxxx</td>
                        <td>xxxx</td>
                        <td>xxxx</td>
                        <td>Lorem ipsum dolor sit amet consectetur</td>
                        <td>xxxx</td>
                        <td>Titanic</td>
                        <td>2 Oktober 2020</td>
                        <td>2 Oktober 2020</td>
                        <td>2 Oktober 2020</td>
                        <td>2 Oktober 2020</td>
                        <td>

                            <button data-modal-toggle="defaultModal" class="mt-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Update Tarif</button>
                            <!-- <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="font-semibold py-1 px-6 rounded-md hover:opacity-80 bg-blue-600 text-sm text-blue-100 hover:bg-purple-600">Update Tarif</button> -->
                            <!-- Main modal -->
                            <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-2xl max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                UPDATE TARIF PENUMPUKAN BARANG 2B1
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
                                            <div class="mt-5 grid grid-cols-2 gap-2">
                                                <div>
                                                    <table class="w-full">
                                                        <tr class="text-start">
                                                            <td>Barang</td>
                                                            <td>:</td>
                                                            <td class="py-1">
                                                                <select id="barang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                    <option value="US">Kayu</option>
                                                                    <option value="CA">Kaca</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="text-start mb-4">
                                                            <td>Tuslag</td>
                                                            <td>:</td>
                                                            <td class="py-1">
                                                                <select id="barang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                    <option value="US">AAAA</option>
                                                                    <option value="CA">BBBB</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="text-start">
                                                            <td>No BoL</td>
                                                            <td>:</td>
                                                            <td class="py-1">
                                                                <input type="text" disabled class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" value="Auto Fill">
                                                            </td>
                                                        </tr>
                                                        <tr class="text-start">
                                                            <td>Tarif Dermaga</td>
                                                            <td>:</td>
                                                            <td class="py-1">
                                                                <input type="text" disabled class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" value="Auto Fill">
                                                            </td>
                                                        </tr>
                                                        <tr class="text-start">
                                                            <td>Tarif Penumpukan</td>
                                                            <td>:</td>
                                                            <td class="py-1">
                                                                <input type="text" disabled class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" value="Auto Fill">
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div>
                                                    <table class="w-full">
                                                        <tr class="text-start">
                                                            <td>Jenis Kegiatan</td>
                                                            <td>:</td>
                                                            <td class="py-1">
                                                                <input type="text" disabled class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" value="Auto Fill">
                                                            </td>
                                                        </tr>
                                                        <tr class="text-start mb-4">
                                                            <td>Jenis Penyaluran</td>
                                                            <td>:</td>
                                                            <td class="py-1">
                                                                <input type="text" disabled class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" value="Auto Fill">
                                                            </td>
                                                        </tr>
                                                        <tr class="text-start">
                                                            <td>Jumlah Barang</td>
                                                            <td>:</td>
                                                            <td class="py-1">
                                                                <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" value="100">
                                                            </td>
                                                        </tr>
                                                        <tr class="text-start">
                                                            <td>Satuan</td>
                                                            <td>:</td>
                                                            <td class="py-1">
                                                                <select id="barang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                    <option value="US">KG</option>
                                                                    <option value="CA">Meter</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="text-start">
                                                            <td>Lokasi</td>
                                                            <td>:</td>
                                                            <td class="py-1">
                                                                <select id="barang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                    <option value="US">Jakarta</option>
                                                                    <option value="CA">Semarang</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="text-start">
                                                            <td>Masa Penumpukan</td>
                                                            <td>:</td>
                                                            <td class="py-1">
                                                                <select id="barang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                    <option value="US">1 hari</option>
                                                                    <option value="CA">2 Hari</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                            <button data-modal-hide="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update Tarif</button>
                                            <button data-modal-hide="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- . MODAL -->
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="text-start mt-3">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">SIMPAN</button>
            <a href="{{url('admin/pelayanan-barang/penumpukan-2b1')}}" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">KEMBALI</a>
        </div>
    </div>
</div>
@endsection

@section('script')
@endsection