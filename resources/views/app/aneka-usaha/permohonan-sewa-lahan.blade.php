@extends('layouts.admin')
@section('title', 'Aneka Usaha')
@section('content')
    <div class="">
        <div class="text-2xl ">Aneka Usaha / Sewa Lahan & Bangunan</div>
        <hr class="border-b-2 border-black border-solid">
        <div class="grid grid-cols-4 gap-2 pt-16">
            <div class="text-start w-full">
                <div>
                    <label>TAHUN</label>
                </div>
                <div>
                    <input type="text"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                </div>
            </div>
            <div class="text-start w-full">
                <div>
                    <label>NO KONTRAK</label>
                </div>
                <div>
                    <input type="text"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                </div>
            </div>
            <div class="text-start w-full">
                <div>
                    <label>PERUSAHAAN</label>
                </div>
                <div>
                    <input type="text"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                </div>
            </div>
            <div class="text-start">
                <div>
                    <label><br></label>
                </div>
                <div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Search</button>
                    <!-- <button class="btn mt-8 bg-blue-600 text-blue-100 hover:bg-purple-600">Search</button> -->
                </div>
            </div>
        </div>

        <div class="text-end pt-5">
            <a href="{{ url('admin/aneka-usaha/create-permohonan-sewa-lahan') }}"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Buat
                Data</a>
        </div>

        <div class="text-center mb-3 mt-5">
            <div>
                <table id="perusahan" class="mt-5 w-full border-solid border-2 border-slate-800 ">
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
                        @foreach ($data as $dat)
                            <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                                <td>{{ $dat->nama_perusahaan }} </td>
                                <td>1</td>
                                <td>asfsda</td>
                                <td>adfasf</td>
                                <td>asdfdsaf</td>
                                <td>
                                    <button type="submit"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                        <a
                                            href="{{ url('admin/aneka-usaha/detail-permohonan-sewa-lahan') }}">View<a /></button>
                                    <button type="submit"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><a
                                            href="{{ url('admin/aneka-usaha/edit-permohonan-sewa-lahan') }}">Edit<a /></button>
                                    <button type="submit"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><a
                                            href="{{ url('admin/aneka-usaha/pranota-permohonan-sewa-lahan') }}">Pranota<a /></button>
                                    <button type="submit"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><a
                                            href="{{ url('admin/aneka-usaha/nota-4g') }}"> Nota4G<a /></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section(' script')
@endsection
