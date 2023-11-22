@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<div class="">

  <div class="text-2xl ">Pelayanan Kapal / Pandu dan Tunda / Buat Data </div>
  <hr class="border-b-2 border-black border-solid">

  <div class="text-center mb-3 mt-5">
    <h2 class="text-2xl font-bold mt-10 mb-7">FORM PERMOHONAN PANDU DAN TUNDA</h2>
    <center>
      <div class="w-[1200px]">
        <div class=" my-2 grid grid-cols-2 gap-5">
          <div>
            <table class="w-full">
              <tbody>
                <tr>
                  <td>NO PKK</td>
                  <td>:</td>
                  <td>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr>
                <tr>
                  <td>LOKASI</td>
                  <td>:</td>
                  <td>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr>
                <tr>
                  <td>NAMA KAPAL</td>
                  <td>:</td>
                  <td>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr>
                <tr>
                  <td>NAMA AGEN</td>
                  <td>:</td>
                  <td>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr>
                <tr>
                  <td>NAMA PANDU</td>
                  <td>:</td>
                  <td>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr>
                <tr>
                  <td colspan="3" class="py-3"></td>
                </tr>
                <tr>
                  <td colspan="3"><span class="font-semibold">PANDU</span></td>
                </tr>
                <tr>
                  <td>TANGGAL AWAL</td>
                  <td>:</td>
                  <td>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr>
                <tr>
                  <td>TANGGAL SELESAI</td>
                  <td>:</td>
                  <td>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr>
                <tr>
                  <td>TARIF DASAR</td>
                  <td>:</td>
                  <td>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr>
                <tr>
                  <td>TOTAL BIAYA PANDU</td>
                  <td>:</td>
                  <td>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr>


              </tbody>
            </table>
          </div>
          <div>
            <table class="w-full">
              <tbody>
                <!-- <tr>
                  <td>NO PERMOHONAN</td>
                  <td>:</td>
                  <td>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr> -->
                <tr>
                  <td>NO RPKRO</td>
                  <td>:</td>
                  <td>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr>
                <tr>
                  <td colspan="3" class="py-11"></td>
                </tr>
                <tr>
                  <td>NAMA TUNDA</td>
                  <td>:</td>
                  <td>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr>
                <tr>
                  <td colspan="3" class="py-3"></td>
                </tr>
                <tr>
                  <td colspan="3"><span class="font-semibold">TUNDA</span></td>
                </tr>
                <tr>
                  <td>TANGGAL AWAL</td>
                  <td>:</td>
                  <td>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr>
                <tr>
                  <td>TANGGAL SELESAI</td>
                  <td>:</td>
                  <td>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr>
                <tr>
                  <td>TARIF DASAR</td>
                  <td>:</td>
                  <td>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr>
                <tr>
                  <td>TOTAL BIAYA PANDU</td>
                  <td>:</td>
                  <td>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr>

              </tbody>
            </table>
          </div>


        </div>
        
        <div class="w-full mt-4">
          <div class="float-right">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">SIMPAN</button>
            <a href="pandu-tunda" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">KEMBALI</a>
          </div>
        </div>
      </div>

    </center>
  </div>


</div>



@endsection

@section('script')



@endsection