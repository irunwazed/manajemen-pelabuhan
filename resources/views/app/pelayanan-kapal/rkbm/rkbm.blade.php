@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<div class="">

  <div class="text-2xl ">Pelayanan Kapal / Rencana Kerja Bongkar Muat (RKBM) </div>
  <hr class="border-b-2 border-black border-solid">

  <div class="text-center mb-3 mt-5">
    <h2 class="text-2xl font-bold mt-10 mb-7">RENCANA KERJA BONGKAR MUAT (RKBM)</h2>
    <center>

      <div class="w-[400px] my-2">

        <div class="mb-1 flex">
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-right mr-5">Nama Agen :</label>
          <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-1 flex">
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-right mr-5">No PPK :</label>
          <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-1 flex">
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-right mr-5">Kapal :</label>
          <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Search</button>
      </div>
    </center>
  </div>


  @if($errors->any())
  <div class="alert alert-success bg-red-800 text-red-100 rounded-md text-center py-4 font-semibold text-lg">
    {{$errors->first()}}

  </div>
  @endif
  @if(session()->has('success'))
  <div class="alert alert-success bg-green-800 text-green-100 rounded-md text-center py-4 font-semibold text-lg">
    {{ session()->get('success') }}
  </div>
  @endif

  <table class="table w-full">
    <thead>
      <tr class="bg-gradient-to-r from-[#211c5c] to-primary text-white">
        <th>No</th>
        <th>NO LAYANAN</th>
        <th>PKK</th>
        <th>AGEN</th>
        <th>NAMA KAPAL</th>
        <th>WAKTU PENUNJUKKAN</th>
        <th class="px-5 py-2">AKSI</th>
      </tr>
    </thead>
    <tbody>

      @foreach(@$data as $row)
      @if(($loop->index) %2 == 0)
      <tr class="border-solid border-1 border-slate-800 hover:bg-slate-300">
        @else
      <tr class="border-solid border-1 border-slate-800 bg-slate-200 hover:bg-slate-300">
        @endif
        <td class="text-center">{{ ((@$page-1)*@$perPage)+$loop->index+1 }}</td>
        <td>{{$row->no_layanan_kapal }}</td>
        <td>{{$row->no_pkk }}</td>
        <td>{{$row->nama_agen }}</td>
        <td>{{$row->nama_kapal }}</td>
        <td>{{ changeDateFormate($row->waktu_aktual_kedatangan) }}</td>
        <td class="py-2 flex flex-wrap gap-1 justify-center ">
          @if(@$row->rkbm_flag == "0" || @$row->rkbm_flag == NULL)
          <a href="form-rkbm?id={{$row->pelayanan_kapal_id }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">RKBM</a>
          @if(@$row->pelayanan_kapal_rkbm_id)
          <a href="rkbm/barang?id={{ $row->pelayanan_kapal_rkbm_id }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">BARANG</a>
          <a href="rkbm/tkbm?id={{ $row->pelayanan_kapal_rkbm_id }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">TKBM</a>
          <a href="rkbm/kirim?id={{ $row->pelayanan_kapal_rkbm_id }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">KIRIM</a>
          @endif
          @endif
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @include('components.pagination')

</div>



@endsection

@section('script')



@endsection