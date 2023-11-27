@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<div class="">

  <div class="text-2xl ">Pelayanan Kapal / LK3 / Verifikasi</div>
  <hr class="border-b-2 border-black border-solid">

  <div class=" mb-3 py-8 ">
    <h2 class="text-2xl font-bold mt-6 mb-7 text-center">FORM VERIFIKASI LAPORAN KEDATANGAN DAN KEBERANGKATAN KAPAL</h2>

    <div class="px-8 py-5 border-2 border-solid border-slate-800 bg-white mx-2">

      <h3 class="text-md font-semibold mb-2 ">DETAIL LK3</h3>
      <table class="ml-8 w-full">
        <tbody>
          <tr>
            <td class="w-[30px]">1</td>
            <td class="w-[200px]">No Layanan/PKK</td>
            <td>:</td>
            <td></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Nama Kapal</td>
            <td>:</td>
            <td></td>
          </tr>
          <tr>
            <td>3</td>
            <td>Bendara/IMO/Call Sign</td>
            <td>:</td>
            <td></td>
          </tr>
          <tr>
            <td>4</td>
            <td>Nama Pemilik</td>
            <td>:</td>
            <td></td>
          </tr>
          <tr>
            <td>5</td>
            <td>DWT/GT/Jenis Kapal</td>
            <td>:</td>
            <td></td>
          </tr>
          <tr>
            <td>6</td>
            <td>Trayek</td>
            <td>:</td>
            <td></td>
          </tr>
          <tr>
            <td>7</td>
            <td>Jenis Pelayaran</td>
            <td>:</td>
            <td></td>
          </tr>
          <tr>
            <td>8</td>
            <td>ETA/ETD</td>
            <td>:</td>
            <td></td>
          </tr>
        </tbody>
      </table>

      <div class="mt-6 w-full">

        <h3 class="text-md font-semibold mb-2 ">INFORMASI KEDATANGAN DAN KEBERANGKATAN KAPAL</h3>
        <div class="grid grid-cols-2 gap-6 w-full">
          <div>
            <div class="font-semibold">TIBA</div>
            <div>Dari</div>
            <div>Tanggal</div>

            <h3 class="text-md font-semibold mb-2 text-left mt-4">BONGKAR</h3>
            <table class="w-[80%]">
              <thead>
                <tr class="border-2 border-solid border-slate-500">
                  <th>Jenis Barang</th>
                  <th>Jlh unit / Ton / M3</th>
                </tr>
              </thead>
            </table>
          </div>


          <div>
            <div class="font-semibold">BERANGKAT</div>
            <div>Dari</div>
            <div>Tanggal</div>

            <h3 class="text-md font-semibold mb-2 text-left mt-4">MUAT</h3>
            <table class="w-[80%]">
              <thead>
                <tr class="border-2 border-solid border-slate-500">
                  <th>Jenis Barang</th>
                  <th>Jlh unit / Ton / M3</th>
                </tr>
              </thead>
            </table>
          </div>

        </div>
      </div>

      <div class="mt-16">
        <h3 class="text-md font-semibold">KEGIATAN KAPAL</h3>
        <table class="w-full">
          <thead>
            <tr class="bg-gray-300 text-black">
              <th>RPKRO</th>
              <th>NO PKK</th>
              <th>LOKASI</th>
              <th>MULAI</th>
              <th>SELESAI</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>

      
      <div class="mt-16">
        <h3 class="text-md font-semibold">DOKUMEN KELENGKAPAN</h3>
        <table class="w-full">
          <thead>
            <tr class="bg-gray-300 text-black">
              <th>JENIS DOKUMEN</th>
              <th>NO DOKUMEN</th>
              <th>TEMPAT DIKELUARKAN</th>
              <th>TGL DOKUMEN</th>
              <th>NAMA DOKUMEN</th>
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
      <a href="#" class="text-base bg-blue-600 text-blue-100 px-6 py-1 rounded hover:opacity-80">Setuju</a>
      <!-- <button class="text-base bg-orange-600 text-orange-100 px-6 py-1 rounded hover:opacity-80">Revisi</button> -->
      <button class="text-base bg-red-600 text-red-100 px-6 py-1 rounded hover:opacity-80">Tolak</button>
    </div>
  </div>



</div>



@endsection

@section('script')



@endsection