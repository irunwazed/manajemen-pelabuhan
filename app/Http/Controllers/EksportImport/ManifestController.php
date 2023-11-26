<?php

namespace App\Http\Controllers\EksportImport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ManifestController extends Controller
{

  public function data_umum(Request $request)
  {
    // insert data ke table
    $simpan_data = DB::table('t_manifest_pengangkut_dataumum')->insert([
      'no_pengajuan' => $request->no_pengajuan,
      'pelabuhan_id' => $request->pelabuhan,
      'kantor_kepabeanan' => $request->kepebaenan,
      'jenis_pib' => $request->jenis_pib,
      'jenis_import_id' => $request->jenis_impor,
      'cara_bayar_id' => $request->cara_bayar
    ]);
    return redirect('admin/eksport-import/data-umum');
  }

  public function bill_landing(Request $request)
  {
    // insert data ke table
    $simpan_data = DB::table('t_manifest_pengangkut_bol')->insert([
      'no_pengajuan' => $request->no_pengajuan,
      'pelabuhan_id' => $request->pelabuhan,
      'kantor_kepabeanan' => $request->kepebaenan,
      'jenis_pib' => $request->jenis_pib,
      'jenis_import_id' => $request->jenis_impor,
      'cara_bayar_id' => $request->cara_bayar
    ]);
    return redirect('admin/eksport-import/bill-landing');
  }

  public function lampiran(Request $request)
  {
    // insert data ke table
    $simpan_data = DB::table('t_manifest_lampiran')->insert([
      'no_pengajuan' => $request->no_pengajuan,
      'pelabuhan_id' => $request->pelabuhan,
      'kantor_kepabeanan' => $request->kepebaenan,
      'jenis_pib' => $request->jenis_pib,
      'jenis_import_id' => $request->jenis_impor,
      'cara_bayar_id' => $request->cara_bayar
    ]);
    return redirect('admin/eksport-import/lampiran');
  }

  public function hscode(Request $request)
  {
    // insert data ke table
    $simpan_data = DB::table('t_manifest_pengangkut_bol_hscod')->insert([
      'no_pengajuan' => $request->no_pengajuan,
      'pelabuhan_id' => $request->pelabuhan,
      'kantor_kepabeanan' => $request->kepebaenan,
      'jenis_pib' => $request->jenis_pib,
      'jenis_import_id' => $request->jenis_impor,
      'cara_bayar_id' => $request->cara_bayar
    ]);
    return redirect('admin/eksport-import/bill-landing');
  }
  
  
}