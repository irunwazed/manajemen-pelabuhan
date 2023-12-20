@extends('layouts.admin')
@section('title', 'Penerimaan Pembayaran')
@section('content')
    <style>
        .pagination > .disabled{
            margin-left: 10px;
            margin-right: 10px;
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
        <div class="text-2xl ">Pembayaran Tagihan</div>
        <hr class="border-b-2 border-black border-solid">
        <form id="filter-penerimaan" action="{{url('admin/keuangan/pembayaran')}}" method="get">
            <div class="grid grid-cols-4 gap-2 pt-16">
                <div class="text-start w-full">
                    <div>
                        <label>NO PEMBAYARAN</label>
                    </div>
                    <div>
                        <input type="text" value="{{$noPembayaran}}" name="no_pembayaran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <div class="text-start w-full">
                    <div>
                        <label>NAMA REKENING</label>
                    </div>
                    <div>
                        <input type="text" value="{{$namaRekening}}" name="nama_rekening" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <div class="text-start">
                    <div>
                        <button class="text-white mt-6 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Search</button>
                        <button class="text-white mt-6 bg-red-600 hover:bg-blue-800 focus:ring-4 focus:bg-red-600 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-600 focus:outline-none dark:focus:bg-red-600" onclick="resetForm()" >Reset</button>
                    </div>
                </div>
            </div>
        </form>
        <a href="{{url('admin/keuangan/pembayaran-baru')}}" class="text-white float-right bg-green-400 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-green-400 dark:hover:bg-green-400 focus:outline-none dark:focus:bg-green-400">Buat Pembayaran</a>
        <div class="text-center mb-3 mt-5">
            <div>
                <table class="mt-5 w-full border-solid border-2 border-slate-800">
                    <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                    <tr>
                        <th class="py-5 px-3">No</th>
                        <th>No Pembayaran</th>
                        <th>Tanggal</th>
                        <th>Kode Rekening</th>
                        <th>Nama Rekening</th>
                        <th>keterangan</th>
                        <th>Jumlah</th>
                        <th class="px-3">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $index => $item)
                        <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                            <td>{{ ($data->currentPage() - 1) * $data->perPage() + $index + 1 }}</td>
                            <td>{{ $item->no_pembayaran }}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->kode_rekening_kas }}</td>
                            <td>{{ $item->nama_rekening_kas }}</td>
                            <td>{{ $item->ketarangan }}</td>
                            <td>{{ $item->jumlah }}</td>
                            <td class="py-2 flex flex-wrap gap-1 justify-center">
                                <a href="{{url('admin/keuangan/pembayaran').'/'.$item->pembayaran_id }}" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:focus:ring-yellow-900">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="mt-5 pagination">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
    <script>
        function resetForm() {
            Array.prototype.slice.call(
                document.getElementsByTagName('input'))
                .forEach(function (el) {
                    el.value = '';
                });
        }
    </script>
@endsection

@section('script')
@endsection
