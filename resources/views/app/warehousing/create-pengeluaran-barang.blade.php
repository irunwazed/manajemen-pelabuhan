@extends('layouts.admin')
@section('title', 'Pengeluaran Barang')
@section('content')
<div class="">
    <div class="text-2xl ">
        Warehousing /
        <!-- <a href="{{url('admin/penyewaan-alat/permohonan-1c')}}"> Permohonan 1C </a> -->
        Pengeluaran Barang
    </div>
    <hr class="border-b-2 border-black border-solid">
    <div class="font-bold text-2xl text-center pt-5">PENGELUARAN BARANG</div>
    <form action="simpan" method="POST" enctype="multipart/form-data">
        <div class="h-56 grid grid-cols-2 gap-4 content-center pt-16">
            <div>
                <table class="w-full">
                    <tr class="text-start mb-4">
                        <td>No. Pengeluaran</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" name="no_pengeluaran" id="no_pengeluaran" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" placeholder="">    
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>No. Penerimaan</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" name="no_penerimaan" id="no_penerimaan" value="{{ $data->no_penerimaan }}" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" placeholder="AUTO FILL">
                        </td>
                        <input type="hidden" name="penerimaan_barang_id" id="penerimaan_barang_id" value="{{ $data->penerimaan_barang_id }}">
                    </tr>
                    <tr class="text-start">
                        <td>Nama PBM</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" name="nama_pbm" id="nama_pbm" value="{{ $data->nama_pbm }}" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" placeholder="AUTO FILL">
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Dokumen Pendukung</td>
                        <td>:</td>
                        <td class="py-1">
                        <input type="file" name="files" id="files" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" placeholder="Tahun">
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td colspan = "3">
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">SIMPAN</button>
                        </td>
                    </tr>
                </table>
            </div>
            <div>
                <table class="w-full">
                    <tr class="text-start mb-4">
                        <td>Tanggal Keluar</td>
                        <td>:</td>
                        <td class="py-1">
                        <input type="datetime-local" name="tgl_keluar" id="tgl_keluar" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md text-sm shadow-sm placeholder-slate-400">
                        </td>
                    </tr>
                    <tr class="text-start mb-4">
                        <td>Tanggal Masuk</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" name="tanggal_masuk" id="tanggal_masuk" value="{{ $data->tanggal_masuk }}" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" placeholder="AUTO FILL">    
                        </td>
                    </tr>
                    <tr class="text-start mb-4">
                        <td>Nama Kapal</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" name="nama_kapal" id="nama_kapal" value="{{ $data->nama_kapal }}" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" placeholder="AUTO FILL">
                        </td>
                    </tr>
                    <tr class="text-start mb-4">
                        <td>PIC PBM </td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" name="pic_pbm" id="pic_pbm" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                        </td>
                    </tr>
                    <tr class="text-start mb-4">
                        <td>PIC Gudang </td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" name="pic_gudang" id="pic_gudang" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
  
    <div class="grid grid-cols-2 pt-16">
        <!-- <div class="bottom-0 left-0"><span class="text-2xl font-bold">List Alat</span></div>

         <div class="text-end pt-5">
            <a href="" class="font-semibold py-1 px-6 rounded-md hover:opacity-80 btn-lg text-2xl bg-blue-600 text-blue-100 hover:bg-purple-600">Tambah Alat</a>
        </div> -->
    </div>
        <!-- <div class="w-full">
            <a href="{{url('admin/penyewaan-alat/create-permohonan-1c')}}" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah</a>
        </div> -->
    <div class="text-center">
        <div class="">
            <table class="mt-2 w-full border-solid border-0 border-slate-800">
                <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                    <tr>
                        <th class="py-5 px-3">No. Container</th>
                        <th>Type</th>
                        <th>Kegiatan</th>
                        <th>Lokasi</th>
                        <th>Posisi</th>
                        <th>Row</th>
                        <th>Column</th>
                        <th>Pilih</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataDetail as $row)
                        @if(($loop->index) %2 == 0)
                        <tr class="border-solid border-1 border-slate-800 hover:bg-slate-300">
                          @else
                        <tr class="border-solid border-1 border-slate-800 bg-slate-200 hover:bg-slate-300">
                          @endif
                          
                          <td class="text-center">{{$row->no_container }}</td>
                          <td class="text-center">{{$row->type_kontainer }}</td>
                          <td class="text-center">{{$row->kegiatan }}</td>
                          <td class="text-center">{{$row->lokasi }}</td>
                          <td class="text-center">{{$row->posisi }}</td>
                          <td class="text-center">{{$row->baris }}</td>
                          <td class="text-center">{{$row->kolom }}</td>
                          <td><input type="checkbox" name="penerimaan_barang_kontainer_id[]" value="{{$row->penerimaan_barang_kontainer_id}}"></td> 
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
        <!-- <div class="text-start mt-3">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">SIMPAN</button>
            <a href="{{url('admin/penyewaan-alat/permohonan-1c')}}" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">KEMBALI</a>
        </div> -->
    </div>

</form>
</div>
@endsection

@section('script')
@endsection