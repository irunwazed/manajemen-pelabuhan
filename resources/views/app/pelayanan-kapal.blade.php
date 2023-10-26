@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<?php

$navigations = [];

array_push($navigations, [
  "name" => "E-Service RPK Simlala",
  "url" => "/" . @$user . "/pelayanan-kapal/simlala",
]);
array_push($navigations, [
  "name" => "PKK (Pemberitahuan Kedatangan Kapal)",
  "url" => "/" . @$user . "/pelayanan-kapal/simlala",
]);
array_push($navigations, [
  "name" => "SPM (Surat Persetujuan Masuk)",
  "url" => "/" . @$user . "/pelayanan-kapal/simlala",
]);
array_push($navigations, [
  "name" => "RKBM (Rencana Kerja Bongkar Muat)",
  "url" => "/" . @$user . "/pelayanan-kapal/simlala",
]);
array_push($navigations, [
  "name" => "RPKRO (Rencana Pelayanan Kapal dan Rencana Operasi)",
  "url" => "/" . @$user . "/pelayanan-kapal/simlala",
]);
array_push($navigations, [
  "name" => "PPK (Penetapan Pelayanan Kapal)",
  "url" => "/" . @$user . "/pelayanan-kapal/simlala",
]);
array_push($navigations, [
  "name" => "SPOG (Surat Persetujuan oleh Gerak)",
  "url" => "/" . @$user . "/pelayanan-kapal/simlala",
]);
array_push($navigations, [
  "name" => "Keberangkatan kapal",
  "url" => "/" . @$user . "/pelayanan-kapal/simlala",
]);
array_push($navigations, [
  "name" => "KEPELAUTAN",
  "url" => "/" . @$user . "/pelayanan-kapal/simlala",
]);
array_push($navigations, [
  "name" => "LK3 (Laporan Kedatangan dan Keberangkatan Kapal)",
  "url" => "/" . @$user . "/pelayanan-kapal/simlala",
]);
array_push($navigations, [
  "name" => "SPB (Surat Persetujuan Berlayar)",
  "url" => "/" . @$user . "/pelayanan-kapal/simlala",
]);
array_push($navigations, [
  "name" => "Permohonan Pandu Tunda",
  "url" => "/" . @$user . "/pelayanan-kapal/simlala",
]);
array_push($navigations, [
  "name" => "Permohonan Isi Air",
  "url" => "/" . @$user . "/pelayanan-kapal/simlala",
]);
array_push($navigations, [
  "name" => "NOTA 4",
  "url" => "/" . @$user . "/pelayanan-kapal/simlala",
]);
array_push($navigations, [
  "name" => "Monitoring",
  "url" => "/" . @$user . "/pelayanan-kapal/simlala",
]);

// dd($navigations);

?>

<div class="px-3 mb-20">

  <div>
    <div class="flex flex-wrap gap-2 ml-6">
      <embed class="" width="30" src="{{URL::asset('assets/svg/kapal.svg')}}" />
      <h1 class="font-bold text-4xl ">Pelayanan Kapal</h1>
    </div>
    <!-- <div class="mt-1 text-slate-700">Pendataan Keagenan Kapal</div> -->
  </div>

  <div class="mt-8 grid grid-cols-3 gap-6">
    @foreach($navigations as $navigation)
    <a href="{{ $navigation['url'] }}" class="py-10 px-20 text-center border-solid border-black border-2 rounded-lg shadow-lg hover:cursor-pointer hover:border-0 hover:shadow-2xl hover:bg-slate-50">
      {{ $navigation['name'] }}
    </a>
    @endforeach
  </div>

</div>


@endsection

@section('script')



@endsection