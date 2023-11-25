<?php

namespace App\Http\Controllers\PelayananKapal;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RPKROController extends Controller
{

  public function list(Request $request, $user)
  {
    $agen = @$request->input('agen');
    $no_ppk = @$request->input('no_ppk');
    $kapal = @$request->input('kapal');

    $page = @$request->input('page') ? $request->input('page') : 1;
    $perPage = @$request->input('perPage') ? $request->input('perPage') : 10;


    $query = DB::table('t_pelayanan_kapal')
      ->select([
        "t_pelayanan_kapal.*",
        "t_pelayanan_kapal_rkbm.pelayanan_kapal_rkbm_id",
        "t_pelayanan_kapal_rkbm.flag as rkbm_flag",
      ])
      ->leftJoin("t_pelayanan_kapal_pbm", "t_pelayanan_kapal_pbm.pelayanan_kapal_id", "t_pelayanan_kapal.pelayanan_kapal_id")
      ->leftJoin("t_pelayanan_kapal_rkbm", "t_pelayanan_kapal_rkbm.pelayanan_kapal_id", "t_pelayanan_kapal.pelayanan_kapal_id")
      ->where("t_pelayanan_kapal.nama_agen", 'like', '%' . $agen . '%')
      ->where("t_pelayanan_kapal.no_pkk", 'like', '%' . $no_ppk . '%')
      ->where("t_pelayanan_kapal.nama_kapal", 'like', '%' . $kapal . '%')
      ->where("t_pelayanan_kapal.flag", "2")
      ->where("t_pelayanan_kapal.flag_spm", "2")
      ->where("t_pelayanan_kapal_rkbm.flag", "2");




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

    return view('app.pelayanan-kapal.rpkro.list', $result);
  }

  public function form(Request $request, $user)
  {
    $pelayanan_kapal_id = $request->input("id");
    $data = DB::table("t_pelayanan_kapal")->where("pelayanan_kapal_id", $pelayanan_kapal_id)->first();


    $input = DB::table("t_pelayanan_kapal_rkbm")->where("pelayanan_kapal_id", $pelayanan_kapal_id)->first();

    $dataDermaga = DB::table("m_lokasi_dermaga")->get();

    $result = [
      "user" => $user,
      "request" => $request->input(),
      "input" => $input,
      "data" => $data,
      "dataDermaga" => $dataDermaga,
    ];

    return view('app.pelayanan-kapal.rkbm.form', $result);
  }

}
