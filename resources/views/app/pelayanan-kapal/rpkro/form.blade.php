@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<div class="">

  <div class="text-2xl ">Pelayanan Kapal / RPKRO </div>
  <hr class="border-b-2 border-black border-solid">

  <div class="text-center mb-3 mt-5">
    <h2 class="text-2xl font-bold mt-10 mb-7">FORM BUAT RENCANA PELAYANAN KAPAL DAN RENCANA OPERASI</h2>
    <center>
      <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" value="{{ @$_GET['id'] }}" name="pelayanan_kapal_id">
        <div class="w-[900px]">
          <div class=" my-2 grid grid-cols-3 gap-3">
            <div class="mb-1 text-left">
              <label class=" mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">NO RPKRO :</label>
              <input type="text" name="no_rpkro" value="{{ @$input->no_rpkro }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-1 text-left">
              <label class=" mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">JENIS RPKRO :</label>
              <select name="jenis_rpk_ro" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="">-= Pilih JENIS RPKRO =-</option>
                <option value="MASUK" {{ "MASUK"==@$input->jenis_rpk_ro?"selected":"" }}>MASUK</option>
                <option value="PINDAH" {{ "PINDAH"==@$input->jenis_rpk_ro?"selected":"" }}>PINDAH</option>
              </select>
            </div>
            <div class="mb-1 text-left">
              <label class=" mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">NO LAYANAN/PPK :</label>
              <input type="text" value="{{ @$data->no_layanan_kapal }}" disabled  class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-1 text-left">
              <label class=" mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">LOKASI SANDAR :</label>
              <select name="lokasi_dermaga_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="">-= Pilih Lokasi =-</option>
                @foreach(@$dataDermaga as $row)
                <option value="{{ @$row->lokasi_dermaga_id }}" {{ @$row->lokasi_dermaga_id==@$input->lokasi_dermaga_id?"selected":"" }}>{{ @$row->nama_dermaga }}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-1 text-left">
              <label class=" mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">WAKTU RENCANA :</label>
              <input type="datetime-local" name="waktu_rencana" value="{{ @$input->waktu_rencana }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-1 text-left">
              <label class=" mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">KETERANGAN :</label>
              <textarea name="keterangan" cols="30" rows="3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ @$input->keterangan }}</textarea>
            </div>
          </div>
          <h3 class="my-6 text-left">DETAIL RPKRO</h3>
          <div class="w-[900px] my-2 grid grid-cols-3 gap-3">
            <div class="mb-1 text-left">
              <label class=" mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">NO RKBM :</label>
              <input type="text" value="{{ @$data->no_rkbm }}" disabled  class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-1 text-left">
              <label class=" mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">NO PPKB :</label>
              <input type="text" name="no_ppkb" value="{{ @$input->no_ppkb }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-1 text-left">
              <label class=" mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">KOMODITI :</label>
              <input type="text" name="komoditi" value="{{ @$data->komoditi }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-1 text-left">
              <label class=" mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">BONGKAR :</label>
              <input type="text" value="{{ @$dataBongkar->nama_dermaga }}" disabled class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-1 text-left">
              <label class=" mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">WAKTU MULAI :</label>
              <input type="datetime-local" value="{{ @$dataBongkar->tgl_mulai }}" disabled class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-1 text-left">
              <label class=" mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">WAKTU SELESAI :</label>
              <input type="datetime-local" value="{{ @$dataBongkar->tgl_selesai }}" disabled class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-1 text-left">
              <label class=" mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">MUAT :</label>
              <input type="text" value="{{ @$dataMuat->nama_dermaga }}" disabled class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-1 text-left">
              <label class=" mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">WAKTU MULAI :</label>
              <input type="datetime-local" value="{{ @$dataMuat->tgl_mulai }}" disabled class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-1 text-left">
              <label class=" mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">WAKTU SELESAI :</label>
              <input type="datetime-local" value="{{ @$dataMuat->tgl_selesai }}" disabled class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
          </div>
          <div class="w-full">
            <div class="float-right">
              <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">SIMPAN</button>
              <a href="../rpkro" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">KEMBALI</a>
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