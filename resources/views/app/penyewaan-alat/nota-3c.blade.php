@extends('layouts.admin')
@section('title', 'Penyewaan Alat')
@section('content')
    <div class="">
        <div class="text-2xl ">Penyewaan Alat / Nota 3C</div>
        <hr class="border-b-2 border-black border-solid">
        <div class="grid grid-cols-4 gap-2 pt-16">
            <div class="text-start w-full">
                <div>
                    <label>No Form 1C</label>
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
                    <label>No Form 2C</label>
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
                    <label>No Nota 3C</label>
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
                        <th>No Form 1C</th>
                        <th>No Form 2C</th>
                        <th>No Nota 3C</th>
                        <th>Perusahaan</th>
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
                        <td>Lorem ipsum dolor sit amet consectetur</td>
                        <td>Titanic</td>
                        <td>
                            <button class="font-semibold py-1 px-6 rounded-md hover:opacity-80 bg-blue-600 text-blue-100 hover:bg-purple-600">View</button>
                            <a href="{{url('admin/penyewaan-alat/create-nota-3c')}}" class="font-semibold py-1 px-6 rounded-md hover:opacity-80 bg-blue-600 text-blue-100 hover:bg-purple-600">Create Nota 3C</a>
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
