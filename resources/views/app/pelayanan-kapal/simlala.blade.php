@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<div class="">

<div class="text-2xl "> e-Service RPK Simlala</div>
<hr class="border-b-2 border-black border-solid">
<div class="w-full text-right"> e-Service RPK Simlala <  Pelayanan Kapal</div>
  
  <div class="text-center mb-3 mt-5">
    <h2 class="text-2xl font-bold">Pencarian NO RPK E-SERVICE SIMLALA DEPHUB</h2>
    <div class="flex flex-wrap place-content-center my-2">
      <label class="mt-2 mr-2">Nama Kapal : </label>
      <input type="text" class="bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3">
      <button class="py-2 px-5 bg-cyan-800 rounded-xl shadow-xl hover:opacity-70">Cari</button>
    </div>
  </div>

  <table class="border-solid border-2 border-slate-800">
    <thead>
      <tr  class="border-solid border-2 border-slate-800 bg-gradient-to-r from-cyan-700 to-cyan-800 text-white">
        <th >TANGGAL</th>
        <th>No RKP</th>
        <th>JENIS</th>
        <th>NAMA PERUSAHAAN</th>
        <th>NAMA KAPAL</th>
        <th>TANGGAL BERLAKU</th>
        <th>TRAYEK</th>
        <th>MUATAN</th>
      </tr>
    </thead>
    <tbody>
      <tr  class="border-solid border-2 border-slate-800">
        
      <td>2 Oktober 2020</td>
      <td>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, ipsum!
      </td>
      <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ipsum, dolore perspiciatis distinctio aut neque.</td>
      <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, repudiandae in. Velit explicabo consequuntur fuga?</td>
      <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, vel!</td>
      <td>2 Oktober 2023- 5 Oktober 2023</td>
      <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error eligendi incidunt maxime repellat? Asperiores incidunt odio tempora fugiat assumenda, rem facere possimus eius sapiente eum veniam iusto quis, cupiditate qui.</td>
      <td></td>
      </tr>
      <tr  class="border-solid border-2 border-slate-800 bg-slate-300">
        
      <td>2 Oktober 2020</td>
      <td>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, ipsum!
      </td>
      <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ipsum, dolore perspiciatis distinctio aut neque.</td>
      <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, repudiandae in. Velit explicabo consequuntur fuga?</td>
      <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, vel!</td>
      <td>2 Oktober 2023- 5 Oktober 2023</td>
      <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error eligendi incidunt maxime repellat? Asperiores incidunt odio tempora fugiat assumenda, rem facere possimus eius sapiente eum veniam iusto quis, cupiditate qui.</td>
      <td></td>
      </tr>
    </tbody>
  </table>

</div>



@endsection

@section('script')



@endsection