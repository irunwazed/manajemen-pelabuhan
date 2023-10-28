@extends('layouts.admin')
@section('title', 'Penyewaan Alat')
@section('content')
    <div class="">
        <div class="text-2xl ">Penyewaan Alat / Bukti 2C</div>
        <hr class="border-b-2 border-black border-solid">
        <div class="grid grid-cols-4 gap-2 pt-16">
            <div class="text-start w-full">
                <div>
                    <label>TAHUN</label>
                </div>
                <div>
                    <input
                        type="text"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                    >
                </div>
            </div>
            <div class="text-start w-full">
                <div>
                    <label>NO PERMOHONAN 1C</label>
                </div>
                <div>
                    <input
                        type="text"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                    >
                </div>
            </div>
            <div class="text-start w-full">
                <div>
                    <label>No Form 2C (Realisasi)</label>
                </div>
                <div>
                    <input
                        type="text"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                    >
                </div>
            </div>
            <div class="text-start">
                <div>
                    <button class="font-semibold py-1 px-6 rounded-md hover:opacity-80 mt-8 bg-blue-600 text-blue-100 hover:bg-purple-600">Search</button>
                </div>
            </div>
        </div>

        <div class="text-center mb-3 mt-5">
            <div>
                <table class="mt-5 w-full border-solid border-2 border-slate-800">
                    <thead class=" bg-gradient-to-r from-cyan-700 to-cyan-800 text-white py-5">
                    <tr>
                        <th class="py-5 px-3">No</th>
                        <th>Tahun/No Permohonan 1C</th>
                        <th>No Form 2C</th>
                        <th>Perusahaan</th>
                        <th>Nama Kapal</th>
                        <th>Keperluan</th>
                        <th class="px-3">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                        <td>1</td>
                        <td>xxxx</td>
                        <td>xxxx</td>
                        <td>xxxx</td>
                        <td>Titanic</td>
                        <td>Lorem ipsum dolor sit amet consectetur</td>
                        <td>
                            <a href="{{url('admin/penyewaan-alat/create-bukti-2c')}}" class="font-semibold py-1 px-6 rounded-md hover:opacity-80 bg-blue-600 text-blue-100 hover:bg-purple-600">View</a>
                            <a href="{{url('admin/penyewaan-alat/create-bukti-2c')}}" class="font-semibold py-1 px-6 rounded-md hover:opacity-80 bg-blue-600 text-blue-100 hover:bg-purple-600">Edit</a>
                            <a href="{{url('admin/penyewaan-alat/create-bukti-2c')}}" class="font-semibold py-1 px-6 rounded-md hover:opacity-80 bg-blue-600 text-blue-100 hover:bg-purple-600">Realisasi</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
