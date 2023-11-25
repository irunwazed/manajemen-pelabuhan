@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<div class="">

  <div class="text-2xl ">Pelayanan Kapal / Rencana Kerja Bongkar Muat (RKBM) / Barang </div>
  <hr class="border-b-2 border-black border-solid">

  <div class="text-center mb-3 mt-5">
    <h2 class="text-2xl font-bold mt-10 mb-7">DETAIL RENCANA KERJA BONGKAR MUAT (RKBM)</h2>
  </div>
  <div class="w-full">
    <div class="float-right">
      <button type="submit" data-modal-toggle="modal-rkbm" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">TAMBAH</button>
      <a href="../rkbm" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">KEMBALI</a>
    </div>
  </div>
  <table class="table w-full">
    <thead>
      <tr class="bg-gradient-to-r from-[#211c5c] to-primary text-white">
        <th>No</th>
        <th>JENIS KEGIATAN</th>
        <th>NAMA BARANG</th>
        <th>NOMOR BL</th>
        <th>JLH UNIT</th>
        <th>JLH TON</th>
        <th>JLH METRIK</th>
        <th>SISTEM PENYALURAN</th>
        <th class="px-5 py-2">AKSI</th>
      </tr>
    </thead>
    <tbody>
      @foreach(@$data as $row)
      @if(($loop->index) %2 == 0)
      <tr class="border-solid border-1 border-slate-800 hover:bg-slate-300">
        @else
      <tr class="border-solid border-1 border-slate-800 bg-slate-200 hover:bg-slate-300">
        @endif
        <td class="text-center">{{ $loop->index+1 }}</td>
        <td>{{ @$row->jenis_kegiatan }}</td>
        <td>{{ @$row->nama_barang }}</td>
        <td>{{ @$row->no_bl }}</td>
        <td>{{ @$row->jlh_satuan_unit }}</td>
        <td>{{ @$row->jlh_satuan_ton }}</td>
        <td>{{ @$row->jlh_satuan_metrik }}</td>
        <td>{{ @$row->sistem_penyaluran }}</td>
        <td class="py-2 flex flex-wrap gap-1 justify-center ">
          <a href="javascript:void(0);" onClick="hapus('{{ @$row->pelayanan_kapal_rkbm_barang_id }}')">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
              <path d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z" />
            </svg>
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @include('components.pagination')

</div>

<!-- Main modal -->
<div id="modal-rkbm" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative w-full max-w-2xl max-h-full">
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
      <!-- Modal header -->
      <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
          DATA BARANG RKBM
        </h3>
        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-rkbm">
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
      </div>
      <form action="" method="post">
        <input type="hidden" value="{{ @$_GET['id'] }}" name="pelayanan_kapal_rkbm_id">
        <!-- Modal body -->
        <div class="p-6 space-y-6">

          <div class="mb-6">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kegiatan</label>
            <select name="jenis_kegiatan" required>
              <option value="">-= Pilih Jenis =-</option>
              <option value="BONGKAR">BONGKAR</option>
              <option value="MUAT">MUAT</option>
            </select>
          </div>

          <div class="">
            <div class="mb-6">
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Barang</label>
              <input type="text" name="nama_barang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-6">
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NPWP SHIPPER/PBM/JPT/PPJK</label>
              <input type="text" name="npwp_shipper_pbm_jpt" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-6">
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">JLH PALKA</label>
              <input type="number" name="jlh_palka" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-6">
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SISTEM PENYALURAN</label>
              <input type="text" name="sistem_penyaluran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-6">
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NO BL</label>
              <input type="number" name="no_bl" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-6">
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">JLH SATUAN UNIT</label>
              <input type="number" name="jlh_satuan_unit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-6">
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">JLH SATUAN TON</label>
              <input type="number" name="jlh_satuan_ton" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-6">
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">JLH SATUAN METRIK</label>
              <input type="number" name="jlh_satuan_metrik" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-6">
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">JLH BURUH</label>
              <input type="number" name="jlh_buruh" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
          </div>

        </div>
        <!-- Modal footer -->
        <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
          <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
          <button data-modal-hide="modal-rkbm" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- . MODAL -->



@endsection

@section('script')

<script>
  function hapus(id) {
    deleteWithLoadPage('./barang/delete/' + id);
  }
</script>

@endsection