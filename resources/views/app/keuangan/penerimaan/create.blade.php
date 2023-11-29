@extends('layouts.admin')
@section('title', 'Penerimaan Pembayaran')
@section('content')
    <style>
        .pagination > .disabled{
            margin-left: 10px;
            margin-right: 10px;
        }
    </style>

    <div class="">
        <div class="text-2xl ">Penerimaan Pembayaran </div>
        <hr class="border-b-2 border-black border-solid">
        <div class="text-center mb-3 mt-5">
            <form method="POST" enctype="multipart/form-data" onsubmit="return validate();">
                <div class="relative -bottom-20 left-6 z-1 bg-white w-[250px] px-6 font-bold text-lg">
                    Pembayaran
                </div>
                <div class="flex flex-wrap place-content-end my-2">
                    <a href="{{url('admin/keuangan/penerimaan')}}" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">KEMBALI</a>
                </div>
                <div class="mt-2 px-10 py-7 grid grid-cols-2 gap-2 border-2 border-solid border-black">
                    <div>
                        <table class="w-full">
                            <tr>
                                <td>Nama Perusahaan</td>
                                <td>:</td>
                                <td><input type="text"  class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$perusahaan->nama_perusahaan }}" name="nama_perusahaan" id="nama_perusahaan" required disabled></td>
                            </tr>
                            <tr>
                                <td>Alamat Perusahaan</td>
                                <td>:</td>
                                <td><input type="text"  class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @$perusahaan->alamat }}" name="alamat_perusahaan" id="alamat_perusahaan" required disabled></td>
                            </tr>
                            <tr>
                                <td>No Penerimaan</td>
                                <td>:</td>
                                <td><input type="text"  class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="no_penerimaan" id="no_penerimaan" maxlength="20" required></td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <table class="w-full">
                            <tr>
                                <td>Tanggal</td>
                                <td>:</td>
                                <td><input type="datetime-local"  class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="tanggal" required></td>
                            </tr>
                            <tr>
                                <td>Kode Rekening</td>
                                <td>:</td>
                                <td class="py-1">
                                    <select class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="rekening" name="rekening" required>
                                        <option value="">-- Pilih --</option>
                                        <?php
                                        foreach ($rekening as $key => $value) {
                                            echo'<option value="'.@$value->kode_rekening.'">'.$value->nama_rekening.'</option>';
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
                <div>
                    <table class="mt-5 w-full border-solid border-2 border-slate-800">
                        <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                        <tr>
                            <th class="py-5 px-3">No</th>
                            <th>Tanggal</th>
                            <th>Jenis Nota</th>
                            <th>Keterangan</th>
                            <th>Jumlah</th>
                            <th>Terbayar</th>
                            <th>Sisa</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($nota as $index => $item)
                            <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300">
                                <td class="py-2.5"><input type="checkbox" id="nota_{{ $item->nota_id }}" name="nota[]" value="{{ $item->nota_id }}" data-sisa="{{ ($item->jumlah - $item->terbayar) }}" onchange="hitungJumlah()"></td>
                                <td class="py-2.5">{{ $item->tanggal }}</td>
                                <td class="py-2.5">{{ $item->jenis }}</td>
                                <td class="py-2.5">{{ $item->keterangan }}</td>
                                <td class="py-2.5">{{ $item->jumlah }}</td>
                                <td class="py-2.5">{{ $item->terbayar }}</td>
                                <td class="py-2.5">{{ ($item->jumlah - $item->terbayar) }}</td>
                            </tr>
                        @endforeach
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
        function hitungJumlah() {
            var total = 0;
            Array.prototype.slice.call(
                document.getElementsByName('nota[]'))
                .forEach(function (el) {
                    console.log('triggered', el.checked, el.dataset.sisa);
                    if(el.checked) {
                        total += parseInt(el.dataset.sisa);
                    }
                });
            document.getElementById('jumlah').value = total;
        }
        function validate() {
            if (parseInt(document.getElementById('jumlah').value) <= 0) {
                pesanSweet('Pilih Nota!', 'Pilih satu nota atau lebih', 'warning');
                return false;
            }
            return true;
        }
    </script>
@endsection

@section('script')
@endsection
