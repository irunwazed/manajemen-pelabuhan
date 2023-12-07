@extends('layouts.admin')
@section('title', 'Eksport Import')
@section('content')
    <div class="h-56 grid">
        <div class="text-2xl ">Eksport-Import / Pembuatan Dokumen PIB</div>
            <hr class="border-b-2 border-black border-solid">
            <nav>
            <ul class="menu flex">
                <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/data-umum')}}">Data Umum</a></li>
                <li style="padding-left: 10px; padding-right: 10px; color: red;"><a href="{{url('admin/eksport-import/bill-landing')}}">Bill Of Landing</a></li>
                <li style="padding-left: 10px; padding-right: 10px; color: green;"><a href="{{url('admin/eksport-import/lampiran')}}">Lampiran</a></li>
            </ul>
            </nav>
        </div>
    </div>
    <div class="h-56 grid grid-cols-2 gap-4">
        <div>
        <form action="/Manifest/lampiran" method="POST" enctype="multipart/form-data">
            <table class="w-full">
                <tr class="text-start">
                    <td>Create List</td>
                    <td></td>
                    <td class="py-1">
                        <input type="file" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="crewlist_file">
                    </td>
                </tr>
                <tr class="text-start mb-4">
                    <td>Daftar Penumpang</td>
                    <td></td>
                    <td class="py-1">
                        <input type="file" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="daftar_penumpang_file">
                    </td>
                </tr>
                <tr class="text-start">
                    <td>Daftar Persediaan</td>
                    <td></td>
                    <td class="py-1">
                        <input type="file" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-800 rounded-md text-sm shadow-sm placeholder-slate-400" name="daftar_persediaan_file">
                    </td>
                </tr>
            </table>
            <div class="text-left pt-16 mt-16 pb-9">
                <button type="submit" class="text-base bg-blue-600 text-blue-100 px-6 py-2.5 rounded hover:opacity-80">SIMPAN</button>
            </div>
        </form>
        </div>
    </div>
@endsection

@section('script')
@endsection