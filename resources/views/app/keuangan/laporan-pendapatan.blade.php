@extends('layouts.admin')
@section('title', 'Neraca')
@section('content')

    <div class="">
        <div class="text-2xl print-section">Laporan Pendapatan</div>
        <hr class="border-b-2 border-black border-solid print-section">
        <form id="filter-neraca" method="get">
            <div class="grid grid-cols-3 gap-2 pt-16">
                <div class="text-start w-full">
                    <div>
                        <label>CARI</label>
                    </div>
                    <div>
                        <input type="text" value="{{$search}}" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <div class="text-start">
                    <div>
                        <button class="text-white mt-6 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Search</button>
                        <button class="text-white mt-6 bg-red-600 hover:bg-blue-800 focus:ring-4 focus:bg-red-600 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-600 focus:outline-none dark:focus:bg-red-600" onclick="resetForm()" >Reset</button>
                    </div>
                </div>
                <div class="text-start w-full flex justify-end">
                    <button onclick="window.print()" class="text-white mt-6 bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">
                        Print
                    </button>
                </div>
            </div>
        </form>
        <div class="mb-3 mt-5 print-section">
            <div>
                <table class="mt-5 w-full border-solid border-2 border-slate-800">
                    <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                    <tr>
                        <th>Tanggal</th>
                        <th>Nama Perusahaan</th>
                        <th>Kode Rekening</th>
                        <th>Nama Rekening</th>
                        <th>Keterangan</th>
                        <th class="text-right">Jumlah</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($laporan as $index => $item)
                        <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->nama_perusahaan }}</td>
                            <td>{{ $item->kode_rekening }}</td>
                            <td>{{ $item->nama_rekening }}</td>
                            <td>{{ $item->keterangan }}</td>
                            <td class="text-right">{{ number_format($item->jumlah, 0, ',', '.') }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        function resetForm() {
            Array.prototype.slice.call(
                document.getElementsByTagName('input'))
                .forEach(function (el) {
                    el.value = '';
                });
        }
    </script>
    <style>
        @media print {
            body * {
                visibility: hidden;
            }
            .print-section, .print-section * {
                visibility: visible;
            }
            .print-section {
                position: absolute;
                left: 0;
                top: 0;
            }
        }
    </style>
@endsection

@section('script')
@endsection
