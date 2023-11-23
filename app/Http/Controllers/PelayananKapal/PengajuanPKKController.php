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

    $id = @$request->input('id');


    $data = DB::table('t_pelayanan_kapal')
      ->leftJoin("mt_simlala_rpk", "mt_simlala_rpk.kode_kapal", "t_pelayanan_kapal.kode_kapal")
      ->where("pelayanan_kapal_id", $id)->first();


    $dataPerusahaan = DB::table('m_perusahaan')
      ->get();

    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";

    $result = [
      "user" => $user,
      "request" => $request->input(),
      "data" => $data,
      "dataPerusahaan" => $dataPerusahaan,
    ];

    return view('app.pelayanan-kapal.pengajuan-pkk', $result);
  }

  public function getPBM(Request $request)
  {
    $pelayanan_kapal_id = $request->input("pelayanan_kapal_id");
    $data = DB::table('t_pelayanan_kapal_pbm')->where("pelayanan_kapal_id", $pelayanan_kapal_id)->get();

    $result = [
      "status" => true,
      "data" => $data,
    ];
    return $result;
  }

  public function savePBM(Request $request)
  {

    $pelayanan_kapal_id = $request->input('pelayanan_kapal_id');
    $type = $request->input('type');
    $perusahaan = $request->input('perusahaan');
    $kegiatan = $request->input('kegiatan');

    $lastPBM = DB::table('t_pelayanan_kapal_pbm')->orderBy("pelayanan_kapal_pbm_id", "DESC")->first();
    $dataPerusahaan = DB::table('m_perusahaan')->where("perusahaan_id", $perusahaan)->first();

    $idPBM = 1;
    if (@$lastPBM->pelayanan_kapal_pbm_id) {
      $idPBM = $lastPBM->pelayanan_kapal_pbm_id + 1;
    }


    $savePBM = DB::table('t_pelayanan_kapal_pbm')->insert([
      "pelayanan_kapal_id" => $pelayanan_kapal_id,
      "pelayanan_kapal_pbm_id" => $idPBM,
      "kode_pbm" => "",
      "nama_perusahaan" => @$dataPerusahaan->nama_perusahaan,
      "type_pbm" => $type,
      "kegiatan" => $kegiatan,
      "flag" => "0",
    ]);

    if ($savePBM) {
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

  public function deletePBM(Request $request, $id)
  {

    $status = DB::table('t_pelayanan_kapal_pbm')->where("pelayanan_kapal_pbm_id", $id)->delete();

    if ($status) {
      return [
        "status" => true,
        "message" => "berhasil hapus data",
      ];
    }
    return [
      "status" => false,
      "message" => "gagal hapus data",
    ];
  }

  public function manifestPenumpang(Request $request)
  {
    if ($request->file('files')) {
      $file = $request->file('files');
      $filename = time() . '_' . $file->getClientOriginalName();

      // File upload location
      $location = 'files/manifest/penumpang';

      // Upload file
      $file->move($location, $filename);

      // return redirect()->back()->with('success', 'Berhasil upload file!');  
    } 


    return redirect()->back()->withErrors(['msg' => 'gagal upload file!']);
  }
}
