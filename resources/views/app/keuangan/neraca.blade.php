@extends('layouts.admin')
@section('title', 'Neraca')
@section('content')

    <div class="">
        <div class="text-2xl ">Neraca</div>
        <hr class="border-b-2 border-black border-solid">
        <form id="filter-neraca" method="get">
            <div class="grid grid-cols-4 gap-2 pt-16">
                <div class="text-start w-full">
                    <div>
                        <label>KODE REKENING</label>
                    </div>
                    <div>
                        <input type="text" value="{{$kodeRekening}}" name="kode_rekening" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <div class="text-start">
                    <div>
                        <button class="text-white mt-6 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Search</button>
                        <button class="text-white mt-6 bg-red-600 hover:bg-blue-800 focus:ring-4 focus:bg-red-600 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-600 focus:outline-none dark:focus:bg-red-600" onclick="resetForm()" >Reset</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="mb-3 mt-5">
            <div>
                <table class="mt-5 w-full border-solid border-2 border-slate-800">
                    <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                    <tr>
                        <th>Kode Rekening</th>
                        <th>Nama Rekening</th>
                        <th class="text-right">Debit</th>
                        <th class="text-right">Kredit</th>
{{--                        <th class="text-right">Saldo</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($neraca as $index => $item)
                        <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                            <td>{{ $item->kode_rekening }}</td>
                            <td>{{ $item->nama_rekening }}</td>
                            <td class="text-right">{{ number_format($item->debit, 0, ',', '.') }}</td>
                            <td class="text-right">{{ number_format($item->kredit, 0, ',', '.') }}</td>
{{--                            <td class="text-right">{{ number_format($item->saldo, 0, ',', '.') }}</td>--}}
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
@endsection

@section('script')
@endsection
