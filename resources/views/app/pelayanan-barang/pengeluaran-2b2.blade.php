@extends('layouts.admin')
@section('title', 'Pelayanan Barang')
@section('content')
    <div class="">
        <div class="text-2xl ">Pelayanan Barang / Pengeluaran 2B2</div>
        <hr class="border-b-2 border-black border-solid">
        <div class="text-center mb-3 mt-5">
            <div class="grid grid-cols-4 gap-2">
                <div class="text-start w-full">
                    <div>
                        <label>Nama PBM</label>
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
                        <label>No PPK</label>
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
                        <label>No Form 2B2</label>
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
                        <button class="btn mt-8 bg-blue-600 text-blue-100 hover:bg-purple-600">Search</button>
                    </div>
                </div>
            </div>

            <div>
                <table class="mt-5 w-full border-solid border-2 border-slate-800">
                    <thead class=" bg-gradient-to-r from-cyan-700 to-cyan-800 text-white py-5">
                        <tr >
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
                        <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                            <td>1</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>Titanic</td>
                            <td>
                                <button class="btn bg-blue-600 text-blue-100 hover:bg-purple-600">view</button>
                                <button class="btn bg-blue-600 text-blue-100 hover:bg-purple-600">Edit</button>
                                <a href="{{url('admin/pelayanan-barang/create-2b2')}}" class="btn bg-blue-600 text-blue-100 hover:bg-purple-600">Create 2B2</a>
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