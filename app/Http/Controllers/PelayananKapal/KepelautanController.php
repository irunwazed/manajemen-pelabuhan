<?php

namespace App\Http\Controllers\PelayananKapal;

use App\Http\Controllers\Controller;
use App\Imports\ImportCrewListKeluar;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Excel;

class KepelautanController extends Controller
{

  public function list(Request $request, $user)
  {
    $nama_agen = @$request->input('nama_agen');
    $no_pkk = @$request->input('no_pkk');
    $nama_kapal = @$request->input('nama_kapal');

    $page = @$request->input('page') ? $request->input('page') : 1;
    $perPage = @$request->input('perPage') ? $request->input('perPage') : 10;


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
      ->where("t_pelayanan_kapal_rpkro.flag", "2")
      ->where("t_pelayanan_kapal_rpkro.flag_spog", "2");

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

    return view('app.pelayanan-kapal.kepelautan.list', $result);
  }

  public function detail(Request $request, $user)
  {
    $id = @$request->input('id');
    $search = @$request->input('search');
    $page = @$request->input('page') ? $request->input('page') : 1;
    $perPage = @$request->input('perPage') ? $request->input('perPage') : 10;

    $dataCrew = DB::table('t_pelayanan_kapal_crew_list')
    ->where("pelayanan_kapal_id", $id)
    ->get();

    $data = DB::table('t_pelayanan_kapal')
    ->leftJoin("mt_simlala_rpk", "mt_simlala_rpk.kode_kapal", "t_pelayanan_kapal.kode_kapal")
    ->where("pelayanan_kapal_id", $id)
    ->first();
      

    $result = [
      "user" => $user,
      "dataCrew" => $dataCrew,
      "data" => $data,
    ];

    return view('app.pelayanan-kapal.kepelautan.detail', $result);
  }

  public function verifikasi(Request $request)
  {
    $status = @$request->verifikasi == "setuju" ? true : false;
    $id = @$request->id;

    // monitoring
    $status = DB::table('t_monitoring_pelayanan_kapal')->where("pelayanan_kapal_id", $id)->update([
      "kepelautan" => 2,
    ]);

    $status = DB::table('t_pelayanan_kapal')->where("pelayanan_kapal_id", $id)->update([
      "flag_berangkat" => @$status ? "2" : "R",
    ]);

    if ($status) {
      return redirect(session()->get("role") . "/pelayanan-kapal/kepelautan/list")->with('success', 'Berhasil verifikasi data!');
    }
    return redirect(session()->get("role") . "/pelayanan-kapal/kepelautan/list")->withErrors(['msg' => 'Gagal verifikasi data!']);
  }

}
