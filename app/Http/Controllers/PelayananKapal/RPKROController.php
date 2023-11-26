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
        "t_pelayanan_kapal_rpkro.pelayanan_kapal_rpkro_id",
        "t_pelayanan_kapal_rkbm.flag as rkbm_flag",
        "t_pelayanan_kapal_rpkro.flag as rpkro_flag",
      ])
      ->leftJoin("t_pelayanan_kapal_rpkro", "t_pelayanan_kapal_rpkro.pelayanan_kapal_id", "t_pelayanan_kapal.pelayanan_kapal_id")
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
    $status = @$request->input("status");
    $data = DB::table("t_pelayanan_kapal")
    ->select([
      "t_pelayanan_kapal.*",
      "t_pelayanan_kapal_rkbm.komoditi",
      "t_pelayanan_kapal_rkbm.no_rkbm",
    ])
    ->leftJoin("t_pelayanan_kapal_rkbm", "t_pelayanan_kapal_rkbm.pelayanan_kapal_id", "t_pelayanan_kapal.pelayanan_kapal_id")
    ->where("t_pelayanan_kapal.pelayanan_kapal_id", $pelayanan_kapal_id)->first();


    $input = DB::table("t_pelayanan_kapal_rpkro")->where("pelayanan_kapal_id", $pelayanan_kapal_id)->first();

    $dataDermaga = DB::table("m_lokasi_dermaga")->get();

    $dataBongkar = DB::table("t_pelayanan_kapal_rkbm")
    ->leftJoin("t_pelayanan_kapal_pbm", "t_pelayanan_kapal_pbm.pelayanan_kapal_pbm_id", "t_pelayanan_kapal_rkbm.perusahaan_pbm_jpt_id")
    ->leftJoin("m_lokasi_dermaga", "m_lokasi_dermaga.lokasi_dermaga_id", "t_pelayanan_kapal_rkbm.dermaga_id")
    ->where("t_pelayanan_kapal_rkbm.pelayanan_kapal_id", $pelayanan_kapal_id)
    ->where("t_pelayanan_kapal_pbm.kegiatan", "like", "BONGKAR%")
    ->first();

    $dataMuat = DB::table("t_pelayanan_kapal_rkbm")
    ->select([
      "t_pelayanan_kapal_rkbm.*",
      "m_lokasi_dermaga.nama_dermaga",
    ])
    ->leftJoin("m_lokasi_dermaga", "m_lokasi_dermaga.lokasi_dermaga_id", "t_pelayanan_kapal_rkbm.dermaga_id")
    ->leftJoin("t_pelayanan_kapal_pbm", "t_pelayanan_kapal_pbm.pelayanan_kapal_pbm_id", "t_pelayanan_kapal_rkbm.perusahaan_pbm_jpt_id")
    ->where("t_pelayanan_kapal_rkbm.pelayanan_kapal_id", $pelayanan_kapal_id)
    ->where("t_pelayanan_kapal_pbm.kegiatan", 'like', "%MUAT")
    ->first();

    $result = [
      "user" => $user,
      "request" => $request->input(),
      "input" => $input,
      "data" => $data,
      "dataDermaga" => $dataDermaga,
      "dataBongkar" => $dataBongkar,
      "dataMuat" => $dataMuat,
    ];

    if($status == "view") return view('app.pelayanan-kapal.rpkro.view', $result);
    return view('app.pelayanan-kapal.rpkro.form', $result);
  }

  public function save(Request $request, $user)
  {
    $pelayanan_kapal_id = $request->input("pelayanan_kapal_id");

    $data = [
      "no_rpkro" => @$request->input("no_rpkro"),
      "jenis_rpk_ro" => @$request->input("jenis_rpk_ro"),
      "lokasi_dermaga_id" => @$request->input("lokasi_dermaga_id"),
      "waktu_rencana" => @$request->input("waktu_rencana"),
      "keterangan" => @$request->input("keterangan"),
      "no_ppkb" => @$request->input("no_ppkb"),
    ];

    // update RKBM
    $dataRKBM = [
      "komoditi" => @$request->input("komoditi"),
    ];
    $status = DB::table("t_pelayanan_kapal_rkbm")->where("pelayanan_kapal_id", $pelayanan_kapal_id)
    ->update($dataRKBM);

    $check = DB::table("t_pelayanan_kapal_rpkro")
    ->where("pelayanan_kapal_id", $pelayanan_kapal_id)
    ->first();

    if($check){
      $status = DB::table("t_pelayanan_kapal_rpkro")->where("pelayanan_kapal_rpkro_id", $check->pelayanan_kapal_rpkro_id)
      ->update($data);
    }else{

      $getId = DB::table('t_pelayanan_kapal_rpkro')
        ->orderBy("pelayanan_kapal_rpkro_id", "DESC")->first();
      $lastId = 1;
      if (@$getId) {
        $lastId = @$getId->pelayanan_kapal_rpkro_id + 1;
      }
      $data["pelayanan_kapal_id"] = $pelayanan_kapal_id;
      $data["pelayanan_kapal_rpkro_id"] = $lastId;
      $status = DB::table("t_pelayanan_kapal_rpkro")->insert($data);
      
    }

    if ($status) {
      return redirect(session()->get("role") . "/pelayanan-kapal/rpkro")->with('success', 'Berhasil simpan data!');
    }
    return redirect(session()->get("role") . "/pelayanan-kapal/rpkro")->withErrors(['msg' => 'Gagal simpan data!']);

  }
  

  public function kirim(Request $request){
    
    $pelayanan_kapal_id = $request->input("id");

    
    $status = DB::table('t_monitoring_pelayanan_kapal')->where("pelayanan_kapal_id", $pelayanan_kapal_id)->update([
      "rpkro" => 1,
    ]);

    $status = DB::table('t_pelayanan_kapal_rpkro')->where("pelayanan_kapal_id", $pelayanan_kapal_id)->update([
      "flag" => "1",
    ]);

    if ($status) {
      return redirect()->back()->with('success', 'Berhasil kirim data!');
    }
    return redirect()->back()->withErrors(['msg' => 'Gagal kirim data!']);
  }

  public function viewPPK(Request $request, $user){
    $agen = @$request->input('agen');
    $no_ppk = @$request->input('no_ppk');
    $kapal = @$request->input('kapal');

    $page = @$request->input('page') ? $request->input('page') : 1;
    $perPage = @$request->input('perPage') ? $request->input('perPage') : 10;
    

    $query = DB::table('t_pelayanan_kapal')
      ->select([
        "t_pelayanan_kapal.*",
        "t_pelayanan_kapal_rpkro.pelayanan_kapal_rpkro_id",
        "t_pelayanan_kapal_rkbm.flag as rkbm_flag",
        "t_pelayanan_kapal_rpkro.flag as rpkro_flag",
      ])
      ->leftJoin("t_pelayanan_kapal_rpkro", "t_pelayanan_kapal_rpkro.pelayanan_kapal_id", "t_pelayanan_kapal.pelayanan_kapal_id")
      ->leftJoin("t_pelayanan_kapal_rkbm", "t_pelayanan_kapal_rkbm.pelayanan_kapal_id", "t_pelayanan_kapal.pelayanan_kapal_id")
      ->where("t_pelayanan_kapal.nama_agen", 'like', '%' . $agen . '%')
      ->where("t_pelayanan_kapal.no_pkk", 'like', '%' . $no_ppk . '%')
      ->where("t_pelayanan_kapal.nama_kapal", 'like', '%' . $kapal . '%')
      ->where("t_pelayanan_kapal.flag", "2")
      ->where("t_pelayanan_kapal.flag_spm", "2")
      ->where("t_pelayanan_kapal_rkbm.flag", "2")
      ->where("t_pelayanan_kapal_rpkro.flag", "1");

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

    return view('app.pelayanan-kapal.rpkro.ppk', $result);
  }

  public function detailPPK(Request $request, $user){
    
    $pelayanan_kapal_id = $request->input("id");
    $status = @$request->input("status");
    $data = DB::table("t_pelayanan_kapal")
    ->select([
      "t_pelayanan_kapal.*",
      "t_pelayanan_kapal_rpkro.*",
      "p_asal.nama_pelabuhan as nama_pelabuhan_asal",
      "p_asal.lokasi_pelabuhan as lokasi_pelabuhan_asal",
      "p_tujuan.nama_pelabuhan as nama_pelabuhan_tujuan",
      "p_tujuan.lokasi_pelabuhan as lokasi_pelabuhan_tujuan",
    ])
    ->leftJoin("t_pelayanan_kapal_rpkro", "t_pelayanan_kapal_rpkro.pelayanan_kapal_id", "t_pelayanan_kapal.pelayanan_kapal_id")
    ->leftJoin("m_pelabuhan as p_asal", "p_asal.pelabuhan_id", "t_pelayanan_kapal.pelabuhan_asal")
    ->leftJoin("m_pelabuhan as p_tujuan", "p_tujuan.pelabuhan_id", "t_pelayanan_kapal.pelabuhan_tujuan")
    ->where("t_pelayanan_kapal.pelayanan_kapal_id", $pelayanan_kapal_id)->first();

    // dd($data);

    $result = [
      "user" => $user,
      "data" => $data,
    ];

    if($status == "edit") return view('app.pelayanan-kapal.rpkro.ppk-detail', $result);

    return view('app.pelayanan-kapal.rpkro.ppk-detail', $result);
    
  }

}
