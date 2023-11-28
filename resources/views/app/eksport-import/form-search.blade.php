@extends('layouts.admin')
@section('title', 'Eksport Import')
@section('content')
    <div class="">
        <div class="text-2xl ">Eksport-Import / Pembuatan Dokumen PIB</div>
        <hr class="border-b-2 border-black border-solid">
        <div class="grid grid-cols-4 gap-2 pt-16">
            <div class="text-start w-full">
                <div>
                    <label>BC 2.0 PEMBERITAHUAN IMPORT BARANG</label>
                </div>
                <div>
                    <input
                        type="text"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                    >
                </div>
            </div>
        </div>
            <div>
                <button class="btn mt-8 bg-blue-600 text-blue-100 hover:bg-purple-600">Search</button>
            </div>
            <div>
                <button class="btn mt-8 bg-blue-600 text-blue-100 hover:bg-purple-600">Dokumen Baru</button>
            </div>
        <div class="text-center mb-3 mt-5">
            <div>
                <table class="mt-5 w-full border-solid border-2 border-slate-800">
                    <thead class=" bg-gradient-to-r from-cyan-700 to-cyan-800 text-white py-5">
                    <tr>
                        <th class="py-5 px-3">No Pengajuan</th>
                        <th>No Pendaftaran</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Status Dokumen</th>
                        <th class="px-3">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                        <td>1</td>
                        <td>2023</td>
                        <td>2023-10-25</td>
                        <td>Jaya Sakti</td>
                        <td>
                            <a href="{{url('admin/aneka-usaha/create-permohonan-sewa-bunker')}}" class="btn bg-blue-600 text-blue-100 hover:bg-purple-600">View</a>
                            <a href="{{url('admin/aneka-usaha/create-permohonan-sewa-bunker')}}" class="btn bg-blue-600 text-blue-100 hover:bg-purple-600">Edit</a>
                            <a href="{{url('admin/aneka-usaha/pranota-permohonan-sewa-bunker')}}" class="btn bg-blue-600 text-blue-100 hover:bg-purple-600">Pranota</a>
                            <a href="{{url('admin/aneka-usaha/nota-4g')}}" class="btn bg-blue-600 text-blue-100 hover:bg-purple-600">Nota 4E</a>
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
