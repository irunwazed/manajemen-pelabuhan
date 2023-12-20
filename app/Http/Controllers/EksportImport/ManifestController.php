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
      'nama_perusahaan' => $request->nama_perusahaan,
      'npwp_perusahaan' => $request->npwp_perusahaan,
      'alamat' => $request->alamat,
      'no_pengajuan' => $request->no_pengajuan,
      'no_daftar' => $request->no_daftar,
      'tgl_daftar' => $request->tgl_daftar,
      'kantor_pelayanan' => $request->kantor_pelayanan,
      'nama_pengangkut' => $request->nama_pengangkut,
      'no_pengangkut' => $request->no_pengangkut,
      'kode_negara' => $request->kode_negara,
      'tgl_tiba' => $request->tgl_tiba,
      'pelabuhan_asal' => $request->pelabuhan_asal,
      'pelabuhan_bongkar' => $request->pelabuhan_bongkar,
      'flag' => $request->flag
    ]);
    return redirect('admin/eksport-import/data-umum');
  }

  public function bill_landing(Request $request)
  {
    // insert data ke table
    $simpan_data = DB::table('t_manifest_pengangkut_bol')->insert([
      'manifest_pengangkut_dataumum_id' => $request->manifest_pengangkut_dataumum_id,
      //'manifest_pengangkut_bol_id' => $request->manifest_pengangkut_bol_id,
      'kelompok_pos' => $request->kelompok_pos,
      'nomor_pos' => $request->nomor_pos,
      'master_bol' => $request->master_bol,
      'bol' => $request->bol,
      'pelabuhan_asal' => $request->pelabuhan_asal,
      'pelabuhan_transit' => $request->pelabuhan_transit,
      'pelabuhan_bongkar' => $request->pelabuhan_bongkar,
      'pelabuhan_akhir' => $request->pelabuhan_akhir,
      'nama_kapal' => $request->nama_kapal,
      'nama_penerima' => $request->nama_penerima,
      'npwp_penerima' => $request->npwp_penerima,
      'nama_pengirim' => $request->nama_pengirim,
      'npwp_pengirim' => $request->npwp_pengirim,
      'berat' => $request->berat,
      'nama_kemasan' => $request->nama_kemasan,
      'total_kemasan' => $request->total_kemasan,
      //'flag' => $request->flag

    ]);
    return redirect('admin/eksport-import/bill-landing');
  }

  public function lampiran(Request $request)
  {
    // insert data ke table
    $simpan_data = DB::table('t_manifest_lampiran')->insert([
      //'manifest_pengangkut_dataumum_id' => $request->manifest_pengangkut_dataumum_id,
      //'manifest_lampiran_id' => $request->manifest_lampiran_id,
      'crewlist_file' => $request->crewlist_file,
      'daftar_penumpang_file' => $request->daftar_penumpang_file,
      'daftar_persediaan_file' => $request->daftar_persediaan_file,
    ]);
    return redirect('admin/eksport-import/lampiran');
  }

  public function hscode(Request $request)
  {
    // insert data ke table
    $simpan_data = DB::table('t_manifest_pengangkut_bol_hscod')->insert([
      'manifest_pengangkut_hscod_id' => $request->manifest_pengangkut_hscod_id,
       //'manifest_pengangkut_bol_id' => $request->manifest_pengangkut_bol_id,
      'hscode' => $request->hscode,
      'uraian' => $request->uraian,
       //'flag' => $request->flag,

    ]);
    return redirect('admin/eksport-import/bill-landing');
  }
  
  
}