@extends('layouts.admin')

@section('title', 'GROUP PENGGUNA')


@section('content')


<div class="px-3 mb-20">

  <div class="ml-6">
    <div class="flex flex-wrap gap-2 ">
      <embed class="" width="30" src="{{URL::asset('assets/svg/kapal.svg')}}" />
      <h1 class="font-bold text-4xl ">MANAJEMEN PENGGUNA </h1>
    </div>
    <div class="mt-1 text-slate-700">Pendataan pengguna Sistem Port Simulator</div>
  </div>

  <div class="mt-8 grid grid-cols-3 gap-6">
    @foreach(@session()->get("submenu") as $navigation)
    @if($navigation->parent == "8")
    <a href="{{url('/').'/'.session()->get("usergroup").''.$navigation->slug}}" class="py-10 px-20 text-center border-solid border-black border-2 rounded-lg shadow-lg hover:cursor-pointer hover:shadow-2xl hover:bg-slate-200">
      {{ $navigation->display }}
    </a>
    @endif
    @endforeach
  </div>

</div>


@endsection
