@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<div class="">

  <div class="text-2xl ">Pelayanan Kapal / Pandu dan Tunda / Buat Data </div>
  <hr class="border-b-2 border-black border-solid">

  <div class="text-center mb-3 mt-5">
    <h2 class="text-2xl font-bold mt-10 mb-7">FORM PERMOHONAN PANDU DAN TUNDA</h2>
    <center>
      <form action="simpan" method="POST">
       
      <div class="w-[1200px]">
        <div class=" my-2 grid grid-cols-2 gap-5">
          <div>
            <table class="w-full">
              <tbody>
                <tr>
                  <td>NO PKK</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="no_pkk" id="no_pkk" value="{{ $data ->no_pkk }}" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <input type="hidden" name="pelayanan_kapal_rpkro_id" id="pelayanan_kapal_rpkro_id" value="{{ $data ->pelayanan_kapal_rpkro_id }}"/>
                    <input type="hidden" name="pelayanan_kapal_id" id="pelayanan_kapal_id" value="{{ $data ->pelayanan_kapal_id }}">  
                    <input type="hidden" name="jenis_rpk_ro" id="jenis_rpk_ro" value="{{ $data ->jenis_rpk_ro }}"> 
                    <input type="hidden" name="persentase_tarif_pandu" id="persentase_tarif_pandu" value="100"> 
                    <input type="hidden" name="persentase_tarif_tunda" id="persentase_tarif_tunda" value="100"> 
                    
                  </td>
                </tr>
                <tr>
                  <td>LOKASI</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="nama_dermaga" id="nama_dermaga" value="{{ $data ->nama_dermaga }}" readonly class="mt-1 block w-full px-3 py-2 bg-gray-50 border border-gray-300 rounded-md text-sm shadow-sm placeholder-slate-400">
                  </td>
                </tr>
                <tr>
                  <td>NAMA KAPAL</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="nama_kapal" id="nama_kapal" value="{{ $data ->nama_kapal }}" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr>
                <tr>
                  <td>NAMA AGEN</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="nama_agen" id="nama_agen" value="{{ $data ->nama_agen }}" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr>
                <tr>
                  <td>NAMA PANDU</td>
                  <td>:</td>
                  <td>
                    <select id="pandu_id" name="pandu_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option selected value="" >Pilih-Pandu </option>
                        @foreach($pandu as $row)
                           <option value={{ $row->pandu_id}}>{{ $row->nama_pandu}}s</option>
                        @endforeach
                    </select>  </td>
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
                    <input name="tgl_pandu_awal" id="tgl_pandu_awal" type="datetime-local" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md text-sm shadow-sm placeholder-slate-400">
                  </td>
                </tr>
                <tr>
                  <td>TANGGAL SELESAI</td>
                  <td>:</td>
                  <td>
                    <input name="tgl_pandu_selesai" id="tgl_pandu_selesai" type="datetime-local" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md text-sm shadow-sm placeholder-slate-400">
                  </td>
                </tr>
                <tr>
                  <td>TARIF DASAR</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="trf_pandu" id="trf_pandu" value="{{ $trfPandu->trf_rp }}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr>
                <tr>
                  <td>TARIF VARIABLE</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="trf_pandu_variable" id="trf_pandu_variable" value="{{ $trfPandu->trf_variable_rp }}" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr>
               


              </tbody>
            </table>
          </div>
          <div>
            <table class="w-full">
              <tbody>
             
                <tr>
                  <td>NO RPKRO</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="no_rpkro" id="no_rpkro"  value="{{ $data ->no_rpkro }}" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr>
                <tr>
                  <td>NO PERMOHONAN</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="no_permohonan" id="no_permohonan"  value="{{ $data ->no_rpkro }}"  class="bg-gray-50 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr>
               
                <tr>
                  <td colspan="3" class="py-11"></td>
                </tr>
                <tr>
                  <td>NAMA TUNDA</td>
                  <td>:</td>
                  <td>
                    <select name="tunda_id" id="tunda_id"   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option selected value="">Pilih-Tunda </option>
                      @foreach($tunda as $row)
                           <option value={{ $row->kapal_tunda_id}}>{{ $row->nama_kapal_tunda}}s</option>
                        @endforeach
                    </select>    
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
                    <input name="tgl_tunda_awal" id="tgl_tunda_awal"  type="datetime-local" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md text-sm shadow-sm placeholder-slate-400">
                     </td>
                </tr>
                <tr>
                  <td>TANGGAL SELESAI</td>
                  <td>:</td>
                  <td>
                    <input name="tgl_tunda_selesai" id="tgl_tunda_selesai"  type="datetime-local" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md text-sm shadow-sm placeholder-slate-400">
                  </td>
                </tr>
                <tr>
                  <td>TARIF DASAR</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="trf_tunda" id="trf_tunda" value="{{ $trfTunda->tarif_jasa_tunda_rp }}" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr>
                <tr>
                  <td>TARIF VARIABLE</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="trf_tunda_variable" id="trf_tunda_variable" value="{{ $trfTunda->tarif_variable_rp }}" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
      </form>
    </center>
  </div>


</div>



@endsection

@section('script')



@endsection