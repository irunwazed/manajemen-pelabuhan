@extends('layouts.admin')
@section('title', 'Penyewaan Alat')
@section('content')
    <div class="">
        <div class="text-2xl ">
            Penyewaan Alat /
            <a href="{{url('admin/penyewaan-alat/nota-4c')}}"> Nota 4C </a>
            / Create Nota 4C
        </div>

        <hr class="border-b-2 border-black border-solid">
        <div class="font-bold text-2xl text-center pt-5 ">NOTA PENJUALAN JASA PELABUHAN</div>

        <div class="h-56 grid grid-cols-2 gap-4 content-center pt-16">
            <div>
                <table class="w-full">
                    <tr  class="text-start mb-4">
                        <td>DEBITUR</td>
                    </tr>
                    <tr  class="text-start mb-4">
                        <td>PERUSAHAAN</td>
                    </tr>
                    <tr  class="text-start mb-4">
                        <td>ALAMAT</td>
                    </tr>
                    <tr  class="text-start mb-4">
                        <td>NPWP</td>
                    </tr>
                </table>
            </div>
            <div>
                <table class="w-full">
                    <tr  class="text-start mb-4">
                        <td>KAPAL</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr  class="text-start mb-4">
                        <td>No From 1C</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr  class="text-start mb-4">
                        <td>2B2/Nota 3B</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr  class="text-start mb-4">
                        <td>Nota 4B</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="mb-3 mt-5 pt-5 ">
            <div class="text-center ">
                <table class="mt-5 w-full border-solid border-2 border-slate-800">
                    <thead class=" bg-gradient-to-r from-cyan-700 to-cyan-800 text-white py-5">
                        <tr >
                            <th class="py-5 px-3">No</th>
                            <th>Uraian Jasa</th>
                            <th>Biaya</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr class="border-solid border-2 border-slate-800 bg-slate-200 hover:bg-slate-300">
                        <td>XXXX</td>
                        <td>Pengangkutan</td>
                        <td>100.000</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <table class="w-full">
                    <tr  class="text-start mb-4">
                        <td>Jumlah</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr  class="text-start">
                        <td class="">PPN</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr  class="text-start">
                        <td>Materai</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr  class="text-start">
                        <td>Total Biaya</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div class="text-start">
                <button class="btn mt-6 bg-blue-600 text-blue-100 hover:bg-purple-600">Create</button>
                <a href="{{url('admin/penyewaan-alat/nota-4c')}}" class="btn mt-6 bg-warning text-blue-100 hover:bg-purple-600">Kembali</a>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection