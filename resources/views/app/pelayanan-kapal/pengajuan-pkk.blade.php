@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<div class="">

  <div class="text-2xl ">Pelayanan Kapal / Warta Kedatangan / Pengajuan PKK</div>
  <hr class="border-b-2 border-black border-solid">

  <div class=" mb-3 mt-5">

    <div class="relative -bottom-20 left-6 z-1 bg-white w-[250px] px-6 font-bold text-lg">
      Pengajuan Keagenan
    </div>
    <div class="flex flex-wrap place-content-end my-2">

      <a href="warta" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">KEMBALI</a>
      <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">SIMPAN</button>
      <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">KIRIM</button>
    </div>

    <div class="mt-2 px-10 py-7 grid grid-cols-2 gap-3 border-2 border-solid border-black">
      <div>
        <h3 class="my-5">Data Kapal</h3>
        <table class="w-full">
          <tr>
            <td>Tanda Pendaftaran Kapal</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->tanda_pendaftaran_kapal }}" disabled></td>
          </tr>
          <tr>
            <td colspan="3" class="h-6"></td>
          </tr>
          <tr>
            <td>NAMA KAPAL</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->nama_kapal }}" disabled></td>
          </tr>
          <tr>
            <td>BENDERA</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->bendera }}" disabled></td>
          </tr>
          <tr>
            <td>JENIS TRAYEK</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->jenis_trayek }}" disabled></td>
          </tr>
          <tr>
            <td>NOMOR TRAYEK</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled></td>
          </tr>
          <tr>
            <td>CALL SIGN</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->call_sign }}"></td>
          </tr>
          <tr>
            <td>GRT</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->grt_kapal }}"></td>
          </tr>
          <tr>
            <td>LOA</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->loa_kapal }}"></td>
          </tr>
          <tr>
            <td>DWT</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->dwt_kapal }}"></td>
          </tr>
          <tr>
            <td colspan="3" class="h-6"></td>
          </tr>
          <tr>
            <td colspan="3" class="font-semibold text-left">SPESIFIKASI KAPAL</td>
          </tr>
          <tr>
            <td>GROSS TONNAGE</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->gros_tonase }}"></td>
          </tr>
          <tr>
            <td>DEADWEIGHT TONNAGE</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->deadweight_tonase }}"></td>
          </tr>
          <tr>
            <td>DRAFT DEPAN</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->draft_muka }}"></td>
          </tr>
          <tr>
            <td>DRAFT MAKSIMUM</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->draft_maksimum }}"></td>
          </tr>
          <tr>
            <td>DRAFT BELAKANG</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->draft_belakang }}"></td>
          </tr>
          <tr>
            <td>KETINGGIAN UDARA</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->ketinggian_udara }}"></td>
          </tr>
          <tr>
            <td>LENGTH OVER ALL</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->panjang_kapal }}"></td>
          </tr>
          <tr>
            <td>LEBAR KAPAL</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->lebar_kapal }}"></td>
          </tr>
          <tr>
            <td colspan="3" class="h-6"></td>
          </tr>
          <tr>
            <td colspan="3" class="font-semibold text-left">CSO</td>
          </tr>
          <tr>
            <td>NAMA</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->nama_cso }}"></td>
          </tr>
          <tr>
            <td>NO TELEPON</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->no_telp_cso }}"></td>
          </tr>
        </table>
      </div>
      <div>
        <h3 class="my-5">Dioperasikan Oleh</h3>
        <table class="w-full">
          <tr>
            <td>NAMA</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->perusahaan_pemilik_kapal }}" disabled></td>
          </tr>
          <tr>
            <td>PENANGGUNG JAWAB</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->penanggung_jawab }}" disabled></td>
          </tr>
          <tr>
            <td>SIUPAL PEMILIK</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->siupal_pemilik }}" disabled></td>
          </tr>
          <tr>
            <td>ALAMAT</td>
            <td>:</td>
            <td><input type="text" disabled class="w-full py-10 bg-gray-100 rounded-2xl px-3 border-gray-300 mr-3" value="{{ @$data->alamat }}" /></td>
          </tr>
          <tr>
            <td colspan="3" class="h-6"></td>
          </tr>
          <tr>
            <td colspan="3" class="font-semibold">AGEN / PERUSAHAAN PELAYARAN</td>
          </tr>
          <tr>
            <td>NAMA</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->nama_agen }}" disabled></td>
          </tr>
          <tr>
            <td>PENANGGUNG JAWAB</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->penanggung_jawab_agen }}" disabled></td>
          </tr>
          <tr>
            <td>DOKUMEN KEGIATAN</td>
            <td>:</td>
            <td><input type="file" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->alamat }}" >  </td>
          </tr>
          <tr>
            <td>ALAMAT</td>
            <td>:</td>
            <td><input type="text" disabled class="w-full py-10 bg-gray-100 rounded-2xl px-3 border-gray-300 mr-3" value="{{ @$data->alamat_agen }}" /></td>
          </tr>
          <tr>
            <td colspan="3" class="h-6"></td>
          </tr>
          <!-- <tr>
            <td colspan="3" class="font-semibold">JENIS TRAYEK</td>
          </tr>
          <tr>
            <td>NOMOR TRAYEK</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="DEFAULT AUTO FILL" disabled></td>
          </tr>
          <tr>
            <td>LINTASAN</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="DEFAULT AUTO FILL" disabled></td>
          </tr> -->
        </table>
      </div>
    </div>

    <div class="mt-5">
      <h2 class="bg-blue-300 py-2 pl-3 my-3 font-semibold">PERUSAHAAN BONGKAR MUAT</h2>

      <!-- MODAL -->
      <button  data-modal-toggle="modal-pmb" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
        Tambah
      </button>

      <!-- Main modal -->
      <div id="modal-pmb" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
              <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                Tambah PBM/JPT
              </h3>
              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-pmb">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
              </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
              <div>Bongkar/Muat</div>
              <form action="" id="form-pbm">
                <div class="grid grid-cols-3 gap-3">
                  <div class="flex-nowrap">
                    <label class="text-left">Type Perusahaan</label>
                    <select name="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option value="">-= Pilih Type Perusahaan =-</option>
                      <option value="PBM">PBM</option>
                      <option value="JPT">JPT</option>
                    </select>
                  </div>
                  <div class="flex-nowrap">
                    <label class="text-left">Nama Perusahaan</label>
                    <select name="perusahaan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option value="">-= Pilih Perusahaan =-</option>
                      @foreach(@$dataPerusahaan as $rowPerusahaan)
                      <option value="{{ @$rowPerusahaan->perusahaan_id }}">{{ @$rowPerusahaan->nama_perusahaan }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="flex-nowrap">
                    <label class="text-left">Kegiatan</label>
                    <select name="kegiatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option value="">-= Pilih Kegiatan =-</option>
                      <option value="BONGKAR">BONGKAR</option>
                      <option value="MUAT">MUAT</option>
                      <option value="BONGKAR DAN MUAT">BONGKAR DAN MUAT</option>
                    </select>
                  </div>
                </div>
              </form>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
              <button type="submit" form="form-pbm" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
              <button data-modal-hide="modal-pmb" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
            </div>
          </div>
        </div>
      </div>
      <!-- . MODAL -->
      <table class="border-solid border-2 border-slate-800 w-[700px] mt-1" id="table-pbm">
        <thead>
          <tr class="border-solid border-2 border-slate-800 bg-gray-300 to-primary text-slate-900">
            <th class="py-2">NO</th>
            <th>NAMA PERUSAHAAN</th>
            <th>TYPE PERUSAHAAN</th>
            <th>KEGIATAN</th>
            <th>AKSI</th>
          </tr>
        </thead>
        <tbody>
          <!-- <tr class="border-solid border-2 border-slate-800">
            <td class="text-center">1</td>
            <td>PT</td>
            <td>PBM</td>
            <td>B</td>
            <td class="p-2">
              <center>
                <a href="#">
                  <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                    <path d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z" />
                  </svg>
                </a>
              </center>
            </td>
          </tr> -->
        </tbody>
      </table>
    </div>

    <h2 class="bg-blue-300 py-2 pl-3 my-3 mt-8 font-semibold">DETAIL DATA</h2>
    <div class="mt-5">
      <div class="mb-4 border-b border-gray-200 dark:border-gray-700 w-full">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center w-full" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
          <li class="mr-2 flex-1" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="manifest-tab" data-tabs-target="#manifest" type="button" role="tab" aria-controls="manifest" aria-selected="false">1. MANIFEST KAPAL</button>
          </li>
          <li class="mr-2 flex-1" role="presentation">
            <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">2. DATA AWAK KAPAL</button>
          </li>
          <li class="mr-2  flex-1" role="presentation">
            <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">3. DATA MANIFEST BONGKAR MUAT</button>
          </li>
          <li class=" flex-1" role="presentation">
            <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">4. DOKUMEN KAPAL</button>
          </li>
          <li class=" flex-1" role="presentation">
            <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab2" data-tabs-target="#contacts2" type="button" role="tab" aria-controls="contacts" aria-selected="false">5. BONGKAR MUAT</button>
          </li>
        </ul>
      </div>
      <div id="myTabContent">
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="manifest" role="tabpanel" aria-labelledby="manifest-tab">
          <!-- MANIFEST KAPAL -->


          <h2 class="font-bold mt-6 mb-4">UPLOAD FILE MANIFEST KAPAL</h2>

          <table class="border-solid border-2 border-slate-800 w-full mt-1">
            <thead>
              <tr class="border-solid border-2 border-slate-800 bg-gray-300 to-primary text-slate-900">
                <th class="py-2">NO</th>
                <th>UPLOAD</th>
                <th>NAMA FILE</th>
                <th>AKSI</th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-solid border-2 border-slate-800">
                <td class="text-center">1</td>
                <td>DOKUMEN MANIFEST PENUMPANG</td>
                <td class="py-2">
                  <center>
                    <form action="./pengajuan-pkk/upload/manifest-penumpang" method="post" enctype="multipart/form-data">
                      <input type="file" name="files">
                      <button type="submit"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Upload Dokumen</button>
                    </form>
                  </center>
                </td>
                <td class="p-2">
                  <center>
                    <a href="#">
                      <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z" />
                      </svg>
                    </a>
                  </center>
                </td>
              </tr>
              <tr class="border-solid border-2 border-slate-800">
                <td class="text-center">2</td>
                <td>DOKUMEN MANIFEST BONGKAR MUAT</td>
                <td class="py-2">
                  <center>
                    <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Upload Dokumen</button>
                  </center>
                </td>
                <td class="p-2">
                  <center>
                    <a href="#">
                      <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z" />
                      </svg>
                    </a>
                  </center>
                </td>
              </tr>
              <tr class="border-solid border-2 border-slate-800">
                <td class="text-center">3</td>
                <td>DOKUMEN MANIFEST BARANG BERBAHAYA</td>
                <td class="py-2">
                  <center>
                    <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Upload Dokumen</button>
                  </center>
                </td>
                <td class="p-2">
                  <center>
                    <a href="#">
                      <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z" />
                      </svg>
                    </a>
                  </center>
                </td>
              </tr>
              <tr class="border-solid border-2 border-slate-800">
                <td class="text-center">3</td>
                <td>DOKUMEN MANIFEST BARANG KHUSUS</td>
                <td class="py-2">
                  <center>
                    <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Upload Dokumen</button>
                  </center>
                </td>
                <td class="p-2">
                  <center>
                    <a href="#">
                      <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z" />
                      </svg>
                    </a>
                  </center>
                </td>
              </tr>
            </tbody>
          </table>



          <!-- . MANIFEST KAPAL -->
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">

          <!-- DATA AWAK KAPAL -->
          <h2 class="font-bold mt-6 mb-4">DATA AWAK KAPAL</h2>

          <!-- MODAL -->
          <button data-modal-target="modal-crew" data-modal-toggle="modal-crew" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            IMPORT CREW LIST
          </button>

          <!-- Main modal -->
          <div id="modal-crew" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-2xl max-h-full">
              <!-- Modal content -->
              <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Upload File Excel Crew List Kapal
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-crew">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                  </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                  <div>
                    <span>Berikut ini format excel crew list</span>
                    <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Download Excel</a>
                  </div>
                  <div class="flex-nowrap">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">File Crew List</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                  </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                  <button data-modal-hide="modal-crew" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
                  <button data-modal-hide="modal-crew" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
                </div>
              </div>
            </div>
          </div>
          <!-- . MODAL -->

          <table class="border-solid border-2 border-slate-800 w-full mt-1">
            <thead>
              <tr class="border-solid border-2 border-slate-800 bg-gray-300 to-primary text-slate-900">
                <th class="py-2">NO</th>
                <th>KODE PELAUT</th>
                <th>NAMA</th>
                <th>GENDER</th>
                <th>TGL LAHIR</th>
                <th>KEBANGSAAN</th>
                <th>NO BUKU PELAUT</th>
                <th>TGL EXPIRED</th>
                <th>SERTIFIKAT</th>
                <th>JABATAN</th>
                <th>AKSI</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>

          <!-- . DATA AWAK KAPAL -->
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">

          <!-- DATA MANIFEST BONGKAR MUAT -->

          <h2 class="font-bold mt-6 mb-4">DATA MANIFEST BARANG</h2>

          <div>
            <div class="grid grid-cols-2">
              <h3 class="text-left mt-5 font-semibold">Manifest Kargo</h3>
              <div class="align-items-end">
                <button data-modal-target="modal-mani-kargo" data-modal-toggle="modal-mani-kargo" class="float-right text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buat data</button>

                <!-- Main modal -->
                <div id="modal-mani-kargo" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                  <div class="relative w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                      <!-- Modal header -->
                      <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                          Upload File Excel Manifest Kargo
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-mani-kargo">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                          </svg>
                          <span class="sr-only">Close modal</span>
                        </button>
                      </div>
                      <!-- Modal body -->
                      <div class="p-6 space-y-6">
                        <div>
                          <span>Berikut ini format excel Manifest Kargo</span>
                          <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Download Excel</a>
                        </div>
                        <div class="flex-nowrap">
                          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">File Crew List</label>
                          <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>
                      </div>
                      <!-- Modal footer -->
                      <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="modal-mani-kargo" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
                        <button data-modal-hide="modal-mani-kargo" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- . MODAL -->
              </div>
            </div>
            <table class="border-solid border-2 border-slate-800 w-full mt-1">
              <thead>
                <tr class="border-solid border-2 border-slate-800 bg-gray-300 to-primary text-slate-900">
                  <th class="py-2">NO</th>
                  <th>JENIS KEMASAN</th>
                  <th>NAMA KOMODITI</th>
                  <th>JENIS KEGIATAN</th>
                  <th>JLH SATUAN UNIT</th>
                  <th>JLH SATUAN TON</th>
                  <th>JLH SATUAN M3</th>
                  <th>No BL</th>
                  <th>NTPN</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>



          <div class="mt-8">
            <div class="grid grid-cols-2">
              <div class="text-left font-semibold mt-4">Manifest Kontainer</div>
              <div class="align-items-end">
                <button data-modal-target="modal-mani-kontainer" data-modal-toggle="modal-mani-kontainer" class="float-right text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buat data</button>

                <!-- Main modal -->
                <div id="modal-mani-kontainer" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                  <div class="relative w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                      <!-- Modal header -->
                      <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                          Upload File Excel Manifest Kontainer
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-mani-kontainer">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                          </svg>
                          <span class="sr-only">Close modal</span>
                        </button>
                      </div>
                      <!-- Modal body -->
                      <div class="p-6 space-y-6">
                        <div>
                          <span>Berikut ini format excel Manifest Kontainer</span>
                          <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Download Excel</a>
                        </div>
                        <div class="flex-nowrap">
                          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">File Manifest Kontainer</label>
                          <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>
                      </div>
                      <!-- Modal footer -->
                      <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="modal-mani-kontainer" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
                        <button data-modal-hide="modal-mani-kontainer" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- . MODAL -->
              </div>
            </div>
            <table class="border-solid border-2 border-slate-800 w-full mt-1">
              <thead>
                <tr class="border-solid border-2 border-slate-800 bg-gray-300 to-primary text-slate-900">
                  <th class="py-2">NO</th>
                  <th>JENIS KEMASAN</th>
                  <th>NAMA KOMODITI</th>
                  <th>JENIS KEGIATAN</th>
                  <th>No Kontainer</th>
                  <th>Size Kontainer</th>
                  <th>JLH SATUAN Ton</th>
                  <th>No BOL</th>
                  <th>NTPN</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>


          <div class="mt-8">
            <div class="grid grid-cols-2">
              <div class="text-left font-semibold">Manifest Penumpang</div>
            </div>
            <table class="border-solid border-2 border-slate-800 w-full mt-1">
              <thead>
                <tr class="border-solid border-2 border-slate-800 bg-gray-300 to-primary text-slate-900">
                  <th class="py-2">NO</th>
                  <th>SATUAN</th>
                  <th>JUMLAH</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>



          <div class="mt-8">
            <div class="grid grid-cols-2">
              <div class="text-left font-semibold mt-4">Manifest Barang Berbahaya</div>
              <div class="align-items-end">
                <button data-modal-target="modal-mani-bahaya" data-modal-toggle="modal-mani-bahaya" class="float-right text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buat data</button>

                <!-- Main modal -->
                <div id="modal-mani-bahaya" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                  <div class="relative w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                      <!-- Modal header -->
                      <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                          Upload File Excel Manifest Barang Berbahaya
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-mani-bahaya">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                          </svg>
                          <span class="sr-only">Close modal</span>
                        </button>
                      </div>
                      <!-- Modal body -->
                      <div class="p-6 space-y-6">
                        <div>
                          <span>Berikut ini format excel Manifest Barang Berbahaya</span>
                          <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Download Excel</a>
                        </div>
                        <div class="flex-nowrap">
                          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">File Manifest Barang Berbahaya</label>
                          <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>
                      </div>
                      <!-- Modal footer -->
                      <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="modal-mani-bahaya" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
                        <button data-modal-hide="modal-mani-bahaya" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- . MODAL -->
              </div>
            </div>
            <table class="border-solid border-2 border-slate-800 w-full mt-1">
              <thead>
                <tr class="border-solid border-2 border-slate-800 bg-gray-300 to-primary text-slate-900">
                  <th class="py-2">NO</th>
                  <th>NAMA PENGIRIM</th>
                  <th>NAMA BARANG</th>
                  <th>NO UIN</th>
                  <th>KEMASAN BARANG</th>
                  <th>KELAS BB</th>
                  <th>JUMLAH MUATAN</th>
                  <th>SATUAN</th>
                  <th>JENIS</th>
                  <th>TYPE</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>


          <div class="mt-8">
            <div class="grid grid-cols-2">
              <div class="text-left font-semibold">Manifest Bongkar/Muat Barang Tercemar</div>
            </div>
            <div class="">
              <table class="border-solid border-2 border-slate-800 w-full mt-1">
                <thead>
                  <tr class="border-solid border-2 border-slate-800 bg-gray-300 to-primary text-slate-900">
                    <th class="py-2" rowspan="2">NO</th>
                    <th class="w-[700px]" rowspan="2">JENIS</th>
                    <th colspan="2">KAPASITAS</th>
                    <th colspan="2">BONGKAR</th>
                    <th colspan="2">SIMPAN</th>
                  </tr>
                  <tr class="border-solid border-2 border-slate-800 bg-gray-300 to-primary text-slate-900">
                    <th>KG</th>
                    <th>M3</th>
                    <th>KG</th>
                    <th>M3</th>
                    <th>KG</th>
                    <th>M3</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="border-b-2 border-solid border-slate-200">
                    <td class="text-center">1</td>
                    <td style="width: 200px;">ANNEX I : Limbah berupa minyak bekas atau campuran minyak dan air</td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                  </tr>
                  <tr class="border-b-2 border-solid border-slate-200">
                    <td class="text-center">2</td>
                    <td>ANNEX II : Limbah berupa material cair berbahaya dalam bentuk curah</td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                  </tr>
                  <tr class="border-b-2 border-solid border-slate-200">
                    <td class="text-center">3</td>
                    <td>ANNEX III : Limbah berupa barang berbahaya dalam kemasan</td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                  </tr>
                  <tr class="border-b-2 border-solid border-slate-200">
                    <td class="text-center">4</td>
                    <td>ANNEX IV : Limbah berupa kotoran, limbah cair domestik</td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                  </tr>
                  <tr class="border-b-2 border-solid border-slate-200">
                    <td class="text-center">5</td>
                    <td>ANNEX V : Limbah berupa sampah</td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                  </tr>
                  <tr class="border-b-2 border-solid border-slate-200">
                    <td class="text-center">6</td>
                    <td>ANNEX VI : Limbah berupa perusak ozon</td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                  </tr>
                  <tr class="border-b-2 border-solid border-slate-200">
                    <td class="text-center">7</td>
                    <td>Sampah Elektronik</td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                  </tr>
                  <tr>
                    <td class="text-center">8</td>
                    <td>Attachment</td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>


          <!-- . DATA MANIFEST BONGKAR MUAT -->

        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
          <!-- DOKUMEN KAPAL -->

          <div>
            <h3>PELABUHAN ASAL / TUJUAN</h3>
            <center>

              <table class="border-solid border-2 border-slate-800 mt-1">
                <thead>
                  <tr class="border-solid border-2 border-slate-800 bg-gray-300 to-primary text-slate-900">
                    <th class="py-2">NO</th>
                    <th>JENIS INFORMASI</th>
                    <th>DATA INFORMASI</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">1</td>
                    <td>PELABUHAN ASAL</td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                  </tr>
                  <tr>
                    <td class="text-center">2</td>
                    <td>WAKTU TIBA</td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                  </tr>
                  <tr>
                    <td class="text-center">3</td>
                    <td>WAKTU KEBERANGKATAN</td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                  </tr>
                  <tr>
                    <td class="text-center">4</td>
                    <td>PERMINTAAN LOKASI LAMBAT DAN LABUH</td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                  </tr>
                  <tr>
                    <td class="text-center">5</td>
                    <td>PELABUHAN TUJUAN</td>
                    <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                  </tr>
                </tbody>
              </table>
            </center>
          </div>

          <div class="mt-8">
            <div class="grid grid-cols-2">
              <div class="text-left">Manifest Barang Berbahaya</div>
              <div class="align-items-end">
                <button data-modal-target="modal-dokumen-kapal" data-modal-toggle="modal-dokumen-kapal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buat data</button>

                <!-- Main modal -->
                <div id="modal-dokumen-kapal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                  <div class="relative w-full max-w-4xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                      <!-- Modal header -->
                      <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                          DOKUMEN KAPAL
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-dokumen-kapal">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                          </svg>
                          <span class="sr-only">Close modal</span>
                        </button>
                      </div>
                      <!-- Modal body -->
                      <div class="p-6 space-y-6">
                        <div class="grid grid-cols-4 gap-3">
                          <div>
                            <label class="text-left">NAMA DOKUMEN</label>
                            <input type="text" class="w-full rounded border-1 border-slate-200">
                          </div>
                          <div>
                            <label class="text-left">KODE JENIS DOKUMEN</label>
                            <input type="text" class="w-full rounded border-1 border-slate-200">
                          </div>
                          <div>
                            <label class="text-left">NOMOR DOKUMEN</label>
                            <input type="text" class="w-full rounded border-1 border-slate-200">
                          </div>
                          <div>
                            <label class="text-left">TEMPAT DIKELUARKAN</label>
                            <input type="text" class="w-full rounded border-1 border-slate-200">
                          </div>
                        </div>

                        <div class="grid grid-cols-4 gap-3">

                          <div>
                            <label class="text-left">TANGGAL DIKELUARKAN</label>
                            <input type="text" class="w-full rounded border-1 border-slate-200">
                          </div>
                          <div>
                            <label class="text-left">TANGGAL ENDORSMEN</label>
                            <input type="text" class="w-full rounded border-1 border-slate-200">
                          </div>
                          <div>
                            <label class="text-left">TANGGAL BERAKHIR</label>
                            <input type="text" class="w-full rounded border-1 border-slate-200">
                          </div>
                          <div>
                            <label class="text-left">DOKUMEN</label>
                            <input type="file" class="w-full rounded border-1 border-slate-200">
                          </div>
                        </div>
                      </div>
                      <!-- Modal footer -->
                      <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="modal-dokumen-kapal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
                        <button data-modal-hide="modal-dokumen-kapal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- . MODAL -->
              </div>
            </div>
            <table class="border-solid border-2 border-slate-800 mt-1 w-full">
              <thead>
                <tr class="border-solid border-2 border-slate-800 bg-gray-300 to-primary text-slate-900">
                  <th class="py-2">NO</th>
                  <th>JENIS DOKUMEN</th>
                  <th>NO DOKUMEN</th>
                  <th>TEMPAT DIKELUARKAN</th>
                  <th>TANGGAL DOKUMEN</th>
                  <th>NAMA DOKUMEN</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>



          <!-- . DOKUMEN KAPAL -->
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts2" role="tabpanel" aria-labelledby="contacts-tab2">

          <!-- BONGKAR MUAT -->
          <h3 class="font-semibold">BONGKAR MUAT</h3>

          <div class="w-[500px]">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">BARANG MAYORITAS / BARANG TERBANYAK DIATAS KAPAL</label>
            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option value="">-= Pilih Barang =-</option>
              <option>Dos</option>
              <option>Lemari</option>
              <option>Kulkas</option>
              <option>Paket</option>
            </select>
          </div>


          <div class="grid grid-cols-2 gap-5">
            <div class="">
              <h2 class="font-semibold text-lg mt-8">A. MUAT</h2>
              <div>
                <h3 class="font-semibold mt-5">1. KONTAINER ISI</h3>
                <div>
                  <div class="w-[70%] float-right bg-gray-200 text-center py-2">KONTAINER ISI YANG DIMUAT</div>
                </div>
                <table class="w-full">
                  <tbody>
                    <tr>
                      <td class="py-4">Jumlah Tonase <br> kontainer 40 feet isi </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="">Jumlah Box <br> kontainer 40 feet isi </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    </tr>
                    <tr>
                      <td class="py-4">Jumlah Tonase <br> kontainer 20 feet isi </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="">Jumlah Box <br> kontainer 20 feet isi </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    </tr>
                    <tr>
                      <td class="py-4">Jumlah Tonase <br> kontainer 45 feet isi </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="">Jumlah Box <br> kontainer 45 feet isi </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    </tr>

                  </tbody>
                </table>
              </div>

              <div>
                <h3 class="font-semibold mt-5">2. KONTAINER KOSONG</h3>
                <div>
                  <div class="w-[70%] float-right bg-gray-200 text-center py-2">KONTAINER KOSONG YANG DIMUAT</div>
                </div>
                <table class="w-full">
                  <tbody>
                    <tr>
                      <td class="py-4">Jumlah Tonase <br> kontainer 40 feet kosong </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="">Jumlah Box <br> kontainer 40 feet kosong </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    </tr>
                    <tr>
                      <td class="py-4">Jumlah Tonase <br> kontainer 20 feet kosong </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="">Jumlah Box <br> kontainer 20 feet kosong </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    </tr>
                    <tr>
                      <td class="py-4">Jumlah Tonase <br> kontainer 45 feet kosong </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="">Jumlah Box <br> kontainer 45 feet kosong </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    </tr>

                  </tbody>
                </table>
              </div>

              <div>
                <h3 class="font-semibold mt-5">3. CARGO</h3>
                <div>
                  <div class="w-[70%] float-right bg-gray-200 text-center py-2">CARGO YANG DIMUAT</div>
                </div>
                <table class="w-full">
                  <tbody>
                    <tr>
                      <td class="py-4">Jumlah Tonase Cargo <br> barang Campur </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="">Jumlah Tonase Cargo <br> barang Karung </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    </tr>
                    <tr>
                      <td class="py-4">Jumlah Tonase Cargo <br> barang Curah </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="">Jumlah Tonase Cargo <br> barang Cair </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    </tr>
                    <tr>
                      <td class="py-4">Jumlah Tonase Cargo <br> barang Berbahaya </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class=""></td>
                      <td></td>
                    </tr>

                  </tbody>
                </table>
              </div>

              <div class="">
                <h3 class="font-semibold mt-5">4. KENDARAAN</h3>
                <div>
                  <div class="w-full bg-gray-200 text-center py-2">KENDARAAN NAIK</div>
                </div>
                <table class="w-full">
                  <tbody>
                    <tr>
                      <td class="py-4">RODA DUA</td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="text-left">UNIT </td>
                    </tr>
                    <tr>
                      <td class="py-4">RODA EMPAT</td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="">UNIT </td>
                    </tr>
                    <tr>
                      <td class="py-4">BUS</td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="text-left">UNIT </td>
                    </tr>
                    <tr>
                      <td class="py-4">TRUK</td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="text-left">UNIT </td>
                    </tr>
                    <tr>
                      <td class="py-4">ALAT BERAT</td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="text-left">UNIT </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>

            <div class="">
              <h2 class="font-semibold text-lg mt-8">A. BONGKAR</h2>
              <div>
                <h3 class="font-semibold mt-5">1. KONTAINER ISI</h3>
                <div>
                  <div class="w-[70%] float-right bg-gray-200 text-center py-2">KONTAINER ISI YANG DIMUAT</div>
                </div>
                <table class="w-full">
                  <tbody>
                    <tr>
                      <td class="py-4">Jumlah Tonase <br> kontainer 40 feet isi </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="">Jumlah Box <br> kontainer 40 feet isi </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    </tr>
                    <tr>
                      <td class="py-4">Jumlah Tonase <br> kontainer 20 feet isi </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="">Jumlah Box <br> kontainer 20 feet isi </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    </tr>
                    <tr>
                      <td class="py-4">Jumlah Tonase <br> kontainer 45 feet isi </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="">Jumlah Box <br> kontainer 45 feet isi </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    </tr>

                  </tbody>
                </table>
              </div>

              <div>
                <h3 class="font-semibold mt-5">2. KONTAINER KOSONG</h3>
                <div>
                  <div class="w-[70%] float-right bg-gray-200 text-center py-2">KONTAINER KOSONG YANG DIMUAT</div>
                </div>
                <table class="w-full">
                  <tbody>
                    <tr>
                      <td class="py-4">Jumlah Tonase <br> kontainer 40 feet kosong </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="">Jumlah Box <br> kontainer 40 feet kosong </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    </tr>
                    <tr>
                      <td class="py-4">Jumlah Tonase <br> kontainer 20 feet kosong </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="">Jumlah Box <br> kontainer 20 feet kosong </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    </tr>
                    <tr>
                      <td class="py-4">Jumlah Tonase <br> kontainer 45 feet kosong </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="">Jumlah Box <br> kontainer 45 feet kosong </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    </tr>

                  </tbody>
                </table>
              </div>

              <div>
                <h3 class="font-semibold mt-5">3. CARGO</h3>
                <div>
                  <div class="w-[70%] float-right bg-gray-200 text-center py-2">CARGO YANG DIMUAT</div>
                </div>
                <table class="w-full">
                  <tbody>
                    <tr>
                      <td class="py-4">Jumlah Tonase Cargo <br> barang Campur </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="">Jumlah Tonase Cargo <br> barang Karung </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    </tr>
                    <tr>
                      <td class="py-4">Jumlah Tonase Cargo <br> barang Curah </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="">Jumlah Tonase Cargo <br> barang Cair </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    </tr>
                    <tr>
                      <td class="py-4">Jumlah Tonase Cargo <br> barang Berbahaya </td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class=""></td>
                      <td></td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <div class="">
                <h3 class="font-semibold mt-5">4. KENDARAAN</h3>
                <div>
                  <div class="w-full bg-gray-200 text-center py-2">KENDARAAN NAIK</div>
                </div>
                <table class="w-full">
                  <tbody>
                    <tr>
                      <td class="py-4">RODA DUA</td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="text-left">UNIT </td>
                    </tr>
                    <tr>
                      <td class="py-4">RODA EMPAT</td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="">UNIT </td>
                    </tr>
                    <tr>
                      <td class="py-4">BUS</td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="text-left">UNIT </td>
                    </tr>
                    <tr>
                      <td class="py-4">TRUK</td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="text-left">UNIT </td>
                    </tr>
                    <tr>
                      <td class="py-4">ALAT BERAT</td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="text-left">UNIT </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="mt-4">

            <div>
              <div class="w-full bg-gray-200 text-center py-2">BARANG LAINNYA YANG DIMUAT DAN DIBONGKAR</div>
            </div>
            <div class="grid grid-cols-2 gap-3">
              <div>
                <h2 class="font-semibold text-">MUAT</h2>
                <table class="w-full">
                  <tbody>
                    <tr>
                      <td class="py-4">Nama Jenis Barang Lain</td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="text-left">TON </td>
                    </tr>
                    <tr>
                      <td class="py-4">Jumlah Tonase yang dimuat</td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="">TON </td>
                    </tr>
                    <tr>
                      <td class="py-4">Jumlah Total Tonase yang dimuat</td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="text-left">TON </td>
                    </tr>
                    <tr>
                      <td class="py-4">Jumlah Penumpang yang naik</td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="text-left">ORANG </td>
                    </tr>
                    <tr>
                      <td class="py-4">Jumlah Hewan yang dimuat</td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="text-left">EKOR </td>
                    </tr>

                  </tbody>
                </table>
              </div>

              <div>
                <h2 class="font-semibold text-">BONGKAR</h2>
                <table class="w-full">
                  <tbody>
                    <tr>
                      <td class="py-4">Nama Jenis Barang Lain</td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="text-left">TON </td>
                    </tr>
                    <tr>
                      <td class="py-4">Jumlah Tonase yang dimuat</td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="">TON </td>
                    </tr>
                    <tr>
                      <td class="py-4">Jumlah Total Tonase yang dimuat</td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="text-left">TON </td>
                    </tr>
                    <tr>
                      <td class="py-4">Jumlah Penumpang yang naik</td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="text-left">ORANG </td>
                    </tr>
                    <tr>
                      <td class="py-4">Jumlah Hewan yang dimuat</td>
                      <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td class="text-left">EKOR </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>


          <!-- . BONGKAR MUAT -->
        </div>
      </div>

    </div>
  </div>



</div>



@endsection

@section('script')


<script>
  $(document).ready(function() {
    loadPBM()

  });
  
  let pelayanan_kapal_id = '{{ @$_GET["id"] }}';
  // PMB
  $('#form-pbm').submit(function(e) {
    e.preventDefault();
    let data = $('#form-pbm').serializeArray();
    data.push({
      name: "pelayanan_kapal_id",
      value: pelayanan_kapal_id
    })
    console.log("data", data)
    $.when(sendAjax('{{ URL::to("") }}/api/pelayanan-kapal/pengajuan-pkk/save/pbm', data, 'post', '#form-pbm')).done(function(res) {
      if (res.status) {
        // $('#modal-pmb').hide();
        // $("body > div[modal-backdrop]")?.remove()
        // $("body > div[modal-backdrop]")?.addClass("hidden")
        // $('body').removeClass("overflow-hidden")
        // $('#modal-pmb').removeClass("flex")
        // $('#modal-pmb').addClass("hidden")
        pesanSweet('Berhasil', res.message);
        loadPBM()
        // setTimeout(function(){
        //   window.location.reload(1);
        // }, 2000);

      } else {
        pesanSweet('Gagal!', res.pesan, 'warning');
      }
    });
  })

  function loadPBM() {

    $.when(sendAjax('{{ URL::to("") }}/api/pelayanan-kapal/pengajuan-pkk/get/pbm', {pelayanan_kapal_id:pelayanan_kapal_id}, 'get')).done(function(res) {
      if (res.status) {

        console.log("e", res.data)
        $('#table-pbm > tbody ').empty();
        for(let i = 0; i < res.data.length; i++){
          
        $('#table-pbm > tbody ').append("<tr><td class='text-center'>"+(i+1)+"</td><td>"+res.data[i]["nama_perusahaan"]+"</td><td>"+res.data[i]["type_pbm"]+"</td><td>"+res.data[i]["kegiatan"]+"</td><td class='p-2'>"+
        `
        <center>
                <a href="javascript:void(0);" onClick="removePBM('${res.data[i]["pelayanan_kapal_pbm_id"]}')">
                  <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                    <path d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z" />
                  </svg>
                </a>
              </center>
        `
        +"</td></tr>")
        }
      } else {
        pesanSweet('Gagal!', res.pesan, 'warning');
      }
    });
  }

  async function removePBM(id){
    console.log("id",id)
    await init_hapus('{{ URL::to("") }}/api/pelayanan-kapal/pengajuan-pkk/delete/pbm/'+id);
    loadPBM()
  }
  // . PMB


  // upload DOKUMEN MANIFEST PENUMPANG

  // $('#form-upload-manifest-penumpang').submit(function(e) {
  //   e.preventDefault();
  //   let data = $('#form-upload-manifest-penumpang').serializeArray();
  //   data.push({
  //     name: "pelayanan_kapal_id",
  //     value: pelayanan_kapal_id
  //   })
  //   console.log("data", data)
  //   $.when(sendAjax('{{ URL::to("") }}/api/pelayanan-kapal/pengajuan-pkk/save/pbm', data, 'post', '#form-pbm')).done(function(res) {
  //     if (res.status) {
  //       // $('#modal-pmb').hide();
  //       // $("body > div[modal-backdrop]")?.remove()
  //       // $("body > div[modal-backdrop]")?.addClass("hidden")
  //       // $('body').removeClass("overflow-hidden")
  //       // $('#modal-pmb').removeClass("flex")
  //       // $('#modal-pmb').addClass("hidden")
  //       pesanSweet('Berhasil', res.message);
  //       loadPBM()
  //       // setTimeout(function(){
  //       //   window.location.reload(1);
  //       // }, 2000);

  //     } else {
  //       pesanSweet('Gagal!', res.pesan, 'warning');
  //     }
  //   });
  // })

  
  // . upload DOKUMEN MANIFEST PENUMPANG







</script>


@endsection