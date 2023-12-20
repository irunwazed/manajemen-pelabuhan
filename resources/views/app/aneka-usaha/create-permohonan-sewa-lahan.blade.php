@extends('layouts.admin')
@section('title', 'Aneka Usaha')
@section('content')
<div class="">
    <div class="text-2xl ">Aneka Usaha / Permohonan Sewa Tanah Dan Bangunan</div>
    <hr class="border-b-2 border-black border-solid">
    <div class="font-bold text-2xl text-center pt-5">FORM PERMOHONAN SEWA TANAH & BANGUNAN</div>
    <div class="font-bold text-2xl text-center pt-5">Entry Data</div>
    <form action="{{route('lahanCreate', $user)}}" method="post">
        @csrf

        <div class="font-bold text-2xl text-start pt-5">Form Kontrak</div>

        <div class="h-56 grid grid-cols-2 gap-4 content-center border-2">
            <div>
                <table class="w-full">
                    <tr class="text-start mb-4">
                        <td>Nomor/Tanggal Kontrak</td>
                        <td>:</td>
                        <td class="py-1">
                            <div class="grid grid-cols-2 gap-1">
                                <div class="">
                                    <input type="text" required name="nomor" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                                </div>
                                <div class="">
                                    <input type="date" required name="tanggal_kontrak" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Nama Perusahaan</td>
                        <td>:</td>
                        <td class="py-1">
                            <select id="barang" required name="perusahaan_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">-- Pilih Perusahaan --</option>
                                @foreach ($companyInfo as $dat)
                                <option value="{{$dat->perusahaan_id}}">{{$dat->nama_perusahaan}}</option>

                                @endforeach
                            </select>
                            <input type="hidden" name="nama_perusahaan" id="nama_perusahaan" class=" mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">

                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Alamat</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" name="alamat" id="alamat" value="" disabled class=" mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                        </td>
                    </tr>
                </table>
            </div>
            <div>
                <table class="w-full">
                    <tr class="text-start mb-4">
                        <td>Telephone</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" name="telepone" id="telepone" value="" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                        </td>
                    </tr>
                    <tr class="text-start mb-4">
                        <td>Contact Person</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" name="pic" id="pic" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                        </td>
                    </tr>
                    <tr class="text-start mb-4">
                        <td>Contact Person's Phone</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" name="pic_phone" id="pic_phone" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                        </td>
                    </tr>
                    <tr class="text-start mb-4">
                        <td>NPWP</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" name="npwp" id="npwp" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <br>
        <br>

        <div class="grid grid-cols-2 pt-8 gap-4">
            <div><span class="font-bold text-2xl text-start">Keterangan</span></div>
            <div><span class="font-bold text-2xl text-start">Biaya Keseluruhan</span></div>
        </div>
        <div class="h-56 grid grid-cols-2 gap-4">
            <div class="border-2">
                <table class="w-full content-center">
                    <tr class="text-start mb-4">
                        <td>Jenis Properti</td>
                        <td>:</td>
                        <td class="py-1">
                            <input id="jenis_properti" name="jenis_properti" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Lokasi</td>
                        <td>:</td>
                        <td class="py-1">
                            <select required id="lokasi" name="lokasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">-- Pilih Lokasi --</option>
                                @foreach ($lokasiInfo as $dat)
                                <option value="{{$dat->au_lahan_bangunan_id}}">{{$dat->nama_lahan_bangunan}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Luas Lahan</td>
                        <td>:</td>
                        <td class="py-1">
                            <div class="grid grid-cols-5">
                                <div class="col-span-4">
                                    <input required type="number" name="luas_lahan" id="luas_lahan" value="" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                                </div>
                                <div>
                                    <span class=" small font-bold text-center">M2</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Periode Pemakaian</td>
                        <td>:</td>
                        <td class="py-1">
                            <div class="grid grid-cols-5">
                                <div class="col-span-2">
                                    <input required name="tgl_mulai" id="tanggal1" type="date" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                                </div>
                                <div class="inline-block align-middle text-center font-bold">S/D</div>
                                <div class="col-span-2">
                                    <input required type="date" name="tgl_selesai" id="tanggal2" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Jangka Waktu</td>
                        <td>:</td>
                        <td class="py-1">
                            <div class="grid grid-cols-3 gap-2">
                                <div>
                                    <input type="text" id="hari" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                                </div>
                                <div class="col-span-2">
                                    <input type="text" disabled id="bulan" name="bulan" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                                    <input type="text" disabled id="tahun" name="tahun" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                                </div>
                            </div>

                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Tarif</td>
                        <td>:</td>
                        <td class="py-1">
                            <div class="grid grid-cols-9">
                                <div> Rp</div>
                                <div class="col-span-4">
                                    <input required name="tarif" id="tarif" type="text" value="" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                                </div>
                                <div class="col-span-4"> <span class="text-sm">/ Meter2-satuan jangka waktu</span></div>
                            </div>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Tarif Lumpsium</td>
                        <td>:</td>
                        <td class="py-1">
                            <div class="flex items-center">
                                <input type="checkbox" name="lumpsium" id="lumsum_check" value="0" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes (centang)/ Tidak</label>
                            </div>
                        </td>
                    </tr>
                    <tr class="text-start">
                        <td>Keterangan</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" name="keterangan" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="border-2">
                <table class="w-full text-center">
                    <tr class="text-start mb-4">
                        <td>Biaya Sewa</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="number" disabled name="biaya_sewa" id="biaya_sewa" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">

                            <input type="hidden" name="jangka_waktu" id="jangka_waktu" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                        </td>
                    </tr>
                    <tr class="text-start mb-4">
                        <td>Biaya PBB</td>
                        <td>:</td>
                        <td class="py-1">
                            <input required type="number" name="biaya_pbb" value="0" id="biaya_pbb" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                        </td>
                    </tr>
                    <tr class="text-start mb-4">
                        <td>PPN (11%)</td>
                        <td>:</td>
                        <td class="py-1">
                            <input required type="number" id="ppn" name="ppn" disabled class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                        </td>
                    </tr>
                    <tr class="text-start mb-4">
                        <td>Biaya Administrasi</td>
                        <td>:</td>
                        <td class="py-1">
                            <input required type="number" name="biaya_adm" value="0" id="biaya_adm" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                        </td>
                    </tr>
                    <tr class="text-start mb-4">
                        <td>Biaya Lainya</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="number" name="biaya_lain" value="0" id="biaya_lain" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                        </td>
                    </tr>
                    <tr class="text-start mb-4">
                        <td>Total Biaya</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="number" name="total_biaya" id="total_biaya" disabled class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                        </td>
                    </tr>
                    <tr class="text-start mb-4">
                        <td>Pembulatan Biaya</td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="number" name="pembulatan" id="pembulatan" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                        </td>
                    </tr>
                    <tr class="text-start mb-4">
                        <td>No Rek </td>
                        <td>:</td>
                        <td class="py-1">
                            <input type="text" required name="norek" id="norek" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="text-center pt-16 mt-16 pb-9">
            <br>
            <a href=""><button type="submit" class="text-base bg-blue-600 text-blue-100 px-6 py-2.5 rounded hover:opacity-80">Simpan</button></a>
            <a href="#" class="text-base bg-yellow-600 text-yellow-100 px-6 py-2.5 rounded hover:opacity-80">Reset</a>
            <a href="{{url('admin/aneka-usaha/permohonan-sewa-lahan')}}" class="text-base text-gray-900 bg-white border border-gray-300 px-6 py-2.5 rounded hover:opacity-80">Batal</a>
        </div>
    </form>
    <div class="text-center mb-3 mt-5">
        <div>
            <table class="mt-5 w-full border-solid border-2 border-slate-800 " style="white-space:nowrap;">
                <thead class=" bg-gradient-to-r from-cyan-700 to-cyan-800 text-white py-5">
                    <tr>
                        <th class="py-5 px-3">No</th>
                        <th>Tahun/No Kontrak</th>
                        <th>Tanggal Permohonan</th>
                        <th>Perusahaan</th>
                        <th class="px-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companyInfo as $dat)
                    @if(($loop->index) %2 == 0)

                    <tr class="border-solid border-1 border-slate-800 hover:bg-slate-300">
                        @else
                    <tr class="border-solid border-1 border-slate-800 bg-slate-200 hover:bg-slate-300">
                        @endif
                        <td> {{ $loop->index+1 }}</td>
                        <td>{{ $dat->no_kontrak }}</td>
                        <td>{{ $dat->tgl_kontrak }}</td>
                        <td>{{ $dat->nama_perusahaan}}</td>
                        <td>
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                <a href="{{ url('admin/aneka-usaha/detail-permohonan-sewa-lahan') }}">View<a /></button>
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><a href="{{ url('admin/aneka-usaha/edit-permohonan-sewa-lahan') }}">Edit<a /></button>
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><a href="{{ url('admin/aneka-usaha/pranota-permohonan-sewa-lahan') }}">Pranota<a /></button>
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><a href="{{ url('admin/aneka-usaha/nota-4g') }}"> Nota4G<a /></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
@endsection

@section('script')
<script>
    $('#barang').on('change', function() {
        let id = $(this).val();
        $('#alamat').val('');
        $('#telepone').val('');
        $('#pic').val('');
        $('#pic_phone').val('');
        $('#npwp').val('');
        if (id) {
            $.ajax({
                type: 'GET',
                url: `{{asset('/perusahaan/')}}/${id}`,
                contentType: 'application/json',
                success: function(res) {
                    if (!res.err) {
                        let data = res.data;
                        $('#alamat').val(data.alamat);
                        $('#telepone').val(data.no_telp_kantor);
                        $('#pic').val(data.pic);
                        $('#pic_phone').val(data.no_tel_pic);
                        $('#npwp').val(data.npwp);
                        $('#nama_perusahaan').val(data.nama_perusahaan);


                    }
                },
                error: function(e) {
                    console.log(e);
                }
            });
        }

    });
    lokasi_info();

    $('#lokasi').on('change', function() {
        lokasi_info();

    })

    function lokasi_info() {
        let lokasi_id = document.querySelector('#lokasi').value;

        $('#jenis_properti').val('');
        $('#tarif').val('');
        if (lokasi_id) {
            $.ajax({
                type: 'GET',
                url: `{{asset('/perusahaan-lokasi/')}}/${lokasi_id}`,
                contentType: 'application/json',
                success: function(res) {
                    console.log(res);
                    if (!res.err) {
                        let data = res.data;
                        console.log(data);
                        $('#jenis_properti').val(data.jenis_properti);
                        $('#tarif').val(data.trf_permeter);
                        $('#norek').val(data.kode_rekening);
                    }
                },
                error: function(e) {
                    console.log(e);
                }
            });
        }

    }

    $('#tanggal1').on('change', function() {
        $('#hari').val('');
        $('#bulan').val('');
        $('#tahun').val('');

        var tanggal1 = document.querySelector('#tanggal1').value;
        var tanggal2 = document.querySelector('#tanggal2').value;

        if (tanggal1 != '' && tanggal2 != '') {
            jangka_waktu(tanggal1, tanggal2)
        }
    })

    $('#tanggal2').on('change', function() {
        $('#hari').val('');
        $('#bulan').val('');
        $('#tahun').val('');

        var tanggal1 = document.querySelector('#tanggal1').value;
        var tanggal2 = document.querySelector('#tanggal2').value;

        if (tanggal1 != '' && tanggal2 != '') {
            jangka_waktu(tanggal1, tanggal2)
        }
    })



    function jangka_waktu(tgl1, tgl2) {
        // console.log(tanggal1);
        tanggal1 = new Date(tgl1);
        tanggal2 = new Date(tgl2);

        tanggal1.setHours(0, 0, 0, 0);
        tanggal2.setHours(0, 0, 0, 0);

        var selisih = Math.abs(tanggal1 - tanggal2);
        var hdms = 1000 * 60 * 60 * 24;
        var selisih = Math.round(selisih / hdms);

        var jlmhhari = parseInt(selisih);

        var tahun = parseInt(jlmhhari / 365);
        var bulan = parseInt((jlmhhari % 365) / 30);
        var hari = parseInt((jlmhhari % 365) % 30);

        $('#hari').val(`${hari} Hari`);
        $('#bulan').val(`${bulan} Bulan`);
        $('#tahun').val(`${tahun} Tahun`);

        Biayasewa();
        total_biaya();
    }

    $('#tarif').on('change', function() {
        Biayasewa();
        total_biaya();
    });

    $('#luas_lahan').on('change', function() {
        Biayasewa();
        total_biaya();
    });

    $('#lumsum_check').on('change', function() {
        var cek = $(this).val();

        if (cek == 0) {
            $('#lumsum_check').val(1);
            $('#biaya_sewa').removeAttr('disabled');
        } else {
            $('#lumsum_check').val(0);

            $('#biaya_sewa').attr('disabled', true);
        }
    });


    function Biayasewa() {
        $('#biaya_sewa').val('');
        $('#ppn').val('');

        var luas = document.querySelector('#luas_lahan').value;

        var tgl1 = document.querySelector('#tanggal1').value;
        var tgl2 = document.querySelector('#tanggal2').value;

        var bulan = 0;
        if (tgl1 != '' && tgl2 != '') {
            tanggal1 = new Date(tgl1);
            tanggal2 = new Date(tgl2);

            var selisih = Math.abs(tanggal1 - tanggal2);
            var hdms = 1000 * 60 * 60 * 24;
            var selisih = Math.round(selisih / hdms);

            var jlmhhari = parseInt(selisih);

            bulan = parseInt(jlmhhari / 30) + 1;
        }

        var tarif = document.querySelector('#tarif').value;

        if (luas != '' && bulan != 0 && tarif != '') {
            var biaya_sewa = parseInt(luas) * parseInt(bulan) * parseInt(tarif);
        }


        $('#jangka_waktu').val(bulan);
        $('#biaya_sewa').val(biaya_sewa);
        var ppn = (11 / 100) * biaya_sewa;
        $('#ppn').val(ppn);

    }

    $('#biaya_sewa').on('change', function() {
        $('#ppn').val('');
        var sewa = document.querySelector('#biaya_sewa').value;
        var ppn = (11 / 100) * sewa;
        $('#ppn').val(ppn);
        total_biaya();
    });

    $('#biaya_pbb').on('change', function() {
        total_biaya();
    });
    $('#biaya_adm').on('change', function() {
        total_biaya();
    });
    $('#biaya_lain').on('change', function() {
        total_biaya();
    });


    function total_biaya() {
        var sewa = document.querySelector('#biaya_sewa').value ? document.querySelector('#biaya_sewa').value : 0;
        var pbb = document.querySelector('#biaya_pbb').value ? document.querySelector('#biaya_pbb').value : 0;
        var adm = document.querySelector('#biaya_adm').value ? document.querySelector('#biaya_adm').value : 0;
        var lain = document.querySelector('#biaya_lain').value ? document.querySelector('#biaya_lain').value : 0;
        var ppn = document.querySelector('#ppn').value ? document.querySelector('#ppn').value : 0;

        var total = parseInt(sewa) + parseInt(pbb) + parseInt(adm) + parseInt(lain) + parseInt(ppn);

        $('#total_biaya').val(total);
        bulat_total();
    }

    function bulat_total() {
        var total = document.querySelector('#total_biaya').value ? document.querySelector('#total_biaya').value : 0;
        var hasil = Math.round(parseInt(total) / 1000) * 1000;

        $('#pembulatan').val(hasil);

    }
</script>
@endsection