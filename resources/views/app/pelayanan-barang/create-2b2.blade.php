@extends('layouts.admin')
@section('title', 'Pelayanan Barang')
@section('content')
    <div class="">
        <div class="text-2xl ">
            Pelayanan Barang /
            <a href="{{ url('admin/pelayanan-barang/pengeluaran-2b2') }}"> Pengeluaran 2B2 </a>
            / Create 2B2
        </div>
        <hr class="border-b-2 border-black border-solid">
        <form class="text-center mb-3 mt-5" action="{{ route('create2B2', $user) }}" method="post">
            <div class="mt-5 grid grid-cols-2 gap-2">
                <div>
                    <table class="w-full">
                        <tr class="text-start">
                            <td>No PKK</td>
                            <td>:</td>
                            <td class="py-1">
                                <input type="text" disabled
                                    class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                    value="{{ $head_form->no_pkk }}">
                                <input type="text"
                                    class="hidden mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                    value="{{ $head_form->pelayanan_kapal_id }}" name="pelayanan_kapal_id">
                            </td>
                        </tr>
                        <tr class="text-start mb-4">
                            <td>No RKBM</td>
                            <td>:</td>
                            <td class="py-1">
                                <input type="text" disabled
                                    class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                    value="{{ $head_form->pelayanan_kapal_rkbm_id }}">
                                <input type="text"
                                    class="hidden mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                    value="{{ $head_form->pelayanan_kapal_rkbm_id }}" name="pelayanan_kapal_rkbm_id">
                            </td>
                        </tr>
                        <tr class="text-start">
                            <td>No Form 2B1</td>
                            <td>:</td>
                            <td class="py-1">
                                <input type="text" disabled
                                    class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                    name="no_form2b1" value="{{ $head_form->no_form2b1 }}">
                                <input type="text"
                                    class="hidden mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                    name="no_form2b1" value="{{ $head_form->no_form2b1 }}">
                            </td>
                        </tr>
                        <tr class="text-start">
                            <td>No Form 2B2</td>
                            <td>:</td>
                            <td class="py-1">
                                <input type="text" name="no_form_2b2"
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                            </td>
                        </tr>
                        <tr class="text-start">
                            <td>Nama PBM</td>
                            <td>:</td>
                            <td class="py-1">
                                <input type="text" disabled
                                    class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                    value="{{ $head_form->nama_perusahaan }}">
                            </td>
                        </tr>
                        <tr class="text-start">
                            <td>Nama Kapal</td>
                            <td>:</td>
                            <td class="py-1">
                                <input type="text" disabled
                                    class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                    value="{{ $head_form->nama_kapal }}">
                            </td>
                        </tr>
                        <tr class="text-start">
                            <td>Kegiatan</td>
                            <td>:</td>
                            <td class="py-1">
                                <input type="text" disabled
                                    class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                    value="{{ $head_form->kegiatan }}">
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
                                <input type="date"
                                    class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                    value="{{ date('Y-m-d', strtotime($head_form->tgl_2b1)) }}">
                            </td>
                        </tr>
                        <tr class="text-start">
                            <td>Tanggal 2B2</td>
                            <td>:</td>
                            <td class="py-1">
                                <input type="date"name="tgl_2b2"
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                    value="10/10/2023">
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
                            <th>Penyaluran</th>
                            <th>Jumlah Barang</th>
                            <th>Satuan</th>
                            <th>Tarif Dermaga</th>
                            <th>Tarif Penumpukan</th>
                            <th>Masa Penumpukan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (@$detail_form as $row)
                            @if ($loop->index % 2 == 0)
                                <tr class="border-solid border-1 border-slate-800 hover:bg-slate-300">
                                @else
                                <tr class="border-solid border-1 border-slate-800 bg-slate-200 hover:bg-slate-300">
                            @endif
                            <td>{{ $row->nama_barang }}</td>
                            <td>{{ $row->tuslag }}</td>
                            <td>{{ $row->no_bl }}</td>
                            <td>{{ $row->jenis_kegiatan }}</td>
                            <td>{{ $row->sistem_penyaluran }}</td>
                            <td>
                                <input type="text"
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                    value="{{ $row->jlh_brg_trf }}" name="jlh_brg_trf">
                                <input type="text"
                                    class="hidden mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                    value="{{ $row->pelayanan_kapal_rkbm_barang_id }}"
                                    name="pelayanan_kapal_rkbm_barang_id">
                            </td>
                            <td>{{ $row->satuan_tarif }}</td>
                            <td>{{ $row->trf_dermaga }}</td>
                            <td>{{ $row->trf_penumpukan }}</td>
                            <td>{{ $row->masa_penumpukan_bebas }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="text-start mt-3">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">SIMPAN</button>
                <a href="{{ url('admin/pelayanan-barang/pengeluaran-2b2') }}"
                    class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">KEMBALI</a>
            </div>
    </div>
    </div>
@endsection

@section('script')
@endsection
