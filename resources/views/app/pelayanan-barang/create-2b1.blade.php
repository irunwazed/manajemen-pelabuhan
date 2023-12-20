@extends('layouts.admin')
@section('title', 'Pelayanan Barang')
@section('content')
    <div class="">
        <div class="text-2xl ">
            Pelayanan Barang /
            <a href="{{ url('admin/pelayanan-barang/penumpukan-2b1') }}"> Penumpukan 2B1 </a>
            / Create 2B1
        </div>
        <hr class="border-b-2 border-black border-solid">
        <form class="text-center mb-3 mt-5" action="{{ route('create-2B1', $user) }}" method="post" id="create-2b1">
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
                                <input type="text"
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                    name="no_form2b1" value="{{ $head_form->no_form2b1 }}">
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
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                    name="tgl_2b1" value="{{ date('Y-m-d', strtotime($head_form->tgl_2b1)) }}">
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
                            <th class="px-3">Aksi</th>
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
                            <td>{{ $row->jlh_brg_trf }}</td>
                            <td>{{ $row->satuan_tarif }}</td>
                            <td>{{ $row->trf_dermaga }}</td>
                            <td>{{ $row->trf_penumpukan }}</td>
                            <td>{{ $row->masa_penumpukan }}</td>
                            {{-- <td>{{ $row->tgl_2b1 }}</td> --}}
                            <td>

                                <a data-modal-toggle="defaultModal" type="button"
                                    class="mt-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                                    onclick='editData({{ $row->pelayanan_kapal_rkbm_barang_id }})'>
                                    Update Tarif</a>
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="text-start mt-3">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">SIMPAN</button>
                <a href="{{ url('admin/pelayanan-barang/penumpukan-2b1') }}"
                    class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">KEMBALI</a>
            </div>
        </form>
    </div>

    <div id="defaultModal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(200%-1rem)] max-h-full">
        <div class="relative w-full max-w-4xl max-h-full">
            <!-- Modal content -->
            <form class="relative bg-white rounded-lg shadow dark:bg-gray-700" id="update-Barang"
                action="{{ route('update-Barang', $user) }}" method="post">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        UPDATE TARIF PENUMPUKAN BARANG 2B1
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="defaultModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <div class="mt-5 grid grid-cols-2 gap-2">

                        @csrf
                        <div>
                            <table class="w-full">
                                <tr class="text-start">
                                    <td>Barang</td>
                                    <td>:</td>
                                    <td class="py-1">
                                        <input type="text" disabled
                                            class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                            id="nama_barang">
                                        <input type="text"
                                            class="hidden mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                            id="pelayanan_kapal_rkbm_barang_id" name="pelayanan_kapal_rkbm_barang_id">
                                    </td>
                                </tr>
                                <tr class="text-start mb-4">
                                    <td>Tuslag</td>
                                    <td>:</td>
                                    <td class="py-1">
                                        <select id="barang"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            name="tuslag">
                                            @foreach ($option['tuslag'] as $tuslag)
                                                <option value="{{ $tuslag->nama_tuslag }}">{{ $tuslag->nama_tuslag }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr class="text-start">
                                    <td>No BoL</td>
                                    <td>:</td>
                                    <td class="py-1">
                                        <input type="text" disabled
                                            class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                            id="no_bl">
                                    </td>
                                </tr>
                                <tr class="text-start">
                                    <td>Tarif Dermaga</td>
                                    <td>:</td>
                                    <td class="py-1">
                                        <select id="trf_dermaga"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            name="trf_dermaga">
                                            @foreach ($option['trf_dermaga'] as $trf_dermaga)
                                                <option value="{{ $trf_dermaga->nama_tarif_dermaga }}">
                                                    {{ $trf_dermaga->nama_tarif_dermaga }} -
                                                    {{ $trf_dermaga->uang_dermaga1 }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr class="text-start">
                                    <td>Tarif Penumpukan</td>
                                    <td>:</td>
                                    <td class="py-1">
                                        <select id="trf_penumpukan"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            name="trf_penumpukan">
                                            @foreach ($option['trf_penumpukan'] as $trf_penumpukan)
                                                <option value="{{ $trf_penumpukan->nama_tarif_penumpukan }}">
                                                    {{ $trf_penumpukan->nama_tarif_penumpukan }} -
                                                    {{ $trf_penumpukan->trf_penumpukan }}
                                                </option>
                                            @endforeach
                                        </select>
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
                                        <input type="text" disabled
                                            class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                            id="jenis_kegiatan">
                                    </td>
                                </tr>
                                <tr class="text-start mb-4">
                                    <td>Jenis Penyaluran</td>
                                    <td>:</td>
                                    <td class="py-1">
                                        <input type="text" disabled
                                            class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                            id="sistem_penyaluran">
                                    </td>
                                </tr>
                                <tr class="text-start">
                                    <td>Jumlah Barang</td>
                                    <td>:</td>
                                    <td class="py-1">
                                        <input type="text"
                                            class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                            value="100">
                                    </td>
                                </tr>
                                <tr class="text-start">
                                    <td>Satuan</td>
                                    <td>:</td>
                                    <td class="py-1">
                                        <select id="barang"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="US">KG</option>
                                            <option value="CA">Meter</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr class="text-start">
                                    <td>Jumlah Barang Tarif</td>
                                    <td>:</td>
                                    <td class="py-1">
                                        <input type="text"
                                            class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                                            name="jlh_brg_trf" id="jlh_brg_trf">
                                    </td>
                                </tr>
                                <tr class="text-start">
                                    <td>Masa Penumpukan</td>
                                    <td>:</td>
                                    <td class="py-1">
                                        <select id="masa_penumpukan"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            name="nama_masa_penumpukan">
                                            @foreach ($option['masa_penumpukan'] as $masa_penumpukan)
                                                <option value="{{ $masa_penumpukan->nama_masa_penumpukan }}">
                                                    {{ $masa_penumpukan->nama_masa_penumpukan }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <a type="button" onclick="document.getElementById('update-Barang').submit();"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update
                        Tarif</a>
                    <a data-modal-hide="defaultModal" type="button"
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</a>
                </div>
            </form>
            <!-- Modal footer -->

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

        function editData(data) {
            $.ajax({
                type: 'POST',
                url: "{{ route('get-Barang', 'admin') }}",
                data: {
                    pelayanan_kapal_rkbm_barang_id: data,
                },
                success: function(response) {
                    $("#nama_barang").val(response.nama_barang);
                    $("#no_bl").val(response.no_bl);
                    $("#jenis_kegiatan").val(response.jenis_kegiatan);
                    $("#sistem_penyaluran").val(response.sistem_penyaluran);
                    $("#tulag").val(response.tulag);
                    $("#trf_dermaga").val(response.nama_trf_dermaga);
                    $("#trf_penumpukan").val(response.nama_trf_penumpukan);
                    $("#jlh_brg_trf").val(response.jlh_brg_trf);
                    $("#pelayanan_kapal_rkbm_barang_id").val(response.pelayanan_kapal_rkbm_barang_id)
                }
            });
        }
    </script>
@endsection
