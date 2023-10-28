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
      <div class="grid grid-cols-2">
        <div>
          <h3 class="my-3 text-lg font-bold">DATA KAPAL</h3>
          <div class="mb-3">TANDA PENDAFTARAN KAPAL</div>
          <div>NAMA KAPAL</div>
          <div>BIODATA</div>
          <div>JENIS TRAYEK</div>
          <div>NOMOR TRAYEK</div>
          <div>CALL SIGN</div>
          <div>GT</div>
          <div>LDA</div>
          <div>DWT</div>

          <div class="mt-8">GROSS TONNAGE</div>
          <div>DEADWEIGHT TONNAGE</div>
          <div>DRAFT DEPAN</div>
          <div>DRAFT MAKSIMUM</div>
          <div>DRAFT BELAKANG</div>
          <div>KETINGGIAN UDARA</div>
          <div>LENGTH OVER ALL</div>
          <div>LEBAR KAPAL</div>


          <h3 class="mb-3 mt-6 text-lg font-bold">CSO</h3>
          <div>NAMA</div>
          <div>NO TELEPON</div>
        </div>
        <div>

          <h3 class="my-3 text-lg font-bold">DATA PEMILIK</h3>
          <div>NAMA</div>
          <div>PENANGGUNG JAWAB</div>
          <div>SUPAL PEMILIK</div>
          <div>ALAMAT</div>


          <h3 class="mb-3 mt-5 text-lg font-bold">DATA PEMILIK</h3>
          <div>NAMA</div>
          <div>PENANGGUNG JAWAB</div>
          <div>SUPAL PEMILIK</div>
          <div>DOKUMEN KEAGENAN</div>
          <div>ALAMAT</div>

          <div class="mt-5">DATA TRAYEK</div>
          <div>JENIS TRAYEK</div>
          <div>NO TRAYEK</div>
          <div>LINTASAN</div>
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
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
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
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
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
          </tbody>
        </table>
      </div>

      <div class="mt-8">
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
      </div>

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
              <th>AKSI</th>
            </tr>
          </thead>
          <tbody>
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
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td class="text-center">2</td>
              <td>ANNEX II : Limbah berupa material cair berbahaya dalam bentuk curah</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td class="text-center">3</td>
              <td>ANNEX III : Limbah berupa barang berbahaya dalam kemasan</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td class="text-center">4</td>
              <td>ANNEX IV : Limbah berupa kotoran, limbah cair domestik</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td class="text-center">5</td>
              <td>ANNEX V : Limbah berupa sampah</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td class="text-center">6</td>
              <td>ANNEX VI : Limbah berupa perusak ozon</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td class="text-center">7</td>
              <td>Sampah Elektronik</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td class="text-center">8</td>
              <td>Attachment</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>

      
      <div class="mt-8">
        <h3 class="text-md font-bold">DATA PERMOHONAN SPOG</h3>
        <table class="w-full">
          <thead>
            <tr class="bg-gray-300 text-black">
              <th>No SPOG</th>
              <th>WAKTU PERMOHONAN</th>
              <th>PANDU</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>


  </div>

  <div class=" ml-10 mb-10">
    <div class="flex-none">
      <div>
        <label>Alasan :</label>
      </div>
      <textarea class="rounded w-[400px] border-slate-300 focus:border-none" rows="3"></textarea>
    </div>
    <div class="flex gap-4">
      <button class="text-base bg-blue-600 text-blue-100 px-6 py-1 rounded hover:opacity-80">Setuju</button>
      <button class="text-base bg-orange-600 text-orange-100 px-6 py-1 rounded hover:opacity-80">Revisi</button>
      <button class="text-base bg-red-600 text-red-100 px-6 py-1 rounded hover:opacity-80">Tolak</button>
    </div>
  </div>



</div>



@endsection

@section('script')



@endsection