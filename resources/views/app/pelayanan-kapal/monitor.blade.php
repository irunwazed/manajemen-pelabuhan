@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<div class="">

  <div class="text-2xl ">Pelayanan Kapal / Warta Kedatangan</div>
  <hr class="border-b-2 border-black border-solid">

  <div class="text-center mb-3 mt-5">
    <div class="flex flex-wrap place-content-center my-2">
      <h3>MONIROTING</h3>
    </div>
    <div class="place-content-center flex mt-5 mb-3">
      <form action="" method="get">
        <div class="flex gap-4">
          <div>
            <div class="text-left">
              <label for="">Search</label>
            </div>
            <input name="search" type="text" value="{{ @$_GET['search'] }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="mt-6">
            <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Cari</button>
          </div>
        </div>
      </form>

    </div>
    @if($errors->any())
    <div class="text-red-500 my-3">{{$errors->first()}}</div>
    @endif
    <div>
      <table class="table w-full">
        <thead>
          <tr class="bg-gradient-to-r from-[#211c5c] to-primary text-white">
            <th class="py-2">NO</th>
            <th>No LAYANAN</th>
            <th>NO PKK</th>
            <th>NAMA KAPAL</th>
            <th>KEAGENAN</th>
            <th>PKK</th>
            <th>SPM</th>
            <th>RKBM</th>
            <th>RKPRO</th>
            <th>PPK</th>
            <th>SPOG</th>
            <th>KEPELAUTAN</th>
            <th>LK3</th>
            <th>SPB</th>
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
            <td>{{ @$row->no_pkk }}</td>
            <td>{{ @$row->nama_kapal }}</td>
            <td>{{ showStatus(@$row->keagenan) }}</td>
            <td>{{ showStatus(@$row->pkk) }}</td>
            <td>{{ showStatus(@$row->spm) }}</td>
            <td>{{ showStatus(@$row->rkbm) }}</td>
            <td>{{ showStatus(@$row->rpkro) }}</td>
            <td>{{ showStatus(@$row->ppk) }}</td>
            <td>{{ showStatus(@$row->spog) }}</td>
            <td>{{ showStatus(@$row->kepelautan) }}</td>
            <td>{{ showStatus(@$row->lk3) }}</td>
            <td>{{ showStatus(@$row->spb) }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @include('components.pagination')


    </div>
  </div>



</div>

<?php

function showStatus($status){
  $result = "";

  if($status == "0") $result = "PROSES";
  if($status == "1") $result = "PROSESN VERIFIKASI";
  if($status == "2") $result = "SELESAI";


  return $result;
}

?>



@endsection

@section('script')



@endsection