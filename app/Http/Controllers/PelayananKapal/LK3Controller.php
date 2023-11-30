<?php

namespace App\Http\Controllers\PelayananKapal;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LK3Controller extends Controller
{

  public function list(Request $request, $user){
    $nama_agen  = @$request->input('nama_agen');
    $no_pk      = @$request->input('no_pkk');
    $nama_kapal = @$request->input('nama_kapal');

    $page = @$request->input('page') >= 1 ? $request->input('page') : 1;
    $perPage = @$request->input('perPage') >= 1 ? $request->input('perPage') : 10;


    $query = DB::table('t_pelayanan_kapal')
        ->where(
            function ($query) use ($nama_agen, $nama_kapal, $no_pk) {
            return $query
                ->where('nama_kapal', 'like', '%' . $nama_kapal . '%')
                ->orWhere('nama_agen', 'like', '%' . $nama_agen . '%')
                ->orWhere('no_pkk', 'like', '%' . $no_pk . '%');
            }
        );
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

    return view('app.pelayanan-kapal.lk3.list', $result);
  }

  public function detail(Request $request, $user){
    $pelayanan_kapal_id = $request->input("id");
    $status = @$request->input("status");
    
    $data = DB::table('t_pelayanan_kapal')
      ->select([
        't_pelayanan_kapal.*',
        'mt_simlala_rpk.no_rpk',
        'mt_simlala_rpk.jenis_trayek',
        'mt_simlala_rpk.trayek',
        'mt_simlala_rpk.nama_perusahaan',
        'mt_simlala_rpk.tanda_pendaftaran_kapal',
        't_pelayanan_kapal_rpkro.no_rpkro',
      ])
      ->leftJoin("mt_simlala_rpk", "mt_simlala_rpk.kode_kapal", "t_pelayanan_kapal.kode_kapal")
      ->leftJoin("t_pelayanan_kapal_rpkro", "t_pelayanan_kapal_rpkro.pelayanan_kapal_id", "t_pelayanan_kapal.pelayanan_kapal_id")
      ->where("t_pelayanan_kapal.pelayanan_kapal_id", $pelayanan_kapal_id)->first();


    $input = DB::table("t_pelayanan_kapal_rpkro")->where("pelayanan_kapal_id", $pelayanan_kapal_id)->first();

    $dataCrewList = DB::table('t_pelayanan_kapal_crew_list')
      ->where("pelayanan_kapal_id", $pelayanan_kapal_id)
      ->get();

    $result = [
      "user" => $user,
      "request" => $request->input(),
      "input" => $input,
      "data" => $data,
      "dataCrewList" => $dataCrewList,
    ];

    return view('app.pelayanan-kapal.lk3.lk3-verifikasi', $result);
  }


  public function verifikasi(Request $request){
    $status = @$request->verifikasi == "setuju" ? true : false;
    $id = @$request->id;

    if($status == true){
      $flag_lk3 = "2";
      $lk3 = "2";
    }
    else{
      $flag_lk3 = "R";
      $lk3 = "R";
    }

    $status = DB::table('t_pelayanan_kapal')->where("pelayanan_kapal_id", $id)->update([
      "flag_lk3" => $flag_lk3,
    ]);

    // monitoring
    $status = DB::table('t_monitoring_pelayanan_kapal')->where("pelayanan_kapal_id", $id)->update([
      "lk3" => $lk3,
    ]);

    if ($status) {
      return redirect(session()->get("role") . "/pelayanan-kapal/lk3")->with('success', 'Berhasil verifikasi data!');
    }
    return redirect(session()->get("role") . "/pelayanan-kapal/lk3")->withErrors(['msg' => 'Gagal verifikasi data!']);
  }
}
