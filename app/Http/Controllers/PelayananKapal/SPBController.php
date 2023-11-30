<?php

namespace App\Http\Controllers\PelayananKapal;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SPBController extends Controller
{

  public function list(Request $request, $user)
  {
    $nama_agen = @$request->input('nama_agen');
    $no_pkk = @$request->input('no_pkk');
    $nama_kapal = @$request->input('nama_kapal');
    $flag_spog = @$request->input('flag_spog');

    $page = @$request->input('page') >= 1 ? $request->input('page') : 1;
    $perPage = @$request->input('perPage') >= 1 ? $request->input('perPage') : 10;


    $query = DB::table('t_pelayanan_kapal')
      ->select([
        "t_pelayanan_kapal.*",
        "t_pelayanan_kapal_rpkro.pelayanan_kapal_rpkro_id",
        "t_pelayanan_kapal_rkbm.flag as rkbm_flag",
        "t_pelayanan_kapal_rpkro.flag as rpkro_flag",
        "t_pelayanan_kapal_rpkro.flag_spog",
        "t_pelayanan_kapal_rpkro.no_rpkro",
        "t_pelayanan_kapal_rpkro.no_permohonan_spog",
        "t_pelayanan_kapal_rpkro.wkt_permohonan_spog",
      ])
      ->leftJoin("t_pelayanan_kapal_rpkro", "t_pelayanan_kapal_rpkro.pelayanan_kapal_id", "t_pelayanan_kapal.pelayanan_kapal_id")
      ->leftJoin("t_pelayanan_kapal_rkbm", "t_pelayanan_kapal_rkbm.pelayanan_kapal_id", "t_pelayanan_kapal.pelayanan_kapal_id")
      ->where("t_pelayanan_kapal.nama_agen", 'like', '%' . $nama_agen . '%')
      ->where("t_pelayanan_kapal.no_pkk", 'like', '%' . $no_pkk . '%')
      ->where("t_pelayanan_kapal.nama_kapal", 'like', '%' . $nama_kapal . '%')
      ->where("t_pelayanan_kapal.flag", "2")
      ->where("t_pelayanan_kapal.flag_spm", "2")
      ->where("t_pelayanan_kapal_rkbm.flag", "2")
      ->where("t_pelayanan_kapal_rpkro.flag", "2");

    $total = $query->count();
    $data = $query->skip(($page - 1) * $perPage)->take($perPage)
      ->get();

    $result = [
      "user" => $user,
      "request" => $request->input(),
      "data" => $data,
      "page" => $page,
      "perPage" => $perPage,
      "total" => $total,
      "totalPage" => (ceil($total / $perPage)),
    ];

    return view('app.pelayanan-kapal.spb.list', $result);
  }

  public function detail(Request $request, $user)
  {
    $id = $request->id;

    $data = DB::table('t_pelayanan_kapal')
      ->select([
        't_pelayanan_kapal.*',
        'mt_simlala_rpk.no_rpk',
        'mt_simlala_rpk.jenis_trayek',
        'mt_simlala_rpk.trayek',
        'mt_simlala_rpk.nama_perusahaan',
        'mt_simlala_rpk.tanda_pendaftaran_kapal',
      ])
      ->leftJoin("mt_simlala_rpk", "mt_simlala_rpk.kode_kapal", "t_pelayanan_kapal.kode_kapal")
      ->where("pelayanan_kapal_id", $id)->first();


    $dataCrewList = DB::table('t_pelayanan_kapal_crew_list')
      ->where("pelayanan_kapal_id", $id)
      ->get();

    $dataBrgBerbahaya = DB::table('t_pelayanan_kapal_bm_brgberbahaya')
      ->where("pelayanan_kapal_id", $id)
      ->get();

    $dataBrgTercemar = DB::table('t_pelayanan_kapal_bm_brgtercemar')
      ->where("pelayanan_kapal_id", $id)
      ->first();

    $dataDokumen = DB::table('t_pelayanan_kapal_dokumen')
      ->where("pelayanan_kapal_id", $id)
      ->get();

    $dataMuatan = DB::table('t_pelayanan_kapal_rkbm_barang')
      ->leftJoin("t_pelayanan_kapal_rkbm", "t_pelayanan_kapal_rkbm.pelayanan_kapal_rkbm_id", "t_pelayanan_kapal_rkbm_barang.pelayanan_kapal_rkbm_id")
      ->where("t_pelayanan_kapal_rkbm.pelayanan_kapal_id", $id)
      ->get();

    $dataRPKRO = DB::table('t_pelayanan_kapal_rpkro')
      ->where("t_pelayanan_kapal_rpkro.pelayanan_kapal_id", $id)
      ->get();



    $result = [
      "user" => $user,
      "request" => $request->input(),
      "data" => $data,
      "dataCrewList" => $dataCrewList,
      "dataDokumen" => $dataDokumen,
      "dataBrgBerbahaya" => $dataBrgBerbahaya,
      "dataBrgTercemar" => $dataBrgTercemar,
      "dataMuatan" => $dataMuatan,
      "dataRPKRO" => $dataRPKRO,
    ];

    return view('app.pelayanan-kapal.spb.detail', $result);
  }

  public function verifikasi(Request $request)
  {
    $status = @$request->verifikasi == "setuju" ? true : false;
    $id = @$request->id;

    // monitoring
    $status = DB::table('t_monitoring_pelayanan_kapal')->where("pelayanan_kapal_id", $id)->update([
      "spb" => 2,
    ]);

    $status = DB::table('t_pelayanan_kapal')->where("pelayanan_kapal_id", $id)->update([
      "flag_spb" => @$status ? "2" : "R",
    ]);

    if ($status) {
      return redirect(session()->get("role") . "/pelayanan-kapal/spb")->with('success', 'Berhasil verifikasi data!');
    }
    return redirect(session()->get("role") . "/pelayanan-kapal/spb")->withErrors(['msg' => 'Gagal verifikasi data!']);
  }

}
