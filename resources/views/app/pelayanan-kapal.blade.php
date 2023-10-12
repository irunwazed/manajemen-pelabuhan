@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<div class="px-3">

  <div>
    <div class="flex flex-wrap gap-2">
      <embed class="" width="30" src="{{URL::asset('assets/svg/kapal.svg')}}" />
      <h1 class="font-bold text-4xl ">Pelayanan Kapal</h1>
    </div>
    <div class="mt-1 text-slate-700">Pendataan Keagenan Kapal</div>
  </div>

  <div class="mt-6 grid grid-cols-2 gap-20">
    <div class="py-10 px-20 text-center border-solid border-black border-2 rounded-lg hover:cursor-pointer hover:border-0 hover:shadow-2xl hover:bg-slate-100">
      Registrasi Agen Kapal
    </div>
    <div class="py-10 px-20 text-center border-solid border-black border-2 rounded-lg hover:cursor-pointer hover:border-0 hover:shadow-2xl hover:bg-slate-100">
      Warta Kedatangan
    </div>
  </div>

  <div class="mt-6">
    <h3 class="font-semibold text-xl">Monitoring atas Pelayanan Kapal</h3>
    <div class="mt-2 grid grid-cols-2 gap-20">
      <div class="py-3 px-20 text-center border-solid border-black border-2 rounded-lg hover:cursor-pointer hover:border-0 hover:shadow-2xl hover:bg-slate-100">
        Verifikasi & Approval Permohonan
      </div>
      <div class="py-3 px-20 text-center border-solid border-black border-2 rounded-lg hover:cursor-pointer hover:border-0 hover:shadow-2xl hover:bg-slate-100">
        Perpanjangan/Pembatalan Permohonan
      </div>
    </div>
  </div>
</div>


@endsection

@section('script')



@endsection