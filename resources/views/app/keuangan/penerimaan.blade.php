@extends('layouts.admin')
@section('title', 'Aneka Usaha')
@section('content')
    <div class="">
        <!-- Start Header -->
        <div class="text-2xl ">Penerimaan Pembayaran</div>
        <hr class="border-b-2 border-black border-solid">
        <!-- End Header -->

        <!-- Start Search -->
        <div class="grid grid-cols-4 gap-2 pt-16">
            <div class="text-start w-full">
                <div>
                    <label>NO PEMBAYARAN</label>
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
                    <button  class="text-white mt-7 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Search</button>
                </div>
            </div>
        </div>
        <!-- End Search -->

        <div class="text-end pt-5">
            <a href="{{url('keuangan/create-penerimaan')}}"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Buat Data</a>
        </div>

        <!-- Start Table Content -->
        <div class="text-center mb-3 mt-5">
            <div>
                <table class="mt-5 w-full border-solid border-2 border-slate-800" id="datatables">
                    <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                        <tr>
                            <th>No Penerimaan</th>
                            <th>Perusahaan</th>
                            <th>Tanggal</th>
                            <th>Jumlah</th>
                            <th class="px-3">Aksi</th>
                        </tr>
                    </thead>
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
                {{--url: '{{ route('aneka-usaha.lahan.list-sewa') }}',--}}
                url: '{{ route('keuangan.penerimaan.list') }}',
                type: 'post',
                data: function (d) {}
            },
            columns: [
                { data: 'no_penerimaan', width: '15%' },
                { data: 'nama_perusahaan' },
                { data: 'tanggal', width: '15%' },
                { data: 'jumlah', width: '15%' },
                { data: 'action', width: '10%' },
            ],


    });

    let dataTableTbody = $('#datatables tbody');
    const dataTableDatas = row => dataTable.row(row).data();
    dataTable.ajax.reload();


</script>
@endsection
