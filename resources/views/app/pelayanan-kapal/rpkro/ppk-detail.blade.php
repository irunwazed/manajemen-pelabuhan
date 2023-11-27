@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<div class="">

  <div class="text-2xl ">Pelayanan Kapal / PPK / Verifikasi</div>
  <hr class="border-b-2 border-black border-solid">

  <div class=" mb-3 py-8">
    <h2 class="text-2xl font-bold mt-10 mb-7">INFORMASI PENETAPAN PELAYANAN KAPAL (PPK)</h2>

    <div class="px-8 py-5 border-2 border-solid border-slate-800 bg-white mx-2">

      <h3 class="my-3 text-lg font-bold">No PKK</h3>
      <div class="grid grid-cols-2">
        <div>
          <table class="w-full">
            <tbody>
              <tr>
                <td class="w-40">NOMOR RPKRO</td>
                <td class="w-1">:</td>
                <td>{{ @$data->no_rpkro }}</td>
              </tr>
              <tr>
                <td>LOKASI AWAL</td>
                <td>:</td>
                <td>{{ @$data->lokasi_pelabuhan_asal }}</td>
              </tr>
              <tr>
                <td>WAKTU RENCANA</td>
                <td>:</td>
                <td>{{ @$data->waktu_rencana }}</td>
              </tr>
              <tr>
                <td>TYPE KAPAL</td>
                <td>:</td>
                <td></td>
              </tr>
            </tbody>
          </table>

        </div>
        <div>

          <table class="w-full">
            <tbody>
              <tr>
                <td class="w-40">PELABUHAN</td>
                <td class="w-1">:</td>
                <td>{{ @$data->nama_pelabuhan_asal }}</td>
              </tr>
              <tr>
                <td>LOKASI TUJUAN</td>
                <td>:</td>
                <td>{{ @$data->lokasi_pelabuhan_tujuan }}</td>
              </tr>
              <tr>
                <td>DWT / LOA / GRT</td>
                <td>:</td>
                <td>{{ @$data->dwt_kapal }} / {{ @$data->loa_kapal }} / {{ @$data->grt_kapal }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="mt-8">
        <h3 class="text-md font-bold">DETAIL OPERASI RPKRO</h3>
        <table class="table w-full">
          <thead>
            <tr class="bg-gray-300 text-black">
              <th>NO</th>
              <th>NO PBM BONGKAR</th>
              <th>NO PBM MUAT</th>
              <th>NAMA KAPAL</th>
              <th>NAMA AGEN</th>
              <th>MULAI</th>
              <th>SELESAI</th>
              <th>METER AWAL</th>
              <th>METER SELESAI</th>
            </tr>
          </thead>
          <tbody>
            @foreach(@$dataRPKRO as $row)
            @if(($loop->index) %2 == 0)
            <tr class="border-solid border-1 border-slate-800 hover:bg-slate-300">
              @else
            <tr class="border-solid border-1 border-slate-800 bg-slate-200 hover:bg-slate-300">
              @endif
              <td class="text-center">{{ $loop->index+1 }}</td>
              <td>{{ @$row->nama_barang }}</td>
              <td>{{ @$row->jenis_kegiatan }}</td>
              <td>{{ @$row->jlh_satuan_unit }} Unit / {{ @$row->jlh_satuan_ton }} Ton / {{ @$row->jlh_satuan_metrik }} Metrik</td>
              <td>{{ @$row->no_bl }}</td>
              <td>{{ @$row->npwp_shipper_pbm_jpt }}</td>
              <td>{{ @$row->consigne }}</td>
              <td>{{ @$row->jenis_kegiatan=="BONGKAR"?"B":"M" }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <div class="mt-8">
        <h3 class="text-md font-bold">DATA BARANG</h3>
        <table class="table w-full">
          <thead>
            <tr class="bg-gray-300 text-black">
              <th>NO</th>
              <th>NAMA BARANG</th>
              <th>JENIS BARANG</th>
              <th>UNIT/TON/METRIK</th>
              <th>NO BL</th>
              <th>SIPPER</th>
              <th>CONSIGNE</th>
              <th>B/M</th>
            </tr>
          </thead>
          <tbody>
            @foreach(@$dataBarang as $row)
            @if(($loop->index) %2 == 0)
            <tr class="border-solid border-1 border-slate-800 hover:bg-slate-300">
              @else
            <tr class="border-solid border-1 border-slate-800 bg-slate-200 hover:bg-slate-300">
              @endif
              <td class="text-center">{{ $loop->index+1 }}</td>
              <td>{{ @$row->nama_barang }}</td>
              <td>{{ @$row->jenis_kegiatan }}</td>
              <td>{{ @$row->jlh_satuan_unit }} Unit / {{ @$row->jlh_satuan_ton }} Ton / {{ @$row->jlh_satuan_metrik }} Metrik</td>
              <td>{{ @$row->no_bl }}</td>
              <td>{{ @$row->npwp_shipper_pbm_jpt }}</td>
              <td>{{ @$row->consigne }}</td>
              <td>{{ @$row->jenis_kegiatan=="BONGKAR"?"B":"M" }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

    </div>
  </div>

  @if(@$_GET['status'] == "edit")
  <div class=" ml-10 mb-10">
    <div class="flex gap-4">
      <a href="./detail/verifikasi?verifikasi=setuju&id={{ @$_GET['id'] }}"  class="text-base bg-blue-600 text-blue-100 px-6 py-1 rounded hover:opacity-80">Setuju</a>
      <a href="./detail/verifikasi?verifikasi=tidak&id={{ @$_GET['id'] }}" class="text-base bg-red-600 text-red-100 px-6 py-1 rounded hover:opacity-80">Tolak</a>
    </div>
  </div>
  @endif


</div>



@endsection

@section('script')



@endsection