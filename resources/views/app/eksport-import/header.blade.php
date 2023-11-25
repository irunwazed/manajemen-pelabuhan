@extends('layouts.admin')
@section('title', 'Eksport Import')
@section('content')
    <div class="h-56 grid">
        <div class="text-2xl ">Eksport-Import / Pembuatan Dokumen PIB</div>
            <hr class="border-b-2 border-black border-solid">
            <nav>
                <ul>
                    <li><a href="{{url('admin/eksport-import/header')}}">HEADER</a></li>
                    <li><a href="{{url('admin/eksport-import/entitas')}}">ENTITAS</a></li>
                    <li><a href="{{url('admin/eksport-import/dokumen-pendukung')}}">DOKUMEN PENDUKUNG</a></li>
                    <li><a href="{{url('admin/eksport-import/pengangkutan')}}">DATA PENGANGKUTAN</a></li>
                    <li><a href="{{url('admin/eksport-import/kemasan-kontainer')}}">KEMASAN DAN KONTAINER</a></li>
                    <li><a href="{{url('admin/eksport-import/transaksi')}}">DATA TRANSAKSI</a></li>
                    <li><a href="{{url('admin/eksport-import/data-barang')}}">DATA BARANG</a></li>
                    <li><a href="{{url('admin/eksport-import/pungutan')}}">PUNGUTAN</a></li>
                    <li><a href="{{url('admin/eksport-import/pernyataan')}}">PERNYATAAN</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="h-56 grid grid-cols-2 gap-4">
    <form id="uploadForm" enctype="multipart/form-data">
        <table class="w-full">
            <tr class="text-start mb-4">
                <td>No Pengajuan</td>
                <td></td>
                <td class="py-1">
                    <input
                    type="text"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="pengajuan" name="pengajuan"
                >
                </td>
            </tr>
            <tr class="text-start">
                <td>Pelabuhan Tujuan</td>
                <td></td>
                <td class="py-1">
                    <input
                    type="text"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="pelabuhan" name="pelabuhan"
                >
                </td>
            </tr>
            <tr class="text-start">
                <td>Kantor Kepebaenan</td>
                <td></td>
                <td class="py-1">

                    <input
                    type="text"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="kepebaenan" name="kepebaenan"
                >
                </td>
            </tr>
            <tr class="text-start">
                <td>Jenis PIB</td>
                <td></td>
                <td class="py-1">

                    <input
                    type="text"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="pib" name="pib"
                >
                </td>
            </tr>
            <tr class="text-start">
                <td>Jenis Import</td>
                <td></td>
                <td class="py-1">
                    <input
                    type="text"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="import" name="import"
                >
                </td>
            </tr>
            <tr class="text-start">
                <td>Cara Pembayaran</td>
                <td></td>
                <td class="py-1">
                    <input
                    type="text"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="pembayaran" name="pembayaran"
                >
                </td>
            </tr>
        </table>
        <div class="text-left pt-16 mt-16 pb-9">
            <button type="submit" onclick="submitForm()" class="text-base bg-blue-600 text-blue-100 px-6 py-2.5 rounded hover:opacity-80">SIMPAN</button>
        </div>
    </form>
    </div>
@endsection
@section('script')


<script>
  // PMB
  function submitForm() {
        var pengajuan = document.getElementById("pengajuan").value;
        var pelabuhan = document.getElementById("pelabuhan").value;
        var kepebaenan = document.getElementById("kepebaenan").value;
        var pib = document.getElementById("pib").value;
        var import = document.getElementById("import").value;
        var pembayaran = document.getElementById("pembayaran");

        var formData = new FormData();
        formData.append("pengajuan", pengajuan);
        formData.append("pelabuhan", pelabuhan);
        formData.append("kepebaenan", kepebaenan);
        formData.append("pib", pib);
        formData.append("import", import);
        formData.append("pembayaran", pembayaran);
        
        fetch("{{ url('/upload-form') }}", {
            method: "POST",
            body: formData,
            headers: {
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
            },
        })
        .then(response => response.json())
        .then(data => {
            document.getElementById("result").innerHTML = data.message;
        })
        .catch(error => {
            console.error("Error:", error);
        });
    }
</script>
@endsection