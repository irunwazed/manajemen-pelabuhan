@extends('layouts.admin')

@section('title', 'pengeluaran Barang')

@section('content')
    <div class="">
        <div class="text-2xl ">Warehousing / Pengeluaran Barang</div>
        <hr class="border-b-2 border-black border-solid">
            <div class="grid grid-cols-4 gap-2 pt-16">
                <div class="text-start w-full">
                    <div>
                        <label>No. Pengeluaran</label>
                    </div>
                    <div>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <div class="text-start w-full">
                    <div>
                        <label>PBM</label>
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

            <div class="w-full">
                <a href="{{url('admin/warehousing/create-pengeluaran-barang')}}" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah</a>
            </div>
        <div class="text-center mb-3 mt-5">
            <div>
                <table class="mt-5 w-full border-solid border-2 border-slate-800">
                    <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                        <tr>
                            <th class="py-5 px-3">No</th>
                            <th>No. Pengeluaran</th>
                            <th>Tanggal Keluar</th>
                            <th>No. Penerimaan</th>
                            <th>Tanggal Masuk</th>
                            <th>PBM</th>
                            <th>Kapal</th>
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
                            <td>Lorem ipsum dolor sit amet consectetur</td>
                            <td>Titanic</td>
                        <td class="py-2 flex flex-wrap gap-1 justify-center ">
                            <a href="{{url('admin/warehousing/create-pengeluaran-barang')}}" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">View</a>
                            <a href="{{url('admin/warehousing/edit-pengeluaran-barang')}}" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:focus:ring-yellow-900">Edit</a>
                            <a href="{{url('admin/warehousing/delete-pengeluaran-barang')}}" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:focus:ring-yellow-900">Delete</a>
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
