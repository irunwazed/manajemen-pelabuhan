@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<div class="">

  <div class="text-2xl ">Pelayanan Kapal / PPK / Verifikasi</div>
  <hr class="border-b-2 border-black border-solid">

  <div class=" mb-3 py-8">
    <div class="px-8 py-5 border-2 border-solid border-slate-800 bg-white mx-2">

      <center>

        <h2 class="text-2xl font-bold mt-10">NOTA PENJUALAN JASA PELABUHAN</h2>
        <h5>No Layanan / PKK</h5>


        <div class="w-[900px]">

          <div class="mt-5 grid grid-cols-2">
            <div>
              <table class="w-full">
                <tbody>
                  <tr>
                    <td class="w-40">DEBITUR</td>
                    <td class="w-1"></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td class="w-40">NAMA AGEN</td>
                    <td class="w-1"></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td class="w-40">ALAMAT</td>
                    <td class="w-1"></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td class="w-40">NPWP</td>
                    <td class="w-1"></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>

            </div>
            <div>

              <table class="w-full">
                <tbody>
                  <tr>
                    <td class="w-40">KAPAL</td>
                    <td class="w-1"></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td class="w-40">GRT/LOA/DTW</td>
                    <td class="w-1"></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td class="w-40">TIBA</td>
                    <td class="w-1"></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td class="w-40">BERANGKAT</td>
                    <td class="w-1"></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td class="w-40">NO INVOICE</td>
                    <td class="w-1"></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        
      <div class="mt-8">
        <table class="w-[600px]">
          <thead>
            <tr class="bg-gray-300 text-black">
              <th>NO</th>
              <th colspan="2">URAIAN JASA</th>
              <th>BIAYA</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center">1</td>
              <td>LABUH</td>
              <td>Rp</td>
              <td></td>
            </tr>
            <tr>
              <td class="text-center">2</td>
              <td>TAMBAT</td>
              <td>Rp</td>
              <td></td>
            </tr>
            <tr>
              <td class="text-center">3</td>
              <td>PANDU</td>
              <td>Rp</td>
              <td></td>
            </tr>
            <tr>
              <td class="text-center">4</td>
              <td>TUNDA</td>
              <td>Rp</td>
              <td></td>
            </tr>
            <tr>
              <td class="text-center">5</td>
              <td>AIR</td>
              <td>Rp</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>

      </center>





    </div>


  </div>

  <div class=" ml-10 mb-10">
    <!-- <div class="flex-none">
      <div>
        <label>Alasan :</label>
      </div>
      <textarea class="rounded w-[400px] border-slate-300 focus:border-none" rows="3"></textarea>
    </div> -->
    <div class="flex gap-4">
            <a href="nota4a" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">KEMBALI</a>
    </div>
  </div>



</div>



@endsection

@section('script')



@endsection