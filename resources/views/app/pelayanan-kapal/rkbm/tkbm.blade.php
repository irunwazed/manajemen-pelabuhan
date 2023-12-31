@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<div class="">

  <div class="text-2xl ">Pelayanan Kapal / Rencana Kerja Bongkar Muat (RKBM) / TKBM</div>
  <hr class="border-b-2 border-black border-solid">

  <div class="text-center mb-3 mt-5">
    <h2 class="text-2xl font-bold mt-10 mb-7">FORM TENAGA KERJA BONGKAR MUAT (RKBM)</h2>
    <center>

      <form action="" method="post" enctype="multipart/form-data">
        <div class="w-[800px] my-2 grid grid-cols-3 gap-3">

          <input type="hidden" value="{{ @$_GET['id'] }}" value="{{ @$input->pelayanan_kapal_rkbm_id }}" name="pelayanan_kapal_rkbm_id">
          <div class="mb-1 text-left">
            <label class="mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">TANGGAL PERMOHONAN TKBM :</label>
            <input type="datetime-local" value="{{ @$input->tgl_permohonan_tkbm }}" name="tgl_permohonan_tkbm" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="mb-1 text-left">
            <label class="mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">JLH SHIFT TOTAL :</label>
            <input type="number" value="{{ @$input->jlh_shift_total }}" name="jlh_shift_total" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="mb-1 text-left">
            <label class="mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">NO SPK TKBM :</label>
            <input type="text" value="{{ @$input->no_spk_tkbm }}" name="no_spk_tkbm" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="mb-1 text-left">
            <label class="mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">JLH GROUP :</label>
            <input type="number" value="{{ @$input->jlh_group }}" name="jlh_group" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="mb-1 text-left">
            <label class="mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">JLH BURUH/GROUP :</label>
            <input type="number" value="{{ @$input->jlh_buruh_group }}" name="jlh_buruh_group" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="mb-1 text-left">
            <label class="mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">SIFAT KERJA :</label>
            <input type="text" value="{{ @$input->sifat_kerja }}" name="sifat_kerja" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="flex">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">SIMPAN</button>
            <a href="../rkbm" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">KEMBALI</a>
          </div>
        </div>
      </form>
    </center>
  </div>


</div>



@endsection

@section('script')



@endsection