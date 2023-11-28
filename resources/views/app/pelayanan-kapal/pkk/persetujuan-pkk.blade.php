@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<div class="">

  <div class="text-2xl ">Pelayanan Kapal / FORM PERSETUJUAN PKK</div>
  <hr class="border-b-2 border-black border-solid">

  <div class=" mb-3 py-8">

    <div class="px-8 py-5 border-2 border-solid border-slate-800 bg-white">
      <div  class="text-right">Tgl Permohonan: {{@$data[0]->tanggal_registrasi_permohonan}}</div>

      <div class="grid grid-cols-2 gap-3">
        <div>
          <table>
            <tbody>
              <tr>
                <td>No</td>
                <td>:</td>
                <td>{{@$data[0]->no_pkk}}</td>
              </tr>
              <tr>
                <td>Klasifikasi</td>
                <td>:</td>
                <td></td>
              </tr>
              <tr>
                <td>Lampiran</td>
                <td>:</td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="text-right">
          Yth. Kepala kantor
        </div>
      </div>

      <div class="mt-10">
        <table>
          <tbody>
            <tr>
              <td>Prihal</td>
              <td>:</td>
            </tr>
          </tbody>
        </table>
      </div>


      <div>
        <div>Menunjuk permenhub no. PM 23 Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique vel dolor unde modi incidunt blanditiis aut necessitatibus sed ad consectetur.</div>
        <table class="w-full">
          <tbody>
            <tr>
              <td class="w-5">1</td>
              <td class="w-[400px]">Nama Kapal</td>
              <td class="w-2">:</td>
              <td class="">{{@$data[0]->nama_kapal}}</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Bendahara/IMO</td>
              <td>:</td>
              <td>{{@$data[0]->imo}}</td>
            </tr>
            <tr>
              <td>3</td>
              <td>DWT/GT/Jenis Kapal</td>
              <td>:</td>
              <td>{{@$data[0]->jenis_kapal}}</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Draft</td>
              <td>:</td>
              <td>{{@$data[0]->draft_muka}}</td>
            </tr>
            <tr>
              <td>5</td>
              <td>LOA</td>
              <td>:</td>
              <td>{{@$data[0]->loa_kapal}}</td>
            </tr>
            <tr>
              <td>6</td>
              <td>Pemilik</td>
              <td>:</td>
              <td>{{@$data[0]->siupal_pemilik}}</td>
            </tr>
            <tr>
              <td>7</td>
              <td>Nama Agen</td>
              <td>:</td>
              <td>{{@$data[0]->nama_agen}}</td>
            </tr>
            <tr>
              <td>8</td>
              <td>Trayek</td>
              <td>:</td>
              <td>{{@$dataTrayek[0]->trayek}}</td>
            </tr>
            <tr>
              <td>9</td>
              <td>Jenis Pelayaran</td>
              <td>:</td>
              <td></td>
            </tr>
            <tr>
              <td>10</td>
              <td>ETA/ETD</td>
              <td>:</td>
              <td></td>
            </tr>
            <tr>
              <td>11</td>
              <td>Pelabuhan Asal/Tujuan</td>
              <td>:</td>
              <td></td>
            </tr>
            <tr>
              <td>12</td>
              <td>Posisi Kapal Sekarang</td>
              <td>:</td>
              <td></td>
            </tr>
            <tr>
              <td>13</td>
              <td>Tambat / Labuh yang diminta</td>
              <td>:</td>
              <td>{{@$data[0]->siupal_pemilik}}</td>
            </tr>
            <tr>
              <td>14</td>
              <td>Jenis Barang yang akan di:</td>
              <td>:</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td colspan="3">
                <table class="w-full">
                  <tbody>
                    <tr>
                      <td rowspan="3" class="align-top">a. Muat</td>
                      <td colspan="4">1. Non Kontainer</td>
                    </tr>
                    <tr>
                      <td colspan="2" class="align-top">2. Kontainer</td>
                      <td>Tonase</td>
                      <td>Box</td>
                    </tr>
                    <tr>
                      <td class="w-[200px]"></td>
                      <td class="border-2 border-slate-600 border-solid">
                        <div>Isi 20/40/60</div>
                        <div>Kosong 20/45/60</div>
                      </td>
                      <td class="border-2 border-slate-600 border-solid"></td>
                      <td class="border-2 border-slate-600 border-solid"></td>
                    </tr>

                    <tr>
                      <td rowspan="3" class="align-top">b. Bongkar</td>
                      <td colspan="4">1. Non Kontainer</td>
                    </tr>
                    <tr>
                      <td colspan="2" class="align-top">2. Kontainer</td>
                      <td>Tonase</td>
                      <td>Box</td>
                    </tr>
                    <tr>
                      <td class="w-[200px]"></td>
                      <td class="border-2 border-slate-600 border-solid">
                        <div>Isi 20/40/60</div>
                        <div>Kosong 20/45/60</div>
                      </td>
                      <td class="border-2 border-slate-600 border-solid"></td>
                      <td class="border-2 border-slate-600 border-solid"></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
            <tr>
              <td>15</td>
              <td>PMB yang Ditunjuk</td>
              <td>:</td>
              <td></td>
            </tr>
            <tr>
              <td>16</td>
              <td>Rencana Kerja Bongkar Muat</td>
              <td>:</td>
              <td></td>
            </tr>
            <tr>
              <td>17</td>
              <td>Jenis Barang yang sesuai manifest</td>
              <td>:</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td colspan="3">
                <div class="min-h-[200px]">No Uraian</div>
              </td>
            </tr>
            <tr>
              <td>18</td>
              <td>Nama CSO</td>
              <td>:</td>
              <td>{{@$data[0]->nama_cso}}</td>
            </tr>
            <tr>
              <td>19</td>
              <td>Nomor Telpon CSO</td>
              <td>:</td>
              <td>{{@$data[0]->no_telp_cso}}</td>
            </tr>
          </tbody>
        </table>

      </div>

      <div class="ml-10 mt-16">
        <!-- <div>Dokumen Kelengkapan</div> -->
        <table class="w-[350px]">
          <tbody>
            <tr>
              <td colspan="2" class="text-center h-16"> Dokumen Kelengkapan</td>
            </tr>
            <tr>
              <td>No</td>
              <td>Daftar Syarat Kelengkapan Dokumen</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Dokumen Keagenan @if(@$data[0]->file_dokumen_keagenan)<span class="font-bold text-red-500 italic"> Terlampir </span> @endif</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Manifest Bongkat Muat @if(@$data[0]->file_manifest_bongkar_muat)<span class="font-bold text-red-500 italic"> Terlampir </span> @endif</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Manifest Barang Berbahaya @if(@$data[0]->file_manifest_barang_berbahaya)<span class="font-bold text-red-500 italic"> Terlampir </span> @endif</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Manifest Barang Khusus @if(@$data[0]->file_manifest_barang_khusus)<span class="font-bold text-red-500 italic"> Terlampir </span> @endif</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Storage Plan</td>
            </tr>
            <tr>
              <td>6</td>
              <td>Penumpang @if(@$data[0]->file_manifest_penumpang)<span class="font-bold text-red-500 italic"> Terlampir </span> @endif</td>
            </tr>
          </tbody>
        </table>

        <table class="w-full mt-12">
          <thead>
            <tr class="bg-gray-300 text-black">
              <th>No</th>
              <th>Nama Barang</th>
              <th>Jenis Barang</th>
              <th>Unit / Ton / M3</th>
              <th>No BL</th>
              <th>Shipper</th>
              <th>Consigne</th>
              <th>B/M</th>
            </tr>
          </thead>
          <tbody>
            @foreach(@$dataRkbmBarang as $keyRkbmBarang => $valueRkbmBarang)
              <tr>
                <td class="text-center">{{@$keyRkbmBarang + 1}}</td>
                <td>{{@$valueRkbmBarang->nama_barang}}</td>
                <td>{{@$valueRkbmBarang->jenis_kegiatan}}</td>
                <td>{{@$valueRkbmBarang->jlh_satuan_unit}}/{{@$valueRkbmBarang->jlh_satuan_ton}}/{{@$valueRkbmBarang->jlh_satuan_metrik}}</td>
                <td>{{@$valueRkbmBarang->no_bl}}</td>
                <td>{{@$valueRkbmBarang->npwp_shipper_pbm_jpt}}</td>
                <td>{{@$valueRkbmBarang->consigne}}</td>
                <td></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>

    </div>


  </div>

  <div class=" ml-10 mb-10">
    {{-- <div class="flex-none">
      <div>
        <label>Alasan :</label>
      </div>
      <textarea class="rounded w-[400px] border-slate-300 focus:border-none"  rows="3"></textarea>
    </div> --}}
    <div class="flex gap-4">
      <form action="{{url($user.'/pelayanan-kapal/verifikasi-pkk/setuju')}}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{@$data[0]->pelayanan_kapal_id}}">
        <input type="hidden" name="user" value="{{@$user}}">
        <button type="submit" class="text-base bg-blue-600 text-blue-100 px-6 py-1 rounded hover:opacity-80">Setuju</button>
      </form>
      {{-- <button class="text-base bg-orange-600 text-orange-100 px-6 py-1 rounded hover:opacity-80">Revisi</button> --}}
      <form action="{{url($user.'/pelayanan-kapal/verifikasi-pkk/tolak')}}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{@$data[0]->pelayanan_kapal_id}}">
        <input type="hidden" name="user" value="{{@$user}}">
        <button class="text-base bg-red-600 text-red-100 px-6 py-1 rounded hover:opacity-80">Tolak</button>
      </form>
    </div>
  </div>



</div>



@endsection

@section('script')



@endsection