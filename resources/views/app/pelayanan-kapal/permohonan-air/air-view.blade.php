@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')

<script type="text/javascript">
function pengisianChange(){
  var idIsi =document.getElementById("nama_pengisian_1").value;
 //alert(idIsi);
  myArray = idIsi.split('_');
document.getElementById("minimal_volume_pengisian").value=myArray[2];
document.getElementById("tarif_air").value=myArray[1];
document.getElementById("trf_pengisian_id").value=myArray[0];
document.getElementById("nama_pengisian").value=myArray[3]
}

</script>

@section('content')

<div class="">

  <div class="text-2xl ">Pelayanan Kapal / Air / Buat Data </div>
  <hr class="border-b-2 border-black border-solid">

  <div class="text-center mb-3 mt-5">
    <h2 class="text-2xl font-bold mt-10 mb-7">FORM PERMOHONAN AIR</h2>
    <center>
      <div class="w-[700px]">
        <div class="">
          <div>
            <table class="w-full">
              <tbody>
                <tr>
                  <td>NO PKK</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="no_pkk" value="{{ $data->no_pkk}}" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <input type="hidden" name="pelayanan_kapal_rpkro_id" id="pelayanan_kapal_rpkro_id" value="{{ $data ->pelayanan_kapal_rpkro_id }}"/>
                    <input type="hidden" name="pelayanan_kapal_id" id="pelayanan_kapal_id" value="{{ $data ->pelayanan_kapal_id }}">  
                    <input type="hidden" name="jenis_rpk_ro" id="jenis_rpk_ro" value="{{ $data ->jenis_rpk_ro }}"> 
                  </td>
                </tr>
                <tr>
                  <td>NO RPKRO</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="no_rpkro" value="{{ $data->no_rpkro}}" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr>
                <tr>
                  <td>NO PERMOHONAN</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="no_permohonan" value="{{ $data->no_permohonan}}" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr>
                <tr>
                  <td>LOKASI</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="nama_dermaga" value="{{ $data->nama_dermaga}}" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr>
                <tr>
                  <td>NAMA KAPAL</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="nama_kapal" value="{{ $data->nama_kapal}}" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr>
                <tr>
                  <td>NAMA AGEN</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="nama_agen" value="{{ $data->nama_agen}}"  class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr>
                <tr>
                  <td>NPWP</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="npwp_agen" value="{{ $data->npwp_agen}}"  class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr>
                <tr>
                  <td colspan="3" class="py-3"></td>
                </tr>
                <tr>
                  <td colspan="3"><span class="font-semibold">ISI AIR</span></td>
                </tr>
                <tr>
                  <td>VOLUME</td>
                  <td>:</td>
                  <td>
                    <input type="text" id="volume_air" name="volume_air" value="{{ $data->volume_air}}" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr>
                <tr>
                  <td>CARA PENGISIAN</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="nama_pengisian" value="{{ $data->nama_pengisian}}"  class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                     </td>
                </tr>
                <tr>
                  <td>MINIMAL VOLUME</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="minimal_volume_pengisian" id="minimal_volume_pengisian" value="{{ $data->minimal_volume_pengisian}}"  class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </td>
                </tr>
                <tr>
                  <td>TARIF DASAR</td>
                  <td>:</td>
                  <td>
                    <input type="text" name="tarif_air" id="tarif_air" value="{{ $data->tarif_air}}" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <input type="hidden" name="trf_pengisian_id" id="trf_pengisian_id">
                  </td>
                </tr>
                <tr>
                  <td colspan="3" class="py-3"></td>
                </tr>
              <tr>
                  
                  <td colspan="3" align="right">
                    <a href="{{ url('/'.$user.'/pelayanan-kapal/air')  }}" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">KEMBALI</a>
                  </td>
                </tr>


              </tbody>
            </table>
          </div>
          


        </div>
        
      
      </div>
    </center>
  </div>


</div>



@endsection

@section('script')



@endsection