@extends('layouts.admin')
@section('title', 'Eksport Import')
@section('content')
    <div class="">
        <div class="text-2xl ">Eksport-Import / Manifest Pengangkut</div>
            <hr class="border-b-2 border-black border-solid">
            <!-- <nav>
            <ul>
                <li><a href="{{url('admin/eksport-import/data-umum')}}">Data Umum</a></li>
                <li><a href="{{url('admin/eksport-import/bill-landing')}}">Bill Of Landing</a></li>
                <li><a href="{{url('admin/eksport-import/lampiran')}}">Lampiran</a></li>
            </ul>
            </nav> -->
        </div>
    </div>
    <div class="">
      <div class="text-center mb-3 mt-5">
        <h2 class="text-2xl font-bold">BC. 1.0 Manifest Pengangkut</h2>
        <form action="" method="get">
          <div class="flex flex-wrap place-content-center my-2">
            <label class="mt-2 mr-2">No Pengajuan : </label>
            <input type="text" name="search" value="{{ @$request['search'] }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 ml-1 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Cari</button>
            <a href="{{url('admin/eksport-import/data-umum')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 ml-1 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Dokumen Baru</a> 
        </div>
        </form>
      </div>

      <table class="table w-full">
        <thead>
          <tr class="border-solid border-1 border-slate-800 bg-gradient-to-r from-[#211c5c] to-primary text-white">
            <th>No Pengajuan</th>
            <th>No Pendaftaran</th>
            <th>Tanggal Pengajuan</th>
            <th>Status Dokumen</th>
            <th>Aksi</th>
          </tr>
        </thead>
      </table>
      @include('components.pagination')
  </div>
@endsection
@section('script')
@endsection
