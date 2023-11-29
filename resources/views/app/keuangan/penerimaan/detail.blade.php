@extends('layouts.admin')
@section('title', 'Penerimaan Pembayaran')
@section('content')
    <style>
        .pagination > .disabled{
            margin-left: 10px;
            margin-right: 10px;
        }
    </style>

    <div class="">
        <div class="text-2xl ">Penerimaan Pembayaran {{$penerimaan->no_penerimaan}}</div>
        <hr class="border-b-2 border-black border-solid">
        <div class="text-center mb-3 mt-5">
            <div class="relative -bottom-20 left-6 z-1 bg-white w-[250px] px-6 font-bold text-lg">
                Pembayaran
            </div>
            <div class="flex flex-wrap place-content-end my-2">
                <a href="{{url('admin/keuangan/penerimaan')}}" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">KEMBALI</a>
            </div>
            <div class="mt-2 px-10 py-7 grid grid-cols-2 gap-2 border-2 border-solid border-black">
                <div>
                    <table class="w-full">
                        <tr>
                            <td>No Penerimaan</td>
                            <td>:</td>
                            <td><input type="text"  class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$penerimaan->no_penerimaan }}" name="tanda_pendaftaran_kapal" disabled></td>
                        </tr>
                        <tr>
                            <td>Kode Rekening</td>
                            <td>:</td>
                            <td><input type="text"  class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$penerimaan->kode_rekening }}" name="nama_kapal" disabled></td>
                        </tr>
                        <tr>
                            <td>Nama Rekening</td>
                            <td>:</td>
                            <td><input type="text"  class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$penerimaan->nama_rekening }}" name="nama_kapal" disabled></td>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td>:</td>
                            <td><input type="text"  class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$penerimaan->jumlah }}" name="nama_kapal" disabled></td>
                        </tr>
                    </table>
                </div>
                <div>
                    <table class="w-full">
                        <tr>
                            <td>Tanggal</td>
                            <td>:</td>
                            <td><input type="text"  class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$penerimaan->tanggal }}" name="tanda_pendaftaran_kapal" disabled></td>
                        </tr>
                        <tr>
                            <td>Nama Perusahaan</td>
                            <td>:</td>
                            <td><input type="text"  class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$penerimaan->nama_perusahaan }}" name="nama_kapal" disabled></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div>
                <table class="mt-5 w-full border-solid border-2 border-slate-800">
                    <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                    <tr>
                        <th class="py-5 px-3">No</th>
                        <th>Id Nota</th>
                        <th>Jenis Nota</th>
                        <th>Keterangan</th>
                        <th>Jumlah</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($details as $index => $item)
                        <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                            <td class="py-2.5">{{ $index + 1 }}</td>
                            <td class="py-2.5">{{ $item->nota_id }}</td>
                            <td class="py-2.5">{{ $item->jenis }}</td>
                            <td class="py-2.5">{{ $item->keterangan }}</td>
                            <td class="py-2.5">{{ $item->jumlah }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
