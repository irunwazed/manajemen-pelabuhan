@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<div class="">

  <div class="text-2xl ">Pelayanan Kapal / Verifikasi SPM</div>
  <hr class="border-b-2 border-black border-solid">

  <div class=" mb-3 py-8">
    <h2 class="text-2xl font-bold mt-4 mb-7 text-center">FORM VERIFIKASI SPM</h2>

    <div class="px-8 py-5 border-2 border-solid border-slate-800 bg-white mx-2">

      <h3 class="my-3 text-lg font-bold">No PKK: {{@$data[0]->no_pkk}}</h3>
      <div class="grid grid-cols-2">
        <div>
          <h3 class="my-3 text-lg font-bold">Data Kapal</h3>
          <div class="mb-3">TANDA PENDAFTARAN KAPAL</div>
          <div>NAMA KAPAL:  {{@$data[0]->nama_kapal}}</div>
          <div>BENDERA: {{@$data[0]->bendera}}</div>
          <div>JENIS TRAYEK: {{@$dataTrayek[0]->jenis_trayek}}</div>
          <div>NOMOR TRAYEK: {{@$dataTrayek[0]->trayek}}</div>
          <div>CALL SIGN: {{@$data[0]->call_sign}}</div>
          <div>GT: {{@$data[0]->gros_tonase}}</div>
          <div>LOA: {{@$data[0]->loa_kapal}}</div>
          <div>DWT: {{@$data[0]->dwt_kapal}}</div>

          <div class="mt-8">GROSS TONNAGE: {{@$data[0]->gros_tonase}}</div>
          <div>DEADWEIGHT TONNAGE: {{@$data[0]->deadweight_tonase}}</div>
          <div>DRAFT DEPAN: {{@$data[0]->draft_muka}}</div>
          <div>DRAFT MAKSIMUM: {{@$data[0]->draft_maksimum}}</div>
          <div>DRAFT BELAKANG: {{@$data[0]->draft_belakang}}</div>
          <div>KETINGGIAN UDARA: {{@$data[0]->ketinggian_udara}}</div>
          <div>LENGTH OVER ALL: {{@$data[0]->panjang_kapal}}</div>
          <div>LEBAR KAPAL: {{@$data[0]->lebar_kapal}}</div>


          <h3 class="mb-3 mt-6 text-lg font-bold">CSO</h3>
          <div>NAMA: {{@$data[0]->nama_cso}}</div>
          <div>NO TELEPON: {{@$data[0]->no_telp_cso}}</div>
        </div>
        <div>

          <h3 class="my-3 text-lg font-bold">DATA PEMILIK</h3>
          <div>NAMA: {{@$data[0]->perusahaan_pemilik_kapal}}</div>
          <div>PENANGGUNG JAWAB: {{@$data[0]->penanggung_jawab}}</div>
          <div>SUPAL PEMILIK: {{@$data[0]->supal_pemilik}}</div>
          <div>ALAMAT: {{@$data[0]->alamat}}</div>


          <h3 class="mb-3 mt-5 text-lg font-bold">DATA OPERATOR</h3>
          <div>NAMA: {{@$data[0]->nama_agen}}</div>
          <div>PENANGGUNG JAWAB: {{@$data[0]->penanggung_jawab_agen}}</div>
          <div>SUPAL PEMILIK: {{@$data[0]->supal_pemilik}}</div>
          <div>DOKUMEN KEAGENAN: @if(@$data[0]->file_dokumen_keagenan)<span class="font-bold text-red-500 italic"> Terlampir </span> @endif</div>
          <div>ALAMAT: {{@$data[0]->alamat_agen}}</div>

          <div class="mt-5">DATA TRAYEK</div>
          <div>JENIS TRAYEK: {{@$dataTrayek[0]->jenis_trayek}}</div>
          <div>NO TRAYEK: {{@$dataTrayek[0]->trayek}}</div>
        </div>
      </div>

      <div class="mt-16">
        <h3 class="text-md font-bold">Dokumen Mandatory</h3>
        <table class="w-full">
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
            @foreach(@$dokumen as $dokumenkey => $dokumenItem)
            <tr>
              <td>{{@$dokumenkey + 1}}</td>
              <td>{{@$dokumenItem->nama_dokumen}}</td>
              <td>{{@$dokumenItem->no_dokumen}}</td>
              <td>{{@$dokumenItem->tgl_dikeluarkan}}</td>
              <td>{{@$dokumenItem->tanggal_expired}}</td>
              <td>{{@$dokumenItem->tgl_endorsmen}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>


      <div class="mt-8">
        <h3 class="text-md font-bold">DATA AWAK KAPAL</h3>
        <table class="w-full">
          <thead>
            <tr class="bg-gray-300 text-black">
              <th>No</th>
              <th>KODE PELAUT</th>
              <th>NAMA</th>
              <th>GENDER</th>
              <th>TGL LAHIR</th>
              <th>KEBANGSAAN</th>
              <th>NOMOR BUKU PELAUT</th>
              <th>TGL EXPIRED</th>
              <th>SERTIFIKAT</th>
              <th>JABATAN</th>
            </tr>
          </thead>
          <tbody>
            @foreach(@$awakKapal as $awakKapalKey => $awakKapalItem)
            <tr>
              <td>{{@$awakKapalKey + 1}}</td>
              <td>{{@$awakKapalItem->kode_pelaut}}</td>
              <td>{{@$awakKapalItem->nama}}</td>
              <td>{{@$awakKapalItem->jenis_kelamin}}</td>
              <td>{{@$awakKapalItem->tgl_lahir}}</td>
              <td>{{@$awakKapalItem->kebangsaan}}</td>
              <td>{{@$awakKapalItem->no_buku_pelaut}}</td>
              <td>{{@$awakKapalItem->tgl_expired_sertifikasi}}</td>
              <td>{{@$awakKapalItem->jabatan}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <div class="mt-8">
        <h3 class="text-md font-bold">DATA PENUMPANG</h3>
        <table class="w-[500px]">
          <thead>
            <tr class="bg-gray-300 text-black">
              <th>No</th>
              <th>JUMLAH</th>
              <th>SATUAN</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>{{@$data[0]->jlh_penumpang_dewasa}}</td>
              <td>Orang</td>
            </tr>
            <tr>
              <td>2</td>
              <td>{{@$data[0]->jlh_penumpang_anak}}</td>
              <td>Orang</td>
            </tr>
          </tbody>
        </table>
      </div>

      {{-- <div class="mt-8">
        <h3 class="text-md font-bold">DATA MUATAN</h3>
        <table class="w-full">
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
          </tbody>
        </table>
      </div> --}}

      <div class="mt-8">
        <h3 class="text-md font-bold">DATA BARANG BERBAHAYA</h3>
        <table class="w-full">
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
            @foreach(@$barangBerbahaya as $barangBerbahayaKey => $barangBerbahayaItem)
            <tr>
              <td>{{@$barangBerbahayaKey + 1}}</td>
              <td>{{@$barangBerbahayaItem->nama_pengirim}}</td>
              <td>{{@$barangBerbahayaItem->nama_barang}}</td>
              <td>{{@$barangBerbahayaItem->nomor_un}}</td>
              <td>{{@$barangBerbahayaItem->nama_kemasan}}</td>
              <td>{{@$barangBerbahayaItem->kelas_bb}}</td>
              <td>{{@$barangBerbahayaItem->jumlah_muatan}}</td>
              <td>{{@$barangBerbahayaItem->satuan}}</td>
              <td>{{@$barangBerbahayaItem->jenis_barang}}</td>
              <td>{{@$barangBerbahayaItem->type_barang}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <div class="mt-8">
        <h3 class="text-md font-bold">MANIFEST BONGKAR/MUAT BARANG TERCEMAR</h3>
        <table class="w-full">
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
              <td>{{@$barangTercemar[0]->anex1_kapasitas_kg}}</td>
              <td>{{@$barangTercemar[0]->anex1_kapasitas_metrik}}</td>
              <td>{{@$barangTercemar[0]->anex1_bongkar_kg}}</td>
              <td>{{@$barangTercemar[0]->anex1_bongkar_metrik}}</td>
              <td>{{@$barangTercemar[0]->anex1_simpan_kg}}</td>
              <td>{{@$barangTercemar[0]->anex1_simpan_metrik}}</td>
            </tr>
            <tr>
              <td class="text-center">2</td>
              <td>ANNEX II : Limbah berupa material cair berbahaya dalam bentuk curah</td>
              <td>{{@$barangTercemar[0]->anex2_kapasitas_kg}}</td>
              <td>{{@$barangTercemar[0]->anex2_kapasitas_metrik}}</td>
              <td>{{@$barangTercemar[0]->anex2_bongkar_kg}}</td>
              <td>{{@$barangTercemar[0]->anex2_bongkar_metrik}}</td>
              <td>{{@$barangTercemar[0]->anex2_simpan_kg}}</td>
              <td>{{@$barangTercemar[0]->anex2_simpan_metrik}}</td>
            </tr>
            <tr>
              <td class="text-center">3</td>
              <td>ANNEX III : Limbah berupa barang berbahaya dalam kemasan</td>
              <td>{{@$barangTercemar[0]->anex3_kapasitas_kg}}</td>
              <td>{{@$barangTercemar[0]->anex3_kapasitas_metrik}}</td>
              <td>{{@$barangTercemar[0]->anex3_bongkar_kg}}</td>
              <td>{{@$barangTercemar[0]->anex3_bongkar_metrik}}</td>
              <td>{{@$barangTercemar[0]->anex3_simpan_kg}}</td>
              <td>{{@$barangTercemar[0]->anex3_simpan_metrik}}</td>
            </tr>
            <tr>
              <td class="text-center">4</td>
              <td>ANNEX IV : Limbah berupa kotoran, limbah cair domestik</td>
              <td>{{@$barangTercemar[0]->anex4_kapasitas_kg}}</td>
              <td>{{@$barangTercemar[0]->anex4_kapasitas_metrik}}</td>
              <td>{{@$barangTercemar[0]->anex4_bongkar_kg}}</td>
              <td>{{@$barangTercemar[0]->anex4_bongkar_metrik}}</td>
              <td>{{@$barangTercemar[0]->anex4_simpan_kg}}</td>
              <td>{{@$barangTercemar[0]->anex4_simpan_metrik}}</td>
            </tr>
            <tr>
              <td class="text-center">5</td>
              <td>ANNEX V : Limbah berupa sampah</td>
              <td>{{@$barangTercemar[0]->anex5_kapasitas_kg}}</td>
              <td>{{@$barangTercemar[0]->anex5_kapasitas_metrik}}</td>
              <td>{{@$barangTercemar[0]->anex5_bongkar_kg}}</td>
              <td>{{@$barangTercemar[0]->anex5_bongkar_metrik}}</td>
              <td>{{@$barangTercemar[0]->anex5_simpan_kg}}</td>
              <td>{{@$barangTercemar[0]->anex5_simpan_metrik}}</td>
            </tr>
            <tr>
              <td class="text-center">6</td>
              <td>ANNEX VI : Limbah berupa perusak ozon</td>
              <td>{{@$barangTercemar[0]->anex6_kapasitas_kg}}</td>
              <td>{{@$barangTercemar[0]->anex6_kapasitas_metrik}}</td>
              <td>{{@$barangTercemar[0]->anex6_bongkar_kg}}</td>
              <td>{{@$barangTercemar[0]->anex6_bongkar_metrik}}</td>
              <td>{{@$barangTercemar[0]->anex6_simpan_kg}}</td>
              <td>{{@$barangTercemar[0]->anex6_simpan_metrik}}</td>
            </tr>
            <tr>
              <td class="text-center">7</td>
              <td>Sampah Elektronik</td>
              <td>{{@$barangTercemar[0]->se_kapasitas_kg}}</td>
              <td>{{@$barangTercemar[0]->se_kapasitas_metrik}}</td>
              <td>{{@$barangTercemar[0]->se_bongkar_kg}}</td>
              <td>{{@$barangTercemar[0]->se_bongkar_metrik}}</td>
              <td>{{@$barangTercemar[0]->se_simpan_kg}}</td>
              <td>{{@$barangTercemar[0]->se_simpan_metrik}}</td>
            </tr>
            {{-- <tr>
              <td class="text-center">8</td>
              <td>Attachment</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr> --}}
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
      <textarea class="rounded w-[400px] border-slate-300 focus:border-none" rows="3"></textarea>
    </div> --}}
    <div class="flex gap-4">
      <form action="{{url($user.'/pelayanan-kapal/verifikasi-spm/setuju')}}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{@$data[0]->pelayanan_kapal_id}}">
        <input type="hidden" name="user" value="{{@$user}}">
        <button type="submit" class="text-base bg-blue-600 text-blue-100 px-6 py-1 rounded hover:opacity-80">Setuju</button>
      </form>
      
      {{-- <button class="text-base bg-orange-600 text-orange-100 px-6 py-1 rounded hover:opacity-80">Revisi</button> --}}
      <form action="{{url($user.'/pelayanan-kapal/verifikasi-spm/tolak')}}" method="POST">
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