@extends('layouts.admin')

@section('title', 'Penerimaan Barang')

@section('content')
<style>
    .pagination > .disabled, .pagination > .disabled:hover{
        margin-left: 10px;
        margin-right: 10px;
        background: none;
        color: #000;
    }
    .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }

    .pagination a {
        padding: 10px 15px;
        margin: 0 5px;
        text-decoration: none;
        color: #fff;
        background: linear-gradient(45deg, #3498db, #3498db);
        border: 1px solid #3498db;
        border-radius: 5px;
        transition: background 0.3s, color 0.3s, transform 0.3s;
        box-shadow: 0 2px 5px rgba(52, 152, 219, 0.2);
    }

    .pagination a:hover {
        background: linear-gradient(45deg, #2980b9, #2980b9);
        color: #fff;
        transform: scale(1.05);
    }
</style>
    <div class="">
        <div class="text-2xl ">Warehousing / Penerimaan Barang</div>
        <hr class="border-b-2 border-black border-solid">
        <form id="filter" action="{{url('admin/warehousing/penerimaan-barang/filter')}}" method="get">
            <div class="grid grid-cols-4 gap-2 pt-16">
                <div class="text-start w-full">
                    <div>
                        <label>No. Penerimaan</label>
                    </div>
                    <div>
                        <input type="text" id="no_penerimaan" name="no_penerimaan" value="{{$no ?? ''}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <div class="text-start w-full">
                    <div>
                        <label>PBM</label>
                    </div>
                    <div>
                        <input type="text" id="pbm" name="pbm" value="{{$pbm ?? ''}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <div class="text-start">
                    <div>
                        <button class="text-white mt-6 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Search</button>
                        <button class="text-white mt-6 bg-red-600 hover:bg-blue-800 focus:ring-4 focus:bg-red-600 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-600 focus:outline-none dark:focus:bg-red-600" type="reset" onclick="resetForm()">Reset</button>
                    </div>
                </div>
            </div>

            <div class="w-full">
                <a href="{{url('admin/warehousing/create-penerimaan-barang')}}" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah</a>
            </div>
        </form>
        <div class="text-center mb-3 mt-5">
            <div>
                <table class="mt-5 w-full border-solid border-2 border-slate-800 text-center">
                    <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                        <tr>
                            <th class="py-5 px-3">No</th>
                            <th>No Penerimaan</th>
                            <th>Tanggal Masuk</th>
                            <th>PBM</th>
                            <th>Kapal</th>
                            <th class="px-3 w-2/12">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $index => $item)
                            <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                                <td>{{ ($data->currentPage() - 1) * $data->perPage() + $index + 1 }}</td>
                                <td>{{ $item->no_penerimaan }}</td>
                                <td>{{ $item->tanggal_masuk }}</td>
                                <td>{{ $item->nama_pbm }}</td>
                                <td>{{ $item->nama_kapal }}</td>
                                <td class="py-2 flex flex-wrap gap-1 justify-center">
                                    <a href="{{ url('admin/warehousing/view-penerimaan-barang').'/'.$item->penerimaan_barang_id }}" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">View</a>
                                    <a href="{{ url('admin/warehousing/edit-penerimaan-barang').'/'.$item->penerimaan_barang_id }}" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:focus:ring-yellow-900">Edit</a>
                                    <a onclick="if (confirm('Are you sure you want to delete this record?')) { window.location.href = '{{ url('admin/warehousing/penerimaan-barang/delete').'/'.$item->penerimaan_barang_id }}'; }" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" style="cursor: pointer"> Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        @if(count($data) === 0)
                            <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                                <td colspan="6">No Data Found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                <div class="mt-5 pagination">
                    {{ $data->links() }}
                    @if($totalData <= 10)<a href="javascript:void(0)" class="disabled" style="background: transparent;color: #000;">1</a>@endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
        function resetForm() {
            var no_penerimaan = document.getElementsByName('no_penerimaan');
            var pbm = document.getElementsByName('pbm');

            if (no_penerimaan.length > 0 || pbm.length > 0){
                no_penerimaan[0].value = '';
                pbm[0].value = '';
                document.getElementById('filter').submit();
            }
        }
    </script>
@endsection
