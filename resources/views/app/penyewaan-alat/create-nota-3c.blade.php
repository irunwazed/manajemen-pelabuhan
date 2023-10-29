@extends('layouts.admin')
@section('title', 'Penyewaan Alat')
@section('content')
    <div class="">
        <div class="text-2xl ">
            Penyewaan Alat /
            <a href="{{url('admin/penyewaan-alat/nota-3c')}}"> Nota 3C </a>
            / Create Nota 3C
        </div>

        <hr class="border-b-2 border-black border-solid">

        <div class="h-56 grid grid-cols-2 gap-4 content-center pt-16">
            <div>
                <table class="w-full">
                    <tr  class="text-start mb-4">
                        <td>PT. PELABUHAN INDONESIA</td>
                    </tr>
                    <tr  class="text-start mb-4">
                        <td>CABANG: </td>
                    </tr>
                </table>
            </div>
            <div>
                <table class="w-full border-2">
                    <tr  class="text-start mb-4 border-2">
                        <td class="border-2 w-[10px]">BENTUK</td>
                        <td class="border-2 w-[10px]">:</td>
                        <td class="border-2  w-[50px]">3C</td>
                    </tr>
                    <tr  class="text-start mb-4 border-2">
                        <td class="border-2">NOMOR</td>
                        <td class="border-2">:</td>
                        <td class="border-2"></td>
                    </tr>
                    <tr  class="text-start mb-4 border-2">
                        <td class="border-2">TGL CETAK</td>
                        <td class="border-2">:</td>
                        <td class="border-2"></td>
                    </tr>
                </table>
            </div>
        </div>

        <hr class="border-b-2 border-black border-solid">
        <div class="font-bold text-2xl text-center pt-5 underline">PERHITUNGAN SEWA ALAT2 / RUPA2</div>
        <div class="font-bold text-2xl text-center">NOMOR PERMOHONAN: </div>

        <div class="h-56 grid grid-cols-2 gap-4 content-center pt-16">
            <div>
                <table class="w-full">
                    <tr  class="text-start mb-4">
                        <td>No. Bukti 2C</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr  class="text-start">
                        <td class="">Perusahaan</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr  class="text-start">
                        <td>Keterangan / Kapal</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="mb-3 mt-5 pt-5 ">
            <div class="text-center ">
                <table class="mt-5 w-full border-solid border-2 border-slate-800">
                    <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                        <tr >
                            <th class="py-5 px-3">No. SPK</th>
                            <th>Nama Alat</th>
                            <th>Tarif</th>
                            <th>Waktu Pakai</th>
                            <th>Lama Pakai</th>
                            <th>Jumlah Sewa Lumpsum</th>
                            <th>Satuan Tarif</th>
                            <th>Harga Sewa Lumpsum</th>
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
                        <td>Meter</td>
                        <td>100.000</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <table class="w-full">
                    <tr  class="text-start mb-4">
                        <td>Jumlah Istirahat</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr  class="text-start">
                        <td class="">Jumlah Hambatan</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr  class="text-start">
                        <td>Jumlah Penambahan</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr  class="text-start">
                        <td>Total Jam</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr  class="text-start">
                        <td>Biaya Alat</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr  class="text-start">
                        <td>Biaya Lumpsum</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                </table>
                <hr>
                <table class="w-full">
                    <tr  class="text-start mb-4">
                        <td>Total Biaya Alat</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr  class="text-start">
                        <td class="">PPN 10%</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr  class="text-start">
                        <td>Total Biaya Tagihan</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                </table>
            </div>
        <div class="text-start mt-3">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create</button>
            <a href="{{url('admin/penyewaan-alat/nota-3c')}}" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">KEMBALI</a>
        </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
