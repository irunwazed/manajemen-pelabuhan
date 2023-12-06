@extends('layouts.admin')
@section('title', 'Aneka Usaha')
@section('content')
<div class="" action="{{url('lahansewaList',$id)}}">
    <div class="text-2xl ">Aneka Usaha / Sewa Bunker / Cetak Pranota</div>
    <hr class="border-b-2 border-black border-solid">
    <div class="grid grid-cols-2 gap-4 pt-16 border-2">
        <div class="">
            <table>
                <tr>
                    <td>PT PELABUHAN INDONESIA IV</td>
                </tr>
                <tr>
                    <td>CABANG: </td>
                </tr>
            </table>
        </div>
        <div class="">
            <table>
                <tr>
                    <td>{{$nota->nama_perusahaan}}</td>
                </tr>
                <tr>
                    <td>TGL CETAK: {{date('d-m-Y')}}</td>
                </tr>
            </table>
        </div>
    </div>
    <hr class="border-b-2 border-black border-solid">

    <div class="text-center">DAFTAR PERHITUNGAN TAGIHAN PENYEWAAN TANAH DAN BANGUNAN
    </div>
    <div class="grid grid-cols-2 gap-2 pt-16">
        <div>
            <table>
                <tr>
                    <td>No. Pranota</td>
                    <td> :{{date('Y').".0000".$nota->au_lahan_id}}</td>
                </tr>
                <tr>
                    <td>No. Kontrak </td>
                    <td>: {{$nota->no_kontrak}}</td>
                </tr>
                <tr>
                    <td>Tgl. Kontrak </td>
                    <td>: {{$nota->tgl_kontrak}}</td>
                </tr>
                <tr>
                    <td>Periode Pemakaian </td>
                    <td>: {{$nota->periode_pakai_mulai}} S/D {{$nota->periode_pakai_selesai}}</td>
                </tr>
            </table>
        </div>
        <div class="text-right">
            <table>
                <tr>
                    <td>Kepada YTH :</td>
                    <td>{{$nota->contact_person}}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="text-center mb-3 mt-5">
        <div>
            <table class="mt-5 w-full border-solid border-2 text-white border-slate-1000">
                <thead class=" bg-gradient-to-r from-cyan-700 to-cyan-800  py-5 " style="color: black">
                    <tr>
                        <th>Pemakaian</th>
                        <th>Jangka Waktu</th>
                        <th>Luas M2</th>
                        <th>Tarif Rp.</th>
                        <th>Jumlah Sewa Rp.</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>

                    <tr class="border-solid border-2 border-slate-800" style="color: black" ;>
                        <td>{{$nota->jenis_properti}}</td>
                        <td>{{$nota->jangka_waktu}}</td>
                        <td>{{$nota->luas_lahan}}</td>
                        <td>{{$nota->tarif}}</td>
                        <td>{{$nota->biaya_sewa}}</td>
                        <td>{{$nota->keterangan}}</td>
                    </tr>
                    <tr class=" border-solid border-2 border-slate-800 hover:bg-slate-300" style="color: black">
                        <td colspan="4" style="text-align: left;">Jumlah Seluruhnya</td>
                        <td></td>
                        <td colspan="2" style="text-align:left ;">{{$nota->biaya_sewa}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div>Terbilang</div>
    <div class="text-start" style="align-content:center ;">
        <a target="_blank" href='{{url("admin/aneka-usaha/create-pdf/$nota->au_lahan_id")}}'><button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"> Create</button></a>
        <a href="{{url('admin/aneka-usaha/permohonan-sewa-bunker')}}"><button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Kembali</button></a>
    </div>
</div>
@endsection

@section(' script') @endsection