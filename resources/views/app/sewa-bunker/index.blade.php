@extends('layouts.admin')
@section('title', 'Aneka Usaha')
@section('content')
    <div class="">
        <div class="text-2xl ">Anek Usaha / Sewa Bunker</div>
        <hr class="border-b-2 border-black border-solid">
        <div class="text-center mb-3 mt-5">
            <div class="grid grid-cols-4 gap-2">
                <div class="text-start w-full">
                    <div>
                        <label>Tahun</label>
                    </div>
                    <div>
                        <input type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <div class="text-start w-full">
                    <div>
                        <label>No Kontrak</label>
                    </div>
                    <div>
                        <input type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <div class="text-start w-full">
                    <div>
                        <label>Perusahaan</label>
                    </div>
                    <div>
                        <input type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <div class="text-start">
                    <div>

                        <button
                            class="text-white mt-6 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Search</button>
                        <a href="{{ route('formCreate', $user) }}"
                            class="text-white mt-6 bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">Create
                            Data</a>
                    </div>

                </div>
            </div>

            <div>
                <table class="mt-5 w-full border-solid border-2 border-slate-800">
                    <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                        <tr>
                            <th class="py-5 px-3">No</th>
                            <th>Tahun / No Kontrak</th>
                            <th>Tanggal Permohonan</th>
                            <th>Perusahaan</th>
                            <th class="px-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                            @if ($loop->index % 2 == 0)
                                <tr class="border-solid border-1 border-slate-800 hover:bg-slate-300">
                                @else
                                <tr class="border-solid border-1 border-slate-800 bg-slate-200 hover:bg-slate-300">
                            @endif
                            <td class="text-center">{{ $loop->index + 1 }}</td>
                            <td>{{ Carbon\Carbon::parse($row->tgl_permohonan)->format('d-m-Y') }}</td>
                            <td>{{ $row->no_permohonan }}</td>
                            <td>{{ $row->nama_perusahaan }}</td>
                            <td class="py-2 flex flex-wrap gap-1 justify-center ">
                                <a href="#"
                                    class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">View</a>
                                <a href="#"
                                    class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:focus:ring-yellow-900">Edit</a>
                                <a href="{{ url('admin/pelayanan-barang/create-2b1') }}"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Pranota</a>
                                <a href="{{ url('admin/pelayanan-barang/create-2b1') }}"
                                    class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">Nota
                                    4G</a>

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
