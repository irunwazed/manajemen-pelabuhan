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
      'header_pib_id' => $request->header_pib,
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
  public function saveBarang(Request $request)
  {
    // insert data ke table
    $simpan_data = DB::table('t_data_barang_pib')->insert([
      'header_pib_id' => $request->header_pib,
      'no_seri_barang' => $request->no_seri_barang,
      'hs_code_barang' => $request->hs_code_barang,
      'lartas_barang' => $request->lartas_barang,
      'kode_barang' => $request->kode_barang,
      'uraian_barang' => $request->uraian_barang,
      'merk_barang' => $request->merk_barang,
      'type_barang' => $request->type_barang,
      'ukuran_barang' => $request->ukuran_barang,
      'kondisi_barang' => $request->kondisi_barang,
      'negara' => $request->negara,
      'berat_bersih' => $request->berat_bersih,
      'dokumen_lartas' => $request->dokumen_lartas,
      'satuan_id' => $request->satuan_id,
      'kemasan_id' => $request->kemasan_id,
      'amount' => $request->amount,
      'jenis_nilai' => $request->jenis_nilai,
      'jatuh_tempo' => $request->jatuh_tempo,
      'voluntary_declaration' => $request->voluntary_declaration,
      'biaya_tambahan' => $request->biaya_tambahan,
      'fob' => $request->fob,
      'harga_satuan' => $request->harga_satuan,
      'freight' => $request->freight,
      'asuransi' => $request->asuransi,
      'cif_rupiah' => $request->cif_rupiah
    ]);
    return redirect('admin/eksport-import/data-barang');
  }
  public function saveKontainer(Request $request)
  {
    // insert data ke table
    $simpan_data = DB::table('t_kontainer_pib')->insert([
      'header_pib_id' => $request->header_pib,
      'seri_kontainer' => $request->seri_kontainer,
      'no_kontainer' => $request->no_kontainer,
      'ukuran_kontainer' => $request->ukuran_kontainer,
      'type_kontainer' => $request->type_kontainer
    ]);
    return redirect('admin/eksport-import/kemasan-kontainer');
  }
  public function saveKemasan(Request $request)
  {
    // insert data ke table
    $simpan_data = DB::table('t_kemasan_pib')->insert([
      'header_pib_id' => $request->header_pib,
      'seri_kemasan' => $request->seri_kemasan,
      'jumlah_kemasan' => $request->jumlah_kemasan,
      'jenis_kemasan' => $request->jenis_kemasan,
      'merk_kemasan' => $request->merk_kemasan
    ]);
    return redirect('admin/eksport-import/kemasan-kontainer');
  }
  public function savePernyataan(Request $request)
  {
    // insert data ke table
    $simpan_data = DB::table('t_pernyataan_pib')->insert([
      'header_pib_id' => $request->header_pib,
      'tempat_pernyataan' => $request->tempat_pernyataan,
      'tanggal_pernyataan' => $request->tanggal_pernyataan,
      'nama_pernyataan' => $request->nama_pernyataan,
      'jabatan_pernyataan' => $request->jabatan_pernyataan
    ]);
    return redirect('admin/eksport-import/pernyataan');
  }
}