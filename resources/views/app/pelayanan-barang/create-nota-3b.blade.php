@extends('layouts.admin')
@section('title', 'Pelayanan Barang')
@section('content')
    <div class="">
        <div class="text-2xl ">
            Pelayanan Barang /
            <a href="{{url('admin/pelayanan-barang/nota-3b')}}"> Pranota (Nota 3B) </a>
            / Cetak
        </div>
        <hr class="border-b-2 border-black border-solid">
        <div class="font-bold text-2xl text-center pt-5">FORM CETAK PRANOTA (NOTA 3B)</div>
        <div>PT PELABUHAN INDONESIA</div>
        <div>CABANG: JAKARTA</div>
        <div class="h-56 grid grid-cols-2 gap-4 content-center">
            <div></div>
            <div>
                <table class="w-full">
                <tr  class="text-start mb-4">
                    <td>Bentuk 3B</td>
                    <td>:</td>
                    <td class="py-1">
                        <input
                            type="text"
                            disabled
                            class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                            value="Auto Fill"
                        >
                    </td>
                </tr>
                <tr  class="text-start">
                    <td>Nomor</td>
                    <td>:</td>
                    <td class="py-1">
                        <input
                            type="text"
                            disabled
                            class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                            value="Auto Fill"
                        >
                    </td>
                </tr>
                <tr  class="text-start">
                    <td>No Layanan</td>
                    <td>:</td>
                    <td class="py-1">
                        <input
                            type="text"
                            disabled
                            class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                            value="Auto Fill"
                        >
                    </td>
                </tr>
                <tr  class="text-start">
                    <td>No PKK</td>
                    <td>:</td>
                    <td class="py-1">
                        <input
                            type="text"
                            disabled
                            class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                            value="Auto Fill"
                        >
                    </td>
                </tr>
            </table>
            </div>
        </div>
        <div class="text-center mb-3 mt-5">
            <div class="font-bold underline text-2xl">PERHITUNGAN DERMAGA - PENUMPUKAN</div>
            <div class="mt-5 grid grid-cols-2 gap-2">
                <div>
                    <table class="w-full">
                        <tr  class="text-start mb-4">
                            <td>No RKBM</td>
                            <td>:</td>
                            <td class="py-1">
                                <input
                                    type="text"
                                    disabled
                                    class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                    value="Auto Fill"
                                >
                            </td>
                        </tr>
                        <tr  class="text-start">
                            <td>No Form 2B1</td>
                            <td>:</td>
                            <td class="py-1">
                                <input
                                    type="text"
                                    disabled
                                    class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                    value="Auto Fill"
                                >
                            </td>
                        </tr>
                        <tr  class="text-start">
                            <td>No Form 2B2</td>
                            <td>:</td>
                            <td class="py-1">
                                <input
                                    type="text"
                                    disabled
                                    class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                    value="Auto Fill"
                                >
                            </td>
                        </tr>
                        <tr  class="text-start">
                            <td>Nama PBM</td>
                            <td>:</td>
                            <td class="py-1">
                                <input
                                    type="text"
                                    disabled
                                    class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                    value="Auto Fill"
                                >
                            </td>
                        </tr>
                        <tr  class="text-start">
                            <td>Nama Kapal</td>
                            <td>:</td>
                            <td class="py-1">
                                <input
                                    type="text"
                                    disabled
                                    class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                    value="Auto Fill"
                                >
                            </td>
                        </tr>
                        <tr class="text-start">
                            <td>Kegiatan</td>
                            <td>:</td>
                            <td class="py-1">
                                <input
                                    type="text"
                                    disabled
                                    class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                    value="Auto Fill"
                                >
                            </td>
                        </tr>
                    </table>
                </div>
                <div>
                    <table class="w-full">
                        <tr  class="text-start mb-4">
                            <td></td>
                            <td></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr  class="text-start">
                            <td></td>
                            <td>&nbsp;</td>
                            <td></td>
                        </tr>
                        <tr  class="text-start">
                            <td>Tanggal Awal / 2B1</td>
                            <td>:</td>
                            <td class="py-1">
                                <input
                                    type="date"
                                    disabled
                                    class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                    value="10/10/2023"
                                >
                            </td>
                        </tr>
                        <tr  class="text-start">
                            <td>Tanggal Selesai / 2B2</td>
                            <td>:</td>
                            <td class="py-1">
                                <input
                                    type="date"
                                    disabled
                                    class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                    value="10/10/2023"
                                >
                            </td>
                        </tr>
                        <tr  class="text-start">
                            <td>Jumlah Hari</td>
                            <td>:</td>
                            <td class="py-1">
                                <input
                                    type="text"
                                    disabled
                                    class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                    value="10"
                                >
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
                    <thead class=" bg-gradient-to-r from-cyan-700 to-cyan-800 text-white py-5">
                        <tr >
                            <th class="py-5 px-3">Nama Barang</th>
                            <th>Tuslag</th>
                            <th>No Bol</th>
                            <th>Jenis Kegiatan</th>
                            <th>Lokasi</th>
                            <th>Penyaluran</th>
                            <th>Qtt Keluar</th>
                            <th>Satuan</th>
                            <th>Tarif Dermaga</th>
                            <th>Tarif Penumpukan</th>
                            <th>Total Biaya</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-solid border-2 border-slate-800 bg-slate-200 hover:bg-slate-300">
                            <td>Kayu</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>Pengeluaran</td>
                            <td>Jakarta</td>
                            <td>xxxx</td>
                            <td>100</td>
                            <td>KG</td>
                            <td>1000.000</td>
                            <td>500.000</td>
                            <td>1.500.000</td>
                        </tr>
                        <tr class="font-bold">
                            <td colspan="10" class="text-end">Total Keseluruhan</td>
                            <td>1.500.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-start">
                <button class="font-semibold py-1 px-6 rounded-md hover:opacity-80 mt-6 bg-blue-600 text-blue-100 hover:bg-purple-600">Create</button>
                <a href="{{url('admin/pelayanan-barang/nota-3b')}}" class="font-semibold py-1 px-6 rounded-md hover:opacity-80 mt-6 bg-warning text-blue-100 hover:bg-purple-600">Kembali</a>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
