@extends('layouts.admin')
@section('title', 'Aneka Usaha')
@section('content')
<div class="">
    <!-- Start Header -->
    <div class="text-2xl ">Aneka Usaha / Permohonan Sewa Tanah Dan Bangunan</div>
    <hr class="border-b-2 border-black border-solid">
    <!-- End Header -->

    <!-- Start Search -->
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
                <button class="text-white mt-7 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Search</button>
            </div>
        </div>
    </div>
    <!-- End Search -->

    <div class="text-end pt-5">
        <a href="{{url('aneka-usaha/lahan')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Buat Data</a>
    </div>

    <!-- Start Table Content -->
    <div class="text-center mb-3 mt-5">
        <div>
            <table class="mt-5 w-full border-solid border-2 border-slate-800" id="datatables">
                <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                    <tr>
                        <th class="py-2 px-3">No</th>
                        <th>Tahun/No Kontrak</th>
                        <th>Tanggal Permohonan</th>
                        <th>Perusahaan</th>
                        <th class="px-3">Aksi</th>
                    </tr>
                </thead>
                <!-- <tbody>
                            <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                                <td x-text="sewa.au_lahan_id"></td>
                                <td>2023</td>
                                <td>2023-10-25</td>
                                <td>Jaya Sakti</td>
                                <td class="py-3"> 
                                    <a href="{{url('admin/aneka-usaha/create-permohonan-sewa-lahan')}}" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:focus:ring-yellow-900">Edit</a>
                                    <a href="{{url('admin/aneka-usaha/create-permohonan-sewa-lahan')}}" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">View</a>
                                    <a href="{{url('admin/aneka-usaha/pranota-permohonan-sewa-lahan')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Pranota</a>
                                    <a href="#{{url('admin/aneka-usaha/nota-4e')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Nota 4E</a>
                                </td>
                            </tr>
                        
                    </tbody> -->
            </table>
        </div>
    </div>
    <!-- End Table Content -->
</div>
@endsection

@section('script')
<script>
    const dataTable = $('#datatables').DataTable({
        processing: true,
        serverSide: true,
        scrollX: true,
        deferLoading: 0,
        ajax: {
            url: '{{ route('
            aneka - usaha.lahan.list - sewa ') }}',
            type: 'post',
            data: function(d) {}
        },
        columns: [{
                data: 'id',
                width: '5%'
            },
            {
                data: 'no_kontrak',
                width: '15%'
            },
            {
                data: 'tgl_kontrak',
                width: '15%'
            },
            {
                data: 'nama_perusahaan'
            },
            {
                data: 'action',
                width: '30%'
            },
        ],


    });

    let dataTableTbody = $('#datatables tbody');
    const dataTableDatas = row => dataTable.row(row).data();
    dataTable.ajax.reload();
</script>
@endsection