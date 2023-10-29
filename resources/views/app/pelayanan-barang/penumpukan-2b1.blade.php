@extends('layouts.admin')
@section('title', 'Pelayanan Barang')
@section('content')
    <div class="">
        <div class="text-2xl ">Pelayanan Barang / Penumpukan 2B1</div>
        <hr class="border-b-2 border-black border-solid">
        <div class="text-center mb-3 mt-5">
            <div class="grid grid-cols-4 gap-2">
                <div class="text-start w-full">
                    <div>
                        <label>Nama Agen</label>
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
                        <label>No Form 2B1</label>
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

            <div>
                <table class="mt-5 w-full border-solid border-2 border-slate-800">
                    <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                    <tr >
                        <th class="py-5 px-3">No</th>
                        <th>No Layanan/PKK</th>
                        <th>No RKBM</th>
                        <th>No Form 2B1</th>
                        <th>PBM</th>
                        <th>Agen</th>
                        <th>Nama Kapal</th>
                        <th>Waktu Penunjukan</th>
                        <th class="px-3">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                        <td>1</td>
                        <td>xxxx</td>
                        <td>xxxx</td>
                        <td>xxxx</td>
                        <td>Lorem ipsum dolor sit amet consectetur</td>
                        <td>xxxx</td>
                        <td>Titanic</td>
                        <td>2 Oktober 2020</td>
                        <td>
                            <button class="font-semibold py-1 px-6 rounded-md hover:opacity-80 bg-blue-600 text-blue-100 hover:bg-purple-600">view</button>
                            <button class="font-semibold py-1 px-6 rounded-md hover:opacity-80 bg-blue-600 text-blue-100 hover:bg-purple-600">Edit</button>
                            <a href="{{url('admin/pelayanan-barang/create-2b1')}}" class="font-semibold py-1 px-6 rounded-md hover:opacity-80 bg-blue-600 text-blue-100 hover:bg-purple-600">Create 2B1</a>
                        </td>
                    </tr>
                    <tr class="border-solid border-2 border-slate-800 bg-slate-200 hover:bg-slate-300">
                        <td>2</td>
                        <td>xxxx</td>
                        <td>xxxx</td>
                        <td>xxxx</td>
                        <td>Lorem ipsum dolor sit amet consectetur</td>
                        <td>xxxx</td>
                        <td>Titanic</td>
                        <td>2 Oktober 2020</td>
                        <td>
                            <button class="font-semibold py-1 px-6 rounded-md hover:opacity-80 bg-blue-600 text-blue-100 hover:bg-purple-600">view</button>
                            <button class="font-semibold py-1 px-6 rounded-md hover:opacity-80 bg-blue-600 text-blue-100 hover:bg-purple-600">Edit</button>
                            <a href="{{url('admin/pelayanan-barang/create-2b1')}}" class="font-semibold py-1 px-6 rounded-md hover:opacity-80 bg-blue-600 text-blue-100 hover:bg-purple-600">Create 2B1</a>
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
