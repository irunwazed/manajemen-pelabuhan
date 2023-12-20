@extends('layouts.admin')
@section('title', 'Aneka Usaha')
@section('content')
<div class="" action="">

    <div class="text-2xl ">Aneka Usaha / Sewa Bunker / List Pranota</div>
    <hr class="border-b-2 border-black border-solid">

    <div class="text-center mb-3 mt-5">

        <div>
            <table class="mt-5 w-full border-solid border-2 text-black border-slate-800">
                <thead class=" bg-gradient-to-r from-cyan-700 to-white-800  py-5">
                    <tr>
                        <th class="py-5 px-3">No Kon</th>
                        <th>Pemakaian</th>
                        <th>Jangka Waktu</th>
                        <th>Luas M2</th>
                        <th>Tarif Rp.</th>
                        <th>Jumlah Sewa Rp.</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>


                <!-- <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300" style="text-decoration-skip: black;"> -->
                @foreach($toPranota as $nota)
                <tr>
                    <td>{{$nota->no_kontrak}}</td>
                    <td>{{$nota->jenis_properti}}</td>
                    <td>{{$nota->jangka_waktu}}</td>
                    <td>{{$nota->luas_lahan}}</td>
                    <td>{{$nota->tarif}}</td>
                    <td>{{$nota->biaya_sewa}}</td>
                    <td>{{$nota->keterangan}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div>Terbilang</div><br>
    <div class="text-start" style="align-content:center ;">
        <a><button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"> Create</button></a>
        <a href=""><button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Kembali</button></a>
    </div>
</div>
@endsection

@section('script')
@endsection