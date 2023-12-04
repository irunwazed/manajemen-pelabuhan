@extends('layouts.admin')
@section('title', 'Aneka Usaha')
@section('content')
    <div class="">
        <div class="text-2xl ">Aneka Usaha / Sewa Bunker</div>
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
                    <label>NO KONTRAK</label>
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
                    <label>PERUSAHAAN</label>
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
                    <button class="text-white mt-6 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Search</button>
                </div>
            </div>
        </div>

        <div class="text-end pt-5">
            <a href="{{url('admin/aneka-usaha/create-permohonan-sewa-bunker')}}" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Buat Data</a>
        </div>
        
          
                <table class="border-solid border-0 border-slate-800 w-full">
                    <thead class="border-solid border-0 border-slate-800 bg-gradient-to-r from-[#211c5c] to-primary text-white">
                    <tr>
                        <th class="py-3 px-2">No</th>
                        <th>Tahun/No Kontrak</th>
                        <th>Tanggal Permohonan</th>
                        <th>Perusahaan</th>
                        <th class="px-4">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="border-solid border-1 border-slate-800 hover:bg-slate-300">
                        <td>1</td>
                        <td>2023</td>
                        <td>2023-10-25</td>
                        <td>Jaya Sakti</td>
                        <td>
                            <a href="{{url('admin/aneka-usaha/create-permohonan-sewa-bunker')}}" class="text-white float-right bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 py-2.5 mr-2 mb-2 dark:bg-purple-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-purple-800">View</a>
                            <a href="{{url('admin/aneka-usaha/create-permohonan-sewa-bunker')}}" class="text-white float-right bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2.5 mr-2 mb-2 dark:bg-yellow-600 dark:hover:bg-yellow-700 focus:outline-none dark:focus:ring-yellow-800">Edit</a>
                            <a href="{{url('admin/aneka-usaha/pranota-permohonan-sewa-bunker')}}" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Pranota</a>
                            <a href="{{url('admin/aneka-usaha/nota-4g')}}" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Nota 4E</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
          
        
    </div>
@endsection

@section('script')
@endsection
