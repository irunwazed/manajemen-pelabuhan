@extends('layouts.admin')

@section('title', 'Monitoring Gudang')

@section('content')
    <div class="">
        <div class="text-2xl ">Warehousing / Monitoring Gudang</div>
        <hr class="border-b-0 border-black border-solid">
        <div class="font-bold text-2xl text-center pt-5">MONITORING GUDANG</div>
        <form action="" method="get">
            <div class="flex flex-wrap place-content-center my-4">
              <label class="mt-2 mr-2">Lokasi : </label>
              <input type="text" name="search" value="{{ @$request['search'] }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 ml-1 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Cari</button>
            </div>
          </form>
        <div class="text-center mb-3 mt-5">
            <div>
                <table class="mt-5 w-full border-solid border-0 border-slate-800">
                    <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                        <tr>
                            <th class="py-2 px-3">No</th>
                            <th>Lokasi</th>
                            <th>Kapasitas</th>
                            <th>Load</th>
                            <th>Available</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                        @if(($loop->index) %2 == 0)
                        <tr class="border-solid border-0 border-slate-800 hover:bg-slate-300">
                          @else
                        <tr class="border-solid border-0 border-slate-800 bg-slate-200 hover:bg-slate-300">
                          @endif
                          <td class="text-center">{{ ((@$page-1)*@$perPage)+$loop->index+1 }}</td>
                          <td class="text-center">{{$row->nama_lokasi_warehouse }}</td>
                          <td class="text-center">{{$row->daya_tampung }}</td>
                          <td class="text-center">{{$row->jlh_brg_digudang}}</td>
                          <td class="text-center">{{$row->daya_tampung - $row->jlh_brg_digudang}}</td>
                          <td class="py-3">
                            <a href="{{ url('/'.$user.'/warehousing/monitoring-warehousing/detail-monitoring-warehousing/'.$row->lokasi_warehouse_id)  }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">detail</a>
                          
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @include('components.pagination')
            </div>
        </div>

        <!--<div class="font-bold text-2xl">
            <table>
                <tr>
                    <td bgcolor="green" width="70">&nbsp;</td>
                    <td>&nbsp;&nbsp;Available</td>
                </tr>
                <tr>
                    <td bgcolor="red" width="70">&nbsp;</td>
                    <td>&nbsp;&nbsp;Full</td>
                </tr>
            </table>
        </div>-->

    </div>
@endsection

@section('script')

@endsection
