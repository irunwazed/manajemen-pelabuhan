@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')
<div class="">

  <div class="text-2xl ">Pelayanan Kapal / Rencana Kerja Bongkar Muat (RKBM) </div>
  <hr class="border-b-2 border-black border-solid">

  <div class="text-center mb-3 mt-5">
    <h2 class="text-2xl font-bold mt-10 mb-7">FORM RENCANA KERJA BONGKAR MUAT (RKBM)</h2>
    <center>
      <form action="./rkbm" method="post" enctype="multipart/form-data">
        <input type="hidden" value="{{ @$_GET['id'] }}" name="pelayanan_kapal_id">
        <div class="w-[700px] my-2 grid grid-cols-3 gap-3">
          <div class="mb-1 text-left">
            <label class="mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">NO PKK :</label>
            <input type="text" disabled value="{{ @$data->no_pkk }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="mb-1 text-left">
            <label class="mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">TGL TIBA :</label>
            <input type="text" disabled value="{{ @$data->waktu_tiba }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="mb-1 text-left">
            <label class="mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">TGL BERANGKAT :</label>
            <input type="text" disabled value="{{ @$data->waktu_berangkat }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="mb-1 text-left">
            <label class="mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">TGL RENCANA :</label>
            <input type="datetime-local"  value="{{ @$input->tgl_rencana }}" name="tgl_rencana" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="mb-1 text-left">
            <label class="mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">TGL MULAI :</label>
            <input type="datetime-local"  value="{{ @$input->tgl_mulai }}" name="tgl_mulai" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="mb-1 text-left">
            <label class="mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">TGL SELESAI :</label>
            <input type="datetime-local"  value="{{ @$input->tgl_selesai }}" name="tgl_selesai" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="mb-1 text-left">
            <label class="mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">JLH GROUP :</label>
            <input type="number"  value="{{ @$input->jlh_group }}" name="jlh_group" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="mb-1 text-left">
            <label class="mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">DERMAGA :</label>
            <select name="dermaga_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option value="">-= Pilih Dermaga =-</option>
              @foreach(@$dataDermaga as $row)
              <option value="{{ @$row->lokasi_dermaga_id }}"  {{ @$row->lokasi_dermaga_id==@$input->dermaga_id?"selected":"" }}>{{ @$row->nama_dermaga }}</option>
              @endforeach
            </select>
          </div>
          <div class="mb-1 text-left">
            <label class="mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">UPLOAD FILE DOKUMEN :</label>
            <input type="file" name="files" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @if(@$input->nama_dok_upload)
            <div class="mt-4"></div>
            <a target="_blank|_self|_parent|_top|framename" href="{{ url('/') }}/{{ @$input->nama_dok_upload }}" class="py-2 px-4 mt-5 rounded-md hover:opacity-90 bg-orange-400 text-orange-100">Download</a>
            @endif
          </div>
          <div class="flex">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">SIMPAN</button>
            <a href="rkbm" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">KEMBALI</a>

          </div>
        </div>
      </form>
    </center>
  </div>


</div>



@endsection

@section('script')

<script>
  let pelayanan_kapal_id = '{{ @$_GET["id"] }}';
  $(document).ready(function() {

  });
</script>


@endsection