@extends('layouts.admin')
@section('title', 'Pelayanan Barang')
@section('content')
    <form class="" action="{{ route('create4B', $user) }}" method="post">
        <input type="text" value="{{ $head_form->no_form_2b2 }}"
            class=" hidden mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
            name="no_form_2b2">
        <div class="text-2xl ">
            Pelayanan Barang /
            <a href="{{ url('admin/pelayanan-barang/nota-4b') }}"> Nota 4B </a>
            / Create Nota 4B
        </div>
        <hr class="border-b-2 border-black border-solid">
        <div class="font-bold text-2xl text-center pt-5">NOTA PENJUALAN JASA PELABUHAN</div>
        <div class="h-56 grid grid-cols-2 gap-4 content-center">
            <div>
                <table class="w-full">
                    <tr class="text-start mb-4">
                        <td>Debitur</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" disabled
                                class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                value="Auto Fill">
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Nama Agen</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" disabled
                                class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                value="{{ $head_form->nama_agen }}">
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Alamat</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" disabled
                                class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                value="{{ $head_form->alamat }}">
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>NPWP</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" disabled
                                class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                value="Auto Fill">
                        </td>
                    </tr>
                </table>
            </div>
            <div>
                <table class="w-full">
                    <tr class="text-start mb-4">
                        <td>Kapal</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" disabled
                                class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                value="{{ $head_form->nama_kapal }}">
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>GRT/LOA/DWT</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" disabled
                                class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                value="Auto Fill">
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>2B2/Nota 3B</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" disabled
                                class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                value="{{ $head_form->no_nota3b }}">
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Nota 4B</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" disabled
                                class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                value="{{ $no_nota4b }}">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="text-center mb-3 mt-5">
            <div class="pt-5">
                <table class="mt-5 w-full border-solid border-2 border-slate-800">
                    <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                        <tr>
                            <th class="py-5 px-3">No</th>
                            <th>Uraian Jasa</th>
                            <th>Biaya</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-solid border-2 border-slate-800 bg-slate-200 hover:bg-slate-300">
                            <td>1</td>
                            <td>Dermaga</td>
                            <td>{{ $head_form->total_biaya_dermaga }}</td>
                        </tr>
                        <tr class="border-solid border-2 border-slate-800 bg-slate-200 hover:bg-slate-300">
                            <td>2</td>
                            <td>Penumpukan</td>
                            <td>{{ $head_form->total_biaya_penumpukan }}</td>
                        </tr>
                        <tr class="font-bold">
                            <td></td>
                            <td class="text-end">Jumlah</td>
                            <td>{{ $head_form->total_biaya_dermaga + $head_form->total_biaya_penumpukan }}</td>
                        </tr>
                        <tr class="font-bold">
                            <td></td>
                            <td class="text-end">PPN</td>
                            <td>{{ ($head_form->total_biaya_dermaga + $head_form->total_biaya_penumpukan) * 0.1 }}</td>
                        </tr>
                        <tr class="font-bold">
                            <td></td>
                            <td class="text-end">Materai</td>
                            <td>10.0000</td>
                        </tr>
                        <tr class="font-bold">
                            <td></td>
                            <td class="text-end">Total Biaya</td>
                            <td>{{ $head_form->total_biaya_dermaga + $head_form->total_biaya_penumpukan +10000+ (($head_form->total_biaya_dermaga + $head_form->total_biaya_penumpukan) * 0.1) }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-start mt-3">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">SIMPAN</button>
                <a href="{{ url('admin/pelayanan-barang/nota-4b') }}"
                    class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">KEMBALI</a>
            </div>
        </div>
    </form>
@endsection

@section('script')
@endsection
