<?php

namespace App\Http\Controllers\PelayananKapal;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use App\User;

class PengajuanPKKController extends Controller
{

  public function show(Request $request, $user)
  {
    $search = $request->input('search');


    $page = @$request->input('page') ? $request->input('page') : 1;
    $perPage = @$request->input('perPage') ? $request->input('perPage') : 10;

    $noRpk = @$request->input('no_rpk');


    $dataRPK = DB::table('mt_simlala_rpk')
    ->leftJoin("m_kapal", "m_kapal.kode_kapal", "mt_simlala_rpk.kode_kapal")
      ->where("no_rpk", $noRpk)->first();

      
    $dataPerusahaan = DB::table('m_perusahaan')
    ->get();

      // echo "<pre>";
      // print_r($dataRPK);
      // echo "</pre>";

    $result = [
      "user" => $user,
      "request" => $request->input(),
      "dataRPK" => $dataRPK,
      "dataPerusahaan" => $dataPerusahaan,
    ];

    return view('app.pelayanan-kapal.pengajuan-pkk', $result);
  }

  public function getPBM(Request $request){
    $data = DB::table('t_pelayanan_kapal_pbm')->get();

    $result = [
      "status" => true,
      "data" => $data,
    ];
    return $result;
  }

  public function savePBM(Request $request){
    $type = $request->input('type');
    $perusahaan = $request->input('perusahaan');
    $kegiatan = $request->input('kegiatan');

    $lastPBM = DB::table('t_pelayanan_kapal_pbm')->orderBy("pelayanan_kapal_pbm_id", "DESC")->first();
    $dataPerusahaan = DB::table('m_perusahaan')->where("perusahaan_id", $perusahaan)->first();

    $idPBM = 1;
    if(@$lastPBM->pelayanan_kapal_pbm_id){
      $idPBM = $lastPBM->pelayanan_kapal_pbm_id +1;
    }
    

    $savePBM = DB::table('t_pelayanan_kapal_pbm')->insert([
      "pelayanan_kapal_id" => $perusahaan,
      "pelayanan_kapal_pbm_id" => $idPBM,
      "kode_pbm" => "",
      "nama_perusahaan" => @$dataPerusahaan->nama_perusahaan,
      "type_pbm" => $type,
      "kegiatan" => $kegiatan,
      "flag" => "0",
    ]);

    if($savePBM){
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

  public function deletePBM(Request $request){
    $type = $request->input('type');
    $perusahaan = $request->input('perusahaan');
    $kegiatan = $request->input('kegiatan');

    $lastPBM = DB::table('t_pelayanan_kapal_pbm')->orderBy("pelayanan_kapal_pbm_id", "DESC")->first();
    $dataPerusahaan = DB::table('m_perusahaan')->where("perusahaan_id", $perusahaan)->first();

    $idPBM = 1;
    if(@$lastPBM->pelayanan_kapal_pbm_id){
      $idPBM = $lastPBM->pelayanan_kapal_pbm_id +1;
    }
    

    $savePBM = DB::table('t_pelayanan_kapal_pbm')->insert([
      "pelayanan_kapal_id" => $perusahaan,
      "pelayanan_kapal_pbm_id" => $idPBM,
      "kode_pbm" => "",
      "nama_perusahaan" => @$dataPerusahaan->nama_perusahaan,
      "type_pbm" => $type,
      "kegiatan" => $kegiatan,
      "flag" => "0",
    ]);

    if($savePBM){
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
