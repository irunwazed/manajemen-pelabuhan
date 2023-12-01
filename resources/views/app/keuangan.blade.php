@extends('layouts.admin')

@section('title', 'Keuangan')


@section('content')

<?php

$navigations = [];

array_push($navigations, [
  "name" => "Jurnal Kas Masuk",
  "url" => "/" . @$user . "/keuangan/penerimaan",
]);
array_push($navigations, [
  "name" => "Jurnal Kas Keluar",
  "url" => "#/" . @$user . "/keuangan/pengeluaran",
]);
array_push($navigations, [
  "name" => "pelaporan",
  "url" => "#/" . @$user . "/keuangan/pelaporan",
]);

// dd($navigations);

?>

<div class="px-3 mb-20">

  <div>
    <div class="flex flex-wrap gap-2 ml-6">
      <embed class="" width="30" src="{{URL::asset('assets/svg/kapal.svg')}}" />
      <h1 class="font-bold text-4xl ">Pendataan Data Keuangan</h1>
    </div>
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