@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<div class="w-full">

  <div class="text-2xl ">Pelayanan Kapal / SPOG / Buat data </div>
  <hr class="border-b-2 border-black border-solid">
  <center>
    <div class="max-w-[90%] text-center mb-3 mt-5">
      <h2 class="text-2xl font-bold mt-10 mb-7">FORM PERMOHONAN SURAT PERSETUJUAN OLAH GERAK</h2>

      <div class="grid grid-cols-2">
        <div class="text-left">


          <table class="w-full">
            <tr>
              <td>NO LAYANAN/PKK</td>
              <td>:</td>
              <td>{{ @$data->no_layanan_kapal }}</td>
            </tr>
            <tr>
              <td>RKPRO</td>
              <td>:</td>
              <td>{{ @$data->no_rpkro }}</td>
            </tr>
            <tr>
              <td>NOMOR PKK</td>
              <td>:</td>
              <td>{{ @$data->no_pkk }}</td>
            </tr>
            <tr>
              <td colspan="3" class="h-6"></td>
            </tr>
            <tr>
              <td>NAMA KAPAL</td>
              <td>:</td>
              <td>{{ @$data->nama_kapal }}</td>
            </tr>
            <tr>
              <td>BENDERA</td>
              <td>:</td>
              <td>{{ @$data->bendera }}</td>
            </tr>
            <tr>
              <td>JENIS TRAYEK</td>
              <td>:</td>
              <td>{{ @$data->jenis_trayek }}</td>
            </tr>
            <tr>
              <td>CALL SIGN</td>
              <td>:</td>
              <td>{{ @$data->call_sign }}</td>
            </tr>
            <tr>
              <td>GRT</td>
              <td>:</td>
              <td>{{ @$data->grt_kapal }}</td>
            </tr>
            <tr>
              <td>LOA</td>
              <td>:</td>
              <td>{{ @$data->loa_kapal }}</td>
            </tr>
            <tr>
              <td>DWT</td>
              <td>:</td>
              <td>{{ @$data->dwt_kapal }}</td>
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
              <td>{{ @$data->gros_tonase }}</td>
            </tr>
            <tr>
              <td>DEADWEIGHT TONNAGE</td>
              <td>:</td>
              <td>{{ @$data->deadweight_tonase }}</td>
            </tr>
            <tr>
              <td>DRAFT DEPAN</td>
              <td>:</td>
              <td>{{ @$data->draft_muka }}</td>
            </tr>
            <tr>
              <td>DRAFT MAKSIMUM</td>
              <td>:</td>
              <td>{{ @$data->draft_maksimum }}</td>
            </tr>
            <tr>
              <td>DRAFT BELAKANG</td>
              <td>:</td>
              <td>{{ @$data->draft_belakang }}</td>
            </tr>
            <tr>
              <td>KETINGGIAN UDARA</td>
              <td>:</td>
              <td>{{ @$data->ketinggian_udara }}</td>
            </tr>
            <tr>
              <td>LENGTH OVER ALL</td>
              <td>:</td>
              <td>{{ @$data->panjang_kapal }}</td>
            </tr>
            <tr>
              <td>LEBAR KAPAL</td>
              <td>:</td>
              <td>{{ @$data->lebar_kapal }}</td>
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
              <td>{{ @$data->nama_cso }}</td>
            </tr>
            <tr>
              <td>NO TELEPON</td>
              <td>:</td>
              <td>{{ @$data->no_telp_cso }}</td>
            </tr>
          </table>
        </div>
        <div class="text-left">

          <table class="w-full mt-24">
            <tr>
              <td colspan="3" class="font-semibold">DATA PEMILIK</td>
            </tr>
            <tr>
              <td>NAMA</td>
              <td>:</td>
              <td>{{ @$data->perusahaan_pemilik_kapal }}</td>
            </tr>
            <tr>
              <td>PENANGGUNG JAWAB</td>
              <td>:</td>
              <td>{{ @$data->penanggung_jawab }}</td>
            </tr>
            <tr>
              <td>SIUPAL PEMILIK</td>
              <td>:</td>
              <td>{{ @$data->siupal_pemilik }}</td>
            </tr>
            <tr>
              <td>ALAMAT</td>
              <td>:</td>
              <td>{{ @$data->alamat }}</td>
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
              <td>{{ @$data->nama_agen }}</td>
            </tr>
            <tr>
              <td>PENANGGUNG JAWAB</td>
              <td>:</td>
              <td>{{ @$data->penanggung_jawab_agen }}</td>
            </tr>
            <tr>
              <td>ALAMAT</td>
              <td>:</td>
              <td>{{ @$data->alamat_agen }}</td>
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
            <td><input type="text" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="DEFAULT AUTO FILL" disabled></td>
          </tr>
          <tr>
            <td>LINTASAN</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="DEFAULT AUTO FILL" disabled></td>
          </tr> -->
          </table>
        </div>
      </div>


      @if(@$_GET['status'] == "edit")
      <form action="" method="post" id="form">
        <input type="hidden" value="{{ @$_GET['id'] }}" name="pelayanan_kapal_id">
        <div class="mt-10 mb-5 grid grid-cols-3 gap-3">
          <div class="mb-1 text-left">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">NOMOR PERMOHONAN SPOG :</label>
            <input type="text" name="no_permohonan_spog" value="{{ @$input->no_permohonan_spog }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="mb-1 text-left">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">WAKTU PERMOHONAN SPOG :</label>
            <input type="datetime-local" name="wkt_permohonan_spog" value="{{ @$input->wkt_permohonan_spog }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
        </div>
      </form>
      @else

      <div class="mt-10 mb-5 grid grid-cols-3 gap-3">
        <div class="mb-1 text-left">
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">NOMOR PERMOHONAN SPOG :</label>
          <input type="text" value="{{ @$input->no_permohonan_spog }}" disabled class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-1 text-left">
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/2 text-left">WAKTU PERMOHONAN SPOG :</label>
          <input type="datetime-local" value="{{ @$input->wkt_permohonan_spog }}" disabled class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
      </div>
      @endif

      <table class="table w-full">
        <thead>
          <tr class="border-solid border-2 border-slate-800 bg-gradient-to-r from-[#211c5c] to-primary text-white">
            <th>NO</th>
            <th>KODE PELAUT</th>
            <th>NAMA</th>
            <th>GENDER</th>
            <th>TGL LAHIR</th>
            <th>KEBANGSAAN</th>
            <th>NO BUKU PELAUT</th>
            <th>TGL EKSPIRED SERTIFIKAT</th>
            <th class="px-2 py-2">JABATAN</th>
          </tr>
        </thead>
        <tbody>
            @foreach(@$dataCrewList as $rowCrew)
            <tr class="hover:bg-slate-200">
              <td class="text-center py-4">{{ $loop->index+1 }}</td>
              <td class="text-center">{{ @$rowCrew->kode_pelaut }}</td>
              <td>{{ @$rowCrew->nama }}</td>
              <td>{{ @$rowCrew->jenis_kelamin }}</td>
              <td>{{ changeDateFormate(@$rowCrew->tgl_lahir) }}</td>
              <td>{{ @$rowCrew->kebangsaan }}</td>
              <td>{{ @$rowCrew->no_buku_pelaut }}</td>
              <td>{{ changeDateFormate(@$rowCrew->tgl_expired_sertifikasi) }}</td>
              <td>{{ @$rowCrew->jabatan }}</td>
            </tr>
            @endforeach
        </tbody>
      </table>

      @if(@$_GET['status'] == "edit")
      <div class="text-left my-5">
        <button type="submit" form="form" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">SIMPAN</button>
        <!-- <a href="../spog" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">KIRIM</a> -->
        <a href="../spog" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">KEMBALI</a>
      </div>
      @endif

    </div>
  </center>



</div>



@endsection

@section('script')



@endsection