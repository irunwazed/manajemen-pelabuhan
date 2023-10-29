@extends('layouts.admin')
@section('title', 'Penyewaan Alat')
@section('content')
<div class="">
    <div class="text-2xl ">
        Penyewaan Alat /
        <a href="{{url('admin/penyewaan-alat/permohonan-1c')}}"> Permohonan 1C </a>
        / Buat Data
    </div>
    <hr class="border-b-2 border-black border-solid">
    <div class="font-bold text-2xl text-center pt-5">FORM PERMOHONAN 1C - PENYEWAAN ALAT</div>
    <div class="h-56 grid grid-cols-2 gap-4 content-center pt-16">
        <div>
            <table class="w-full">
                <tr class="text-start mb-4">
                    <td>No Form 1C</td>
                    <td>:</td>
                    <td class="py-1">
                        <div class="grid grid-cols-3 gap-2">
                            <div class="">
                                <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" placeholder="Tahun">
                            </div>
                            <div class="col-span-2">
                                <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" placeholder="No Form 1C">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="text-start">
                    <td>PERUSAHAAN</td>
                    <td>:</td>
                    <td class="py-1">
                        <select id="barang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="US">JAYA GROUP</option>
                            <option value="CA">SAKTI MANTRA</option>
                        </select>
                    </td>
                </tr>
                <tr class="text-start">
                    <td>KAPAL</td>
                    <td>:</td>
                    <td class="py-1">
                        <select id="barang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="US">TITANIC</option>
                            <option value="CA">SELAM</option>
                        </select>
                    </td>
                </tr>
                <tr class="text-start">
                    <td>KEPERLUAN</td>
                    <td>:</td>
                    <td class="py-1">
                        <select id="barang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="US">KOMERSIL</option>
                            <option value="CA">DINAS</option>
                        </select>
                    </td>
                </tr>
            </table>
        </div>
        <div>
            <table class="w-full">
                <tr class="text-start mb-4">
                    <td>Tanggal 1C</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="date" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="h-56 grid grid-cols-2 gap-4 content-center pt-16">
        <div>
            <table class="w-full">
                <tr class="text-start mb-4">
                    <td>Alat</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Tgl/Jam Mulai</td>
                    <td>:</td>
                    <td class="py-1">
                        <div class="grid grid-cols-3 gap-2">
                            <div class="col-span-2">
                                <input type="date" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                            </div>
                            <div>
                                <input type="time" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Tgl/Jam Selesai</td>
                    <td>:</td>
                    <td class="py-1">
                        <div class="grid grid-cols-3 gap-2">
                            <div class="col-span-2">
                                <input type="date" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                            </div>
                            <div>
                                <input type="time" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div>
            <table class="w-full">
                <tr class="text-start mb-4">
                    <td>Jumlah</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Satuan Tarif</td>
                    <td>:</td>
                    <td class="py-1">
                        <select id="barang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="US">KG</option>
                            <option value="CA">Meter</option>
                        </select>
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Harga</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" disabled class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" value="100.000">
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="grid grid-cols-2 pt-16">
        <div class="bottom-0 left-0"><span class="text-2xl font-bold">List Alat</span></div>

        <!-- <div class="text-end pt-5">
            <a href="" class="font-semibold py-1 px-6 rounded-md hover:opacity-80 btn-lg text-2xl bg-blue-600 text-blue-100 hover:bg-purple-600">Tambah Alat</a>
        </div> -->
    </div>
        <div class="w-full">
            <a href="{{url('admin/penyewaan-alat/create-permohonan-1c')}}" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah</a>
        </div>
    <div class="text-center">
        <div class="">
            <table class="mt-3 w-full border-solid border-2 border-slate-800">
                <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                    <tr>
                        <th class="py-5 px-3">Kode Alat</th>
                        <th>Nama Alat</th>
                        <th>Jumlah</th>
                        <th>Satuan Trf</th>
                        <th>Tarif</th>
                        <th>Minimal Pakai</th>
                        <th>Tgl/Jam Mulai</th>
                        <th>Tgl/Jam Selesai</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-solid border-2 border-slate-800 bg-slate-200 hover:bg-slate-300">
                        <td>XXXX</td>
                        <td>Sapu</td>
                        <td>100</td>
                        <td>KG</td>
                        <td>100.000</td>
                        <td>1</td>
                        <td>22-10-2023 10.00</td>
                        <td>22-10-2023 22.00</td>
                        <td>100.000</td>
                        <td class="py-2 flex flex-wrap gap-1 justify-center ">
                            <a href="#{{url('admin/penyewaan-alat/create-permohonan-1c')}}" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">View</a>
                            <a href="#{{url('admin/penyewaan-alat/create-permohonan-1c')}}" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:focus:ring-yellow-900">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="text-start mt-3">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">SIMPAN</button>
            <a href="{{url('admin/penyewaan-alat/permohonan-1c')}}" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">KEMBALI</a>
        </div>
    </div>
</div>
@endsection

@section('script')
@endsection