@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<div class="">

  <div class="text-2xl ">Pelayanan Kapal / Rencana Kerja Bongkar Muat (RKBM) / Verifikasi</div>
  <hr class="border-b-2 border-black border-solid">

  <div class=" mb-3 py-8">
    <h2 class="text-2xl font-bold mt-10 mb-7">RENCANA KERJA BONGKAR MUAT (RKBM)</h2>

    <div class="px-8 py-5 border-2 border-solid border-slate-800 bg-white mx-2">

      <h3 class="my-3 text-lg font-bold">No PKK</h3>
      <div class="grid grid-cols-2">
        <div>
          <table class="w-full">
            <tbody>
              <tr>
                <td class="w-40">NAMA KAPAL</td>
                <td class="w-1">:</td>
                <td></td>
              </tr>
              <tr>
                <td>BENDERA</td>
                <td>:</td>
                <td></td>
              </tr>
              <tr>
                <td>TIBA</td>
                <td>:</td>
                <td></td>
              </tr>
            </tbody>
          </table>

        </div>
        <div>

        <table class="w-full">
            <tbody>
              <tr>
                <td class="w-40">DWT/GRT</td>
                <td class="w-1">:</td>
                <td></td>
              </tr>
              <tr>
                <td>AGEN</td>
                <td>:</td>
                <td></td>
              </tr>
              <tr>
                <td>PELABUHAN ASAL/TUJUAN</td>
                <td>:</td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>


      <div class="mt-8">
        <h3 class="text-md font-bold">RENCANA BONGKAR</h3>
        <table class="w-full">
          <thead>
            <tr class="bg-gray-300 text-black">
              <th>NPWP SHIPPER/PBM</th>
              <th>KLASIFIKASI BARANG</th>
              <th>NAMA BARANG</th>
              <th>JLH BARANG (UNIT/TON/M3)</th>
              <th>SISTEM PENYALURAN </th>
              <th>JLH BURUH</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>

      

      <div class="mt-8">
        <h3 class="text-md font-bold">RENCANA MUAT</h3>
        <table class="w-full">
          <thead>
            <tr class="bg-gray-300 text-black">
              <th>NPWP SHIPPER/PBM</th>
              <th>KLASIFIKASI BARANG</th>
              <th>NAMA BARANG</th>
              <th>JLH BARANG (UNIT/TON/M3)</th>
              <th>SISTEM PENYALURAN </th>
              <th>JLH BURUH</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>

    </div>


  </div>

  <div class=" ml-10 mb-10">
    <div class="flex-none">
      <div>
        <label>Alasan :</label>
      </div>
      <textarea class="rounded w-[400px] border-slate-300 focus:border-none" rows="3"></textarea>
    </div>
    <div class="flex gap-4">
      <button class="text-base bg-blue-600 text-blue-100 px-6 py-1 rounded hover:opacity-80">Setuju</button>
      <!-- <button class="text-base bg-orange-600 text-orange-100 px-6 py-1 rounded hover:opacity-80">Revisi</button> -->
      <button class="text-base bg-red-600 text-red-100 px-6 py-1 rounded hover:opacity-80">Tolak</button>
    </div>
  </div>



</div>



@endsection

@section('script')



@endsection