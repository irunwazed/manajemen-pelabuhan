@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<div class="">

  <div class="text-2xl ">Pelayanan Kapal / Pemberitahuan Kedatangan Kapal (PKK)</div>
  <hr class="border-b-2 border-black border-solid">

  <div class=" mb-3 mt-5">

    <h3 class="text-center font-bold text-2xl mb-4">PERMOHONAN PEMBERITAHUAN KEDATANGAN KAPAL</h3>


    <div class="w-[600px]">

      <div class="mt-5 grid grid-cols-2 gap-y-2 w-full">
        <label class="text-right mr-6">NAMA AGEN :</label>
        <input type="text" class="bg-white rounded px-3 py-2 ring-1 ring-black mr-3">
        <label class="text-right mr-6">NAMA KAPAL :</label>
        <input type="text" class="bg-white rounded px-3 py-2 ring-1 ring-black mr-3">
        <label class="text-right mr-6">STATUS PKK :</label>
        <input type="text" class="bg-white rounded px-3 py-2 ring-1 ring-black mr-3">
      </div>

      <div class="my-2 place-content-end align-content-end text-right">
        <button class="mr-3 py-2 px-5 bg-cyan-800 text-white font-semibold rounded-xl shadow-xl hover:opacity-70">PEMBERITAHUAN KEDATANGAN</button>
      </div>
    </div>

    <div>
      <table class="mt-5 w-full border-solid border-2 border-slate-800">
        <thead>
          <tr class="border-solid border-2 border-slate-800 bg-gradient-to-r from-cyan-700 to-cyan-800 text-white">
            <th>NO</th>
            <th>NAMA AGEN</th>
            <th>NO PELAYANAN</th>
            <th>NO PKK</th>
            <th>WAKTU PERMOHONAN</th>
            <th>NAMA KAPAL</th>
            <th>AKSI</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="py-3 w-[250px]">
              <a href="persetujuan-pkk" class="text-base bg-blue-600 text-blue-100 px-6 py-1 rounded hover:opacity-80">Detail</a>
              <a href="persetujuan-pkk" class="text-base bg-cyan-600 text-cyan-100 px-6 py-1 rounded hover:opacity-80">Verifikasi</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>



</div>



@endsection

@section('script')



@endsection