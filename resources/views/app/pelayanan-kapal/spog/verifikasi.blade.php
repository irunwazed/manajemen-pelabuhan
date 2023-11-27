@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<div class="">

  <div class="text-2xl ">Pelayanan Kapal / Verifikasi SPOG</div>
  <hr class="border-b-2 border-black border-solid">

  <div class=" mb-3 py-8">
    <h2 class="text-2xl font-bold mt-10 mb-7">VERIFIKASI SURAT PERSETUJUAN OLAH GERAK (SPOG)</h2>

    <div class="px-8 py-5 border-2 border-solid border-slate-800 bg-white mx-2">

      <div>No LAYANAN/PKK</div>
      <div>RPKRO</div>
      <div>No PKK</div>

      <div class="grid grid-cols-2 gap-4">
        <div>
          <h3 class="my-3 text-lg font-bold">DATA KAPAL</h3>
          <table class="w-full">
            <tr>
              <td>Tanda Pendaftaran Kapal</td>
              <td>:</td>
              <td>{{ @$data->tanda_pendaftaran_kapal }}</td>
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
        <div>
          <table class="w-full">
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

      <div class="mt-16">
        <h3 class="text-md font-bold">Dokumen Mandatory</h3>
        <table class="table w-full">
          <thead>
            <tr class="bg-gray-300 text-black">
              <th>No</th>
              <th>Nama Dokumen</th>
              <th>Nomor Dokumen</th>
              <th>Tanggal Dikeluarkan</th>
              <th>Tanggal Expired</th>
              <th>Tanggal Endorsment</th>
            </tr>
          </thead>
          <tbody>
            @foreach(@$dataDokumen as $rowDokumen)
            <tr class="hover:bg-slate-200">
              <td class="text-center py-4">{{ $loop->index+1 }}</td>
              <td class="text-center">{{ @$rowDokumen->nama_dokumen }}</td>
              <td class="text-center">{{ @$rowDokumen->no_dokumen }}</td>
              <td class="text-center">{{ changeDateFormate(@$rowDokumen->tgl_dikeluarkan) }}</td>
              <td class="text-center">{{ changeDateFormate(@$rowDokumen->tanggal_expired) }}</td>
              <td class="text-center">{{ changeDateFormate(@$rowDokumen->tgl_endorsment) }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>


      <div class="mt-8">
        <h3 class="text-md font-bold">DATA AWAK KAPAL</h3>
        <table class="table w-full">
          <thead>
            <tr class="bg-gray-300 text-black">
              <th>No</th>
              <th>KODE PELAUT</th>
              <th>NAMA</th>
              <th>GENDER</th>
              <th>TGL LAHIR</th>
              <th>KEBANGSAAN</th>
              <th>NOMOR BUKU PELAUT</th>
              <th>TGL EXPIRED SERTIFIKAT</th>
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
              <td>{{ changeDateFormate(@$rowCrew->tgl_lahir) }}</td>
              <td>{{ @$rowCrew->kebangsaan }}</td>
              <td>{{ @$rowCrew->no_buku_pelaut }}</td>
              <td>{{ changeDateFormate(@$rowCrew->tgl_expired_sertifikasi) }}</td>
              <td>{{ @$rowCrew->jabatan }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <div class="mt-8">
        <h3 class="text-md font-bold">DATA PENUMPANG</h3>
        <table class="table w-[500px]">
          <thead>
            <tr class="bg-gray-300 text-black">
              <th>No</th>
              <th>JUMLAH</th>
              <th>SATUAN</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center w-[10px]">1</td>
              <td>Jumlah Dewasa</td>
              <td>{{ @$data->jlh_penumpang_dewasa }}</td>
            </tr>
            <tr>
              <td class="text-center">2</td>
              <td>Jumlah Anak</td>
              <td>{{ @$data->jlh_penumpang_anak }}</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="mt-8">
        <h3 class="text-md font-bold">DATA MUATAN</h3>
        <table class="table w-full">
          <thead>
            <tr class="bg-gray-300 text-black">
              <th>No</th>
              <th>NAMA BARANG</th>
              <th>JENIS BARANG</th>
              <th>UNIT / TON / M3</th>
              <th>No BL</th>
              <th>SHIPPER</th>
              <th>CONSIGNE</th>
              <th>B/M</th>
              <th>NTPN</th>
            </tr>
          </thead>
          <tbody>
            @foreach(@$dataMuatan as $row)
            <tr class="hover:bg-slate-200">
              <td class="text-center py-4">{{ $loop->index+1 }}</td>
              <td>{{ @$row->nama_barang }}</td>
              <td>{{ @$row->jenis_kegiatan }}</td>
              <td>{{ @$row->jlh_satuan_unit }} Unit  / {{ @$row->jlh_satuan_ton }} Ton / {{ @$row->jlh_satuan_metrik }} Metrik</td>
              <td>{{ @$row->no_bl }}</td>
              <td>{{ @$row->npwp_shipper_pbm_jpt }}</td>
              <td>{{ @$row->consigne }}</td>
              <td>{{ @$row->jenis_kegiatan=="BONGKAR"?"B":"M" }}</td>
              <td></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <div class="mt-8">
        <h3 class="text-md font-bold">DATA BARANG BERBAHAYA</h3>
        <table class="table w-full">
          <thead>
            <tr class="bg-gray-300 text-black">
              <th>No</th>
              <th>NAMA PENGIRIM</th>
              <th>NAMA BARANG</th>
              <th>NOMOR UN</th>
              <th>KEMASAN BARANG</th>
              <th>KELAS BB</th>
              <th>JUMLAH</th>
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
        <h3 class="text-md font-bold">MANIFEST BONGKAR/MUAT BARANG TERCEMAR</h3>
        <table class="table w-full">
          <thead>
            <tr class="bg-gray-300 text-black">
              <th rowspan="2">No</th>
              <th rowspan="2">JENIS</th>
              <th colspan="2">KAPASITAS</th>
              <th colspan="2">BONGKAR</th>
              <th colspan="2">SIMPAN</th>
            </tr>
            <tr class="bg-gray-300 text-black">
              <th>KG</th>
              <th>M3</th>
              <th>KG</th>
              <th>M3</th>
              <th>KG</th>
              <th>M3</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center">1</td>
              <td>ANNEX I : Limbah berupa minyak bekas atau campuran minyak dan air</td>
              <td>{{ @$dataBrgTercemar->anex1_kapasitas_kg }}</td>
              <td>{{ @$dataBrgTercemar->anex1_kapasitas_metrik }}</td>
              <td>{{ @$dataBrgTercemar->anex1_bongkar_kg }}</td>
              <td>{{ @$dataBrgTercemar->anex1_bongkar_metrik }}</td>
              <td>{{ @$dataBrgTercemar->anex1_simpan_kg }}</td>
              <td>{{ @$dataBrgTercemar->anex1_simpan_metrik }}</td>
            </tr>
            <tr>
              <td class="text-center">2</td>
              <td>ANNEX II : Limbah berupa material cair berbahaya dalam bentuk curah</td>
              <td>{{ @$dataBrgTercemar->anex2_kapasitas_kg }}</td>
              <td>{{ @$dataBrgTercemar->anex2_kapasitas_metrik }}</td>
              <td>{{ @$dataBrgTercemar->anex2_bongkar_kg }}</td>
              <td>{{ @$dataBrgTercemar->anex2_bongkar_metrik }}</td>
              <td>{{ @$dataBrgTercemar->anex2_simpan_kg }}</td>
              <td>{{ @$dataBrgTercemar->anex2_simpan_metrik }}</td>
            </tr>
            <tr>
              <td class="text-center">3</td>
              <td>ANNEX III : Limbah berupa barang berbahaya dalam kemasan</td>
              <td>{{ @$dataBrgTercemar->anex3_kapasitas_kg }}</td>
              <td>{{ @$dataBrgTercemar->anex3_kapasitas_metrik }}</td>
              <td>{{ @$dataBrgTercemar->anex3_bongkar_kg }}</td>
              <td>{{ @$dataBrgTercemar->anex3_bongkar_metrik }}</td>
              <td>{{ @$dataBrgTercemar->anex3_simpan_kg }}</td>
              <td>{{ @$dataBrgTercemar->anex3_simpan_metrik }}</td>
            </tr>
            <tr>
              <td class="text-center">4</td>
              <td>ANNEX IV : Limbah berupa kotoran, limbah cair domestik</td>
              <td>{{ @$dataBrgTercemar->anex4_kapasitas_kg }}</td>
              <td>{{ @$dataBrgTercemar->anex4_kapasitas_metrik }}</td>
              <td>{{ @$dataBrgTercemar->anex4_bongkar_kg }}</td>
              <td>{{ @$dataBrgTercemar->anex4_bongkar_metrik }}</td>
              <td>{{ @$dataBrgTercemar->anex4_simpan_kg }}</td>
              <td>{{ @$dataBrgTercemar->anex4_simpan_metrik }}</td>
            </tr>
            <tr>
              <td class="text-center">5</td>
              <td>ANNEX V : Limbah berupa sampah</td>
              <td>{{ @$dataBrgTercemar->anex5_kapasitas_kg }}</td>
              <td>{{ @$dataBrgTercemar->anex5_kapasitas_metrik }}</td>
              <td>{{ @$dataBrgTercemar->anex5_bongkar_kg }}</td>
              <td>{{ @$dataBrgTercemar->anex5_bongkar_metrik }}</td>
              <td>{{ @$dataBrgTercemar->anex5_simpan_kg }}</td>
              <td>{{ @$dataBrgTercemar->anex5_simpan_metrik }}</td>
            </tr>
            <tr>
              <td class="text-center">6</td>
              <td>ANNEX VI : Limbah berupa perusak ozon</td>
              <td>{{ @$dataBrgTercemar->anex6_kapasitas_kg }}</td>
              <td>{{ @$dataBrgTercemar->anex6_kapasitas_metrik }}</td>
              <td>{{ @$dataBrgTercemar->anex6_bongkar_kg }}</td>
              <td>{{ @$dataBrgTercemar->anex6_bongkar_metrik }}</td>
              <td>{{ @$dataBrgTercemar->anex6_simpan_kg }}</td>
              <td>{{ @$dataBrgTercemar->anex6_simpan_metrik }}</td>
            </tr>
            <tr>
              <td class="text-center">7</td>
              <td>Sampah Elektronik</td>
              <td>{{ @$dataBrgTercemar->se_kapasitas_kg }}</td>
              <td>{{ @$dataBrgTercemar->se_kapasitas_metrik }}</td>
              <td>{{ @$dataBrgTercemar->se_bongkar_kg }}</td>
              <td>{{ @$dataBrgTercemar->se_bongkar_metrik }}</td>
              <td>{{ @$dataBrgTercemar->se_simpan_kg }}</td>
              <td>{{ @$dataBrgTercemar->se_simpan_metrik }}</td>
            </tr>
            <tr>
              <td class="text-center">8</td>
              <td>Attachment</td>
              <td colspan="6"></td>
            </tr>
          </tbody>
        </table>
      </div>


      <div class="mt-8">
        <h3 class="text-md font-bold">DATA PERMOHONAN SPOG</h3>
        <table class="table w-full">
          <thead>
            <tr class="bg-gray-300 text-black">
              <th>No SPOG</th>
              <th>WAKTU PERMOHONAN</th>
              <th>PANDU</th>
            </tr>
          </thead>
          <tbody>
            @foreach(@$dataRPKRO as $row)
            <tr class="hover:bg-slate-200">
              <td class="text-center">{{ @$row->no_permohonan_spog }}</td>
              <td class="text-center">{{ changeDateFormate(@$row->wkt_permohonan_spog) }}</td>
              <td class="text-center"></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>


  </div>

  <div class=" ml-10 mb-10">
    <div class="flex gap-4">
      <a href="./verifikasi/do?verifikasi=setuju&id={{ @$_GET['id'] }}" class="text-base bg-blue-600 text-blue-100 px-6 py-1 rounded hover:opacity-80">Setuju</a>
      <a href="./verifikasi/do?verifikasi=tidak&id={{ @$_GET['id'] }}" class="text-base bg-red-600 text-red-100 px-6 py-1 rounded hover:opacity-80">Tolak</a>
    </div>
  </div>



</div>



@endsection

@section('script')



@endsection