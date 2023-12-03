@extends('layouts.admin')
@section('title', 'Penyewaan Alat')
@section('content')
<style>
    .pagination > .disabled, .pagination > .disabled:hover{
        margin-left: 10px;
        margin-right: 10px;
        background: none;
        color: #000;
    }
    .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }

    .pagination a {
        padding: 10px 15px;
        margin: 0 5px;
        text-decoration: none;
        color: #fff;
        background: linear-gradient(45deg, #3498db, #3498db);
        border: 1px solid #3498db;
        border-radius: 5px;
        transition: background 0.3s, color 0.3s, transform 0.3s;
        box-shadow: 0 2px 5px rgba(52, 152, 219, 0.2);
    }

    .pagination a:hover {
        background: linear-gradient(45deg, #2980b9, #2980b9);
        color: #fff;
        transform: scale(1.05);
    }

    .button-style {
        /* Add your common button styles here */
        font-medium: rounded-lg;
        text-sm: px-10 py-2.5;
        mr-2: mb-2;
        dark:bg-blue-600: dark:hover:bg-blue-700;
        focus:outline-none: dark:focus:ring-blue-800;
    }

    /* Enabled button style */
    .tambah-alat, .edit-alat{
        @extend .button-style; /* Include common styles */
        type: submit;
        class: tambah-alat;
        bg-blue-700: hover:bg-blue-800;
        focus:ring-4: focus:ring-blue-300;
    }

    /* Disabled button style */
    .tambah-alat:disabled, .edit-alat:disabled {
        @extend .button-style; /* Include common styles */
        background-color: gray;
        cursor: not-allowed; /* Set background color to gray and change cursor */
    }

    .selected-row {
        background: #bbf7d0 !important;
    }

</style>
<div class="">
    <div class="text-2xl ">
        Penyewaan Alat /
        <a href="{{url($user.'/penyewaan-alat/bukti-2c')}}"> Bukti 2C </a>
        / Realisasi
    </div>
    <hr class="border-b-2 border-black border-solid">
    <div class="font-bold text-2xl text-center pt-5">FORM BUKTI 2C - PENYEWAAN ALAT</div>
    <div>
        <form id="permohonan-form">
            <div class="grid grid-cols-2 gap-4 content-center pt-16 pb-16 border-b-2 border-solid border-black">
                <div>
                    <table class="w-full">
                        <tr class="text-start mb-4">
                            <td>No Form 1C</td>
                            <td>:</td>
                            <td class="py-1">
                                <div class="">
                                    <div class="col-span-2">
                                        <input type="text" disabled="disabled" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" placeholder="No Form 1C" id="no_form_1c" name="no_form_1c" value="{{ $data->noform_1c ?? '' }}">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="text-start mb-4">
                            <td>No Form 2C</td>
                            <td>:</td>
                            <td class="py-1">
                                <div class="">
                                    <div class="col-span-2">
                                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" placeholder="No Form 2C" id="no_form_2c" name="no_form_2c" value="{{ $data->noform_2c ?? '' }}">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="text-start">
                            <td class="pt-10">PERUSAHAAN</td>
                            <td class="pt-10">:</td>
                            <td class="pt-10">
                                <select id="perusahaan" disabled="disabled" name="perusahaan" onchange="getPerusahaan(this)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="-">--Select--</option>
                                    @foreach($companies as $company)
                                        <option value="{{ $company->perusahaan_id }}" @if(is_object($data) && $data->perusahaan_id == $company->perusahaan_id) selected @endif>{{ $company->nama_perusahaan }}</option>
                                    @endforeach
                                </select>
                                <input type="hidden" id="nama_perusahaan" name="nama_perusahaan" value="{{ $data->nama_perusahaan ?? '' }}">
                            </td>
                        </tr>
                        <tr class="text-start">
                            <td>KAPAL</td>
                            <td>:</td>
                            <td class="py-1">
                                <select id="kapal" name="kapal" disabled="disabled" onchange="getKapal(this)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="-">--Select--</option>
                                    @foreach($ships as $ship)
                                        <option value="{{ $ship->kapal_id }}" @if(is_object($data) && $data->kapal_id == $ship->kapal_id) selected @endif>{{ $ship->nama_kapal }}</option>
                                    @endforeach
                                </select>
                                <input type="hidden" id="nama_kapal" name="nama_kapal" value="{{ $data->nama_kapal ?? '' }}">
                            </td>
                        </tr>
                        <tr class="text-start">
                            <td>KEPERLUAN</td>
                            <td>:</td>
                            <td class="py-1">
                                <select id="keperluan" name="keperluan" disabled="disabled" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="-" @if(is_object($data) && $data->keperluan == '-') selected @endif>--Select--</option>
                                    <option value="KOMERSIL" @if(is_object($data) && $data->keperluan == 'KOMERSIL') selected @endif>KOMERSIL</option>
                                    <option value="DINAS" @if(is_object($data) && $data->keperluan == 'DINAS') selected @endif>DINAS</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
                <div>
                    <table class="w-full">
                        <tr class="text-start mb-4">
                            <td>Tanggal 1C</td>
                            <td>:</td>
                            <td class="py-1">
                                <input type="date" id="tanggal_1c" name="tanggal_1c" disabled="disabled" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" value="{{ $data->tgl_noform_1c ?? '' }}">
                            </td>
                        </tr>
                        <tr class="text-start mb-4">
                            <td>Tanggal 2C</td>
                            <td>:</td>
                            <td class="py-1">
                                <input type="date" id="tanggal_2c" name="tanggal_2c" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" value="{{ $data->tgl_noform_2c ?? '' }}">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 content-center pt-16 alat-form">
                <div>
                    <table class="w-full">
                        <tr class="text-start">
                            <td>Tgl/Jam Mulai Realisasi</td>
                            <td>:</td>
                            <td class="py-1">
                                <div class="grid grid-cols-3 gap-2">
                                    <div class="col-span-2">
                                        <input type="date" id="date-start" name="date-start" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                                    </div>
                                    <div>
                                        <input type="time" id="time-start" name="time-start" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="text-start">
                            <td>Tgl/Jam Selesai Realisasi</td>
                            <td>:</td>
                            <td class="py-1">
                                <div class="grid grid-cols-3 gap-2">
                                    <div class="col-span-2">
                                        <input type="date" id="date-end" name="date-end" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                                    </div>
                                    <div>
                                        <input type="time" id="time-end" name="time-end" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="text-start">
                            <td colspan="3" class="pt-3">
                                <div class="w-full alat-form">
                                    <button id="update-tanggal" class="update-tanggal text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Update Tanggal</button>
                                    <div class="msg-api float-right text-right mr-8 ">
                                        <p class="text-green-500"></p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div>
                    <table class="w-full">
                    </table>
                </div>
            </div>
            <div class="grid grid-cols-2 pt-16 alat-form">
                <div class="bottom-0 left-0"><span class="text-2xl font-bold">List Alat</span></div>
            </div>
        </form>
    </div>
    <div class="text-center alat-form">
        <div class="">
            <table class="table-detail mt-3 w-full border-solid border-2 border-slate-800">
                <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                    <tr>
                        <th class="py-5 px-3">Kode Alat</th>
                        <th>Nama Alat</th>
                        <th>Jumlah</th>
                        <th>Satuan Trf</th>
                        <th>Tarif</th>
                        <th>Minimal Pakai</th>
                        <th>Tgl/Jam Mulai</th>
                        <th>Tgl/Jam Selesai</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            <div class="pagination">
                
            </div>
        </div>
        <div class="text-start mt-3">
            <a href="#" class="simpan-realisasi text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">SIMPAN</a>
            <a href="{{ url($user.'/penyewaan-alat/permohonan-1c') }}" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">KEMBALI</a>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    
    $(document).ready(function () {
        $('.msg-api').hide();
    });

    var pbauAlat1cId       = '{{$data->pbau_alat_1c_id ?? null}}';

    fetchData(1, pbauAlat1cId);
    fetchDataTanggal();

    var buttonAlat = "tambah";

    // Handle pagination link clicks
    $(document).on('click', '.pagination a', function (event) {
        event.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        fetchData(page);
    });

    $(document).on('click', '.update-tanggal', function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();

        var errorCount = 0;

        // Validate Tgl/Jam Mulai
        var dateStart = $('#date-start').val();
        var timeStart = $('#time-start').val();
        if (!dateStart || !timeStart) {
            displayErrorMessage('Please provide both tgl and jam for the start.', 'date-start');
            errorCount++;
        }

        // Validate Tgl/Jam Selesai
        var dateEnd = $('#date-end').val();
        var timeEnd = $('#time-end').val();
        if (!dateEnd || !timeEnd) {
            displayErrorMessage('Please provide both tgl and jam for the end.', 'date-end');
            errorCount++;
        }

        if(errorCount >= 1){
            return;
        }
        
        // Combine date and time values for start
        var dateTimeStart = dateStart + ' ' + timeStart;

        // Combine date and time values for end
        var dateTimeEnd = dateEnd + ' ' + timeEnd;

        // Create the data object by combining date and time values
        var formData = $(this).serializeArray();
        formData.push({ name: 'tgl_mulai_realisasi', value: dateTimeStart });
        formData.push({ name: 'tgl_selesai_realisasi', value: dateTimeEnd });
        formData.push({ name: 'id', value: pbauAlat1cId });

        var url      = '{{ url($user."/penyewaan-alat/submit-realisasi-bukti-1c/") }}' + '/{{ $data->pbau_alat_1c_id ?? 'noid' }}';

        $.ajax({
            type: 'POST',
            url: url, 
            data: formData,
            success: function (response) {
                $('.msg-api').html('<p class="text-green-500">'+response.message+'</p>').show();
                setTimeout(function(){
                    $('.msg-api').fadeOut();
                },1200);
            },
            error: function (error) {
                $('.msg-api').html('<p class="text-red-500">Error submitting the form</p>').show();
                setTimeout(function(){
                    $('.msg-api').fadeOut();
                },1200);
            }
        });
    });

    $(document).on('click', '.simpan-realisasi', function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();

        var errorCount = 0;

        // Validate No Form 2C
        var noForm2C = $('#no_form_2c').val();
        if (!noForm2C) {
            displayErrorMessage('No Form 2C is required.', 'no_form_2c');
            errorCount++;
        }

        // Validate Tanggal 2C
        var tanggal2C = $('#tanggal_2c').val();
        if (!tanggal2C) {
            displayErrorMessage('Tanggal 2C is required.', 'tanggal_2c');
            errorCount++;
        }

        // Validate Tgl/Jam Mulai
        var dateStart = $('#date-start').val();
        var timeStart = $('#time-start').val();
        if (!dateStart || !timeStart) {
            displayErrorMessage('Please provide both tgl and jam for the start.', 'date-start');
            errorCount++;
        }

        // Validate Tgl/Jam Selesai
        var dateEnd = $('#date-end').val();
        var timeEnd = $('#time-end').val();
        if (!dateEnd || !timeEnd) {
            displayErrorMessage('Please provide both tgl and jam for the end.', 'date-end');
            errorCount++;
        }

        if(errorCount >= 1){
            return;
        }
        
        // Combine date and time values for start
        var dateTimeStart = dateStart + ' ' + timeStart;

        // Combine date and time values for end
        var dateTimeEnd = dateEnd + ' ' + timeEnd;

        // Create the data object by combining date and time values
        var formData = $(this).serializeArray();
        formData.push({ name: 'tgl_mulai_realisasi', value: dateTimeStart });
        formData.push({ name: 'tgl_selesai_realisasi', value: dateTimeEnd });
        formData.push({ name: 'no_form_2c', value: noForm2C });
        formData.push({ name: 'tgl_noform_2c', value: tanggal2C });
        formData.push({ name: 'id', value: pbauAlat1cId });

        var url      = '{{ url($user."/penyewaan-alat/submit-realisasi/") }}' + '/{{ $data->pbau_alat_1c_id ?? 'noid' }}';

        $.ajax({
            type: 'POST',
            url: url, 
            data: formData,
            success: function (response) {
                window.location.href = "{{ url($user.'/penyewaan-alat/bukti-2c') }}";
            },
            error: function (error) {
                $('.msg-api').html('<p class="text-red-500">Error submitting the form</p>').show();
                setTimeout(function(){
                    $('.msg-api').fadeOut();
                },1200);
            }
        });
    });

    function displayErrorMessage(message, elementId) {
        var errorDiv = $('<div>').addClass('error-message text-red-500 text-sm').text(message);
        $('#' + elementId).after(errorDiv);
    }

    function getAlat(sthis){
        $.ajax({
            type: 'GET',
            url: '{{ url($user."/penyewaan-alat/get-alat") }}', 
            data: {id: sthis.value},
            success: function (response) {
                if(response.code === 200){
                    $('#satuan_tarif').val(response.data.satuan_tarif);
                    $('#harga_alat').val(response.data.tarif_alat);

                    $('#minimal_pakai').val(response.data.min_pemakaian);
                    $('#alat_id').val(response.data.alat_id);
                    $('#nama_alat').val(response.data.nama_alat);
                }

            },
            error: function (error) {
                $('.msg-api').html('<p class="text-red-500">Error submitting the form</p>');
            }
        });
    }

    function getKapal(sthis){
        var selectedOption = sthis.options[sthis.selectedIndex];
        var selectedText = selectedOption.text;
        
        $('#nama_kapal').val(selectedText);
    }

    function getPerusahaan(sthis){
        var selectedOption = sthis.options[sthis.selectedIndex];
        var selectedText = selectedOption.text;
        
        $('#nama_perusahaan').val(selectedText);
    }

    function fetchData(page, id) {
        $.ajax({
            url: '{{ url($user."/penyewaan-alat/get-alat-detail") }}',
            type: 'GET',
            data: { page: page, id: id },
            dataType: 'json',
            success: function (data) {
                // Clear existing table rows
                $('.table-detail tbody').empty();
                if(data.data.length >= 1){
                    // Populate the table with the retrieved data
                    $.each(data.data, function (index, item) {
                        var row = '<tr class="border-solid border-2 border-slate-800 bg-slate-200 hover:bg-slate-300">';
                        row += '<td>' + item.kode_alat + '</td>';
                        row += '<td>' + item.nama_alat + '</td>';
                        row += '<td>' + item.jumlah_alat + '</td>';
                        row += '<td>' + item.satuan_tarif + '</td>';
                        row += '<td>' + item.tarif_alat + '</td>';
                        row += '<td>' + item.minimal_pakai + '</td>';
                        row += '<td>' + item.tgl_mulai_mohon + '</td>';
                        row += '<td>' + item.tgl_selesai_mohon + '</td>';
                        row += '<td>' + (item.tarif_alat * item.minimal_pakai) + '</td>';

                        row += '</tr>';
                        $('.table-detail tbody').append(row);
                    });
                    
                    // Update pagination links
                    updatePaginationLinks(data.links);
                } else {
                    var row = '<tr class="border-solid border-2 border-slate-800 bg-slate-200 hover:bg-slate-300"><td colspan="10">No Data</td></tr>';
                    $('.table-detail tbody').append(row);
                    $('.pagination').html("");
                }
            },
            error: function (error) {
                console.log('Error:', error);
            }
        });

        function updatePaginationLinks(pagination) {
            var linksHtml = '';
            if (pagination.prev_page_url) {
                linksHtml += '<a href="' + pagination.prev_page_url + '">Previous</a>';
            }
            for (var i = 1; i <= pagination.last_page; i++) {
                var activeClass = (i === pagination.current_page) ? 'disabled' : '';
                linksHtml += '<a href="' + pagination.path + '?page=' + i + '" class="' + activeClass + '">' + i + '</a>';
            }
            if (pagination.next_page_url) {
                linksHtml += '<a href="' + pagination.next_page_url + '">Next</a>';
            }
            $('.pagination').html(linksHtml);
        }

    }

    function fetchDataTanggal(){

        $.ajax({
            url: '{{ url($user."/penyewaan-alat/get-tanggal-detail") }}',
            type: 'GET',
            data: { id: pbauAlat1cId },
            dataType: 'json',
            success: function (data) {
                var data = data.data;

                $('#date-start').val(data.tgl_mulai_realisasi.split(' ')[0]);
                $('#time-start').val(data.tgl_selesai_realisasi.split(' ')[1]);
                $('#date-end').val(data.tgl_selesai_realisasi.split(' ')[0]);
                $('#time-end').val(data.tgl_selesai_realisasi.split(' ')[1]);

            },
            error: function (error) {
                console.log('Error:', error);
            }
        });
    }

</script>
@endsection