@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<div class="">

  <div class="text-2xl ">Pelayanan Kapal / Isi Air</div>
  <hr class="border-b-2 border-black border-solid">

  <div class="text-center mb-3 mt-5">
    <h2 class="text-2xl font-bold mt-10 mb-7">PERMOHONAN ISI AIR</h2>
    <center>

      <div class="w-[400px] my-2">

        <div class="mb-1 flex">
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-right mr-5">Nama Agen :</label>
          <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-1 flex">
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-right mr-5">Nama Kapal :</label>
          <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-1 flex">
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-right mr-5">No Layanan/PKK :</label>
          <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Search</button>
      </div>
    </center>
  </div>
  <div class="w-full">
    <a href="air-create" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">BUAT DATA</a>
  </div>
  <table class="border-solid border-2 border-slate-800 w-full">
    <thead>
      <tr class="border-solid border-2 border-slate-800 bg-gradient-to-r from-[#211c5c] to-primary text-white">
        <th>NO</th>
        <th>NO PELAYANAN/PKK</th>
        <th>NO PERMOHONAN</th>
        <th>NAMA AGEN</th>
        <th>NAMA KAPAL</th>
        <th class="px-5 py-2">AKSI</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="text-center">1</td>
        <td>xxxx</td>
        <td>xxxx</td>
        <td>xxxx</td>
        <td>xxxx</td>
        <td class="py-3">
          <a href="#" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Edit</a>
          <a href="#" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">View</a>
          <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Kirim</a>
        </td>
      </tr>
    </tbody>
  </table>

</div>



@endsection

@section('script')



@endsection