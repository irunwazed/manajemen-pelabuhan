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
  public function savePengangkutan(Request $request)
  {
    // insert data ke table
    $simpan_data = DB::table('t_pengangkutan_pib')->insert([
      'header_pib_id' => $request->header_pib,
      'no_bc11_pib' => $request->no_bc11_pib,
      'no_post_bc11_pib' => $request->no_post_bc11_pib,
      'cara_pengangkutan_pib' => $request->cara_pengangkutan_pib,
      'nama_sarana_pengangkut' => $request->nama_sarana_pengangkut,
      'no_voyage' => $request->no_voyage,
      'bendera' => $request->bendera,
      'perkiraan_tgl_tiba' => $request->perkiraan_tgl_tiba,
      'pelabuhan_muat' => $request->pelabuhan_muat,
      'pelabuhan_transit' => $request->pelabuhan_transit,
      'tempat_penimbunan' => $request->tempat_penimbunan,
      'tanggal_bc11_pib' => $request->tanggal_bc11_pib,
      'pelabuhan_tujuan' => $request->pelabuhan
    ]);
    return redirect('admin/eksport-import/pengangkutan');
  }
  public function saveTransaksi(Request $request)
  {
    // insert data ke table
    $simpan_data = DB::table('t_data_transaksi_pib')->insert([
      'valuta_pib' => $request->valuta_pib,
      'ndpbm_pib' => $request->ndpbm_pib,
      'jenis_transaksi' => $request->jenis_transaksi,
      'biaya_tambahan' => $request->biaya_tambahan,
      'diskon' => $request->diskon,
      'freight' => $request->freight,
      'asuransi' => $request->asuransi,
      'voluntary_declaration' => $request->voluntary_declaration,
      'rupiah' => $request->rupiah,
      'berat_kotor' => $request->berat_kotor,
      'berat_bersih' => $request->berat_bersih
    ]);
    return redirect('admin/eksport-import/transaksi');
  }
  public function savePernyataan(Request $request)
  {
    // insert data ke table
    $simpan_data = DB::table('t_pernyataan_pib')->insert([
      'header_pib_id' => $request->header_pib_id,
      'tempat_pernyataan' => $request->tempat_pernyataan,
      'tanggal_pernyataan' => $request->tanggal_pernyataan,
      'nama_pernyataan' => $request->nama_pernyataan,
      'jabatan_pernyataan' => $request->jabatan_pernyataan
    ]);
    return redirect('admin/eksport-import/pernyataan');
  }
}