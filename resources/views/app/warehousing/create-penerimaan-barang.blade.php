@extends('layouts.admin')
@section('title', 'Penerimaan Barang')
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
    .add-btn-t, .edit-btn-t{
        @extend .button-style; /* Include common styles */
        type: submit;
        class: add-btn-t;
        bg-blue-700: hover:bg-blue-800;
        focus:ring-4: focus:ring-blue-300;
    }

    /* Disabled button style */
    .add-btn-t:disabled, .edit-btn-t:disabled {
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
        Warehousing / Penerimaan Barang
    </div>
    <hr class="border-b-2 border-black border-solid">
    <div class="font-bold text-2xl text-center pt-5">PENERIMAAN BARANG</div>
    <form id="penerimaan-form" enctype="multipart/form-data">
    <div class="h-56 grid grid-cols-2 gap-4 content-center pt-16">
        <div>
            <table class="w-full">
                <tr class="text-start mb-4">
                    <td>No Penerimaan</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" id="no_penerimaan" name="no_penerimaan" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" placeholder="" value="{{ $data->no_penerimaan ?? '' }}">    
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Nama PBM</td>
                    <td>:</td>
                    <td class="py-1">
                        <select id="pbm" name="pbm" onchange="getPbm(this)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="-">--Select--</option>
                            @foreach($pbm as $company)
                                <option value="{{ $company->perusahaan_id }}" @if(is_object($data) && $data->nama_pbm == $company->nama_perusahaan) selected @endif>{{ $company->nama_perusahaan }}</option>
                            @endforeach
                        </select>
                        <input type="hidden" id="nama_pbm" name="nama_pbm" value="{{ $data->nama_pbm ?? '' }}">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Dokumen Pendukung</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="file" id="dokumen_pendukung" name="dokumen_pendukung" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
                <tr class="text-end">
                    <td></td>
                    <td></td>
                    <td class="py-1">
                        @if(is_object($data) && !empty($data->dokumen_pendukung)) 
                            <div class="pt-2 text-[11px]"> file dokumen: 
                                <a class="text-blue-600" target="_blank" href="/document/{{ $data->dokumen_pendukung }}"> {{ $data->dokumen_pendukung }} </a>
                            </div>
                        @endif
                    </td>
                </tr>
                <tr class="text-start">
                    <td colspan = "3">
                        <button class="create-penerimaan-top text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">SIMPAN</button>
                    </td>
                </tr>
            </table>
        </div>
        <div>
            <table class="w-full">
                <tr class="text-start mb-4">
                    <td>Tanggal Masuk</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="date" id="tanggal_masuk" name="tanggal_masuk"  class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" value="{{ $data->tanggal_masuk ?? '' }}">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Nama Kapal</td>
                    <td>:</td>
                    <td class="py-1">
                        <select id="kapal" name="kapal" onchange="getKapal(this)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="-">--Select--</option>
                            @foreach($ships as $ship)
                                <option value="{{ $ship->kapal_id }}" @if(is_object($data) && $data->nama_kapal == $ship->nama_kapal) selected @endif>{{ $ship->nama_kapal }}</option>
                            @endforeach
                        </select>
                        <input type="hidden" id="nama_kapal" name="nama_kapal" value="{{ $data->nama_kapal ?? '' }}">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>PIC Gudang</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" id="pic_gudang" name="nama_pic_gudang" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" value="{{ $data->nama_pic_gudang ?? '' }}">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>PIC PBM</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" id="pic_pbm" name="nama_pic_pbm" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" value="{{ $data->nama_pic_pbm ?? '' }}">
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="h-56 grid grid-cols-2 gap-4 content-center pt-[80px] mt-[40px] barang-container">
        <div>
            <table class="w-full">
                <tr class="text-start mb-4">
                    <td>No. Container</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" id="no_container" name="no_container" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Kegiatan</td>
                    <td>:</td>
                    <td class="py-1">
                        <select id="kegiatan" name="kegiatan"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="-">--Select--</option>
                                <option value="bongkar">Bongkar</option>
                                <option value="muat">Muat</option>
                                <option value="bongkar-muat">Bongkar - Muat</option>
                        </select>
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Posisi</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" id="posisi" name="posisi" value="{{ $data->posisi ?? '' }}" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
                <tr class="text-start btn-action-b">
                    <td colspan = "3" class="pt-[40px]">
                        <button id="add" class="add-btn-t text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah</button>
                        <button id="edit" disabled="disabled" class="edit-btn-t text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Update</button>
                    </td>
                </tr>
            </table>
        </div>
        <div>
            <table class="w-full">
                <tr class="text-start mb-4">
                    <td>Tipe Kontainer</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" id="type_kontainer" name="type_kontainer" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Satuan Lokasi</td>
                    <td>:</td>
                    <td class="py-1">
                        <select id="lokasi_id" name="lokasi_id" onchange="getLokasi(this)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="-">--Select--</option>
                            @foreach($lokasiWarehouse as $lokasi)
                                <option value="{{ $lokasi->lokasi_warehouse_id }}" @if(is_object($data) && $data->lokasi_id == $lokasi->lokasi_warehouse_id) selected @endif>{{ $lokasi->nama_lokasi_warehouse }}</option>
                            @endforeach
                        </select>
                        <input type="hidden" id="lokasi" name="lokasi" value="{{ $data->lokasi ?? '' }}">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Row</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" id="row" name="row" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Column</td>
                    <td>:</td>
                    <td class="py-1">
                        <input type="text" id="column" name="column" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="grid grid-cols-2 pt-16">
        <div class="msg-api float-right text-right mr-8 ">
            <p class="text-green-500"></p>
        </div>
        <!-- <div class="bottom-0 left-0"><span class="text-2xl font-bold">List Alat</span></div>

         <div class="text-end pt-5">
            <a href="" class="font-semibold py-1 px-6 rounded-md hover:opacity-80 btn-lg text-2xl bg-blue-600 text-blue-100 hover:bg-purple-600">Tambah Alat</a>
        </div> -->
    </div>
        <!-- <div class="w-full">
            <a href="{{url('admin/penyewaan-alat/create-penerimaan-1c')}}" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah</a>
        </div> -->
    </form>
    <div class="text-center barang-container">
        <div class="">
            <table class="table-detail mt-3 w-full border-solid border-2 border-slate-800">
                <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                    <tr>
                        <th class="py-5 px-3">No. Container</th>
                        <th>Type</th>
                        <th>Kegiatan</th>
                        <th>Lokasi</th>
                        <th>Posisi</th>
                        <th>Row</th>
                        <th>Column</th>
                        <th  @if($subName !== "View" ) "" @else style='display:none' @endif >Aksi</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <div class="text-start mt-10">
            <button type="submit" id="inactive" class="create-penerimaan-bottom text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">SIMPAN</button>
            <a href="{{url('admin/warehousing/penerimaan-barang')}}" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">KEMBALI</a>
            <div class="msg-api-2 mt-1 ">
                <p class="text-green-500"></p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>

    $(document).ready(function () {
        $('.msg-api').hide();
    });

    var idPenerimaan = "{{ $data->penerimaan_barang_id ?? '' }}";
    fetchData(1, idPenerimaan);
    var idPenerimaanDetail = null;
    var subName  = '{{$subName}}';
    var buttonContainer = "tambah";

    if(subName === "Buat"){
        $('.barang-container').hide();
        $('.create-penerimaan-bottom').attr("id", "inactive");
    } else {
        $('.create-penerimaan-top').hide();
        $('.create-penerimaan-bottom').attr("id", "active");
    }

    if(subName === "View"){
        $("file, input, select").prop("disabled", true);
        $(".btn-action-b, .create-penerimaan-bottom").hide();
        
    }

    function getPbm(sthis){
        var selectedOption = sthis.options[sthis.selectedIndex];
        var selectedText = selectedOption.text;
        
        $('#nama_pbm').val(selectedText);
    }

    function getKapal(sthis){
        var selectedOption = sthis.options[sthis.selectedIndex];
        var selectedText = selectedOption.text;
        
        $('#nama_kapal').val(selectedText);
    }

    function getLokasi(sthis){
        var selectedOption = sthis.options[sthis.selectedIndex];
        var selectedText = selectedOption.text;
        
        $('#lokasi').val(selectedText);
    }

    $('#penerimaan-form').submit(function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();

        $('.create-penerimaan-top').submit();
    });

    $(document).on('click', '.create-penerimaan-top, .create-penerimaan-bottom', function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();

        // Clear previous error messages
        $('.error-message').remove();
        var errorCount = 0;

        // Validate No Penerimaan
        var noPenerimaan = $('#no_penerimaan').val();
        if (!noPenerimaan) {
            displayErrorMessage('No Penerimaan is required.', 'no_penerimaan');
            errorCount++;
        }

        // Validate pbm
        var pbm = $('#pbm').val();
        if (pbm === '-') {
            displayErrorMessage('PBM is required.', 'pbm');
            errorCount++;
        }

        // Validate Dokumen Pendukung
        var dokumenPendukung = $('#dokumen_pendukung').val();
        if (!dokumenPendukung && subName === "Buat") {
            $('html, body').animate({
                scrollTop: $('#dokumen_pendukung').offset().top
            }, 'slow');
            displayErrorMessage('Dokumen Pendukung is required.', 'dokumen_pendukung');
            errorCount++;
        }

        // Validate Tanggal Masuk
        var tanggalMasuk = $('#tanggal_masuk').val();
        if (!tanggalMasuk) {
            displayErrorMessage('Tanggal Masuk is required.', 'tanggal_masuk');
            errorCount++;
        }

        // Validate Kapal
        var kapal = $('#kapal').val();
        if (kapal === '-') {
            displayErrorMessage('Kapal is required.', 'kapal');
            errorCount++;
        }

        // Validate PIC Pudang
        var picPudang = $('#pic_gudang').val();
        if (!picPudang) {
            displayErrorMessage('PIC Pudang is required.', 'pic_gudang');
            errorCount++;
        }

        // Validate PIC Pudang
        var picPbm = $('#pic_pbm').val();
        if (!picPbm) {
            displayErrorMessage('PIC PBM is required.', 'pic_pbm');
            errorCount++;
        }

        if(errorCount >= 1){
            return;
        }
        
        var formData = new FormData();
        formData.append('file', $('#dokumen_pendukung')[0].files[0]);
        formData.append('no_penerimaan', $('#no_penerimaan').val());
        formData.append('nama_pbm', $('#nama_pbm').val());
        formData.append('tanggal_masuk', $('#tanggal_masuk').val());
        formData.append('nama_kapal', $('#nama_kapal').val());
        formData.append('nama_pic_gudang', $('#pic_gudang').val());
        formData.append('nama_pic_pbm', $('#pic_pbm').val());

        var url      = '{{ url("admin/warehousing/submit-penerimaan-barang/") }}' + '/{{ $data->penerimaan_barang_id ?? 'noid' }}';

        if(idPenerimaan !== null){
            formData.append('id', idPenerimaan);
        }

        $.ajax({
            type: 'POST',
            url: url, 
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                if(response.code === 200){
                    fetchData(1, response.data.penerimaan_barang_id);
                    idPenerimaan = response.data.penerimaan_barang_id;

                    $('.barang-container').show();
                    $('.create-penerimaan-top').hide();

                    if($('.create-penerimaan-bottom').attr("id") === "active"){
                        window.location.href = "{{ url('admin/warehousing/penerimaan-barang') }}";
                    }

                    $('.create-penerimaan-bottom').attr("id", "active");
                } else {
                    $('.msg-api-2').html('<p class="text-red-500">'+response.error+'</p>').show();
                    setTimeout(function(){
                        $('.msg-api-2').fadeOut();
                    },1200);
                }
                
            },
            error: function (error) {
                $('.msg-api').html('<p class="text-red-500">'+error.error+'</p>').show();
                setTimeout(function(){
                    $('.msg-api').fadeOut();
                },1200);
            }
        });
    });

    function fetchData(page, id) {
        $.ajax({
            url: '{{ url("admin/warehousing/penerimaan-detail") }}',
            type: 'GET',
            data: { page: page, id: id },
            dataType: 'json',
            success: function (data) {
                // Clear existing table rows
                $('.table-detail tbody').empty();
                if(data.data.length >= 1){
                    // Populate the table with the retrieved data
                    $.each(data.data, function (index, item) {
                        var styleDiv = @if($subName !== "View") "" @else "style=display:none" @endif ;
                        var row = '<tr class="border-solid border-2 border-slate-800 bg-slate-200 hover:bg-slate-300">';
                        row += '<td>' + item.no_container + '</td>';
                        row += '<td>' + item.type_kontainer + '</td>';
                        row += '<td>' + item.kegiatan + '</td>';
                        row += '<td>' + item.lokasi + '</td>';
                        row += '<td>' + item.posisi + '</td>';
                        row += '<td>' + item.row + '</td>';
                        row += '<td>' + item.column + '</td>';
                        row += '<td '+styleDiv+' class="py-2 flex flex-wrap gap-1 justify-center ">' +
                                '<button data-record-id="'+item.penerimaan_barang_kontainer_id+'" class="edit-button focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Edit</a>' +
                                '<button data-record-id="'+item.penerimaan_barang_kontainer_id+'" class="delete-button focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:focus:ring-yellow-900">Delete</button>' +
                            '</td>';

                        row += '</tr>';
                        $('.table-detail tbody').append(row);
                    });
                    
                    // Update pagination links
                    updatePaginationLinks(data.links);
                } else {
                    var row = '<tr class="border-solid border-2 border-slate-800 bg-slate-200 hover:bg-slate-300"><td colspan="10">No Data Found</td></tr>';
                    $('.table-detail tbody').append(row);
                    $('.pagination').html("");
                }
            },
            error: function (error) {
                console.log('Error:', error);
            }
        });
    }

    $('input, select').focus(function () {
        var fieldId = $(this).attr('id');
        $('#' + fieldId).parent().find(".error-message").remove();
    });

    function displayErrorMessage(message, elementId) {
        var errorDiv = $('<div>').addClass('error-message text-red-500 text-sm').text(message);
        $('#' + elementId).after(errorDiv);
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

    $(document).on('click', '.edit-button', function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();
        
        $("tr").removeClass('selected-row');
        $(this).parent().parent().addClass('selected-row');
        
        idPenerimaanDetail = $(this).data('record-id');

        $.ajax({
            url: '{{ url("admin/warehousing/container-detail/edit") }}',
            type: 'GET',
            data: { id: idPenerimaanDetail },
            dataType: 'json',
            success: function (data) {
                var data = data.data;
                $('#no_container').val(data.no_container).trigger('change'); 
                $('#kegiatan').val(data.kegiatan);
                $('#posisi').val(data.posisi);
                $('#type_kontainer').val(data.type_kontainer);
                $('#lokasi_id').val(data.lokasi_id).trigger('change');
                $('#lokasi').val(data.lokasi);
                $('#row').val(data.row);
                $('#column').val(data.column);

                $('button.edit-btn-t').prop('disabled', false);
                $('button.add-btn-t').prop('disabled', true);

                $('html, body').animate({
                    scrollTop: $('#no_container').offset().top
                }, 'slow');
            },
            error: function (error) {
                console.log('Error:', error);
            }
        });
    });

    $(document).on('click', '.add-btn-t, .edit-btn-t', function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();

        // Clear previous error messages
        $('.error-message').remove();
        var errorCount = 0;

        // Validate No Container
        var noContainer = $('#no_container').val();
        if (!noContainer) {
            displayErrorMessage('No Container is required.', 'no_container');
            errorCount++;
        }

        // Validate No Container
        var kegiatan = $('#kegiatan').val();
        if (kegiatan === '-') {
            displayErrorMessage('Please choose one option.', 'kegiatan');
            errorCount++;
        }

        // Validate Posisi
        var posisi = $('#posisi').val();
        if (!posisi) {
            displayErrorMessage('Posisi is required.', 'posisi');
            errorCount++;
        }

        // Validate Type Kontainer
        var typeKontainer = $('#type_kontainer').val();
        if (!typeKontainer) {
            displayErrorMessage('Type Kontainer is required.', 'type_kontainer');
            errorCount++;
        }

        // Validate Lokasi
        var lokasiId = $('#lokasi_id').val();
        if (lokasiId === '-') {
            displayErrorMessage('Lokasi is required.', 'lokasi_id');
            errorCount++;
        }

        // Validate Row
        var row = $('#row').val();
        if (!row) {
            displayErrorMessage('Lokasi is required.', 'row');
            errorCount++;
        }

        // Validate Column
        var column = $('#column').val();
        if (!column) {
            displayErrorMessage('Lokasi is required.', 'column');
            errorCount++;
        }

        if(errorCount >= 1){
            return;
        }
        
        var url      = '{{ url("admin/warehousing/submit-container-detail") }}/'+idPenerimaanDetail;

        var formData = $('#penerimaan-form').serializeArray();
        formData.push({ name: 'idPenerimaanDetail', value: idPenerimaanDetail });
        formData.push({ name: 'idPenerimaan', value: idPenerimaan });
        
        $.ajax({
            type: 'POST',
            url: url, 
            data: formData,
            success: function (response) {
                fetchData(1, idPenerimaan);
                idPenerimaan = response.data.penerimaan_barang_id;
                idPenerimaanDetail = null;

                $('button.edit-btn-t').prop('disabled', true);
                $('button.add-btn-t').prop('disabled', false);
                buttonContainer = "tambah";

                $('#kegiatan, #lokasi').val("-").trigger("change");
                $('#no_container, #type_kontainer, #row, #column, #posisi').val("");
                $('.msg-api').html('<p class="text-green-500">'+response.message+'</p>').show();

                setTimeout(function(){
                    $('.msg-api').fadeOut();
                },1200);
            },
            error: function (error) {
                $('.msg-api').html('<p class="text-red-500">'+response.message+'</p>').show();
                setTimeout(function(){
                    $('.msg-api').fadeOut();
                },1200);
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
                url: '{{ url("/admin/warehousing/penerimaan-barang-container/delete") }}',
                data: {id: deleteId},
                success: function(response) {
                    fetchData(1, idPenerimaan);
                },
                error: function(xhr) {
                    console.error(xhr.responseJSON.error);
                }
            });
        }
    });
</script>

@endsection