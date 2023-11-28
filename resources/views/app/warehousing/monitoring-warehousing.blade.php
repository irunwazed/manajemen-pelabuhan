@extends('layouts.admin')

@section('title', 'Monitoring Gudang')

@section('content')
    <div class="">
        <div class="text-2xl ">Warehousing / Monitoring Gudang</div>
        <hr class="border-b-2 border-black border-solid">
        <div class="font-bold text-2xl text-center pt-5">MONITORING GUDANG</div>

        <div class="text-center mb-3 mt-5">
            <div>
                <table class="mt-5 w-full border-solid border-2 border-slate-800">
                    <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                        <tr>
                            <th class="py-5 px-3">Lokasi</th>
                            <th>Posisi</th>
                            <th>Kapasitas</th>
                            <th>Load</th>
                            <th>Available</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                            <td>1</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>10</td>
                            <td bgcolor="green">5</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="font-bold text-2xl">
            <table>
                <tr>
                    <td bgcolor="green" width="70">&nbsp;</td>
                    <td>&nbsp;&nbsp;Available</td>
                </tr>
                <tr>
                    <td bgcolor="red" width="70">&nbsp;</td>
                    <td>&nbsp;&nbsp;Full</td>
                </tr>
            </table>
        </div>

    </div>
@endsection

@section('script')

@endsection
