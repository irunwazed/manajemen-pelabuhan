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
    </div>



    <div class="mt-2 px-10 py-7 grid grid-cols-2 gap-3 border-2 border-solid border-black">
      <div>
        <h3 class="my-5">Data Kapal</h3>
        <table class="w-full">
          <tr>
            <td>Tanda Pendaftaran Kapal</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->tanda_pendaftaran_kapal }}" name="tanda_pendaftaran_kapal" disabled></td>
          </tr>
          <tr>
            <td colspan="3" class="h-6"></td>
          </tr>
          <tr>
            <td>NAMA KAPAL</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->nama_kapal }}" name="nama_kapal" disabled></td>
          </tr>
          <tr>
            <td>BENDERA</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->bendera }}" name="bendera" disabled></td>
          </tr>
          <tr>
            <td>JENIS TRAYEK</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->jenis_trayek }}" name="jenis_trayek" disabled></td>
          </tr>
          <tr>
            <td>NOMOR TRAYEK</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled></td>
          </tr>
          <tr>
            <td>CALL SIGN</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->call_sign }}" name="call_sign"></td>
          </tr>
          <tr>
            <td>GRT</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->grt_kapal }}" name="grt_kapal"></td>
          </tr>
          <tr>
            <td>LOA</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->loa_kapal }}" name="loa_kapal"></td>
          </tr>
          <tr>
            <td>DWT</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->dwt_kapal }}" name="dwt_kapal"></td>
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
            <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->gros_tonase }}" name="gros_tonase"></td>
          </tr>
          <tr>
            <td>DEADWEIGHT TONNAGE</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->deadweight_tonase }}" name="deadweight_tonase"></td>
          </tr>
          <tr>
            <td>DRAFT DEPAN</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->draft_muka }}" name="draft_muka"></td>
          </tr>
          <tr>
            <td>DRAFT MAKSIMUM</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->draft_maksimum }}" name="draft_maksimum"></td>
          </tr>
          <tr>
            <td>DRAFT BELAKANG</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->draft_belakang }}" name="draft_belakang"></td>
          </tr>
          <tr>
            <td>KETINGGIAN UDARA</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->ketinggian_udara }}" name="ketinggian_udara"></td>
          </tr>
          <tr>
            <td>LENGTH OVER ALL</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->panjang_kapal }}" name="panjang_kapal"></td>
          </tr>
          <tr>
            <td>LEBAR KAPAL</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->lebar_kapal }}" name="lebar_kapal"></td>
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
            <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->nama_cso }}" name="nama_cso"></td>
          </tr>
          <tr>
            <td>NO TELEPON</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->no_telp_cso }}" name="no_telp_cso"></td>
          </tr>
        </table>
      </div>
      <div>
        <h3 class="my-5">Dioperasikan Oleh</h3>
        <table class="w-full">
          <tr>
            <td>NAMA</td>
            <td>:</td>
            <td><input type="text" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->perusahaan_pemilik_kapal }}" name="perusahaan_pemilik_kapal"></td>
          </tr>
          <tr>
            <td>PENANGGUNG JAWAB</td>
            <td>:</td>
            <td><input type="text" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->penanggung_jawab }}" name="penanggung_jawab"></td>
          </tr>
          <tr>
            <td>SIUPAL PEMILIK</td>
            <td>:</td>
            <td><input type="text" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->siupal_pemilik }}" name="siupal_pemilik"></td>
          </tr>
          <tr>
            <td>ALAMAT</td>
            <td>:</td>
            <td>
              <textarea name="alamat" class="w-full py-10 rounded-2xl px-3 border-gray-300 mr-3" cols="30" rows="3">{{ @$data->alamat }}</textarea>
            </td>
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
            <td><input type="text" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->nama_agen?$data->nama_agen:session()->get('nama_perusahaan') }}" name="nama_agen" disabled></td>
          </tr>
          <tr>
            <td>PENANGGUNG JAWAB</td>
            <td>:</td>
            <td><input type="text" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$data->penanggung_jawab_agen?@$data->penanggung_jawab_agen:session()->get('pic') }}" name="penanggung_jawab_agen" disabled></td>
          </tr>
          <tr>
            <td>ALAMAT</td>
            <td>:</td>
            <td>
              <textarea name="alamat_agen" class="w-full py-10 rounded-2xl px-3 border-gray-300 mr-3" cols="30" rows="3">{{ @$data->alamat_agen?$data->alamat_agen:session()->get('alamat_perusahaan') }}</textarea>
            </td>
          </tr>
          <tr>
            <td colspan="3" class="h-2"></td>
          </tr>
          <tr>
            <td>DOKUMEN KEGIATAN</td>
            <td>:</td>
            <td>
              @if(@$data->file_dokumen_keagenan != "")
              <a target="_blank|_self|_parent|_top|framename" href="{{ url('/') }}/{{ @$data->file_dokumen_keagenan }}" class="py-2 px-4 rounded-md hover:opacity-90 bg-orange-400 text-orange-100">Download</a>
              @else
                <span>Tidak ada dokumen</span>
              @endif
            </td>
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

    <div class="mt-5">
      <h2 class="bg-blue-300 py-2 pl-3 my-3 font-semibold">PERUSAHAAN BONGKAR MUAT</h2>

      <table class="table w-[700px] mt-1" id="table-pbm">
        <thead>
          <tr class="bg-gray-300 to-primary text-slate-900">
            <th class="py-2">NO</th>
            <th>NAMA PERUSAHAAN</th>
            <th>TYPE PERUSAHAAN</th>
            <th>KEGIATAN</th>
          </tr>
        </thead>
        <tbody>
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

          <table class="table w-full mt-1">
            <thead>
              <tr class=" bg-gray-300 to-primary text-slate-900">
                <th class="py-2">NO</th>
                <th>UPLOAD</th>
                <th>NAMA FILE</th>
              </tr>
            </thead>
            <tbody>
              <tr class="hover:bg-slate-200">
                <td class="text-center">1</td>
                <td>DOKUMEN MANIFEST PENUMPANG</td>
                <td class="py-2">
                  <center>
                    @if(@$data->file_manifest_penumpang)
                    <a target="_blank|_self|_parent|_top|framename" href="{{ url('/') }}/{{ $data->file_manifest_penumpang }}" class="py-2 px-4 rounded-md hover:opacity-90 bg-orange-400 text-orange-100">Download</a>
                    @else
                    <span>Tidak ada</span>
                    @endif
                  </center>
                </td>
              </tr>
              <tr class="hover:bg-slate-200">
                <td class="text-center">2</td>
                <td>DOKUMEN MANIFEST BONGKAR MUAT</td>
                <td class="py-2">
                  <center>
                    @if(@$data->file_manifest_bongkar_muat)
                    <a target="_blank|_self|_parent|_top|framename" href="{{ url('/') }}/{{ $data->file_manifest_bongkar_muat }}" class="py-2 px-4 rounded-md hover:opacity-90 bg-orange-400 text-orange-100">Download</a>
                    @else
                    <span>Tidak ada</span>
                    @endif
                  </center>
                </td>
              </tr>
              <tr class="hover:bg-slate-200">
                <td class="text-center">3</td>
                <td>DOKUMEN MANIFEST BARANG BERBAHAYA</td>
                <td class="py-2">
                  <center>
                    @if(@$data->file_manifest_barang_berbahaya)
                    <a target="_blank|_self|_parent|_top|framename" href="{{ url('/') }}/{{ $data->file_manifest_barang_berbahaya }}" class="py-2 px-4 rounded-md hover:opacity-90 bg-orange-400 text-orange-100">Download</a>
                    @else
                    <span>Tidak ada</span>
                    @endif
                  </center>
                </td>
              </tr>
              <tr class="hover:bg-slate-200">
                <td class="text-center">4</td>
                <td>DOKUMEN MANIFEST BARANG KHUSUS</td>
                <td class="py-2">
                  <center>
                    @if(@$data->file_manifest_barang_khusus)
                    <a target="_blank|_self|_parent|_top|framename" href="{{ url('/') }}/{{ $data->file_manifest_barang_khusus }}" class="py-2 px-4 rounded-md hover:opacity-90 bg-orange-400 text-orange-100">Download</a>
                    @else
                    <span>Tidak ada</span>
                    @endif
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


          <table class="table  w-full mt-1">
            <thead>
              <tr class="bg-gray-300 to-primary text-slate-900">
                <th class="py-2">NO</th>
                <th>KODE PELAUT</th>
                <th>NAMA</th>
                <th>GENDER</th>
                <th>TGL LAHIR</th>
                <th>KEBANGSAAN</th>
                <th>NO BUKU PELAUT</th>
                <th>TGL EXPIRED</th>
                <th>JABATAN</th>
              </tr>
            </thead>
            <tbody>
              @foreach(@$dataCrewList as $rowCrew)
              <tr class="hover:bg-slate-200">
                <td class="text-center py-4">{{ $loop->index+1 }}</td>
                <td class="text-center">{{ @$rowCrew->kode_pelaut }}</td>
                <td>{{ @$rowCrew->nama }}</td>
                <td>{{ @$rowCrew->jenis_kelamin }}</td>
                <td>{{ @$rowCrew->tgl_lahir }}</td>
                <td>{{ @$rowCrew->kebangsaan }}</td>
                <td>{{ @$rowCrew->no_buku_pelaut }}</td>
                <td>{{ @$rowCrew->tgl_expired_sertifikasi }}</td>
                <td>{{ @$rowCrew->jabatan }}</td>
              </tr>
              @endforeach
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
              
            </div>
            <table class="table w-full mt-1">
              <thead>
                <tr class="bg-gray-300 to-primary text-slate-900">
                  <th class="py-2">NO</th>
                  <th>JENIS KEMASAN</th>
                  <th>NAMA KOMODITI</th>
                  <th>JENIS KEGIATAN</th>
                  <th>JLH SATUAN UNIT</th>
                  <th>JLH SATUAN TON</th>
                  <th>JLH SATUAN M3</th>
                  <th>No BL</th>
                </tr>
              </thead>
              <tbody>
                @foreach(@$dataKargo as $rowKargo)
                <tr class="hover:bg-slate-200">
                  <td class="text-center py-4">{{ $loop->index+1 }}</td>
                  <td class="text-center">{{ @$rowKargo->nama_kemasan }}</td>
                  <td>{{ @$rowKargo->nama_komoditas }}</td>
                  <td>{{ @$rowKargo->nama_kegiatan }}</td>
                  <td>{{ @$rowKargo->jlh_satuan_unit }}</td>
                  <td>{{ @$rowKargo->jlh_satuan_ton }}</td>
                  <td>{{ @$rowKargo->jlh_satuan_metrik }}</td>
                  <td>{{ @$rowKargo->no_bl }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>



          <div class="mt-8">
            <div class="grid grid-cols-2">
              <div class="text-left font-semibold mt-4">Manifest Kontainer</div>
              
            </div>
            <table class="table w-full mt-1">
              <thead>
                <tr class="bg-gray-300 to-primary text-slate-900">
                  <th class="py-2">NO</th>
                  <th>JENIS KEMASAN</th>
                  <th>NAMA KOMODITI</th>
                  <th>JENIS KEGIATAN</th>
                  <th>No Kontainer</th>
                  <th>Size Kontainer</th>
                  <th>JUMLAH</th>
                  <th>SATUAN TON</th>
                  <th>No BOL</th>
                </tr>
              </thead>
              <tbody>
                @foreach(@$dataKontainer as $rowKontainer)
                <tr class="hover:bg-slate-200">
                  <td class="text-center py-4">{{ $loop->index+1 }}</td>
                  <td class="text-center">{{ @$rowKontainer->nama_kemasan }}</td>
                  <td>{{ @$rowKontainer->nama_komoditas }}</td>
                  <td>{{ @$rowKontainer->nama_kegiatan }}</td>
                  <td>{{ @$rowKontainer->no_kontainer }}</td>
                  <td>{{ @$rowKontainer->ukuran_kontainer }}</td>
                  <td>{{ @$rowKontainer->jlh_satuan_unit }}</td>
                  <td>{{ @$rowKontainer->jlh_satuan_ton }}</td>
                  <td>{{ @$rowKontainer->no_bl }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>


          <div class="mt-8">
            <div class="grid grid-cols-2">
              <div class="text-left font-semibold">Manifest Penumpang</div>
            </div>
            <table class="table w-[700px] mt-1">
              <thead>
                <tr class="bg-gray-300 to-primary text-slate-900">
                  <th class="py-2">NO</th>
                  <th>Nama</th>
                  <th>JUMLAH</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center w-[10px]">1</td>
                  <td>Jumlah Dewasa</td>
                  <td><input type="text" value="{{ @$data->jlh_penumpang_dewasa }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                </tr>
                <tr>
                  <td class="text-center">2</td>
                  <td>Jumlah Anak</td>
                  <td><input type="text" value="{{ @$data->jlh_penumpang_anak }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                </tr>
              </tbody>
            </table>
          </div>



          <div class="mt-8">
            <div class="grid grid-cols-2">
              <div class="text-left font-semibold mt-4">Manifest Barang Berbahaya</div>
              
            </div>
            <table class="table w-full mt-1">
              <thead>
                <tr class="bg-gray-300 to-primary text-slate-900">
                  <th class="py-2">NO</th>
                  <th>NAMA PENGIRIM</th>
                  <th>NAMA BARANG</th>
                  <th>NO UN</th>
                  <th>KEMASAN BARANG</th>
                  <th>KELAS BB</th>
                  <th>JUMLAH MUATAN</th>
                  <th>SATUAN</th>
                  <th>JENIS</th>
                  <th>TYPE</th>
                </tr>
              </thead>
              <tbody>
                @foreach(@$dataBrgBerbahaya as $rowBrgBerbahaya)
                <tr class="hover:bg-slate-200">
                  <td class="text-center py-4">{{ $loop->index+1 }}</td>
                  <td class="text-center">{{ @$rowBrgBerbahaya->nama_pengirim }}</td>
                  <td>{{ @$rowBrgBerbahaya->nama_barang }}</td>
                  <td>{{ @$rowBrgBerbahaya->nomor_un }}</td>
                  <td>{{ @$rowBrgBerbahaya->nama_kemasan }}</td>
                  <td>{{ @$rowBrgBerbahaya->kelas_bb }}</td>
                  <td>{{ @$rowBrgBerbahaya->jumlah_muatan }}</td>
                  <td>{{ @$rowBrgBerbahaya->satuan }}</td>
                  <td>{{ @$rowBrgBerbahaya->nama_jenis_barang }}</td>
                  <td>{{ @$rowBrgBerbahaya->nama_type_barang }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>


          <div class="mt-8">
            <div class="grid grid-cols-2">
              <!-- <div class="text-left font-semibold">Manifest Bongkar/Muat Barang Tercemar</div> -->

              <div class="text-left font-semibold mt-4">Manifest Barang Tercemar</div>
            </div>
            <div class="">
              <form action="./pengajuan-pkk/manifest-barang-tercemar/save" method="post" enctype="multipart/form-data" id="form-manifest-barang-tercemar">

                <input type="hidden" name="pelayanan_kapal_id" value="{{ @$_GET['id'] }}">
                <table class="table w-full mt-1">
                  <thead>
                    <tr class="bg-gray-300 to-primary text-slate-900">
                      <th class="py-2" rowspan="2">NO</th>
                      <th class="w-[700px]" rowspan="2">JENIS</th>
                      <th colspan="2">KAPASITAS</th>
                      <th colspan="2">BONGKAR</th>
                      <th colspan="2">SIMPAN</th>
                    </tr>
                    <tr class="bg-gray-300 to-primary text-slate-900">
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
                      <td><input type="text" name="anex1_kapasitas_kg" value="{{ @$dataBrgTercemar->anex1_kapasitas_kg }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="anex1_kapasitas_metrik" value="{{ @$dataBrgTercemar->anex1_kapasitas_metrik }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="anex1_bongkar_kg" value="{{ @$dataBrgTercemar->anex1_bongkar_kg }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="anex1_bongkar_metrik" value="{{ @$dataBrgTercemar->anex1_bongkar_metrik }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="anex1_simpan_kg" value="{{ @$dataBrgTercemar->anex1_simpan_kg }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="anex1_simpan_metrik" value="{{ @$dataBrgTercemar->anex1_simpan_metrik }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    </tr>
                    <tr class="border-b-2 border-solid border-slate-200">
                      <td class="text-center">2</td>
                      <td>ANNEX II : Limbah berupa material cair berbahaya dalam bentuk curah</td>
                      <td><input type="text" name="anex2_kapasitas_kg" value="{{ @$dataBrgTercemar->anex2_kapasitas_kg }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="anex2_kapasitas_metrik" value="{{ @$dataBrgTercemar->anex2_kapasitas_metrik }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="anex2_bongkar_kg" value="{{ @$dataBrgTercemar->anex2_bongkar_kg }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="anex2_bongkar_metrik" value="{{ @$dataBrgTercemar->anex2_bongkar_metrik }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="anex2_simpan_kg" value="{{ @$dataBrgTercemar->anex2_simpan_kg }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="anex2_simpan_metrik" value="{{ @$dataBrgTercemar->anex2_simpan_metrik }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    </tr>
                    <tr class="border-b-2 border-solid border-slate-200">
                      <td class="text-center">3</td>
                      <td>ANNEX III : Limbah berupa barang berbahaya dalam kemasan</td>
                      <td><input type="text" name="anex3_kapasitas_kg" value="{{ @$dataBrgTercemar->anex3_kapasitas_kg }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="anex3_kapasitas_metrik" value="{{ @$dataBrgTercemar->anex3_kapasitas_metrik }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="anex3_bongkar_kg" value="{{ @$dataBrgTercemar->anex3_bongkar_kg }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="anex3_bongkar_metrik" value="{{ @$dataBrgTercemar->anex3_bongkar_metrik }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="anex3_simpan_kg" value="{{ @$dataBrgTercemar->anex3_simpan_kg }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="anex3_simpan_metrik" value="{{ @$dataBrgTercemar->anex3_simpan_metrik }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    </tr>
                    <tr class="border-b-2 border-solid border-slate-200">
                      <td class="text-center">4</td>
                      <td>ANNEX IV : Limbah berupa kotoran, limbah cair domestik</td>
                      <td><input type="text" name="anex4_kapasitas_kg" value="{{ @$dataBrgTercemar->anex4_kapasitas_kg }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="anex4_kapasitas_metrik" value="{{ @$dataBrgTercemar->anex4_kapasitas_metrik }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="anex4_bongkar_kg" value="{{ @$dataBrgTercemar->anex4_bongkar_kg }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="anex4_bongkar_metrik" value="{{ @$dataBrgTercemar->anex4_bongkar_metrik }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="anex4_simpan_kg" value="{{ @$dataBrgTercemar->anex4_simpan_kg }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="anex4_simpan_metrik" value="{{ @$dataBrgTercemar->anex4_simpan_metrik }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    </tr>
                    <tr class="border-b-2 border-solid border-slate-200">
                      <td class="text-center">5</td>
                      <td>ANNEX V : Limbah berupa sampah</td>
                      <td><input type="text" name="anex5_kapasitas_kg" value="{{ @$dataBrgTercemar->anex5_kapasitas_kg }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="anex5_kapasitas_metrik" value="{{ @$dataBrgTercemar->anex5_kapasitas_metrik }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="anex5_bongkar_kg" value="{{ @$dataBrgTercemar->anex5_bongkar_kg }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="anex5_bongkar_metrik" value="{{ @$dataBrgTercemar->anex5_bongkar_metrik }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="anex5_simpan_kg" value="{{ @$dataBrgTercemar->anex5_simpan_kg }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="anex5_simpan_metrik" value="{{ @$dataBrgTercemar->anex5_simpan_metrik }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    </tr>
                    <tr class="border-b-2 border-solid border-slate-200">
                      <td class="text-center">6</td>
                      <td>ANNEX VI : Limbah berupa perusak ozon</td>
                      <td><input type="text" name="anex6_kapasitas_kg" value="{{ @$dataBrgTercemar->anex6_kapasitas_kg }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="anex6_kapasitas_metrik" value="{{ @$dataBrgTercemar->anex6_kapasitas_metrik }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="anex6_bongkar_kg" value="{{ @$dataBrgTercemar->anex6_bongkar_kg }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="anex6_bongkar_metrik" value="{{ @$dataBrgTercemar->anex6_bongkar_metrik }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="anex6_simpan_kg" value="{{ @$dataBrgTercemar->anex6_simpan_kg }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="anex6_simpan_metrik" value="{{ @$dataBrgTercemar->anex6_simpan_metrik }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    </tr>
                    <tr class="border-b-2 border-solid border-slate-200">
                      <td class="text-center">7</td>
                      <td>Sampah Elektronik</td>
                      <td><input type="text" name="se_kapasitas_kg" value="{{ @$dataBrgTercemar->se_kapasitas_kg }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="se_kapasitas_metrik" value="{{ @$dataBrgTercemar->se_kapasitas_metrik }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="se_bongkar_kg" value="{{ @$dataBrgTercemar->se_bongkar_kg }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="se_bongkar_metrik" value="{{ @$dataBrgTercemar->se_bongkar_metrik }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="se_simpan_kg" value="{{ @$dataBrgTercemar->se_simpan_kg }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                      <td><input type="text" name="se_simpan_metrik" value="{{ @$dataBrgTercemar->se_simpan_metrik }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[150px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    </tr>
                    <tr>
                      <td class="text-center">8</td>
                      <td>Attachment</td>
                      <td colspan="6">
                        <div class="flex">

                          @if(@$dataBrgTercemar->nama_file)
                          <div class="pt-5">

                            <a href="{{ url('/') }}/{{ @$dataBrgTercemar->nama_file }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Download</a>
                          </div>
                          @endif
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </form>
            </div>

          </div>


          <!-- . DATA MANIFEST BONGKAR MUAT -->

        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
          <!-- DOKUMEN KAPAL -->

          <div>
            <h3>PELABUHAN ASAL / TUJUAN</h3>
            <center>
              <div>

                <table class="table mt-1">
                  <thead>
                    <tr class="bg-gray-300 to-primary text-slate-900">
                      <th class="py-2">NO</th>
                      <th>JENIS INFORMASI</th>
                      <th class="w-[400px]">DATA INFORMASI</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">1</td>
                      <td>PELABUHAN ASAL</td>
                      <td>
                        <select name="pelabuhan_asal" class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          <option value="">-= Pilih Pelabuhan =-</option>
                          @foreach($dataPelabuhan as $rowPelabuhan)
                          <option value="{{ @$rowPelabuhan->pelabuhan_id }}" {{ @$data->pelabuhan_asal==@$rowPelabuhan->pelabuhan_id?"selected":"" }}>{{ @$rowPelabuhan->nama_pelabuhan }}</option>
                          @endforeach
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">2</td>
                      <td>WAKTU TIBA</td>
                      <td><input name="waktu_tiba" type="datetime-local" value="{{ @$data->waktu_tiba }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    </tr>
                    <tr>
                      <td class="text-center">3</td>
                      <td>WAKTU KEBERANGKATAN</td>
                      <td><input name="waktu_berangkat" type="datetime-local" value="{{ @$data->waktu_berangkat }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                    </tr>
                    <tr>
                      <td class="text-center">4</td>
                      <td>PERMINTAAN LOKASI LAMBAT DAN LABUH</td>
                      <td>
                        <select name="permintaan_lokasi_tambat" class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          <option value="">-= Pilih Dermaga =-</option>
                          @foreach($dataDermaga as $rowDermaga)
                          <option value="{{ @$rowDermaga->lokasi_dermaga_id  }}" {{ @$data->permintaan_lokasi_tambat==@$rowPelabuhan->lokasi_dermaga_id?"selected":"" }}>{{ @$rowDermaga->nama_dermaga }}</option>
                          @endforeach
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">5</td>
                      <td>PELABUHAN TUJUAN</td>
                      <td>
                        <select name="pelabuhan_tujuan" class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          <option value="">-= Pilih Pelabuhan =-</option>
                          @foreach($dataPelabuhan as $rowPelabuhan)
                          <option value="{{ @$rowPelabuhan->pelabuhan_id }}" {{ @$data->pelabuhan_tujuan==@$rowPelabuhan->pelabuhan_id?"selected":"" }}>{{ @$rowPelabuhan->nama_pelabuhan }}</option>
                          @endforeach
                        </select>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

            </center>
          </div>

          <div class="mt-8">
            <div class="grid grid-cols-2">
              <div class="text-left">Dokumen Kapal</div>
              
            </div>
            <table class="border-solid border-2 border-slate-800 mt-1 w-full">
              <thead>
                <tr class="bg-gray-300 to-primary text-slate-900">
                  <th class="py-2">NO</th>
                  <th>JENIS DOKUMEN</th>
                  <th>NO DOKUMEN</th>
                  <th>TEMPAT DIKELUARKAN</th>
                  <th>TANGGAL DOKUMEN</th>
                  <th>NAMA DOKUMEN</th>
                </tr>
              </thead>
              <tbody>
                @foreach(@$dataDokumen as $rowDokumen)
                <tr class="hover:bg-slate-200">
                  <td class="text-center py-4">{{ $loop->index+1 }}</td>
                  <td class="text-center">{{ @$rowDokumen->jenis_dokumen }}</td>
                  <td>{{ @$rowDokumen->no_dokumen }}</td>
                  <td>{{ @$rowDokumen->tempat_dikeluarkan }}</td>
                  <td>{{ @$rowDokumen->tgl_dikeluarkan }}</td>
                  <td>{{ @$rowDokumen->nama_dokumen }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>



          <!-- . DOKUMEN KAPAL -->
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts2" role="tabpanel" aria-labelledby="contacts-tab2">

          <!-- BONGKAR MUAT -->
          <h3 class="font-semibold">BONGKAR MUAT</h3>
          <form action="./pengajuan-pkk/bongkar-muat/save" method="post">
            <input type="hidden" name="pelayanan_kapal_id" value="{{ @$_GET['id'] }}">
            <div class="">

              <div class="w-[500px] float-left">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">BARANG MAYORITAS / BARANG TERBANYAK DIATAS KAPAL</label>
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="jenis_barang_mayoritas">
                  <option value="">-= Pilih Barang =-</option>
                  @foreach($dataBarang as $rowBarang)
                  <option value="{{ @$rowBarang->ref_barang_id }}" {{ @$dataMuat->jenis_barang_mayoritas==@$rowBarang->ref_barang_id?"selected":"" }}>{{ @$rowBarang->detail_data }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="h-20">

            </div>

            <div>
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
                          <td><input type="text" value="{{ @$dataMuat->tonase_40_feet_isi }}" name="tonase_40_feet_isi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="">Jumlah Box <br> kontainer 40 feet isi </td>
                          <td><input type="text" value="{{ @$dataMuat->box_40_feet_isi }}" name="box_40_feet_isi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                        </tr>
                        <tr>
                          <td class="py-4">Jumlah Tonase <br> kontainer 20 feet isi </td>
                          <td><input type="text" value="{{ @$dataMuat->tonase_20_feet_isi }}" name="tonase_20_feet_isi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="">Jumlah Box <br> kontainer 20 feet isi </td>
                          <td><input type="text" value="{{ @$dataMuat->box_20_feet_isi }}" name="box_20_feet_isi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                        </tr>
                        <tr>
                          <td class="py-4">Jumlah Tonase <br> kontainer 45 feet isi </td>
                          <td><input type="text" value="{{ @$dataMuat->tonase_45_feet_isi }}" name="tonase_45_feet_isi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="">Jumlah Box <br> kontainer 45 feet isi </td>
                          <td><input type="text" value="{{ @$dataMuat->box_45_feet_isi }}" name="box_45_feet_isi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
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
                          <td><input type="text" value="{{ @$dataMuat->tonase_40_feet_kosong }}" name="tonase_40_feet_kosong" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="">Jumlah Box <br> kontainer 40 feet kosong </td>
                          <td><input type="text" value="{{ @$dataMuat->box_40_feet_kosong }}" name="box_40_feet_kosong" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                        </tr>
                        <tr>
                          <td class="py-4">Jumlah Tonase <br> kontainer 20 feet kosong </td>
                          <td><input type="text" value="{{ @$dataMuat->tonase_20_feet_kosong }}" name="tonase_20_feet_kosong" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="">Jumlah Box <br> kontainer 20 feet kosong </td>
                          <td><input type="text" value="{{ @$dataMuat->box_20_feet_kosong }}" name="box_20_feet_kosong" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                        </tr>
                        <tr>
                          <td class="py-4">Jumlah Tonase <br> kontainer 45 feet kosong </td>
                          <td><input type="text" value="{{ @$dataMuat->tonase_45_feet_kosong }}" name="tonase_45_feet_kosong" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="">Jumlah Box <br> kontainer 45 feet kosong </td>
                          <td><input type="text" value="{{ @$dataMuat->box_45_feet_kosong }}" name="box_45_feet_kosong" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
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
                          <td><input type="text" value="{{ @$dataMuat->tonase_kargo_brg_campur }}" name="tonase_kargo_brg_campur" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="">Jumlah Tonase Cargo <br> barang Karung </td>
                          <td><input type="text" value="{{ @$dataMuat->tonase_kargo_brg_karung }}" name="tonase_kargo_brg_karung" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                        </tr>
                        <tr>
                          <td class="py-4">Jumlah Tonase Cargo <br> barang Curah </td>
                          <td><input type="text" value="{{ @$dataMuat->tonase_kargo_brg_curah }}" name="tonase_kargo_brg_curah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="">Jumlah Tonase Cargo <br> barang Cair </td>
                          <td><input type="text" value="{{ @$dataMuat->tonase_kargo_brg_cair }}" name="tonase_kargo_brg_cair" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                        </tr>
                        <tr>
                          <td class="py-4">Jumlah Tonase Cargo <br> barang Berbahaya </td>
                          <td><input type="text" value="{{ @$dataMuat->tonase_kargo_brg_berbahaya }}" name="tonase_kargo_brg_berbahaya" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
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
                          <td><input type="text" value="{{ @$dataMuat->roda_dua }}" name="roda_dua" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="text-left">UNIT </td>
                        </tr>
                        <tr>
                          <td class="py-4">RODA EMPAT</td>
                          <td><input type="text" value="{{ @$dataMuat->roda_empat }}" name="roda_empat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="">UNIT </td>
                        </tr>
                        <tr>
                          <td class="py-4">BUS</td>
                          <td><input type="text" value="{{ @$dataMuat->bus }}" name="bus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="text-left">UNIT </td>
                        </tr>
                        <tr>
                          <td class="py-4">TRUK</td>
                          <td><input type="text" value="{{ @$dataMuat->truk }}" name="truk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="text-left">UNIT </td>
                        </tr>
                        <tr>
                          <td class="py-4">ALAT BERAT</td>
                          <td><input type="text" value="{{ @$dataMuat->alat_berat }}" name="alat_berat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
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
                          <td><input type="text" value="{{ @$dataBongkar->tonase_40_feet_isi2}}" name="tonase_40_feet_isi2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="">Jumlah Box <br> kontainer 40 feet isi </td>
                          <td><input type="text" value="{{ @$dataBongkar->box_40_feet_isi }}" name="box_40_feet_isi2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                        </tr>
                        <tr>
                          <td class="py-4">Jumlah Tonase <br> kontainer 20 feet isi </td>
                          <td><input type="text" value="{{ @$dataBongkar->tonase_20_feet_isi }}" name="tonase_20_feet_isi2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="">Jumlah Box <br> kontainer 20 feet isi </td>
                          <td><input type="text" value="{{ @$dataBongkar->box_20_feet_isi }}" name="box_20_feet_isi2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                        </tr>
                        <tr>
                          <td class="py-4">Jumlah Tonase <br> kontainer 45 feet isi </td>
                          <td><input type="text" value="{{ @$dataBongkar->tonase_45_feet_isi }}" name="tonase_45_feet_isi2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="">Jumlah Box <br> kontainer 45 feet isi </td>
                          <td><input type="text" value="{{ @$dataBongkar->box_45_feet_isi }}" name="box_45_feet_isi2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
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
                          <td><input type="text" value="{{ @$dataBongkar->tonase_40_feet_kosong }}" name="tonase_40_feet_kosong2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="">Jumlah Box <br> kontainer 40 feet kosong </td>
                          <td><input type="text" value="{{ @$dataBongkar->box_40_feet_kosong }}" name="box_40_feet_kosong2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                        </tr>
                        <tr>
                          <td class="py-4">Jumlah Tonase <br> kontainer 20 feet kosong </td>
                          <td><input type="text" value="{{ @$dataBongkar->tonase_20_feet_kosong }}" name="tonase_20_feet_kosong2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="">Jumlah Box <br> kontainer 20 feet kosong </td>
                          <td><input type="text" value="{{ @$dataBongkar->box_20_feet_kosong }}" name="box_20_feet_kosong2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                        </tr>
                        <tr>
                          <td class="py-4">Jumlah Tonase <br> kontainer 45 feet kosong </td>
                          <td><input type="text" value="{{ @$dataBongkar->tonase_45_feet_kosong }}" name="tonase_45_feet_kosong2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="">Jumlah Box <br> kontainer 45 feet kosong </td>
                          <td><input type="text" value="{{ @$dataBongkar->box_45_feet_kosong }}" name="box_45_feet_kosong2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
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
                          <td><input type="text" value="{{ @$dataBongkar->tonase_kargo_brg_campur }}" name="tonase_kargo_brg_campur2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="">Jumlah Tonase Cargo <br> barang Karung </td>
                          <td><input type="text" value="{{ @$dataBongkar->tonase_kargo_brg_karung }}" name="tonase_kargo_brg_karung2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                        </tr>
                        <tr>
                          <td class="py-4">Jumlah Tonase Cargo <br> barang Curah </td>
                          <td><input type="text" value="{{ @$dataBongkar->tonase_kargo_brg_curah }}" name="tonase_kargo_brg_curah2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="">Jumlah Tonase Cargo <br> barang Cair </td>
                          <td><input type="text" value="{{ @$dataBongkar->tonase_kargo_brg_cair }}" name="tonase_kargo_brg_cair2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                        </tr>
                        <tr>
                          <td class="py-4">Jumlah Tonase Cargo <br> barang Berbahaya </td>
                          <td><input type="text" value="{{ @$dataBongkar->tonase_kargo_brg_berbahaya }}" name="tonase_kargo_brg_berbahaya2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[100px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
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
                          <td><input type="text" value="{{ @$dataBongkar->roda_dua }}" name="roda_dua2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="text-left">UNIT </td>
                        </tr>
                        <tr>
                          <td class="py-4">RODA EMPAT</td>
                          <td><input type="text" value="{{ @$dataBongkar->roda_empat }}" name="roda_empat2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="">UNIT </td>
                        </tr>
                        <tr>
                          <td class="py-4">BUS</td>
                          <td><input type="text" value="{{ @$dataBongkar->bus }}" name="bus2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="text-left">UNIT </td>
                        </tr>
                        <tr>
                          <td class="py-4">TRUK</td>
                          <td><input type="text" value="{{ @$dataBongkar->truk }}" name="truk2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="text-left">UNIT </td>
                        </tr>
                        <tr>
                          <td class="py-4">ALAT BERAT</td>
                          <td><input type="text" value="{{ @$dataBongkar->alat_berat }}" name="alat_berat2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
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
                          <td><input type="text" value="{{ @$dataMuat->jenis_brg_lain }}" name="jenis_brg_lain" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="text-left">TON </td>
                        </tr>
                        <tr>
                          <td class="py-4">Jumlah Tonase yang dimuat</td>
                          <td><input type="text" value="{{ @$dataMuat->tonase_brg_lain }}" name="tonase_brg_lain" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="">TON </td>
                        </tr>
                        <tr>
                          <td class="py-4">Jumlah Total Tonase yang dimuat</td>
                          <td><input type="text" value="{{ @$dataMuat->total_tonase_brg_lain }}" name="total_tonase_brg_lain" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="text-left">TON </td>
                        </tr>
                        <tr>
                          <td class="py-4">Jumlah Penumpang yang naik</td>
                          <td><input type="text" value="{{ @$dataMuat->jlh_penumpang }}" name="jlh_penumpang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="text-left">ORANG </td>
                        </tr>
                        <tr>
                          <td class="py-4">Jumlah Hewan yang dimuat</td>
                          <td><input type="text" value="{{ @$dataMuat->jlh_hewan }}" name="jlh_hewan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
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
                          <td><input type="text" value="{{ @$dataBongkar->jenis_brg_lain }}" name="jenis_brg_lain2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="text-left">TON </td>
                        </tr>
                        <tr>
                          <td class="py-4">Jumlah Tonase yang dimuat</td>
                          <td><input type="text" value="{{ @$dataBongkar->tonase_brg_lain }}" name="tonase_brg_lain2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="">TON </td>
                        </tr>
                        <tr>
                          <td class="py-4">Jumlah Total Tonase yang dimuat</td>
                          <td><input type="text" value="{{ @$dataBongkar->total_tonase_brg_lain }}" name="total_tonase_brg_lain2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="text-left">TON </td>
                        </tr>
                        <tr>
                          <td class="py-4">Jumlah Penumpang yang naik</td>
                          <td><input type="text" value="{{ @$dataBongkar->jlh_penumpang }}" name="jlh_penumpang2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="text-left">ORANG </td>
                        </tr>
                        <tr>
                          <td class="py-4">Jumlah Hewan yang dimuat</td>
                          <td><input type="text" value="{{ @$dataBongkar->jlh_hewan }}" name="jlh_hewan2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
                          <td class="text-left">EKOR </td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </form>

          <!-- . BONGKAR MUAT -->
        </div>
      </div>

    </div>
  </div>



</div>



@endsection

@section('script')


<script>
  let pelayanan_kapal_id = '{{ @$_GET["id"] }}';
  $(document).ready(function() {
    loadPBM()

  });


  function loadPBM() {

    $.when(sendAjax('{{ URL::to("") }}/api/pelayanan-kapal/pengajuan-pkk/get/pbm', {
      pelayanan_kapal_id: pelayanan_kapal_id
    }, 'get')).done(function(res) {
      if (res.status) {

        $('#table-pbm > tbody ').empty();
        for (let i = 0; i < res.data.length; i++) {
          $('#table-pbm > tbody ').append("<tr><td class='text-center'>" + (i + 1) + "</td><td>" + res.data[i]["nama_perusahaan"] + "</td><td>" + res.data[i]["type_pbm"] + "</td><td>" + res.data[i]["kegiatan"] + "</td></tr>")
        }
      } else {
        pesanSweet('Gagal!', res.pesan, 'warning');
      }
    });
  }

  // . PMB

</script>


@endsection