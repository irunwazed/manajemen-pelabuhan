<?php

namespace App\Http\Controllers\EksportImport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ImportController extends Controller
{
  public function saveHeader(Request $request)
  {
    // insert data ke table
    $simpan_data = DB::table('t_header_pib')->insert([
      'no_pengajuan' => $request->no_pengajuan,
      'pelabuhan_id' => $request->pelabuhan,
      'kantor_kepabeanan' => $request->kepebaenan,
      'jenis_pib' => $request->jenis_pib,
      'jenis_import_id' => $request->jenis_impor,
      'cara_bayar_id' => $request->cara_bayar
    ]);
    return redirect('admin/eksport-import/header');
  }
}