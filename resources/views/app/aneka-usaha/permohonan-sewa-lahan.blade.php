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
                <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
            </div>
        </div>
        <div class="text-start w-full">
            <div>
                <label>NO KONTRAK</label>
            </div>
            <div>
                <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
            </div>
        </div>
        <div class="text-start w-full">
            <div>
                <label>PERUSAHAAN</label>
            </div>
            <div>
                <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
            </div>
        </div>
        <div class="text-start">
            <div>
                <label><br></label>
            </div>
            <div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Search</button>
                <!-- <button class="btn mt-8 bg-blue-600 text-blue-100 hover:bg-purple-600">Search</button> -->
            </div>
        </div>
    </div>

    <div class="text-end pt-5">
        <a href="{{ url('admin/aneka-usaha/create-permohonan-sewa-lahan') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Buat
            Data</a>
    </div>

    <div class="text-center mb-3 mt-5">
        <div>
            <table id="perusahan" class="mt-3 w-full border-solid border-0 border-slate-800 ">
                <thead class="border-solid border-0 border-slate-800 bg-gradient-to-r from-[#211c5c] to-primary text-white">
                    <tr>
                        <th class="py-3 px-3">No</th>
                        <th>Tahun/No Kontrak</th>
                        <th>Tanggal Permohonan</th>
                        <th>Perusahaan</th>
                        <th class="px-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dat)
                    @if(($loop->index) %2 == 0)
                    <tr class="border-solid border-0 border-slate-800 hover:bg-slate-300">
                        @else
                    <tr class="border-solid border-0 border-slate-800 bg-slate-200 hover:bg-slate-300">
                        @endif
                        <td> {{ $loop->index+1 }}</td>
                        <td>{{ $dat->no_kontrak }}</td>
                        <td>{{ $dat->tgl_kontrak }}</td>
                        <td>{{ $dat->nama_perusahaan}}</td>
                        <td>
                            <button type="submit" class="text-white float-right bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 py-2.5 mr-2 mb-2 dark:bg-purple-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-purple-800">
                                <a href="{{ url('admin/aneka-usaha/detail-permohonan-sewa-lahan') }}">View</a></button>
                            <button type="submit" class="text-white float-right bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2.5 mr-2 mb-2 dark:bg-yellow-600 dark:hover:bg-yellow-700 focus:outline-none dark:focus:ring-yellow-800">
                                <a href="{{ url('admin/aneka-usaha/edit-permohonan-sewa-lahan') }}">Edit<a /></button>
                            <button type="submit" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                <a href="{{ url('admin/aneka-usaha/pranota-permohonan-sewa-lahan') }}">Pranota<a /></button>
                            <button type="submit" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                <a href="{{ url('admin/aneka-usaha/nota-4g') }}"> Nota4G<a /></button>
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