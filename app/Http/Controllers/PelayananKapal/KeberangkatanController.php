<?php

namespace App\Http\Controllers\PelayananKapal;

use App\Http\Controllers\Controller;
use App\Imports\ImportCrewListKeluar;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Excel;

class KeberangkatanController extends Controller
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

    return view('app.pelayanan-kapal.keberangkatan.list', $result);
  }

  public function crew(Request $request, $user)
  {
    $id = @$request->input('id');
    $search = @$request->input('search');
    $page = @$request->input('page') ? $request->input('page') : 1;
    $perPage = @$request->input('perPage') ? $request->input('perPage') : 10;

    $query = DB::table('t_pelayanan_kapal_crew_list')
    ->where("pelayanan_kapal_id", $id);
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

    return view('app.pelayanan-kapal.keberangkatan.crew', $result);
  }

  public function importCrewList(Request $request)
  {
    $pelayanan_kapal_id = $request->input('pelayanan_kapal_id');
    Excel::import(new ImportCrewListKeluar, $request->file('files'));

    return redirect()->back()->with('success', 'Berhasil upload data!');
  }

  public function deleteCrewList($user, $pelayanan_kapal_id, $kode)
  {
    $status = DB::table('t_pelayanan_kapal_crew_list')
      ->where("pelayanan_kapal_id", $pelayanan_kapal_id)
      ->where("kode_pelaut", $kode)
      ->delete();

    if ($status) {
      return redirect()->back()->with('success', 'Berhasil hapus data!');
    }
    return redirect()->back()->withErrors(['msg' => 'gagal hapus data!']);
  }

  public function kirim(Request $request)
  {

    $pelayanan_kapal_id = $request->input("id");
    $status = DB::table('t_monitoring_pelayanan_kapal')->where("pelayanan_kapal_id", $pelayanan_kapal_id)->update([
      "kepelautan" => 1,
    ]);

    $status = DB::table('t_pelayanan_kapal')->where("pelayanan_kapal_id", $pelayanan_kapal_id)->update([
      "flag_berangkat" => "1",
    ]);

    if ($status) {
      return redirect()->back()->with('success', 'Berhasil kirim data!');
    }
    return redirect()->back()->withErrors(['msg' => 'Gagal kirim data!']);
  }

}
