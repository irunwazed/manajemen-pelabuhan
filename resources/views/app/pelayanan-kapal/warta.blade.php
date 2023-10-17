@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<div class="">

  <div class="text-2xl ">Pelayanan Kapal / Warta Kedatangan</div>
  <hr class="border-b-2 border-black border-solid">

  <div class="text-center mb-3 mt-5">
    <div class="flex flex-wrap place-content-center my-2">
      <button class="mr-3 py-2 px-5 bg-cyan-800 text-white font-semibold rounded-xl shadow-xl hover:opacity-70">PEMBERITAHUAN KEDATANGAN</button>
      <button class="py-2 px-5 bg-green-800 text-white font-semibold rounded-xl shadow-xl hover:opacity-70">PEMBERITAHUAN KEBERANGKATAN KAPAL</button>
    </div>
    <div class="place-content-center flex mt-5">
      <div class="flex-nowrap">
        <label for="">Jenis Trayek</label>
        <input type="text" class="bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3">
      </div>
      <div>
        <label for="">Masukkan No RPK</label>
        <input type="text" class="bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3">
      </div>
      <div>
        <button class="mr-3 py-2 px-5 bg-cyan-800 text-white font-semibold rounded-xl shadow-xl hover:opacity-70">AJUKAN PKK</button>
      </div>

    </div>
    
    <div>
    <table class="mt-5 w-full border-solid border-2 border-slate-800">
      <thead>
        <tr class="border-solid border-2 border-slate-800 bg-gradient-to-r from-cyan-700 to-cyan-800 text-white">
          <th>NO</th>
          <th>No LAYANAN</th>
          <th>NO PKK</th>
          <th>NAMA KAPAL</th>
          <th>TANGGAL REGISTRASI</th>
          <th>AKSI</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-solid border-2 border-slate-800">
          <td>1</td>
          <td>xxxx</td>
          <td>xxxx</td>
          <td>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, ipsum!
          </td>
          <td>2 Oktober 2020</td>
          <td></td>
        </tr>
        <tr class="border-solid border-2 border-slate-800 bg-slate-300">
          <td>2</td>
          <td>xxxx</td>
          <td>xxxx</td>
          <td>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, ipsum!
          </td>
          <td>2 Oktober 2020</td>
          <td></td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>



</div>



@endsection

@section('script')



@endsection