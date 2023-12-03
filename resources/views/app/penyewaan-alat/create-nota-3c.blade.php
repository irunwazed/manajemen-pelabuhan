@extends('layouts.admin')
@section('title', 'Penyewaan Alat')
@section('content')

<style>
    .custom-table-container {
        display: flex;
        justify-content: flex-end;
    }

    .custom-table {
        table-layout: fixed;
        width: 100%;
    }
</style>

    <div class="">
        <div class="text-2xl ">
            Penyewaan Alat /
            <a href="{{url($user.'/penyewaan-alat/nota-3c')}}"> Nota 3C </a>
            / Create Nota 3C
        </div>

        <hr class="border-b-2 border-black border-solid">

        <div class="flex h-40 gap-4 pt-16 mb-5">
            <div class="flex-grow">
                <table class="w-full">
                    <tr>
                        <td class="font-bold">PT. PELABUHAN INDONESIA</td>
                    </tr>
                    <tr>
                        <td class="font-bold">CABANG: </td>
                    </tr>
                </table>
            </div>
            <div class="flex-grow custom-table-container">
                <div class="max-w-md">
                    <table class="w-full custom-table">
                        <tr>
                            <td class="w-3/12 font-bold">BENTUK</td>
                            <td class="w-1/12">:</td>
                            <td class="w-8/12">3C</td>
                        </tr>
                        <tr>
                            <td class="font-bold">NOMOR</td>
                            <td>:</td>
                            <td>
                                @if(empty($data->nonota3c)) 
                                <input type="text" class="mt-1 mb-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" placeholder="Nomor" id="nota3c" name="nota3c" value="">
                                <div class="msg"></div> 
                                @else {{ $data->nonota3c }} @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="font-bold">TGL CETAK</td>
                            <td>:</td>
                            <td><span class="tgl-cetak">{{$summary["tgl_cetak"]}}</span></td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>

        <hr class="border-b-2 border-black border-solid">
        <div class="font-bold text-2xl text-center pt-5 underline">PERHITUNGAN SEWA ALAT2 / RUPA2</div>
        <div class="text-2xl text-center">NOMOR PERMOHONAN: {{$data->noform_1c}}</div>

        <div class="flex justify-start items-start pt-16">
            <div class="max-w-md">
                <table class="w-full">
                    <tr>
                        <td class="font-semibold">No. Bukti 2C</td>
                        <td class="px-4">:</td>
                        <td>{{$data->noform_2c}}</td>
                    </tr>
                    <tr>
                        <td class="font-semibold">Perusahaan</td>
                        <td class="px-4">:</td>
                        <td>{{$data->nama_perusahaan}}</td>
                    </tr>
                    <tr>
                        <td class="font-semibold">Keterangan / Kapal</td>
                        <td class="px-4">:</td>
                        <td>{{$data->nama_kapal}}</td>
                    </tr>
                </table>
            </div>
        </div>


        <div class="mb-3 mt-5 pt-5 ">
            <div class="text-center ">
                <table class="mt-5 w-full border-solid border-2 border-slate-800">
                    <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                        <tr >
                            <th class="py-5 px-3">No. SPK</th>
                            <th>Nama Alat</th>
                            <th>Tarif</th>
                            <th>Waktu Pakai</th>
                            <th>Lama Pakai</th>
                            <th>Jumlah Sewa Lumpsum</th>
                            <th>Satuan Tarif</th>
                            <th>Harga Sewa Lumpsum</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dataDetail as $index => $item)
                            <tr class="text-center border-solid border-2 border-slate-800 hover:bg-slate-300">
                                <td>-</td>
                                <td>{{ $item->nama_alat }}</td>
                                <td>{{ $item->tarif_alat }}</td>
                                <td>{{ $item->tgl_mulai_mohon }} - {{ $item->tgl_selesai_mohon }}</td>
                                <td>{{ $item->waktu_pakai }}</td>
                                <td>{{ $item->jumlah_alat }}</td>
                                <td>{{ $item->satuan_tarif }}</td>
                                <td>{{ $item->harga_sewa }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="flex-grow custom-table-container">
                <div class="max-w-md">
                    <table class="w-full custom-table mt-5">
                        <tr>
                            <td class="w-5/12 ">Jumlah Istirahat</td>
                            <td class="w-1/12">:</td>
                            <td class="w-6/12">{{ $summary["sum_istirahat"] }}</td>
                        </tr>
                        <tr>
                            <td class="">Jumlah Hambatan</td>
                            <td>:</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td class="">Jumlah Penambahan</td>
                            <td>:</td>
                            <td>{{ $summary["sum_penambahan"] }}</td>
                        </tr>
                        <tr>
                            <td class="">Total Jam</td>
                            <td>:</td>
                            <td>{{ $summary["sum_total_jam"] }}</td>
                        </tr>
                        <tr>
                            <td class="">Biaya Alat</td>
                            <td>:</td>
                            <td>{{ $summary["sum_biaya_alat"] }}</td>
                        </tr>
                        <tr>
                            <td class="">Biaya Lump Sum</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="3" class="border-t-2 border-black pt-5"></td>
                        </tr>
                        <tr>
                            <td class="font-bold">Total Biaya Alat</td>
                            <td>:</td>
                            <td>{{ $summary["sum_biaya_alat"] }}</td>
                        </tr>
                        <tr>
                            <td class="font-bold">PPN 10</td>
                            <td>:</td>
                            <td>{{ $summary["ppn10"] }}</td>
                        </tr>
                        <tr>
                            <td class="font-bold">Total Biaya Tagihan</td>
                            <td>:</td>
                            <td>{{ $summary["total_biaya"] }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        <div>
        <div class="text-start mt-3">
            <div class="msg-api float-right text-right mr-8 ">
                <p class="text-green-500"></p>
            </div>
            @if(empty($data->nonota3c)) 
                <button type="submit" class="submit-nota-c3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create</button>
            @endif
            <a href="{{url($user.'/penyewaan-alat/nota-3c')}}" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">KEMBALI</a>
        </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    var pbauAlat1cId = '{{ $data->pbau_alat_1c_id }}';
    $(document).on('click', '.submit-nota-c3', function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();

        var nota3c = $('#nota3c').val();
        if (!nota3c) {
            $('html, body').animate({
                scrollTop: $('.custom-table').offset().top
            }, 'slow');

            $('.msg').html('<p class="text-red-500">Nomor is required</p>').show();
            setTimeout(function(){
                $('.msg').fadeOut();
            },1200);
            return;
        }

        var formData = $(this).serializeArray();
        formData.push({ name: 'id', value: pbauAlat1cId });
        formData.push({ name: 'nota3c', value: $("#nota3c").val() });
        formData.push({ name: 'tglCetakNota3c', value: $(".tgl-cetak").text() });

        var url      = '{{ url($user."/penyewaan-alat/submit-nota-3c/") }}' + '/{{ $data->pbau_alat_1c_id }}';

        $.ajax({
            type: 'POST',
            url: url, 
            data: formData,
            success: function (response) {
                window.location.href = "{{url($user.'/penyewaan-alat/nota-3c')}}";
            },
            error: function (error) {
                $('.msg-api').html('<p class="text-red-500">Error submitting the form</p>').show();
                setTimeout(function(){
                    $('.msg-api').fadeOut();
                },1200);
            }
        });
    });
</script>
@endsection
