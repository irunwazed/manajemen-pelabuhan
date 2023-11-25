@extends('layouts.admin')
@section('title', 'Eksport Import')
@section('content')
    <div class="h-56 grid">
        <div class="text-2xl ">Eksport-Import / Manifest Pengangkut</div>
            <hr class="border-b-2 border-black border-solid">
            <nav>
            <ul>
                <li><a href="{{url('admin/eksport-import/data-umum')}}">Data Umum</a></li>
                <li><a href="{{url('admin/eksport-import/bill-landing')}}">Bill Of Landing</a></li>
                <li><a href="{{url('admin/eksport-import/lampiran')}}">Lampiran</a></li>
            </ul>
            </nav>
        </div>
    </div>
@endsection

@section('script')
@endsection
