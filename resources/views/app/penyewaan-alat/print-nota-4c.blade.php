@extends('layouts.print')
@section('title', 'Penyewaan Alat')
@section('content')

    <div class="text-[12px]">
        <div class="font-bold text-2xl text-center pt-5">NOTA PENJUALAN JASA PELABUHAN</div>
        <div class="h-56 grid grid-cols-2 gap-4 content-center pt-5">
            <div>
                <table class="w-full">
                    <tr class="text-start mb-4">
                        <td class="w-3/12">DEBITUR</td>
                        <td style="width:2%">:</td>
                        <td class="w-8/12"></td>
                    </tr>
                    <tr  class="text-start mb-4">
                        <td>PERUSAHAAN</td>
                        <td>:</td>
                        <td>{{ $companies->nama_perusahaan }}</td>
                    </tr>
                    <tr  class="text-start mb-4">
                        <td>ALAMAT</td>
                        <td>:</td>
                        <td>{{ $companies->alamat }}</td>
                    </tr>
                    <tr  class="text-start mb-4">
                        <td>NPWP</td>
                        <td>:</td>
                        <td>{{ $companies->npwp }}</td>
                    </tr>
                </table>
            </div>
            <div>
                <table class="w-full">
                    <tr  class="text-start mb-4">
                        <td class="w-3/12">KAPAL</td>
                        <td style="width:2%">:</td>
                        <td class="w-8/12">{{ $ships->nama_kapal }}</td>
                    </tr>
                    <tr  class="text-start mb-4">
                        <td>No Form 1C</td>
                        <td>:</td>
                        <td>{{ $data->noform_1c }}</td>
                    </tr>
                    <tr  class="text-start mb-4">
                        <td>2B2/Nota 3B</td>
                        <td>:</td>
                        <td>{{ $data->nonota3c ?? '' }}</td>
                    </tr>
                    <tr  class="text-start mb-4">
                        <td>Nota 4B</td>
                        <td>:</td>
                        <td>{{ $data->nonota4c ?? '' }}</td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="mb-3 mt-5">
            <div class="text-center ">
                <table class="mt-5 w-full border-solid border-2 border-slate-800">
                    <thead class="bg-slate-200 text-black py-5">
                        <tr >
                            <th class="py-5 px-3">No</th>
                            <th>Uraian Jasa</th>
                            <th>Biaya</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                        <td>1</td>
                        <td>Penyewaan Alat</td>
                        <td>{{ $summary["sum_biaya_alat"] }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex-grow custom-table-container">
                <div class="max-w-md">
                    <table class="w-full custom-table mt-5">
                        <tr>
                            <td class="w-5/12 ">Jumlah</td>
                            <td class="w-1/12">:</td>
                            <td class="w-6/12">{{ $summary["sum_biaya_alat"] }}</td>
                        </tr>
                        <tr>
                            <td class="">PPN</td>
                            <td>:</td>
                            <td>{{ $summary["ppn10"] }}</td>
                        </tr>
                        <tr>
                            <td class="">Materai</td>
                            <td>:</td>
                            <td>{{ $summary["materai"] }}</td>
                        </tr>
                        <tr>
                            <td class="">Total Biaya</td>
                            <td>:</td>
                            <td>{{ $summary["total_biaya"] }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

