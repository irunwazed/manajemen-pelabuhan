@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<div class="">

  <div class="text-2xl ">Pelayanan Kapal / Nota 4A</div>
  <hr class="border-b-2 border-black border-solid">

  <div class="text-center mb-3 mt-5">
    <h2 class="text-2xl font-bold mt-10 mb-7">INVOICE PELAYANAN KAPAL/NOTA 4A</h2>
    <center>

      <form action="" method="get">
        <div class="w-[400px] my-2">
  
          <div class="mb-1 flex">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-right mr-5">Nama Agen </label>
            <input type="text" name="agen" value="{{ @$request['agen'] }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="mb-1 flex">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-right mr-5">Nama Kapal </label>
            <input type="text" name="kapal" value="{{ @$request['kapal'] }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="mb-1 flex">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-right mr-5">No Layanan/PKK </label>
            <input type="text" name="layanan_pkk" value="{{ @$request['layanan_pkk'] }}"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Search</button>
        </div>
        </form>
    </center>
  </div>
  <table class="border-solid border-0 border-slate-800 w-full">
    <thead>
      <tr class="border-solid border-2 border-slate-800 bg-gradient-to-r from-[#211c5c] to-primary text-white">
        <th class="text-center">NO</th>
        <th class="text-center">NO PELAYANAN/PKK</th>
        <th class="text-center">NO NOTA4</th>
        <th class="text-center">NAMA AGEN</th>
        <th class="text-center">NAMA KAPAL</th>
        <th class="px-5 py-2">AKSI</th>
      </tr>
    </thead>
    <tbody>
     

      @foreach($data as $row)
      @if(($loop->index) %2 == 0)
      <tr class="border-solid border-1 border-slate-800 hover:bg-slate-300">
        @else
      <tr class="border-solid border-1 border-slate-800 bg-slate-200 hover:bg-slate-300">
        @endif
        <td class="text-center">{{ $loop->index+1 }}</td>
        <td class="text-center">{{$row->no_layanan_kapal }}/{{$row->no_pkk }}</td>
        <td class="text-center">{{$row->no_nota4a }}</td>
        <td class="text-center">{{$row->nama_agen }}</td>
        <td class="text-center">{{$row->nama_kapal }}</td>
        <td class="py-3">
          @if($row->no_nota4a != null && $row->no_nota4a != "")
            <a href="{{ url('/'.$user.'/pelayanan-kapal/nota4a/nota4a-detail/'.$row->pelayanan_kapal_id)  }}" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Detail</a>
            @else
            <a href="{{ url('/'.$user.'/pelayanan-kapal/nota4a/nota4a-terbit/'.$row->pelayanan_kapal_id)  }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Terbitkan</a>
         @endif
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>


@endsection

@section('script')



@endsection