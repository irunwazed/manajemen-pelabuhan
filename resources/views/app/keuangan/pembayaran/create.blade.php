@extends('layouts.admin')
@section('title', 'Pembayaran Tagihan')
@section('content')
    <style>
        .pagination > .disabled{
            margin-left: 10px;
            margin-right: 10px;
        }
    </style>

    <div class="">
        <div class="text-2xl ">Pembayaran Tagihan </div>
        <hr class="border-b-2 border-black border-solid">
        <div class="text-center mb-3 mt-5">
            <form method="POST" enctype="multipart/form-data" id="addForm" onsubmit="return validate();">
                <div class="relative -bottom-20 left-6 z-1 bg-white w-[250px] px-6 font-bold text-lg">
                    Pembayaran
                </div>
                <div class="flex flex-wrap place-content-end my-2">
                    <a href="{{url('admin/keuangan/pembayaran')}}" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">KEMBALI</a>
                </div>
                <div class="mt-2 px-10 py-7 grid grid-cols-2 gap-2 border-2 border-solid border-black">
                    <div>
                        <table class="w-full">
                            <tr>
                                <td>No Pembayaran</td>
                                <td>:</td>
                                <td><input type="text"  class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="no_pembayaran" id="no_pembayaran" maxlength="20" required></td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>:</td>
                                <td><input type="datetime-local"  class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="tanggal" required></td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <table class="w-full">
                            <tr>
                                <td>Rekening Kas</td>
                                <td>:</td>
                                <td class="py-1">
                                    <select class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="rekening" name="rekening" required>
                                        <option value="">-- Pilih --</option>
                                        <?php
                                        foreach ($rekeningKas as $key => $value) {
                                            echo'<option value="'.@$value->rekening_id.'">'.$value->nama_rekening.'</option>';
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Jumlah</td>
                                <td>:</td>
                                <td><input type="text"  class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 text-right" value="0" name="jumlah" id="jumlah" required disabled></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="text-left">
                    <table class="mt-5 w-full border-solid border-2 border-slate-800" id="details" name="details">
                        <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                        <tr>
                            <th>Rekening Pengeluaran</th>
                            <th>Keterangan</th>
                            <th>Jumlah</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                                <td class="py-2.5">
                                    <select class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="add_rek_pengeluaran" name="add_rek_pengeluaran">
                                        <option value="">-- Pilih --</option>
                                        <?php
                                        foreach ($rekeningPengeluaran as $key => $value) {
                                            echo'<option value="'.@$value->rekening_id.'">'.$value->nama_rekening.'</option>';
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td class="py-2.5"><input type="text"  class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="add_keterangan" id="add_keterangan" maxlength="20"></td>
                                <td class="py-2.5"><input type="number"  class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400 text-right" name="add_jumlah" id="add_jumlah" oninput="validateNumber(this)" value="0"></td>
                                <td>
                                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="add()">Tambah</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-left pt-8 pb-9">
                    <button type="submit" class="text-base bg-blue-600 text-blue-100 px-6 py-2.5 rounded hover:opacity-80">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        function validateNumber(input) {
            // Remove non-numeric characters from the input value
            input.value = input.value.replace(/[^0-9]/g, '');
        }
        function add() {
            rekPengeluaran = document.getElementById('add_rek_pengeluaran');
            keterangan = document.getElementById('add_keterangan');
            jumlah = document.getElementById('add_jumlah');
            tBody = document.getElementById('details').getElementsByTagName('tbody')[0];

            if (checkValue(rekPengeluaran.value, '', 'Pilih salah satu rekening pengeluaran')) return false;
            if (checkValue(keterangan.value, '', 'Masukan keterangan')) return false;
            if (checkValue(jumlah.value, '0', 'Masukan jumlah')) return false;

            row = tBody.insertRow(tBody.rows.length);
            cell0 = row.insertCell(0)
            cell1 = row.insertCell(1)
            cell2 = row.insertCell(2)
            cell0.innerHTML = getRekeningCellHtml(rekPengeluaran.value, rekPengeluaran.options[rekPengeluaran.selectedIndex].text);
            cell1.innerHTML = getKeteranganCellHtml(keterangan.value);
            cell2.innerHTML = getJumlahCellHtml(jumlah.value);

            total = document.getElementById('jumlah');
            total.value = parseInt(total.value) + parseInt(jumlah.value);

            // reset value
            rekPengeluaran.value = '';
            keterangan.value = '';
            jumlah.value = 0;
        }
        function checkValue(value1, value2, message) {
            if (value1.trim() === value2) {
                pesanSweet('Input diperlukan', message, 'warning');
                return true;
            }
            return false;
        }
        function getRekeningCellHtml(value, text) {
            return '<input type="hidden" name="rekening_pengeluaran_id[]" value="' + value + '"/>' +
            '<input type="text"  class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="' + text + '" disabled>';
        }
        function getKeteranganCellHtml(value) {
            return '<input type="hidden" name="keterangan[]" value="' + value + '"/>' +
            '<input type="text"  class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="' + value + '" disabled>';
        }
        function getJumlahCellHtml(value) {
            return '<input type="hidden" name="jumlah[]" value="' + value + '"/>' +
            '<input type="text"  class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 text-right" value="' + value + '" disabled>';
        }
        function validate() {
            if (parseInt(document.getElementById('jumlah').value) <= 0) {
                pesanSweet('Input Pengeluaran!', 'Input minimal satu pengeluaran', 'warning');
                return false;
            }
            return true;
        }
        window.addEventListener('pageshow', function(event) {
            // Check if the navigation type is back or forward
            if (event.persisted || (window.performance && window.performance.navigation.type === 2)) {
                // If yes, clear the form
                document.getElementById('addForm').reset();
                location.reload();
            }
        });
    </script>
@endsection

@section('script')
@endsection
