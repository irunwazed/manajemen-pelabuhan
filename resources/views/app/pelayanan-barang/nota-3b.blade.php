@extends('layouts.admin')
@section('title', 'Pelayanan Barang')
@section('content')
<div class="">
    <div class="text-2xl ">Pelayanan Barang / Pranota (Nota 3B)</div>
    <hr class="border-b-2 border-black border-solid">
    <div class="text-center mb-3 mt-5">
        <div class="grid grid-cols-4 gap-2">
            <div class="text-start w-full">
                <div>
                    <label>Nama PBM</label>
                </div>
                <div>
                   <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <div class="text-start w-full">
                <div>
                    <label>No PPK</label>
                </div>
                <div>
                   <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <div class="text-start w-full">
                <div>
                    <label>No Nota 3B</label>
                </div>
                <div>
                   <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <div class="text-start">
                <div>
                    <button class="text-white mt-6 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Search</button>
                </div>
            </div>
        </div>

        <div>
            <table class="mt-5 w-full border-solid border-2 border-slate-800">
                <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                    <tr>
                        <th class="py-5 px-3">No</th>
                        <th>No Layanan/PKK</th>
                        <th>No RKBM</th>
                        <th>No Form 2B1</th>
                        <th>No Form 2B2</th>
                        <th>No Nota 3B</th>
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
                        <td>Lorem ipsum dolor sit amet consectetur</td>
                        <td>xxxx</td>
                        <td>XXXX</td>
                        <td>XXXX</td>
                        <td>Titanic</td>
                        <td class="py-2 flex flex-wrap gap-1 justify-center ">
                            <a href="#" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">View</a>
                            <a href="{{url('admin/pelayanan-barang/create-nota-3B')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create Nota 3B</a>
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