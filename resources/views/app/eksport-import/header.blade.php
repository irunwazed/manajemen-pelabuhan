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
        <table class="w-full">
            <tr class="text-start mb-4">
                <td>No Pengajuan</td>
                <td></td>
                <td class="py-1">
                    <input
                    type="text"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                >
                </td>
            </tr>
            <tr class="text-start">
                <td>Pelabuhan Tujuan</td>
                <td></td>
                <td class="py-1">
                    <input
                    type="text"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                >
                </td>
            </tr>
            <tr class="text-start">
                <td>Kantor Kepebaenan</td>
                <td></td>
                <td class="py-1">
                    <input
                    type="text"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                >
                </td>
            </tr>
            <tr class="text-start">
                <td>Jenis PIB</td>
                <td></td>
                <td class="py-1">
                    <input
                    type="text"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                >
                </td>
            </tr>
            <tr class="text-start">
                <td>Jenis Import</td>
                <td></td>
                <td class="py-1">
                    <input
                    type="text"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                >
                </td>
            </tr>
            <tr class="text-start">
                <td>Cara Pembayaran</td>
                <td></td>
                <td class="py-1">
                    <input
                    type="text"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400"
                >
                </td>
            </tr>
        </table>
    </div>
    <div class="text-left pt-16 mt-16 pb-9">
        <a href="#" class="text-base bg-blue-600 text-blue-100 px-6 py-2.5 rounded hover:opacity-80">SIMPAN</a>
        <!-- <a href="#" class="text-base bg-yellow-600 text-yellow-100 px-6 py-2.5 rounded hover:opacity-80">Reset</a>
        <a href="{{url('admin/aneka-usaha/permohonan-sewa-lahan')}}" class="text-base text-gray-900 bg-white border border-gray-300 px-6 py-2.5 rounded hover:opacity-80">Batal</a>
        </div> -->
    </div>
@endsection
@section('script')
@endsection

<script>
  $(document).ready(function() {
    loadPBM()
  });
  
  let pelayanan_kapal_id = '{{ @$_GET["id"] }}';
  
  // PMB
  $('#form-pbm').submit(function(e) {
    e.preventDefault();
    let data = $('#form-pbm').serializeArray();
    data.push({
      name: "pelayanan_kapal_id",
      value: pelayanan_kapal_id
    })
    console.log("data", data)
    $.when(sendAjax('{{ URL::to("") }}/api/pelayanan-kapal/pengajuan-pkk/save/pbm', data, 'post', '#form-pbm')).done(function(res) {
      if (res.status) {
        pesanSweet('Berhasil', res.message);
        loadPBM()
      } else {
        pesanSweet('Gagal!', res.pesan, 'warning');
      }
    });
  })

  function loadPBM() {
    $.when(sendAjax('{{ URL::to("") }}/api/pelayanan-kapal/pengajuan-pkk/get/pbm', {pelayanan_kapal_id:pelayanan_kapal_id}, 'get')).done(function(res) {
      if (res.status) {
        console.log("e", res.data)
        $('#table-pbm > tbody ').empty();
        for(let i = 0; i < res.data.length; i++){
        $('#table-pbm > tbody ').append("<tr><td class='text-center'>"+(i+1)+"</td><td>"+res.data[i]["nama_perusahaan"]+"</td><td>"+res.data[i]["type_pbm"]+"</td><td>"+res.data[i]["kegiatan"]+"</td><td class='p-2'>"+
        `
        <center>
                <a href="javascript:void(0);" onClick="removePBM('${res.data[i]["pelayanan_kapal_pbm_id"]}')">
                  <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                    <path d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z" />
                  </svg>
                </a>
              </center>
        `
        +"</td></tr>")
        }
      } else {
        pesanSweet('Gagal!', res.pesan, 'warning');
      }
    });
  }

  async function removePBM(id){
    console.log("id",id)
    await init_hapus('{{ URL::to("") }}/api/pelayanan-kapal/pengajuan-pkk/delete/pbm/'+id);
    loadPBM()
  }

</script>