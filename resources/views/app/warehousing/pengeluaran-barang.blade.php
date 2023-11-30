@extends('layouts.admin')

@section('title', 'pengeluaran Barang')

@section('content')
    <div class="">
        <div class="text-2xl ">Warehousing / Pengeluaran Barang</div>
        <hr class="border-b-2 border-black border-solid">
        <form action="" method="get">
            <div class="grid grid-cols-4 gap-2 pt-16">
                <div class="text-start w-full">
                    <div>
                        <label>No. Pengeluaran</label>
                    </div>
                    <div>
                        <input type="text" name="noPengeluaran" id="no_pengeluaran"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <div class="text-start w-full">
                    <div>
                        <label>No Penerimaan</label>
                    </div>
                    <div>
                        <input type="text" name="noPenerimaan" id="noPenerimaan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <div class="text-start w-full">
                    <div>
                        <label>PBM</label>
                    </div>
                    <div>
                        <input type="text" name="namaPBM" id="no_pengeluaran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <div class="text-start">
                    <div>
                    <button class="text-white mt-6 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Search</button>
                    </div>
                </div>
            </div>
        </form> 
      
        <div class="text-center mb-2 mt-5">
            <div>
                <table class="mt-3 w-full border-solid border-0 border-slate-800">
                    <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-2">
                        <tr>
                            <th class="py-2 px-2">No</th>
                            <th>No. Penerimaan</th>
                            <th>No. Pengeluaran</th>
                            <th>Tanggal Masuk</th>
                            <th>Tanggal Keluar</th>
                            <th>PBM</th>
                            <th>Kapal</th>
                            <th class="px-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($data as $row)
                        @if(($loop->index) %2 == 0)
                        <tr class="border-solid border-0 border-slate-800 hover:bg-slate-300">
                          @else
                        <tr class="border-solid border-0 border-slate-800 bg-slate-200 hover:bg-slate-300">
                          @endif
                          <td class="text-center">{{ $loop->index+1 }}</td>
                          <td class="text-center">{{$row->no_penerimaan }}</td>
                          <td class="text-center">{{$row->no_pengeluaran }}</td>
                          <td class="text-center">{{$row->tanggal_masuk }}</td>
                          <td class="text-center">{{$row->tgl_keluar }}</td>
                          <td class="text-center">{{$row->nama_pbm }}</td>
                          <td class="text-center">{{$row->nama_kapal }}</td>
                          <td class="py-2">
                            @if($row->no_pengeluaran === "" || $row->no_pengeluaran===null)
                            <a href="{{ url('/'.$user.'/warehousing/pengeluaran-barang/create-pengeluaran-barang/'.$row->penerimaan_barang_id)  }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create</a>
                           @else
                           <!-- <a href="{{ url('/'.$user.'/warehousing/pengeluaran-barang/edit-pengeluaran-barang/'.$row->pengeluaran_barang_id)  }}" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Edit</a> -->
                            <a href="{{ url('/'.$user.'/warehousing/pengeluaran-barang/view-pengeluaran-barang/'.$row->pengeluaran_barang_id)  }}" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">View</a>
                            @endif
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
