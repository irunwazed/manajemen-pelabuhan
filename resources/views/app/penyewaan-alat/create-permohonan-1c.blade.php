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
        <a href="{{url('admin/penyewaan-alat/permohonan-1c')}}"> Permohonan 1C </a>
        / @if(empty($data->tgl_noform_2c)) {{ $subName }}  @else View @endif Data
    </div>
    <hr class="border-b-2 border-black border-solid">
    <div class="font-bold text-2xl text-center pt-5">FORM PERMOHONAN 1C - PENYEWAAN ALAT</div>
    <div>
        <form id="permohonan-form">
            <div class="grid grid-cols-2 gap-4 content-center pt-16 pb-16 border-b-2 border-solid border-black">
                <div>
                    <table class="w-full">
                        <tr class="text-start mb-4">
                            <td>No Form 1C</td>
                            <td>:</td>
                            <td class="py-1">
                                <div class="grid grid-cols-3 gap-2">
                                    <div class="">
                                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" placeholder="Tahun" id="tahun" name="tahun" value="{{ $data->periode_1c ?? '' }}">
                                    </div>
                                    <div class="col-span-2">
                                        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" placeholder="No Form 1C" id="no_form_1c" name="no_form_1c" value="{{ $data->noform_1c ?? '' }}">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="text-start">
                            <td>PERUSAHAAN</td>
                            <td>:</td>
                            <td class="py-1">
                                <select id="perusahaan" name="perusahaan" onchange="getPerusahaan(this)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                                <select id="kapal" name="kapal" onchange="getKapal(this)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                                <select id="keperluan" name="keperluan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="-" @if(is_object($data) && $data->keperluan == '-') selected @endif>--Select--</option>
                                    <option value="KOMERSIL" @if(is_object($data) && $data->keperluan == 'KOMERSIL') selected @endif>KOMERSIL</option>
                                    <option value="DINAS" @if(is_object($data) && $data->keperluan == 'DINAS') selected @endif>DINAS</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="text-end">
                            <td colspan="3">
                                <button class="tambah-1c text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
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
                                <input type="date" id="tanggal_1c" name="tanggal_1c" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" value="{{ $data->tgl_noform_1c ?? '' }}">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 content-center pt-16 alat-form">
                <div>
                    <table class="w-full">
                        <tr class="text-start mb-4">
                            <td>Alat</td>
                            <td>:</td>
                            <td class="py-1">
                                <select id="alat" name="alat" onchange="getAlat(this)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="-">--Select--</option>
                                    @foreach($tools as $tool)
                                        <option value="{{ $tool->alat_id }}">{{ $tool->nama_alat }}</option>
                                    @endforeach
                                </select>
                                <input type="hidden" id="minimal_pakai" name="minimal_pakai">
                                <input type="hidden" id="nama_alat" name="nama_alat">
                            </td>
                            </td>
                        </tr>
                        <tr class="text-start">
                            <td>Tgl/Jam Mulai</td>
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
                            <td>Tgl/Jam Selesai</td>
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
                    </table>
                </div>
                <div>
                    <table class="w-full">
                        <tr class="text-start mb-4">
                            <td>Jumlah</td>
                            <td>:</td>
                            <td class="py-1">
                                <input type="text" id="jumlah_alat" name="jumlah_alat" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                            </td>
                        </tr>
                        <tr class="text-start mb-4">
                            <td>Satuan Tarif</td>
                            <td>:</td>
                            <td class="py-1">
                                <input type="text" id="satuan_tarif" name="satuan_tarif" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" readOnly="readOnly">
                            </td>
                        </tr>
                        <tr class="text-start mb-4">
                            <td>Harga</td>
                            <td>:</td>
                            <td class="py-1">
                                <input type="text" id="harga_alat" name="harga_alat" readOnly="readOnly" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="grid grid-cols-2 pt-16 alat-form">
                <div class="bottom-0 left-0"><span class="text-2xl font-bold">List Alat</span></div>
            </div>
            <div class="w-full alat-form">
                <button type="submit" id="tambah" class="tambah-alat text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah Alat</button>
                <button type="submit" id="edit" disabled="disabled" class="edit-alat text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit Alat</button>
                <div class="msg-api float-right text-right mr-8 ">
                    <p class="text-green-500"></p>
                </div>
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
                        <th @if(empty($data->tgl_noform_2c)) "" @else style='display:none' @endif >Aksi</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            <div class="pagination">
                
            </div>
        </div>
        <div class="text-start mt-3">
            <a href="{{ url('admin/penyewaan-alat/permohonan-1c') }}" class="simpan-bottom text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">SIMPAN</a>
            <a href="#" class="edit-1c text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">SIMPAN</a>
            <a href="{{ url('admin/penyewaan-alat/permohonan-1c') }}" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">KEMBALI</a>
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
    var tglNoForm2c       = '{{$data->tgl_noform_2c ?? null}}';
    var pbauAlat1cIdDetail = null;
    var alatId             = null;

    fetchData(1, pbauAlat1cId);

    var buttonAlat = "tambah";

    var subName  = '{{$subName}}';
    if(subName === "Buat"){
        $('.alat-form').hide();
        $('.edit-1c').hide();
        $('.tambah-1c').show();
    } else {
        $('.tambah-1c').hide();
        $('.edit-1c').show();
        $('.simpan-bottom').hide();
    }

    if(tglNoForm2c !== ""){
        $('.simpan-bottom, .tambah-1c, .edit-1c, .tambah-alat, .edit-alat').hide();
        $('input,select').prop("disabled",true);
    }

    // Handle pagination link clicks
    $(document).on('click', '.pagination a', function (event) {
        event.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        fetchData(page);
    });

    $('#permohonan-form').submit(function (e) {
        e.preventDefault();
        e.stopImmediatePropagation()

        // Clear previous error messages
        $('.error-message').remove();
        var errorCount = 0;

        // Validate Tanggal 1C
        var tahun = $('#tahun').val();
        if (!tahun) {
            displayErrorMessage('Tahun is required.', 'tahun');
            errorCount++;
        }

        // Validate No Form 1C
        var noForm1C = $('#no_form_1c').val();
        if (!noForm1C) {
            displayErrorMessage('No Form 1C is required.', 'no_form_1c');
            errorCount++;
        }

        // Validate PERUSAHAAN
        var perusahaan = $('#perusahaan').val();
        if (perusahaan === '-') {
            displayErrorMessage('Please choose one option.', 'perusahaan');
            errorCount++;
        }

        // Validate KAPAL
        var kapal = $('#kapal').val();
        if (kapal === '-') {
            displayErrorMessage('Please choose one option.', 'kapal');
            errorCount++;
        }

        // Validate KEPERLUAN
        var keperluan = $('#keperluan').val();
        if (keperluan === '-') {
            displayErrorMessage('Please choose one option.', 'keperluan');
            errorCount++;
        }

        // Validate Tanggal 1C
        var tanggal1C = $('#tanggal_1c').val();
        if (!tanggal1C) {
            displayErrorMessage('Tanggal 1C is required.', 'tanggal_1c');
            errorCount++;
        }

        // Validate Alat
        var alat = $('#alat').val();
        if (alat === '-') {
            displayErrorMessage('Please choose one option.', 'alat');
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

        // Validate Jumlah
        var jumlah = $('#jumlah_alat').val();
        if (!jumlah) {
            displayErrorMessage('Jumlah is required.', 'jumlah');
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
        formData.push({ name: 'tgl_mulai_mohon', value: dateTimeStart });
        formData.push({ name: 'tgl_selesai_mohon', value: dateTimeEnd });
        formData.push({ name: 'id', value: pbauAlat1cId });

        var url      = '{{ url("admin/penyewaan-alat/create-permohonan-1c/store") }}';

        if(buttonAlat === "edit"){
            url      = '{{ url("admin/penyewaan-alat/create-permohonan-1c/update") }}';
            formData.push({ name: 'pbauAlat1cIdDetail', value: pbauAlat1cIdDetail });
        }

        $.ajax({
            type: 'POST',
            url: url, 
            data: formData,
            success: function (response) {
                fetchData(1, pbauAlat1cId);
                if(buttonAlat === "edit"){
                    $('button.edit-alat').prop('disabled', true);
                    $('button.tambah-alat').prop('disabled', false);
                }
                $('#alat').val("-").trigger("change");
                $('#date-start, #time-start, #date-end, #time-end, #jumlah_alat, #satuan_tarif, #harga_alat').val("");
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

    $(document).on('click', '.tambah-1c, .edit-1c', function (e) {
        e.preventDefault();
        e.stopImmediatePropagation()

        // Clear previous error messages
        $('.error-message').remove();
        var errorCount = 0;

        // Validate Tanggal 1C
        var tahun = $('#tahun').val();
        if (!tahun) {
            displayErrorMessage('Tahun is required.', 'tahun');
            errorCount++;
        }

        // Validate No Form 1C
        var noForm1C = $('#no_form_1c').val();
        if (!noForm1C) {
            displayErrorMessage('No Form 1C is required.', 'no_form_1c');
            errorCount++;
        }

        // Validate PERUSAHAAN
        var perusahaan = $('#perusahaan').val();
        if (perusahaan === '-') {
            displayErrorMessage('Please choose one option.', 'perusahaan');
            errorCount++;
        }

        // Validate KAPAL
        var kapal = $('#kapal').val();
        if (kapal === '-') {
            displayErrorMessage('Please choose one option.', 'kapal');
            errorCount++;
        }

        // Validate KEPERLUAN
        var keperluan = $('#keperluan').val();
        if (keperluan === '-') {
            displayErrorMessage('Please choose one option.', 'keperluan');
            errorCount++;
        }

        // Validate Tanggal 1C
        var tanggal1C = $('#tanggal_1c').val();
        if (!tanggal1C) {
            displayErrorMessage('Tanggal 1C is required.', 'tanggal_1c');
            errorCount++;
        }

        if(errorCount >= 1){
            return;
        }
        
        var formData = $('#permohonan-form').serializeArray();
        var url      = '{{ url("admin/penyewaan-alat/submit-permohonan-1c/") }}' + '/{{ $data->pbau_alat_1c_id ?? 'noid' }}';

        if(pbauAlat1cId !== null){
            formData.push({ name: 'id', value: pbauAlat1cId });
        }

        $.ajax({
            type: 'POST',
            url: url, 
            data: formData,
            success: function (response) {
                
                if(subName === "Buat"){
                    fetchData(1, response.data_alat.pbau_alat_1c_id);
                    pbauAlat1cId = response.data_alat.pbau_alat_1c_id;
                    $('.alat-form').show();
                    $('.tambah-1c').hide();
                } else {
                    window.location.href = "{{ url('admin/penyewaan-alat/permohonan-1c') }}";
                }
            },
            error: function (error) {
                $('.msg-api').html('<p class="text-red-500">Error submitting the form</p>').show();
                setTimeout(function(){
                    $('.msg-api').fadeOut();
                },1200);
            }
        });
    });

    $('input, select').focus(function () {
        var fieldId = $(this).attr('id');
        $('#' + fieldId).parent().find(".error-message").remove();
    });

    function displayErrorMessage(message, elementId) {
        var errorDiv = $('<div>').addClass('error-message text-red-500 text-sm').text(message);
        $('#' + elementId).after(errorDiv);
    }

    function getAlat(sthis){
        $.ajax({
            type: 'GET',
            url: '{{ url("admin/penyewaan-alat/get-alat") }}', 
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
            url: '{{ url("admin/penyewaan-alat/get-alat-detail") }}',
            type: 'GET',
            data: { page: page, id: id },
            dataType: 'json',
            success: function (data) {
                // Clear existing table rows
                $('.table-detail tbody').empty();
                if(data.data.length >= 1){
                    // Populate the table with the retrieved data
                    $.each(data.data, function (index, item) {
                        var styleDiv = @if(empty($data->tgl_noform_2c)) "" @else "style=display:none" @endif ;
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
                        row += '<td '+styleDiv+' class="py-2 flex flex-wrap gap-1 justify-center ">' +
                                '<button data-record-id="'+item.pbau_alat_1c_detail+'" class="edit-button focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Edit</a>' +
                                '<button data-record-id="'+item.pbau_alat_1c_detail+'" class="delete-button focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:focus:ring-yellow-900">Delete</button>' +
                            '</td>';

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
    }
    
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

    // Add this function to handle edit button click
    $(document).on('click', '.edit-button', function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();
        
        $("tr").removeClass('selected-row');
        $(this).parent().parent().addClass('selected-row');
        
        pbauAlat1cIdDetail = $(this).data('record-id');

        $.ajax({
            url: '{{ url("admin/penyewaan-alat/get-alat-detail/edit") }}',
            type: 'GET',
            data: { id: pbauAlat1cIdDetail },
            dataType: 'json',
            success: function (data) {
                var data = data.data;
                $('#alat').val(data.alat_id).trigger('change'); 
                $('#date-start').val(data.tgl_mulai_mohon.split(' ')[0]);
                $('#time-start').val(data.tgl_mulai_mohon.split(' ')[1]);
                $('#date-end').val(data.tgl_selesai_mohon.split(' ')[0]);
                $('#time-end').val(data.tgl_selesai_mohon.split(' ')[1]);
                $('#jumlah_alat').val(data.jumlah_alat);
                $('#satuan_tarif').val(data.satuan_tarif);
                $('#harga_alat').val(data.tarif_alat);

                $('button.edit-alat').prop('disabled', false);
                $('button.tambah-alat').prop('disabled', true);

                $('html, body').animate({
                    scrollTop: $('#permohonan-form').offset().top
                }, 'slow');
            },
            error: function (error) {
                console.log('Error:', error);
            }
        });
    });

    $(document).on('click', '.delete-button', function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();

        var deleteId = $(this).data('record-id');
        
        if (confirm('Are you sure you want to delete this record?')) {
            $.ajax({
                type: 'DELETE',
                url: '{{ url("/admin/penyewaan-alat/get-alat-detail/delete") }}',
                data: {id: deleteId},
                success: function(response) {
                    fetchData(1, pbauAlat1cId);
                },
                error: function(xhr) {
                    console.error(xhr.responseJSON.error);
                }
            });
        }
    });

    $(document).on('click', 'button.tambah-alat', function (e) {
        e.preventDefault();
        e.stopImmediatePropagation()
        $('button.edit-alat').prop('disabled', true);
        $('button.tambah-alat').prop('disabled', false);
        buttonAlat = "tambah";
        $('#permohonan-form').submit();
    });

    $(document).on('click', 'button.edit-alat', function (e) {
        e.preventDefault();
        e.stopImmediatePropagation()

        $('button.edit-alat').prop('disabled', false);
        $('button.tambah-alat').prop('disabled', true);
        buttonAlat = "edit";
        $('#permohonan-form').submit();
    });

</script>
@endsection