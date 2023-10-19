@extends('layouts.admin')
@section('title', 'Pelayanan Barang')
@section('content')
    <div class="">
        <div class="text-2xl ">
            Pelayanan Barang /
            <a href="{{url('admin/pelayanan-barang/penumpukan-2b1')}}"> Penumpukan 2B1 </a>
            / Create 2B1
        </div>
        <hr class="border-b-2 border-black border-solid">
        <div class="text-center mb-3 mt-5">
            <div class="mt-5 grid grid-cols-2 gap-2">
                <div>
                    <table class="w-full">
                        <tr class="text-start">
                            <td>No PKK</td>
                            <td>:</td>
                            <td class="py-1"><input type="text" class=" w-full bg-white rounded px-3 py-2 ring-1 ring-black mr-3 "></td>
                        </tr>
                        <tr  class="text-start mb-4">
                            <td>No RKBM</td>
                            <td>:</td>
                            <td class="py-1"><input type="text" class=" w-full bg-white rounded px-3 py-2 ring-1 ring-black mr-3 "></td>
                        </tr>
                        <tr  class="text-start">
                            <td>No Form 2B1</td>
                            <td>:</td>
                            <td class="py-1"><input type="text" class=" w-full bg-white rounded px-3 py-2 ring-1 ring-black mr-3 "></td>
                        </tr>
                        <tr  class="text-start">
                            <td>Tanggal 2B1</td>
                            <td>:</td>
                            <td class="py-1"><input type="text" class=" w-full bg-white rounded px-3 py-2 ring-1 ring-black mr-3 "></td>
                        </tr>
                        <tr  class="text-start">
                            <td>Nama PBM</td>
                            <td>:</td>
                            <td class="py-1"><input type="text" class=" w-full bg-white rounded px-3 py-2 ring-1 ring-black mr-3 "></td>
                        </tr>
                        <tr  class="text-start">
                            <td>Nama Kapal</td>
                            <td>:</td>
                            <td class="py-1"><input type="text" class=" w-full bg-white rounded px-3 py-2 ring-1 ring-black mr-3 "></td>
                        </tr>
                        <tr class="text-start">
                            <td>Kegiatan</td>
                            <td>:</td>
                            <td class="py-1"><input type="text" class=" w-full bg-white rounded px-3 py-2 ring-1 ring-black mr-3 "></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="pt-5">
                <div class="text-start">
                    <span class="text-black font-bold ">List Barang</span>
                </div>
                <table class="mt-5 w-full border-solid border-2 border-slate-800">
                    <thead class=" bg-gradient-to-r from-cyan-700 to-cyan-800 text-white py-5">
                    <tr >
                        <th class="py-5 px-3">Nama Barang</th>
                        <th>Tuslag</th>
                        <th>No Bol</th>
                        <th>Jenis Kegiatan</th>
                        <th>Lokasi</th>
                        <th>Penyaluran</th>
                        <th>Jumlah Barang</th>
                        <th>Satuan</th>
                        <th>Tarif Dermaga</th>
                        <th>Tarif Penumpukan</th>
                        <th>Masa Penumpukan</th>
                        <th class="px-3">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                        <td>xxxx</td>
                        <td>xxxx</td>
                        <td>xxxx</td>
                        <td>xxxx</td>
                        <td>Lorem ipsum dolor sit amet consectetur</td>
                        <td>xxxx</td>
                        <td>Titanic</td>
                        <td>2 Oktober 2020</td>
                        <td>2 Oktober 2020</td>
                        <td>2 Oktober 2020</td>
                        <td>2 Oktober 2020</td>
                        <td>
                            <button class="btn bg-blue-600 text-sm text-blue-100 hover:bg-purple-600">Update Tarif</button>
                        </td>
                    </tr>
                    <tr class="border-solid border-2 border-slate-800 bg-slate-200 hover:bg-slate-300">
                        <td>xxxx</td>
                        <td>xxxx</td>
                        <td>xxxx</td>
                        <td>xxxx</td>
                        <td>Lorem ipsum dolor sit amet consectetur</td>
                        <td>xxxx</td>
                        <td>Titanic</td>
                        <td>2 Oktober 2020</td>
                        <td>2 Oktober 2020</td>
                        <td>2 Oktober 2020</td>
                        <td>2 Oktober 2020</td>
                        <td>
                            <button class="btn bg-blue-600 text-sm text-blue-100 hover:bg-purple-600">Update Tarif</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-start">
                <button class="btn mt-6 bg-blue-600 text-blue-100 hover:bg-purple-600">Simpan</button>
                <a href="{{url('admin/pelayanan-barang/penumpukan-2b1')}}" class="btn mt-6 bg-warning text-blue-100 hover:bg-purple-600">Kembali</a>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
