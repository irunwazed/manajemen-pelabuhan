@extends('layouts.admin')
@section('title', 'Aneka Usaha')
@section('content')
<div class="">
    <div class="text-2xl ">Aneka Usaha / Sea Bunker / Detail Sewa Bunker</div>
    <hr class="border-b-2 border-black border-solid">
    <div class="font-bold text-2xl text-center pt-5">Entry Permohonan Bunker</div>

    <div class="h-56 grid grid-cols-1 gap-4 content-center border-2">
        <div>
            <table class="w-full">
                <tr class="text-start mb-4">
                    <td>No. Permohonan / Tanggal Permohonan</td>
                    <td>:</td>
                    <td class="py-1">
                        <div class="grid grid-cols-2 gap-1">
                            <div class="">
                                <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                            </div>
                            <div class="">
                                <input type="date" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Kode Pelanggan / Nama Perusahaan</td>
                    <td>:</td>
                    <td class="py-1">
                        <div class="grid grid-cols-3 gap-1">
                            <div class="">
                                <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                            </div>
                            <div class="">
                                <input type="date" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                            </div>
                            <div class="">
                                <input type="date" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Alamat</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" disabled class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>NPWP</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" disabled class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Mata Uang</td>
                    <td>:</td>
                    <td class="py-1">
                        <select id="barang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="US">Rupiah</option>
                            <option value="CA">Dolar</option>
                        </select>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <br>
    <br>

    <div class="h-56 grid grid-cols-1 gap-4 content-center border-2">
        <div>
            <table class="w-full">
                <tr class="text-start">
                    <td>Kode Kapal</td>
                    <td>:</td>
                    <td class="py-1">
                        <div class="grid grid-cols-3 gap-1">
                            <div class="">
                                <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                            </div>
                            <div class="">
                                <input type="date" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                            </div>
                            <div class="">
                                <input type="date" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>


    <div class="h-56 grid grid-cols-2 gap-4">
        <div class="border-2">
            <table class="w-full content-center">
                <tr class="text-start mb-4">
                    <td>Tanggal Mulai</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="date" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Tanggal Selesai</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="date" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Jumlah Produksi</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Tarif RPH</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Biaya RPH</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="date" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
            </table>
        </div>
        <div class="border-2">
            <table class="w-full text-center">
                <tr class="text-start mb-4">
                    <td>Jam Mulai</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="time" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Jam Selesai</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="time" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>

                <tr class="text-start mb-4">
                    <td>Satuan</td>
                    <td>:</td>
                    <td class="py-1">
                        <select id="barang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="US">Meter</option>
                        </select>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="pt-5">
        <button class="btn mt-6 bg-blue-600 text-blue-100 hover:bg-purple-600">Tambah Data</button>
    </div>
    <div class="text-center mb-3 mt-5">
        <div>
            <table class="mt-5 w-full border-solid border-2 border-slate-800">
                <thead class=" bg-gradient-to-r from-cyan-700 to-cyan-800 text-white py-5">
                    <tr>
                        <th class="py-5 px-3">Kode Kapal</th>
                        <th>Nama Kapal</th>
                        <th>Tanggal Mulai</th>
                        <th>Jam Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Jam Selesai</th>
                        <th>Jumlah</th>
                        <th>Satuan</th>
                        <th>Tarif</th>
                        <th>Biaya</th>
                        <th class="px-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                        <td>XXXX</td>
                        <td>Titanic</td>
                        <td>2023-10-25</td>
                        <td>10:00</td>
                        <td>2023-10-25</td>
                        <td>10:00</td>
                        <td>10</td>
                        <td>Meter</td>
                        <td>100.000</td>
                        <td>100.000</td>
                        <td>
                            <a href="#" class="btn bg-blue-600 text-blue-100 hover:bg-purple-600">Edit</a>
                            <a href="#" class="btn bg-blue-600 text-blue-100 hover:bg-purple-600">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="text-center pt-16 mt-16 pb-9">
        <button class="btn mt-6 bg-blue-600 text-blue-100 hover:bg-purple-600">Simpan</button>
        <a href="{{url('admin/aneka-usaha/permohonan-sewa-bunker')}}" class="btn mt-6 bg-blue-600 text-blue-100 hover:bg-purple-600">Batal</a>
        <button class="btn mt-6 bg-blue-600 text-blue-100 hover:bg-purple-600">Reset</button>
    </div>
</div>
@endsection

@section('script')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    });
</script>
@endsection