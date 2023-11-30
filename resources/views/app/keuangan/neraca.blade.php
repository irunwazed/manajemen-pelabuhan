@extends('layouts.admin')
@section('title', 'Neraca')
@section('content')

    <div class="">
        <div class="text-2xl ">Neraca</div>
        <hr class="border-b-2 border-black border-solid">
        <div class="mb-3 mt-5">
            <div>
                <table class="mt-5 w-full border-solid border-2 border-slate-800">
                    <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                    <tr>
                        <th>Kode Rekening</th>
                        <th>Nama Rekening</th>
                        <th class="text-right">Debit</th>
                        <th class="text-right">Kredit</th>
                        <th class="text-right">Saldo</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($neraca as $index => $item)
                        <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                            <td>{{ $item->kode_rekening }}</td>
                            <td>{{ $item->nama_rekening }}</td>
                            <td class="text-right">{{ number_format($item->debit, 0, ',', '.') }}</td>
                            <td class="text-right">{{ number_format($item->kredit, 0, ',', '.') }}</td>
                            <td class="text-right">{{ number_format($item->saldo, 0, ',', '.') }}</td>
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
