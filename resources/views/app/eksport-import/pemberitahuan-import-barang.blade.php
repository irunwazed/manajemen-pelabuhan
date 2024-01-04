@extends('layouts.admin')
@section('title', 'Eksport Import')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<div class="">
    <div class="text-2xl ">Eksport-Import / Pembuatan Dokumen PIB</div>
    <hr class="border-b-2 border-black border-solid">
    <br>
</div>
<div class="">
      <div class="text-center mb-3 mt-5">
        <h2 class="text-2xl font-bold">BC 2.0 PEMBERITAHUAN IMPORT BARANG</h2>
        <form action="" method="get">
          <div class="flex flex-wrap place-content-center my-2">
            <label class="mt-2 mr-2">No Pengajuan</label>
            <input type="text" name="search" value="<?= $query_get_param_search; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 ml-1 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">SEARCH</button>
            <a href="{{url('admin/eksport-import/header')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 ml-1 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">DOKUMEN BARU</a> 
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
        <tbody>
          <?php
          foreach ($data_rekap_pib as $key => $value) {
              echo'
              <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                  <td style="text-align:center;">'.$value->no_pengajuan.'</td>
                  <td style="text-align:center;">'.$value->header_pib_id.'</td>
                  <td style="text-align:center;">'.$value->tanggal_pernyataan.'</td>
                  <td style="text-align:center;">'.$value->jumlah_dokumen.' Dokumen</td>
                  <td style="text-align:center;"><a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Cetak</a></td>
              </tr>
              ';
          }
          ?>
        </tbody>
      </table>
      @include('components.pagination')
  </div>
@endsection
@section('script')
@endsection