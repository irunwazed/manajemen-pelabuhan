@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<div class="">

  <div class="text-2xl ">Pelayanan Kapal / KEBERANGKATAN KAPAL</div>
  <hr class="border-b-2 border-black border-solid">

  <div class="text-center mb-3 mt-5">
    <h2 class="text-2xl font-bold mt-10 mb-7">KEBERANGKATAN KAPAL</h2>
    <center>
      <form action="" method="get">
        <div class="w-[400px] my-2">
          <div class="mb-1 flex">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-right mr-5">Nama Agen :</label>
            <input type="text" name="nama_agen" value="{{ @$_GET['nama_agen'] }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="mb-1 flex">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-right mr-5">No PPK :</label>
            <input type="text" name="no_pkk" value="{{ @$_GET['no_pkk'] }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="mb-1 flex">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-right mr-5">Kapal :</label>
            <input type="text" name="nama_kapal" value="{{ @$_GET['nama_kapal'] }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Search</button>
        </div>
      </form>
    </center>
  </div>
  <table class="table w-full">
    <thead>
      <tr class="border-solid border-2 border-slate-800 bg-gradient-to-r from-[#211c5c] to-primary text-white">
        <th>No</th>
        <th>NO LAYANAN/PKK</th>
        <th>NAMA AGEN</th>
        <th>NAMA KAPAL</th>
        <th>WAKTU PERMOHONAN</th>
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
        <td>{{ @$row->no_layanan_kapal }}</td>
        <td>{{ @$row->nama_kapal }}</td>
        <td>{{ @$row->nama_agen }}</td>
        <td>{{ changeDateFormate(@$row->wkt_permohonan_spog) }}</td>
        <td class="py-2 flex flex-wrap gap-1 justify-center ">
            <a href="./detail?id={{ @$row->pelayanan_kapal_id }}" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:focus:ring-yellow-900">View</a>
          @if(@$row->flag_berangkat == 1)
            <a href="./detail?id={{ @$row->pelayanan_kapal_id }}&status=edit" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:focus:ring-yellow-900">Verifikasi</a>
          @endif
        </td>
      </tr>
      @endforeach
      <!-- <tr>
        <td class="text-center">1</td>
        <td>xxxx</td>
        <td>xxxx</td>
        <td>xxxx</td>
        <td>xxxx</td>
        <td>xxxx</td>
        <td>xxxx</td>
        <td>xxxx</td>
        <td>xxxx</td>
        <td class="py-3">
          <a href="#" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Edit</a>
          <a href="#" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">View</a>
          <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Kirim</a>
        </td>
      </tr> -->
    </tbody>
  </table>
  @include('components.pagination')

</div>



@endsection

@section('script')



@endsection