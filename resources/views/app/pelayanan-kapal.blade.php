@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<?php

$navigations = [];

array_push($navigations, [
  "name" => "E-Service RPK Simlala",
  "singkatan" => "SIMLALA",
  "url" => "/" . @$user . "/pelayanan-kapal/simlala",
]);
array_push($navigations, [
  "name" => "PKK (Pemberitahuan Kedatangan Kapal)",
  "singkatan" => "PKK",
  "url" => "/" . @$user . "/pelayanan-kapal/warta",
]);
array_push($navigations, [
  "name" => "SPM (Surat Persetujuan Masuk)",
  "singkatan" => "SPM",
  "url" => "/" . @$user . "/pelayanan-kapal/verifikasi-spm",
]);
array_push($navigations, [
  "name" => "RKBM (Rencana Kerja Bongkar Muat)",
  "singkatan" => "RKBM",
  "url" => "/" . @$user . "/pelayanan-kapal/rkbm",
]);
array_push($navigations, [
  "name" => "RPKRO (Rencana Pelayanan Kapal dan Rencana Operasi)",
  "singkatan" => "RPKRO",
  "url" => "/" . @$user . "/pelayanan-kapal/rpkro",
]);
array_push($navigations, [
  "name" => "PPK (Penetapan Pelayanan Kapal)",
  "singkatan" => "PPK",
  "url" => "/" . @$user . "/pelayanan-kapal/ppk",
]);
array_push($navigations, [
  "name" => "SPOG (Surat Persetujuan oleh Gerak)",
  "singkatan" => "SPOG",
  "url" => "/" . @$user . "/pelayanan-kapal/spog",
]);
array_push($navigations, [
  "name" => "Keberangkatan kapal",
  "singkatan" => "KEBERANGKATAN",
  "url" => "/" . @$user . "/pelayanan-kapal/keberangkatan",
]);
array_push($navigations, [
  "name" => "KEPELAUTAN",
  "singkatan" => "KEPELAUTAN",
  "url" => "/" . @$user . "/pelayanan-kapal/kepelautan",
]);
array_push($navigations, [
  "name" => "LK3 (Laporan Kedatangan dan Keberangkatan Kapal)",
  "singkatan" => "LK3",
  "url" => "/" . @$user . "/pelayanan-kapal/lk3",
]);
array_push($navigations, [
  "name" => "SPB (Surat Persetujuan Berlayar)",
  "singkatan" => "SPB",
  "url" => "/" . @$user . "/pelayanan-kapal/spb",
]);
array_push($navigations, [
  "name" => "Permohonan Pandu Tunda",
  "singkatan" => "PANDU",
  "url" => "/" . @$user . "/pelayanan-kapal/pandu-tunda",
]);
array_push($navigations, [
  "name" => "Permohonan Isi Air",
  "singkatan" => "AIR",
  "url" => "/" . @$user . "/pelayanan-kapal/air",
]);
array_push($navigations, [
  "name" => "NOTA 4",
  "singkatan" => "NOTA4",
  "url" => "/" . @$user . "/pelayanan-kapal/nota4a",
]);
array_push($navigations, [
  "name" => "Monitoring",
  "singkatan" => "MONITORING",
  "url" => "/" . @$user . "/pelayanan-kapal/monitor",
]);

//dd($navigations);

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
    @if(@$user === "admin")
    <a href="{{ url('').$navigation['url'] }}" class="py-10 px-20 text-center border-solid border-black border-2 rounded-lg shadow-lg hover:cursor-pointer hover:shadow-2xl hover:bg-slate-200">
      {{ $navigation['name'] }}
    </a>
    @elseif(($navigation['singkatan']==="SIMLALA" || $navigation['singkatan']==="SPOG" || $navigation['singkatan']==="KEBERANGKATAN"  || $navigation['singkatan']==="MONITORING" || $navigation['singkatan']==="SPB"  || $navigation['singkatan']==="PKK" || $navigation['singkatan']==="SPM")  && @$user === "agen-kapal")
    <a href="{{ url('').$navigation['url'] }}" class="py-10 px-20 text-center border-solid border-black border-2 rounded-lg shadow-lg hover:cursor-pointer hover:shadow-2xl hover:bg-slate-200">
      {{ $navigation['name'] }}
    </a>
    @elseif(($navigation['singkatan']==="PPK" || $navigation['singkatan']==="RPKRO"  || $navigation['singkatan']==="RKBM"  || $navigation['singkatan']==="MONITORING" || $navigation['singkatan']==="RPKRO"  || $navigation['singkatan']==="PKK" || $navigation['singkatan']==="SPM")  && @$user === "petugas-lala")
    <a href="{{ url('').$navigation['url'] }}" class="py-10 px-20 text-center border-solid border-black border-2 rounded-lg shadow-lg hover:cursor-pointer hover:shadow-2xl hover:bg-slate-200">
      {{ $navigation['name'] }}
    </a>
    @elseif(($navigation['singkatan']==="RPKRO" || $navigation['singkatan']==="PANDU"  || $navigation['singkatan']==="AIR"  || $navigation['singkatan']==="MONITORING" || $navigation['singkatan']==="NOTA4")  && @$user === "pelindo-kapal")
    <a href="{{ url('').$navigation['url'] }}" class="py-10 px-20 text-center border-solid border-black border-2 rounded-lg shadow-lg hover:cursor-pointer hover:shadow-2xl hover:bg-slate-200">
      {{ $navigation['name'] }}
    </a>
    @elseif(($navigation['singkatan']==="SPM" || $navigation['singkatan']==="SPOG"  || $navigation['singkatan']==="KEPELAUTAN"  || $navigation['singkatan']==="MONITORING" || $navigation['singkatan']==="SPB")  && @$user === "syahbandar")
    <a href="{{ url('').$navigation['url'] }}" class="py-10 px-20 text-center border-solid border-black border-2 rounded-lg shadow-lg hover:cursor-pointer hover:shadow-2xl hover:bg-slate-200">
      {{ $navigation['name'] }}
    </a>
    @elseif(($navigation['singkatan']==="RKBM" || $navigation['singkatan']==="MONITORING" )  && @$user === "pbm")
    <a href="{{ url('').$navigation['url'] }}" class="py-10 px-20 text-center border-solid border-black border-2 rounded-lg shadow-lg hover:cursor-pointer hover:shadow-2xl hover:bg-slate-200">
      {{ $navigation['name'] }}
    </a>
    @endif
    @endforeach
  </div>

</div>


@endsection
