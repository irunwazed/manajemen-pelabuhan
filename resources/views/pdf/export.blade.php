<div class="head">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Set the container width and height to 14cm x 8cm */
        .container {
            width: 14cm;
            height: 8cm;
            margin: auto;
            padding: 1cm;
            box-sizing: border-box;
            border: 1px solid #000;
        }

        .text-2xl {
            font-size: 1.5rem;
        }

        hr {
            border: 2px solid black;
            margin: 1rem 0;
        }

        .grid {
            display: grid;
        }

        .grid-cols-2 {
            grid-template-columns: repeat(2, 1fr);
        }

        .gap-4 {
            gap: 1rem;
        }

        .pt-16 {
            padding-top: 0.5rem;
        }

        .content {
            margin-top: 0.5rem;
        }

        .text-center {
            text-align: center;
        }

        .font-bold {
            font-weight: bold;
        }

        .text-right {
            text-align: right;
        }

        .mb-3 {
            margin-bottom: 0.5rem;
        }

        .mt-5 {
            margin-top: 0.75rem;
        }

        .bg-gradient-to-r {
            background: linear-gradient(to right, #00bcd4, #006064);
        }

        .text-white {
            color: #fff;
        }

        .hover-bg-slate-300:hover {
            background-color: #cbd5e0;
        }

        .border-slate-800 {
            border-color: #2d3748;
        }

        .border-solid {
            border-style: solid;
        }

        .terbilang {
            margin-top: 0.5rem;
        }

        /* Updated table styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 0.5rem;
        }

        th,
        td {
            border: 1px solid #2d3748;
            padding: 0.5rem;
            text-align: left;
            color: #000;
            /* Set the text color to black */
        }

        th {
            background: linear-gradient(to right, #00bcd4, #006064);
            color: #fff;
            /* Set the text color to white for header */
        }

        @media print {
            body {
                font-size: 10pt;
                /* Adjust font size for print */
            }

            .container {
                width: 100%;
                /* Full width for printing */
                margin: 0;
                border: none;
                /* No border for printing */
            }

            /* ... (rest of your print-specific styles) ... */
        }
    </style>
</div>
<div class="form">
    <div align="center">
        <h4>Pranota {{date('Y').".0000".$data->au_lahan_id}}</h3>
    </div>
    <hr class="border-b-2 border-black border-solid">
    <div class="grid grid-cols-2 gap-4 pt-16">
        <div>
            <div class="font-bold">PT PELABUHAN INDONESIA IV</div>
            <div>CABANG:</div>
        </div>
        <div style="align-content: right;">
            <div class="font-bold">{{$data->nama_perusahaan}}</div>
            <div>TGL CETAK: {{date('d-m-Y')}}</div>
        </div>
    </div>

    <hr class="border-b-10 border-black border-solid">

    <div class="text-center font-bold mt-10">DAFTAR PERHITUNGAN TAGIHAN PENYEWAAN TANAH DAN BANGUNAN</div>

    <div class="grid grid-cols-2 gap-4 pt-16">
        <div>
            <div>No. Pranota : {{date('Y').".0000".$data->au_lahan_id}}</div>
            <div>No. Kontrak : {{$data->no_kontrak}}</div>
            <div>Tgl. Kontrak : {{$data->tgl_kontrak}}</div><br>
            <div>Periode Pemakaian : {{$data->periode_pakai_mulai}} S/D {{$data->periode_pakai_selesai}}</div>
            <br>
        </div>
        <div class="text-right">
            <div>Kepada YTH : </div>
            <div>{{$data->contact_person}}</div>
        </div>
    </div>

    <div class="text-center mb-6 mt-10">
        <div class="text-center mb-6 mt-10">
            <table>
                <thead style="color:black;">
                    <tr style="color:#000">
                        <td>No</td>
                        <td>Pemakaian</td>
                        <td>Jangka Waktu</td>
                        <td>Luas M2</td>
                        <td>Tarif Rp.</td>
                        <td>Jumlah Sewa Rp.</td>
                        <td>Keterangan</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>{{$data->jenis_properti}}</td>
                        <td>{{$data->jangka_waktu}}</td>
                        <td>{{$data->luas_lahan}}</td>
                        <td>{{$data->tarif}}</td>
                        <td>{{$data->biaya_sewa}}</td>
                        <td>{{$data->keterangan}}</td>
                    </tr>
                    <tr>
                        <td rowspan="2" colspan="5">Jumlah Seluruhnya </td>
                        <td colspan="2">{{$data->biaya_sewa}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="terbilang">Terbilang : </div>
    <p>Rp.</p>
    <hr class="border-b-4 border-black border-solid">
</div>