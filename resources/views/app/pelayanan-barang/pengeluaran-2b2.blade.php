@extends('layouts.admin')
@section('title', 'Pelayanan Barang')
@section('content')
    <div class="">
        <div class="text-2xl ">Pelayanan Barang / Pengeluaran 2B2</div>
        <hr class="border-b-2 border-black border-solid">
        <div class="text-center mb-3 mt-5">
            <form class="grid grid-cols-4 gap-2" action="{{ route('get-2b2', $user) }}" method="get">
                <div class="text-start w-full">
                    <div>
                        <label>Nama PBM</label>
                    </div>
                    <div>
                        <input type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="nama" value="{{ @$request['nama'] }}">
                    </div>
                </div>
                <div class="text-start w-full">
                    <div>
                        <label>No PPK</label>
                    </div>
                    <div>
                        <input type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="pbau_pengeluaran_2b2_id" value="{{ @$request['pbau_pengeluaran_2b2_id'] }}">
                    </div>
                </div>
                <div class="text-start w-full">
                    <div>
                        <label>No Form 2B2</label>
                    </div>
                    <div>
                        <input type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="no_form_2b2" value="{{ @$request['no_form_2b2'] }}">
                    </div>
                </div>
                <div class="text-start">
                    <div>
                        <button
                            class="text-white mt-6 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Search</button>
                        <a class="text-white mt-6 bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-puple-600 dark:hover:bg-puple-700 focus:outline-none dark:focus:ring-puple-800"
                            href="{{ route('get-2b2', $user) }}">Reset</a>

                    </div>
                </div>
            </form>

            <div>
                <table class="mt-5 w-full border-solid border-2 border-slate-800">
                    <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                        <tr>
                            <th class="py-5 px-3">No</th>
                            <th>No Layanan/PKK</th>
                            <th>No RKBM</th>
                            <th>No Form 2B1</th>
                            <th>No Form 2B2</th>
                            <th>PBM</th>
                            <th>Agen</th>
                            <th>Nama Kapal</th>
                            <th class="px-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (@$data as $row)
                            @if ($loop->index % 2 == 0)
                                <tr class="border-solid border-1 border-slate-800 hover:bg-slate-300">
                                @else
                                <tr class="border-solid border-1 border-slate-800 bg-slate-200 hover:bg-slate-300">
                            @endif
                            <td class="text-center">{{ $loop->index + 1 }}</td>
                            <td>{{ $row->no_pkk }}</td>
                            <td>{{ $row->pelayanan_kapal_rkbm_id }}</td>
                            <td>{{ $row->no_form2b1 }}</td>
                            <td>{{ $row->no_form_2b2 }}</td>
                            <td>{{ $row->nama_perusahaan }}</td>
                            <td>{{ $row->nama_agen }}</td>
                            <td>{{ $row->nama_kapal }}</td>
                            <td class="py-2 flex flex-wrap gap-1 justify-center ">
                                @if ($row->no_form2b1)
                                    <a href="{{ route('form-2b2', ['user' => $user, 'pelayanan_kapal_id' => $row->pelayanan_kapal_id]) }}"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create
                                        2B2</a>
                                @endif
                                @if ($row->no_form_2b2)
                                    <a href="#"
                                        class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">View</a>
                                    <a href="#"
                                        class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:focus:ring-yellow-900">Edit</a>
                                @endif
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @include('components.pagination')
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
