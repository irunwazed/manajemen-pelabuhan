@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<div class="">

  <div class="text-2xl ">Pelayanan Kapal / Warta Kedatangan / Pengajuan PKK</div>
  <hr class="border-b-2 border-black border-solid">

  <div class="text-center mb-3 mt-5">
    <div class="flex flex-wrap place-content-end my-2">
      <button class="mr-3 py-2 px-5 bg-cyan-800 text-white font-semibold rounded-xl shadow-xl hover:opacity-70">PEMBERITAHUAN KEDATANGAN</button>
      <button class="py-2 px-5 bg-green-800 text-white font-semibold rounded-xl shadow-xl hover:opacity-70">PEMBERITAHUAN KEBERANGKATAN KAPAL</button>
    </div>

    <div class="mt-5 grid grid-cols-2 gap-2">
      <div>
        <h3 class="my-5">Data Kapal</h3>
        <table class="w-full">
          <tr>
            <td>Tanda Pendaftaran Kapal</td>
            <td>:</td>
            <td><input type="text" class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3"></td>
          </tr>
          <tr>
            <td colspan="3" class="h-6"></td>
          </tr>
          <tr>
            <td>NAMA KAPAL</td>
            <td>:</td>
            <td><input type="text" class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3"></td>
          </tr>
          <tr>
            <td>BENDERA</td>
            <td>:</td>
            <td><input type="text" class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3"></td>
          </tr>
          <tr>
            <td>JENIS TRAYEK</td>
            <td>:</td>
            <td><input type="text" class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3"></td>
          </tr>
          <tr>
            <td>NOMOR TRAYEK</td>
            <td>:</td>
            <td><input type="text" class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3"></td>
          </tr>
          <tr>
            <td>CALL SIGN</td>
            <td>:</td>
            <td><input type="text" class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3"></td>
          </tr>
          <tr>
            <td>GT</td>
            <td>:</td>
            <td><input type="text" class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3"></td>
          </tr>
          <tr>
            <td>LOA</td>
            <td>:</td>
            <td><input type="text" class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3"></td>
          </tr>
          <tr>
            <td>DWT</td>
            <td>:</td>
            <td><input type="text" class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3"></td>
          </tr>
          <tr>
            <td colspan="3" class="h-6"></td>
          </tr>
          <tr>
            <td colspan="3" class="font-semibold">SPESIFIKASI KAPAL</td>
          </tr>
          <tr>
            <td>CSO</td>
            <td>:</td>
            <td><input type="text" class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3"></td>
          </tr>
          <tr>
            <td>NAMA</td>
            <td>:</td>
            <td><input type="text" class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3"></td>
          </tr>
          <tr>
            <td>NO TELEPON</td>
            <td>:</td>
            <td><input type="text" class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3"></td>
          </tr>
        </table>
      </div>
      <div>
        <h3 class="my-5">Dioperasikan Oleh</h3>
        <table class="w-full">
          <tr>
            <td>NAMA</td>
            <td>:</td>
            <td><input type="text" disabled  class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3" value="DEFAULT AUTO FILL" /></td>
          </tr>
          <tr>
            <td>PENANGGUNG JAWAB</td>
            <td>:</td>
            <td><input type="text" disabled  class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3" value="DEFAULT AUTO FILL" /></td>
          </tr>
          <tr>
            <td>SUPPLY PEMILIK</td>
            <td>:</td>
            <td><input type="text" disabled  class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3" value="DEFAULT AUTO FILL" /></td>
          </tr>
          <tr>
            <td>ALAMAT</td>
            <td>:</td>
            <td><input type="text" disabled  class="w-full py-10 bg-white rounded-2xl px-3 ring-1 ring-black mr-3" value="DEFAULT AUTO FILL" /></td>
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
            <td><input type="text" disabled  class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3" value="DEFAULT AUTO FILL" /></td>
          </tr>
          <tr>
            <td>PENANGGUNG JAWAB</td>
            <td>:</td>
            <td><input type="text" disabled  class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3" value="DEFAULT AUTO FILL" /></td>
          </tr>
          <tr>
            <td>SUPLAI PEMILIK</td>
            <td>:</td>
            <td><input type="text" disabled  class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3" value="DEFAULT AUTO FILL" /></td>
          </tr>
          <tr>
            <td>DOKUMEN KEGIATAN</td>
            <td>:</td>
            <td><input type="text" disabled  class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3" value="DEFAULT AUTO FILL" /></td>
          </tr>
          <tr>
            <td>ALAMAT</td>
            <td>:</td>
            <td><input type="text" disabled  class="w-full py-10 bg-white rounded-2xl px-3 ring-1 ring-black mr-3" value="DEFAULT AUTO FILL" /></td>
          </tr>
          <tr>
            <td colspan="3" class="h-6"></td>
          </tr>
          <tr>
            <td colspan="3" class="font-semibold">JENIS TRAYEK</td>
          </tr>
          <tr>
            <td>NOMOR TRAYEK</td>
            <td>:</td>
            <td><input type="text" disabled  class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3" value="DEFAULT AUTO FILL" /></td>
          </tr>
          <tr>
            <td>LINTASAN</td>
            <td>:</td>
            <td><input type="text" disabled  class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3" value="DEFAULT AUTO FILL" /></td>
          </tr>
        </table>
      </div>
    </div>

    <hr class="border-spacing-2 border-black border-2 mt-4 mb-4">

    <div class="mt-5">
      <h2>PERUSAHAAN BONGKAR MUAT</h2>

      <button class="mr-3 py-2 px-5 bg-cyan-800 text-white font-semibold rounded-xl shadow-xl hover:opacity-70">Tambah</button>
      <table class="mt-5 w-full border-solid border-2 border-slate-800">
        <thead>
          <tr class="border-solid border-2 border-slate-800 bg-gradient-to-r from-cyan-700 to-cyan-800 text-white">
            <th>NO</th>
            <th>NAMA PERUSAHAAN</th>
            <th>TYPE PERUSAHAAN</th>
            <th>KEGIATAN</th>
            <th>AKSI</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-solid border-2 border-slate-800">
            <td>1</td>
            <td>PT</td>
            <td>PBM</td>
            <td>B</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>

    <hr class="border-spacing-2 border-black border-2 mt-4 mb-4">
    <div class="mt-5">

      <ul class="grid grid-cols-5">
        <li class="font-semibold text-xl bg-slate-400 text-black flex justify-center items-center"><span class="inline-block bg-red-700 ">1. MANIFEST KAPAL</span></li>
        <li>2. DATA AWAK KAPAL</li>
        <li>3. DATA MANIFEST BONGKAR MUAT</li>
        <li>4. DOKUMEN KAPAL</li>
        <li>5. BONGKAR MUAT</li>
      </ul>

      <table class="mt-5 w-full border-solid border-2 border-slate-300">
        <thead>
          <tr class="border-solid border-2 border-slate-800 bg-gradient-to-r from-cyan-700 to-cyan-800 text-white">
            <th>1. MANIFEST KAPAL</th>
            <th>2. DATA AWAK KAPAL</th>
            <th>3. DATA MANIFEST BONGKAR MUAT</th>
            <th>4. DOKUMEN KAPAL</th>
            <th></th>
            <th>5. BONGKAR MUAT</th>
          </tr>
        </thead>
      </table>

      <h2 class="font-bold mt-6 mb-4">UPLOAD FILE MANIFEST KAPAL</h2>
      <input type="file">

      <table class="mt-5 w-full border-solid border-2 border-slate-800">
        <thead>
          <tr class="border-solid border-2 border-slate-800 bg-gradient-to-r from-cyan-700 to-cyan-800 text-white">
            <th>NO</th>
            <th>UPLOAD</th>
            <th>NAMA FILE</th>
            <th>AKSI</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-solid border-2 border-slate-800">
            <td>1</td>
            <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam, facilis.</td>
            <td>
              <button class="mr-3 py-2 px-5 bg-cyan-800 text-white font-semibold rounded-xl shadow-xl hover:opacity-70">Upload Dokumen</button>
            </td>
            <td></td>
          </tr>
          <tr class="border-solid border-2 border-slate-800">
            <td>2</td>
            <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam, facilis.</td>
            <td>
              <button class="mr-3 py-2 px-5 bg-cyan-800 text-white font-semibold rounded-xl shadow-xl hover:opacity-70">Upload Dokumen</button>
            </td>
            <td></td>
          </tr>
          <tr class="border-solid border-2 border-slate-800">
            <td>3</td>
            <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam, facilis.</td>
            <td>
              <button class="mr-3 py-2 px-5 bg-cyan-800 text-white font-semibold rounded-xl shadow-xl hover:opacity-70">Upload Dokumen</button>
            </td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>



</div>



@endsection

@section('script')



@endsection