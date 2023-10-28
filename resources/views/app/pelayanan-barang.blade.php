@extends('layouts.admin')

@section('title', 'Pelayanan Barang')


@section('content')

<?php

$navigations = [];

array_push($navigations, [
  "name" => "PENUMPUKAN 2B1",
  "url" => "/" . @$user . "/pelayanan-barang/penumpukan-2b1",
]);
array_push($navigations, [
  "name" => "PENGELUARAN 2B2",
  "url" => "/" . @$user . "/pelayanan-barang/pengeluaran-2b2",
]);
array_push($navigations, [
  "name" => "NOTA 3B (PRANOTA)",
  "url" => "/" . @$user . "/pelayanan-barang/nota-3b",
]);
array_push($navigations, [
  "name" => "NOTA 4B (INVOICE)",
  "url" => "/" . @$user . "/pelayanan-barang/nota-4b",
]);

?>

<div class="px-3 mb-20">

  <div class="ml-6">
    <div class="flex flex-wrap gap-2 ">
      <embed class="" width="30" src="{{URL::asset('assets/svg/kapal.svg')}}" />
      <h1 class="font-bold text-4xl ">Pelayanan Bongkar Muat</h1>
    </div>
    <div class="mt-1 text-slate-700">Pendataan Pelayanan Bongkar Muat Barang</div>
  </div>

  <div class="mt-8 grid grid-cols-3 gap-6">
    @foreach($navigations as $navigation)
    <a href="{{ url('').$navigation['url'] }}" class="py-10 px-20 text-center border-solid border-black border-2 rounded-lg shadow-lg hover:cursor-pointer hover:border-1 hover:shadow-2xl hover:bg-slate-200">
      {{ $navigation['name'] }}
    </a>
    @endforeach
  </div>

</div>


@endsection
