@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<div class="">

  <div class="text-2xl ">Pelayanan Kapal / SPOG / Buat data </div>
  <hr class="border-b-2 border-black border-solid">

  <div class="text-center mb-3 mt-5">
    <h2 class="text-2xl font-bold mt-10 mb-7">FORM PERMOHONAN SURAT PERSETUJUAN OLAH GERAK</h2>

    <div class="grid grid-cols-2">
      <div>

        <h3 class="my-6 text-left">NO LAYANAN/PKK</h3>
        <div>RKPRO</div>
        <div>NOMOR PKK</div>


        <div class="mt-5">NAMA KAPAL</div>
        <div>BENDERA</div>
        <div>JENIS TRAYEK</div>
        <div>NOMOR TRAYEK</div>
        <div>CALL SIGN</div>
        <div>GT</div>
        <div>LOA</div>
        <div>DWT</div>
      </div>
      <div>

      </div>
    </div>


    <center>
      <div class="w-[700px] my-2 grid grid-cols-3 gap-3">

        <div class="mb-1 text-left">
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">NOMOR PERMOHONAN SPOG :</label>
          <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-1 text-left">
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">WAKTU PERMOHONAN SPOG :</label>
          <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
      </div>
    </center>
  </div>
  <div>
    <div class="">
      <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">SIMPAN</button>
      <a href="/{{ $user }}/pelayanan-kapal/rpkro" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">KEMBALI</a>
    </div>
  </div>


</div>



@endsection

@section('script')



@endsection