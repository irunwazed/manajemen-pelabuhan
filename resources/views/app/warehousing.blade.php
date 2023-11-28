@extends('layouts.admin')

@section('title', 'Warehousing')


@section('content')

<?php

$navigations = [];

array_push($navigations, [
  "name" => "Penerimaan Barang",
  "url" => "/" . @$user . "/warehousing/penerimaan-barang",
]);
array_push($navigations, [
  "name" => "Pengeluaran Barang",
  "url" => "/" . @$user . "/warehousing/pengeluaran-barang",
]);
array_push($navigations, [
  "name" => "Monitoring Warehousing",
  "url" => "/" . @$user . "/warehousing/monitoring-warehousing",
]);

// dd($navigations);

?>

<div class="px-3 mb-20">

  <div>
    <div class="flex flex-wrap gap-2 ml-6">
      <embed class="" width="30" src="{{URL::asset('assets/svg/kapal.svg')}}" />
      <h1 class="font-bold text-4xl ">Warehousing & Inventory</h1>
    </div>
    <!-- <div class="mt-1 text-slate-700">Pendataan Keagenan Kapal</div> -->
  </div>

  <div class="mt-8 grid grid-cols-3 gap-6">
    @foreach($navigations as $navigation)
    <a href="{{ url('').$navigation['url'] }}" class="py-10 px-20 text-center border-solid border-black border-2 rounded-lg shadow-lg hover:cursor-pointer hover:shadow-2xl hover:bg-slate-200">
      {{ $navigation['name'] }}
    </a>
    @endforeach
  </div>

</div>


@endsection
