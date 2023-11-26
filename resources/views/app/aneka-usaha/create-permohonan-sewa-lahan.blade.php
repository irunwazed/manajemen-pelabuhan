@extends('layouts.admin')
@section('title', 'Aneka Usaha')
@section('content')
<div class="">
    <div class="text-2xl ">Aneka Usaha / Permohonan Sewa Tanah Dan Bangunan</div>
    <hr class="border-b-2 border-black border-solid">
    <div class="font-bold text-2xl text-center pt-5">FORM PERMOHONAN SEWA TANAH & BANGUNAN</div>
    <div class="font-bold text-2xl text-center pt-5">Entry Data</div>

    <div class="font-bold text-2xl text-start pt-5">Form Kontrak</div>
    <div class="h-56 grid grid-cols-2 gap-4 content-center border-2">
        <div>
            <table class="w-full">
                <tr class="text-start mb-4">
                    <td>Nomor/Tanggal Kontrak</td>
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
                    <td>Nama Perusahaan</td>
                    <td>:</td>
                    <td class="py-1">
                        <select id="barang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="US">JAYA GROUP</option>
                            <option value="CA">SAKTI MANTRA</option>
                        </select>
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Alamat</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" disabled class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
            </table>
        </div>
        <div>
            <table class="w-full">
                <tr class="text-start mb-4">
                    <td>Telephone</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" disabled class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Contact Person</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" disabled class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Contact Person's Phone</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" disabled class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>NPWP</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" disabled class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <br>
    <br>

    <div class="grid grid-cols-2 pt-8 gap-4">
        <div><span class="font-bold text-2xl text-start">Keterangan</span></div>
        <div><span class="font-bold text-2xl text-start">Biaya Keseluruhan</span></div>
    </div>
    <div class="h-56 grid grid-cols-2 gap-4">
        <div class="border-2">
            <table class="w-full content-center">
                <tr class="text-start mb-4">
                    <td>Jenis Properti</td>
                    <td>:</td>
                    <td class="py-1">
                        <select id="barang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="US">TANAH</option>
                        </select>
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Lokasi</td>
                    <td>:</td>
                    <td class="py-1">
                        <select id="barang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="US">LAPANGAN PENUMPUKAN</option>
                        </select>
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Luas Lahan</td>
                    <td>:</td>
                    <td class="py-1">
                        <div class="grid grid-cols-5">
                            <div class="col-span-4">
                                <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                            </div>
                            <div>
                                <span class="font-bold text-center">M2</span>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Periode Pemakaian</td>
                    <td>:</td>
                    <td class="py-1">
                        <div class="grid grid-cols-5">
                            <div class="col-span-2">
                                <input type="date" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                            </div>
                            <div class="inline-block align-middle text-center font-bold">S/D</div>
                            <div class="col-span-2">
                                <input type="date" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Jangka Waktu</td>
                    <td>:</td>
                    <td class="py-1">
                        <div class="grid grid-cols-3 gap-2">
                            <div>
                                <input type="text" disabled class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                            </div>
                            <div class="col-span-2">
                                <input type="text" disabled class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                            </div>
                        </div>

                    </td>
                </tr>
                <tr class="text-start">
                    <td>Tarif</td>
                    <td>:</td>
                    <td class="py-1">
                        <div class="grid grid-cols-9">
                            <div> Rp</div>
                            <div class="col-span-4">
                                <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                            </div>
                            <div class="col-span-4"> <span class="text-sm">/ Meter2-satuan jangka waktu</span></div>
                        </div>
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Tarif Lumpsium</td>
                    <td>:</td>
                    <td class="py-1">
                        <div class="flex items-center">
                            <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes (centang)/ Tidak</label>
                        </div>
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Keterangan</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
            </table>
        </div>
        <div class="border-2">
            <table class="w-full text-center">
                <tr class="text-start mb-4">
                    <td>Biaya Sewa</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" disabled class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Biaya PBB</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>PPN</td>
                    <td>:</td>
                    <td class="py-1">
                        <div class="grid grid-cols-3">
                            <div>
                                <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="text-black text-2xl font-bold">%</div>
                                <div class="font-bold text-2xl text-right">Rp</div>
                            </div>
                            <div>
                                <input type="text" disabled class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                            </div>
                        </div>

                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Biaya Administrasi</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Biaya Lainya</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Total Biaya</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" disabled class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Pembulatan Biaya</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" disabled class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="text-center pt-16 mt-16 pb-9">
        <a href="#" class="text-base bg-blue-600 text-blue-100 px-6 py-2.5 rounded hover:opacity-80">Simpan</a>
        <a href="#" class="text-base bg-yellow-600 text-yellow-100 px-6 py-2.5 rounded hover:opacity-80">Reset</a>
        <a href="{{url('admin/aneka-usaha/permohonan-sewa-lahan')}}" class="text-base text-gray-900 bg-white border border-gray-300 px-6 py-2.5 rounded hover:opacity-80">Batal</a>
    </div>

    <div class="text-center mb-3 mt-5">
        <div>
            <table class="mt-5 w-full border-solid border-2 border-slate-800">
                <thead class=" bg-gradient-to-r from-cyan-700 to-cyan-800 text-white py-5">
                    <tr>
                        <th class="py-5 px-3">No</th>
                        <th>Tahun/No Kontrak</th>
                        <th>Tanggal Permohonan</th>
                        <th>Perusahaan</th>
                        <th class="px-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                        <td>1</td>
                        <td>123</td>
                        <td>2023-10-25</td>
                        <td>Jaya Sakti</td>
                        <td>
                            <a href="{{url('admin/aneka-usaha/detail-permohonan-sewa-lahan')}}" class="btn bg-blue-600 text-blue-100 hover:bg-purple-600">View</a>
                            <a href="{{url('admin/aneka-usaha/create-permohonan-sewa-lahan')}}" class="btn bg-blue-600 text-blue-100 hover:bg-purple-600">Edit</a>
                            <a href="{{url('admin/aneka-usaha/pranota-permohonan-sewa-lahan')}}" class="btn bg-blue-600 text-blue-100 hover:bg-purple-600">Pranota</a>
                            <a href="{{url('admin/aneka-usaha/nota-4g')}}" class="btn bg-blue-600 text-blue-100 hover:bg-purple-600">Nota 4E</a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
@endsection

@section('script')
@endsection