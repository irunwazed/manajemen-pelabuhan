<?php

namespace App\Http\Controllers\EksportImport;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use App\User;

class EksportImportController extends Controller
{

  public function saveImportHeader(Request $request)
  {
    die('a');
    $no_pengajuan = $request->input('pengajuan');
    $pelabuhan = $request->input('pelabuhan');
    $Kepebaenan = $request->input('Kepebaenan');
    $pib = $request->input('pib');
    $import = $request->input('import');
    $pembayaran = $request->input('pembayaran');

    // $lastPBM = DB::table('t_pelayanan_kapal_pbm')->orderBy("pelayanan_kapal_pbm_id", "DESC")->first();
    // $dataPerusahaan = DB::table('m_perusahaan')->where("perusahaan_id", $perusahaan)->first();

    // $idPBM = 1;
    // if (@$lastPBM->pelayanan_kapal_pbm_id) {
    //   $idPBM = $lastPBM->pelayanan_kapal_pbm_id + 1;
    // }


    $saveImport = DB::table('t_header_pib')->insert([
      "no_pengajuan" => $no_pengajuan,
      "pelabuhan_tujuan" => $pelabuhan,
      "jenis_pib" => $pib,
      "jenis_import" => @$import,
      "cara_bayar" => $pembayaran,
      "flag" => "0",
    ]);

    if ($saveImport) {
      return [
        "status" => true,
        "message" => "berhasil memasukkan data",
      ];
    }
    return [
      "status" => false,
      "message" => "gagal memasukkan data",
    ];
  }


}
