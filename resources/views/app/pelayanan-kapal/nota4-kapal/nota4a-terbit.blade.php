@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<div class="">

  <div class="text-2xl ">Pelayanan Kapal / PPK / Verifikasi</div>
  <hr class="border-b-2 border-black border-solid">

  <div class=" mb-3 py-8">
    <div class="px-8 py-5 border-0 border-solid border-slate-800 bg-white mx-2">

      <center>
        <form action="simpan" method="POST">
         
        <h2 class="text-2xl font-bold mt-10">NOTA PENJUALAN JASA PELABUHAN</h2>
        <b> <h5>No Layanan / PKK</h5>
        <h5><b>{{ $data->no_layanan_kapal}} / {{ $data->no_pkk}}</h5>
          <input type="hidden" name="pelayanan_kapal_id" id="pelayanan_kapal_id" value="{{ $data ->pelayanan_kapal_id }}"/>
          <input type="hidden" name="no_layanan_kapal" id="no_layanan_kapal" value="{{ $data ->no_layanan_kapal }}"/>
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
                    <td>{{ $data->nama_agen }}</td>
                  </tr>
                  <tr>
                    <td class="w-40">ALAMAT</td>
                    <td class="w-1"></td>
                    <td>{{ $data->alamat_agen }}</td>
                  </tr>
                  <tr>
                    <td class="w-40">NPWP</td>
                    <td class="w-1"></td>
                    <td>{{ $data->npwp_agen }}</td>
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
                    <td>{{ $data->nama_kapal }}</td>
                  </tr>
                  <tr>
                    <td class="w-40">GRT/LOA/DTW</td>
                    <td class="w-1"></td>
                    <td>{{ number_format($data->grt_kapal) }} / {{ number_format($data->loa_kapal) }} / {{ number_format($data->dwt_kapal) }}</td>
                  </tr>
                  <tr>
                    <td class="w-40">TIBA</td>
                    <td class="w-1"></td>
                    <td>{{ $data->waktu_tiba }}</td>
                  </tr>
                  <tr>
                    <td class="w-40">BERANGKAT</td>
                    <td class="w-1"></td>
                    <td>{{ $data->waktu_berangkat }}</td>
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
              <td class="text-right">{{ number_format($biayaLabuh,2) }}</td>
              <input type="hidden" name="biaya_labuh" id="biaya_labuh" value="{{ $biayaLabuh }}"/>
            </tr>
            <tr>
              <td class="text-center">2</td>
              <td>TAMBAT</td>
              <td>Rp</td>
              <td class="text-right">{{ number_format($biayaTambat,2) }}</td>
              <input type="hidden" name="biaya_tambat" id="biaya_tambat" value="{{ $biayaTambat }}"/>
            </tr>
            <tr>
              <td class="text-center">3</td>
              <td>PANDU</td>
              <td>Rp</td>
              <td class="text-right" >{{ number_format($dataPanduTunda->biayaPandu,2) }}</td>
              <input type="hidden" name="biaya_pandu" id="biaya_pandu" value="{{ $dataPanduTunda ->biayaPandu }}"/>
            </tr>
            <tr>
              <td class="text-center">4</td>
              <td>TUNDA</td>
              <td>Rp</td>
              <td class="text-right">{{ number_format($dataPanduTunda->biayaTunda,2) }}</td>
              <input type="hidden" name="biaya_tunda" id="biaya_tunda" value="{{ $dataPanduTunda ->biayaTunda }}"/>
            </tr>
            <tr>
              <td class="text-center">5</td>
              <td>AIR</td>
              <td>Rp</td>
              <td class="text-right">{{ number_format($dataAir->biayaAir,2) }}</td>
              <input type="hidden" name="biaya_air" id="biaya_air" value="{{ $dataAir ->biayaAir }}"/>
            </tr>

            <tr>
              <td colspan="4" class="py-3"></td>
            </tr>
            <tr>
              <td class="text-center"></td>
              <td>Jumlah</td>
              <td>Rp</td>
              <td class="text-right">{{ number_format($jumlah,2) }}</td>

            </tr>
            <tr>
              <td class="text-center"></td>
              <td>PPN 11%</td>
              <td>Rp</td>
              <td class="text-right">{{ number_format($ppn,2) }}</td>
              <input type="hidden" name="biaya_ppn" id="biaya_ppn" value="{{ $ppn }}"/>
            </tr>
            <tr>
              <td class="text-center"></td>
              <td>MATERAI</td>
              <td>Rp</td>
              <td class="text-right">{{  number_format("10000",2)}}</td>
              <input type="hidden" name="biaya_materai" id="biaya_materai" value="10000"/>
            </tr>
            <tr>
              <td class="text-center"></td>
              <td>JUMLAH TERUTANG</td>
              <td>Rp</td>
              <td class="text-right">{{ number_format($jumlahTerhutang,2) }}</td>
            </tr>
            <tr>
              <td colspan="4" class="py-6"></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="w-full mt-4">
        <div class="float-center">
          <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">SIMPAN</button>
          <a href="{{ url('/'.$user.'/pelayanan-kapal/nota4a')  }}" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">KEMBALI</a>
        </div>
      </div>
    </form>
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
    
  </div>



</div>



@endsection

@section('script')



@endsection