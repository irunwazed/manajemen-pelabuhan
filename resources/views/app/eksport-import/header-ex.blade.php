@extends('layouts.admin')
@section('title', 'Eksport Import')
@section('content')
    <div class="h-56 grid">
        <div class="text-2xl ">Eksport-Import / Pembuatan Dokumen PIB</div>
            <hr class="border-b-2 border-black border-solid">
            <nav>
                <ul>
                    <li><a href="{{url('admin/eksport-import/header-ex')}}">HEADER</a></li>
                    <li><a href="{{url('admin/eksport-import/entitas-ex')}}">ENTITAS</a></li>
                    <li><a href="{{url('admin/eksport-import/dokumen-pendukung-ex')}}">DOKUMEN PENDUKUNG</a></li>
                    <li><a href="{{url('admin/eksport-import/pengangkutan-ex')}}">DATA PENGANGKUTAN</a></li>
                    <li><a href="{{url('admin/eksport-import/kemasan-kontainer-ex')}}">KEMASAN DAN KONTAINER</a></li>
                    <li><a href="{{url('admin/eksport-import/transaksi-ex')}}">DATA TRANSAKSI</a></li>
                    <li><a href="{{url('admin/eksport-import/data-barang-ex')}}">DATA BARANG</a></li>
                    <li><a href="{{url('admin/eksport-import/pungutan-ex')}}">PUNGUTAN</a></li>
                    <li><a href="{{url('admin/eksport-import/pernyataan-ex')}}">PERNYATAAN</a></li>
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
                <td>Kantor Pabean Muat Asal</td>
                <td></td>
                <td class="py-1">
                    <input
                    type="text"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="pelabuhan" name="pelabuhan"
                >
                </td>
            </tr>
            <tr class="text-start">
                <td>Pelabuhan Muat Ekspor</td>
                <td></td>
                <td class="py-1">

                    <input
                    type="text"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="kepebaenan" name="kepebaenan"
                >
                </td>
            </tr>
            <tr class="text-start">
                <td>Kantor Kepebaenan Muat Ekspor</td>
                <td></td>
                <td class="py-1">

                    <input
                    type="text"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="pib" name="pib"
                >
                </td>
            </tr>
            <tr class="text-start">
                <td>Jenis Eksport</td>
                <td></td>
                <td class="py-1">
                    <input
                    type="text"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="importData" name="importData"
                >
                </td>
            </tr>
            <tr class="text-start">
                <td>Kategori Eksport</td>
                <td></td>
                <td class="py-1">
                    <input
                    type="text"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="importData" name="importData"
                >
                </td>
            </tr>
            <tr class="text-start">
                <td>Cara bayar</td>
                <td></td>
                <td class="py-1">
                    <input
                    type="text"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="pembayaran" name="pembayaran"
                >
                </td>
            </tr>
            <tr class="text-start">
                <td>Cara Dagang</td>
                <td></td>
                <td class="py-1">
                    <input
                    type="text"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="pembayaran" name="pembayaran"
                >
                </td>
            </tr>
            <tr class="text-start">
                <td>komoditi</td>
                <td></td>
                <td class="py-1">
                    <input
                    type="text"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" id="pembayaran" name="pembayaran"
                >
                </td>
            </tr>
            <tr class="text-start">
                <td>Curah</td>
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
        var importData = document.getElementById("importData").value;
        var pembayaran = document.getElementById("pembayaran").value;

        var formData = new FormData();
        formData.append("pengajuan", pengajuan);
        formData.append("pelabuhan", pelabuhan);
        formData.append("kepebaenan", kepebaenan);
        formData.append("pib", pib);
        formData.append("import", importData);
        formData.append("pembayaran", pembayaran);

        $.ajax({
            url: '/upload/save/import',
            type: 'get',
            data: formData,
            success: function(response) {
                // Handle the response from the API
                console.log(response);
            },
            error: function(error) {
                // Handle errors
                console.log(error);
            }
        });
        
    }
</script>
@endsection