@extends('layouts.admin')
@section('title', 'Pelayanan Barang')
@section('content')
    <div class="">
        <div class="text-2xl ">
            Pelayanan Barang /
            <a href="{{url('admin/pelayanan-barang/nota-4b')}}"> Nota 4B </a>
            / Create Nota 4B
        </div>
        <hr class="border-b-2 border-black border-solid">
        <div class="font-bold text-2xl text-center pt-5">NOTA PENJUALAN JASA PELABUHAN</div>
        <div class="h-56 grid grid-cols-2 gap-4 content-center">
            <div>
                <table class="w-full">
                    <tr  class="text-start mb-4">
                        <td>Debitur</td>
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
                        <td>Nama Agen</td>
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
                        <td>Alamat</td>
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
                        <td>NPWP</td>
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
                        <td>Kapal</td>
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
                        <td>GRT/LOA/DWT</td>
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
                        <td>2B2/Nota 3B</td>
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
                        <td>Nota 4B</td>
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
            <div class="pt-5">
                <table class="mt-5 w-full border-solid border-2 border-slate-800">
                    <thead class=" bg-gradient-to-r from-cyan-700 to-cyan-800 text-white py-5">
                        <tr >
                            <th class="py-5 px-3">No</th>
                            <th>Uraian Jasa</th>
                            <th>Biaya</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr class="border-solid border-2 border-slate-800 bg-slate-200 hover:bg-slate-300">
                        <td>1</td>
                        <td>Dermaga</td>
                        <td>100.000</td>
                    </tr>
                    <tr class="font-bold">
                        <td></td>
                        <td class="text-end">Jumlah</td>
                        <td>1.500.000</td>
                    </tr>
                    <tr class="font-bold">
                        <td></td>
                        <td class="text-end">PPN</td>
                        <td>1.500.000</td>
                    </tr>
                    <tr class="font-bold">
                        <td></td>
                        <td class="text-end">Materai</td>
                        <td>1.500.000</td>
                    </tr>
                    <tr class="font-bold">
                        <td></td>
                        <td class="text-end">Total Biaya</td>
                        <td>1.500.000</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-start">
                <button class="font-semibold py-1 px-6 rounded-md hover:opacity-80 mt-6 bg-blue-600 text-blue-100 hover:bg-purple-600">Create</button>
                <a href="{{url('admin/pelayanan-barang/nota-4b')}}" class="font-semibold py-1 px-6 rounded-md hover:opacity-80 mt-6 bg-warning text-blue-100 hover:bg-purple-600">Kembali</a>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
