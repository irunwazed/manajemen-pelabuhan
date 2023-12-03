@extends('layouts.admin')
@section('title', 'Penyewaan Alat')
@section('content')
    <div class="">
        <div class="text-2xl ">
            Penyewaan Alat /
            <a href="{{url($user.'/penyewaan-alat/nota-4c')}}"> Nota 4C </a>
            / Create Nota 4C
        </div>

        <hr class="border-b-2 border-black border-solid">
        <div class="font-bold text-2xl text-center pt-5 ">NOTA PENJUALAN JASA PELABUHAN</div>

        <div class="h-56 grid grid-cols-2 gap-4 content-center pt-16">
            <div>
                <table class="w-full">
                    <tr  class="text-start mb-4">
                        <td class="w-3/12 ">DEBITUR</td>
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
                        <td>{{ $summary["total_biaya"] }}</td>
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
                            <td class="w-6/12">{{ $summary["total_biaya"] }}</td>
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
            <div class="text-start mt-10">
                <button type="submit" class="submit-nota-4c text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                @if(empty($data->nonota3c) || empty($data->nonota4c))
                    Create
                @else
                    Print
                @endif
                </button>
                <a href="{{url($user.'/penyewaan-alat/nota-4c')}}" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">KEMBALI</a>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    var pbauAlat1cId = '{{ $data->pbau_alat_1c_id }}';
    var nonota3c     = '{{ $data->nonota3c }}';
    var firstSubmitPrint  = false;

    $(document).on('click', '.submit-nota-4c', function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();

        var formData = $(this).serializeArray();
        formData.push({ name: 'id', value: pbauAlat1cId });
        formData.push({ name: 'nota4c', value: nonota3c + "/inv/00001" });

        if(firstSubmitPrint === true){
            formData.push({ name: 'firstSubmitPrint', value: "T" });
        } else {
            formData.push({ name: 'firstSubmitPrint', value: "F" });
        }

        var url      = '{{ url($user."/penyewaan-alat/submit-nota-4c/") }}' + '/{{ $data->pbau_alat_1c_id }}';

        $.ajax({
            type: 'POST',
            url: url, 
            data: formData,
            success: function (response) {
                $('.submit-nota-4c').text("Print");

                var inv = "{{url($user.'/penyewaan-alat/nota-4c/invoice/')}}" + '/{{ $data->pbau_alat_1c_id }}';
                window.open(inv,'Invoice', 'width=800, height=700');
                return false;
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
