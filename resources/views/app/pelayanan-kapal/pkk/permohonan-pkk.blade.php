@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<div class="">

  <div class="text-2xl ">Pelayanan Kapal / Pemberitahuan Kedatangan Kapal (PKK)</div>
  <hr class="border-b-2 border-black border-solid">

  <div class=" mb-3 mt-5">

    <h3 class="text-center font-bold text-2xl mb-4">PERMOHONAN PEMBERITAHUAN KEDATANGAN KAPAL</h3>

    <center>
      <div class="w-[400px] my-2">
        <form action="" method="get">
          <div class="mb-1 flex">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-right mr-5">Nama Agen :</label>
            <input name="nama_agen" value="{{ @$request['nama_agen'] }}" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="mb-1 flex">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-right mr-5">Nama Kapal :</label>
            <input name="nama_kapal" value="{{ @$request['nama_kapal'] }}"  type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="mb-1 flex">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-right mr-5">Status PKK :</label>
            <input name="status_pkk" value="{{ @$request['status_pkk'] }}"  type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Cari</button>
        </form>
        </div>
    </center>


    <div>
      <table class="border-solid border-2 border-slate-800 w-full">
        <thead>
          <tr class="border-solid border-2 border-slate-800 bg-gradient-to-r from-[#211c5c] to-primary text-white">
            <th>NO</th>
            <th>NAMA AGEN</th>
            <th>NO PELAYANAN</th>
            <th>NO PKK</th>
            <th>WAKTU PERMOHONAN</th>
            <th>NAMA KAPAL</th>
            <th class="py-2">AKSI</th>
          </tr>
        </thead>
        <tbody>
          @foreach(@$data as $key => $row)
          @if((@$loop->index) %2 == 0)
          <tr class="border-solid border-1 border-slate-800 hover:bg-slate-300">
            @else
          <tr class="border-solid border-1 border-slate-800 bg-slate-200 hover:bg-slate-300">
            @endif
            <td class="text-center">{{ $loop->index+1 }}</td>
            <td>{{@$row->nama_agen}}</td>
            <td>{{@$row->no_layanan_kapal}}</td>
            <td>{{@$row->no_pkk}}</td>
            <td>{{@$row->tanggal_registrasi_permohonan}}</td>
            <td>{{@$row->nama_kapal}}</td>
            <td class="py-3">
              <a href="verifikasi-pkk/detail/{{@$row->pelayanan_kapal_id}}" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">View</a>
              @if(@$row->flag == 1)
                <a href="verifikasi-pkk/form/{{@$row->pelayanan_kapal_id}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Verifikasi</a>
              @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @include('components.pagination')

    </div>
  </div>



</div>



@endsection

@section('script')



@endsection