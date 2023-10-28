@extends('layouts.admin')
@section('title', 'Aneka Usaha')
@section('content')
    <div class="">
        <div class="text-2xl ">Aneka Usaha / Permohonan Sewa Tanah Dan Bangunan / Create Pranota</div>
        <hr class="border-b-2 border-black border-solid">

        <div class="grid grid-cols-2 gap-4 pt-16 border-2">
            <div class="">
                <table>
                    <tr>
                        <td>PT PELABUHAN INDONESIA IV</td>
                    </tr>
                    <tr>
                        <td>CABANG:</td>
                    </tr>
                </table>
            </div>
            <div class="">
                <table>
                    <tr>
                        <td>APLIKASI ANEKA USAHA</td>
                    </tr>
                    <tr>
                        <td>TGL CETAK: 17-102023 00:50</td>
                    </tr>
                </table>
            </div>
        </div>
        <hr class="border-b-2 border-black border-solid">

        <div class="text-center">
            <span class="font-bold">DAFTAR PERHITUNGAN TAGIHAN PENYEWAAN TANAH DAN BANGUNAN</span>
        </div>
        <div class="grid grid-cols-2 gap-2 pt-16">
            <div>
                <table>
                    <tr>
                        <td>No. Pranota</td>
                    </tr>
                    <tr>
                        <td>No. Kontrak</td>
                    </tr>
                    <tr>
                        <td>Tgl. Kontrak</td>
                    </tr>
                    <tr>
                        <td>Periode Pemakaian</td>
                    </tr>
                </table>
            </div>
            <div class="text-right">
                <table>
                    <tr>
                        <td>Kepada YTH</td>
                    </tr>
                </table>
            </div>
        </div>


        <div class="text-center mb-3 mt-5">
            <div>
                <table class="mt-5 w-full border-solid border-2 text-white border-slate-800">
                    <thead class=" bg-gradient-to-r from-cyan-700 to-cyan-800  py-5">
                        <tr>
                            <th class="py-5 px-3">No</th>
                            <th>Pemakaian</th>
                            <th>Jangka Waktu</th>
                            <th>Luas M2</th>
                            <th>Tarif Rp.</th>
                            <th>Jumlah Sewa Rp.</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                        <td colspan="7">Jumlah Seluruhnya</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div>Terbilang</div>
        <div class="text-start">
            <a class="font-semibold py-1 px-6 rounded-md hover:opacity-80 mt-6 bg-blue-600 text-blue-100 hover:bg-purple-600">Create</a>
            <a href="{{url('admin/aneka-usaha/permohonan-sewa-lahan')}}" class="font-semibold py-1 px-6 rounded-md hover:opacity-80 mt-6 bg-blue-600 text-blue-100 hover:bg-purple-600">Kembali</a>
        </div>
    </div>
@endsection

@section('script')
@endsection
