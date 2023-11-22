@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')


<div class="">
  <div class="text-2xl "> e-Service RPK Simlala</div>
  <hr class="border-b-2 border-black border-solid">
  <div class="w-full text-right"> e-Service RPK Simlala < Pelayanan Kapal</div>
      <div class="text-center mb-3 mt-5">
        <h2 class="text-2xl font-bold">Pencarian NO RPK E-SERVICE SIMLALA DEPHUB</h2>
        <form action="" method="get">
          <div class="flex flex-wrap place-content-center my-2">
            <label class="mt-2 mr-2">Nama Kapal : </label>
            <input type="text" name="search" value="{{ @$request['search'] }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 ml-1 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Cari</button>
          </div>
        </form>
      </div>

      <table class="table w-full">
        <thead>
          <tr class="border-solid border-1 border-slate-800 bg-gradient-to-r from-[#211c5c] to-primary text-white">
            <th>No</th>
            <th>TANGGAL</th>
            <th>No RKP</th>
            <th>JENIS</th>
            <th>NAMA PERUSAHAAN</th>
            <th>NAMA KAPAL</th>
            <th class="py-3">TANGGAL BERLAKU</th>
            <th>TRAYEK</th>
            <th class="pr-3 py-3">MUATAN</th>
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
            <td>{{ changeDateFormate($row->tanggal_rpk) }}</td>
            <td>{{$row->no_rpk }}</td>
            <td>{{$row->jenis_trayek }}</td>
            <td>{{$row->nama_perusahaan }}</td>
            <td>{{$row->nama_kapal }}</td>
            <td>{{ changeDateFormate($row->tgl_awal__berlaku) }} - {{ changeDateFormate($row->tgl_akhir_berlaku) }}</td>
            <td>{{$row->trayek }}</td>
            <td>{{$row->muatan }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @include('components.pagination')

  </div>



  @endsection

  @section('script')



  @endsection