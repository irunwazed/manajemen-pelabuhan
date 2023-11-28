@extends('layouts.admin')
@section('title', 'Pengeluaran Barang')
@section('content')
<div class="">
    <div class="text-2xl ">
        Warehousing /
        <!-- <a href="{{url('admin/penyewaan-alat/permohonan-1c')}}"> Permohonan 1C </a> -->
        Pengeluaran Barang
    </div>
    <hr class="border-b-2 border-black border-solid">
    <div class="font-bold text-2xl text-center pt-5">PENGELUARAN BARANG</div>
    <div class="h-56 grid grid-cols-2 gap-4 content-center pt-16">
        <div>
            <table class="w-full">
                <tr class="text-start mb-4">
                    <td>No. Pengeluaran</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" placeholder="">    
                    </td>
                </tr>
                <tr class="text-start">
                    <td>No. Penerimaan</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" placeholder="AUTO FILL">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Nama PBM</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" placeholder="AUTO FILL">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Dokumen Pendukung</td>
                    <td>:</td>
                    <td class="py-1">
                    <input type="file" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" placeholder="Tahun">
                    </td>
                </tr>
                <tr class="text-start">
                    <td colspan = "3">
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">SIMPAN</button>
                    </td>
                </tr>
            </table>
        </div>
        <div>
            <table class="w-full">
                <tr class="text-start mb-4">
                    <td>Tanggal Keluar</td>
                    <td>:</td>
                    <td class="py-1">
                    <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Tanggal Masuk</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" placeholder="AUTO FILL">    
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Nama Kapal</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" placeholder="AUTO FILL">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>PIC PBM</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>PIC Gudang</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="grid grid-cols-2 pt-16">
        <!-- <div class="bottom-0 left-0"><span class="text-2xl font-bold">List Alat</span></div>

         <div class="text-end pt-5">
            <a href="" class="font-semibold py-1 px-6 rounded-md hover:opacity-80 btn-lg text-2xl bg-blue-600 text-blue-100 hover:bg-purple-600">Tambah Alat</a>
        </div> -->
    </div>
        <!-- <div class="w-full">
            <a href="{{url('admin/penyewaan-alat/create-permohonan-1c')}}" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah</a>
        </div> -->
    <div class="text-center">
        <div class="">
            <table class="mt-3 w-full border-solid border-2 border-slate-800">
                <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                    <tr>
                        <th class="py-5 px-3">No. Container</th>
                        <th>Type</th>
                        <th>Kegiatan</th>
                        <th>Lokasi</th>
                        <th>Posisi</th>
                        <th>Row</th>
                        <th>Column</th>
                        <th>Pilih</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-solid border-2 border-slate-800 bg-slate-200 hover:bg-slate-300">
                        <td>C123343545</td>
                        <td>Type 1</td>
                        <td>100</td>
                        <td>Bongkar</td>
                        <td>Pelabuhan</td>
                        <td>1</td>
                        <td>2</td>
                        <td>&nbsp;</td>  
                        <!-- <td>22-10-2023 22.00</td>
                        <td>100.000</td>
                        <td class="py-2 flex flex-wrap gap-1 justify-center ">
                            <a href="#{{url('admin/penyewaan-alat/create-permohonan-1c')}}" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">View</a>
                            <a href="#{{url('admin/penyewaan-alat/create-permohonan-1c')}}" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:focus:ring-yellow-900">Edit</a>
                        </td> -->
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- <div class="text-start mt-3">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">SIMPAN</button>
            <a href="{{url('admin/penyewaan-alat/permohonan-1c')}}" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">KEMBALI</a>
        </div> -->
    </div>
</div>
@endsection

@section('script')
@endsection