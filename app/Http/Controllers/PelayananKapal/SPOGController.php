<?php

namespace App\Http\Controllers\PelayananKapal;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SPOGController extends Controller
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

    return view('app.pelayanan-kapal.spog.list', $result);
  }

  public function detail(Request $request, $user)
  {
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

    return view('app.pelayanan-kapal.spog.detail', $result);
  }

  public function save(Request $request, $user)
  {
    $pelayanan_kapal_id = $request->input("pelayanan_kapal_id");

    $data = [
      "no_permohonan_spog" => @$request->input("no_permohonan_spog"),
      "wkt_permohonan_spog" => @$request->input("wkt_permohonan_spog"),
      "flag_spog" => "0",
    ];

    $status = DB::table("t_pelayanan_kapal_rpkro")->where("pelayanan_kapal_id", $pelayanan_kapal_id)
      ->update($data);

    if ($status) {
      return redirect(session()->get("role") . "/pelayanan-kapal/spog")->with('success', 'Berhasil simpan data!');
    }
    return redirect(session()->get("role") . "/pelayanan-kapal/spog")->withErrors(['msg' => 'Gagal simpan data!']);
  }


  public function kirim(Request $request)
  {

    $pelayanan_kapal_id = $request->input("id");


    $status = DB::table('t_monitoring_pelayanan_kapal')->where("pelayanan_kapal_id", $pelayanan_kapal_id)->update([
      "spog" => 1,
    ]);

    $status = DB::table('t_pelayanan_kapal_rpkro')->where("pelayanan_kapal_id", $pelayanan_kapal_id)->update([
      "flag_spog" => "1",
    ]);

    if ($status) {
      return redirect()->back()->with('success', 'Berhasil kirim data!');
    }
    return redirect()->back()->withErrors(['msg' => 'Gagal kirim data!']);
  }

  public function detailVeri(Request $request, $user)
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
    return view('app.pelayanan-kapal.spog.verifikasi', $result);
  }



  //   public function detailVeri(Request $request, $user){
  //     $dataRkbm = [];
  //     $dataRkbmBarang = [];
  //     $dataTrayek = [];

  //     $pelayanan_kapal_id = $request->input("id");

  //     $data = DB::table('t_pelayanan_kapal')->where("pelayanan_kapal_id", "=", $pelayanan_kapal_id)->get();
  //     if(count($data) > 0){
  //         $dataRkbm = DB::table('t_pelayanan_kapal_rkbm')->where("pelayanan_kapal_id", "=", $data[0]->pelayanan_kapal_id)->get();
  //     }
  //     if(count($dataRkbm) > 0){
  //         $dataRkbmBarang = DB::table('t_pelayanan_kapal_rkbm_barang')->where("pelayanan_kapal_rkbm_id", "=", $dataRkbm[0]->pelayanan_kapal_rkbm_id)->get();
  //     }
  //     if(count($dataTrayek) > 0){
  //         $dataTrayek = DB::table('mt_simlala_rpk')->where("kode_kapal", "=", $data[0]->kode_kapal)->get();
  //     }

  //     if(count($data) > 0){
  //         $dokumen = DB::table('t_pelayanan_kapal_dokumen')->where("pelayanan_kapal_id", "=", $data[0]->pelayanan_kapal_id)->get();
  //     }
  //     $awakKapal = DB::table('t_pelayanan_kapal_crew_list')->where("pelayanan_kapal_id", "=", $pelayanan_kapal_id)->get();
  //     $barangBerbahaya = DB::table('t_pelayanan_kapal_bm_brgberbahaya')->where("pelayanan_kapal_id", "=", $pelayanan_kapal_id)->get();
  //     $barangTercemar = DB::table('t_pelayanan_kapal_bm_brgtercemar')->where("pelayanan_kapal_id", "=", $pelayanan_kapal_id)->get();

  //     return view('app.pelayanan-kapal.spog.verifikasi', [
  //         "data" => $data,
  //         "dataRkbmBarang" => $dataRkbmBarang,
  //         "dataTrayek" => $dataTrayek,
  //         "dokumen" => $dokumen,
  //         "user" => $user,
  //         "awakKapal" => $awakKapal,
  //         "barangBerbahaya" => $barangBerbahaya,
  //         "barangTercemar" => $barangTercemar
  //     ]);
  // }

  public function verifikasi(Request $request)
  {
    $status = @$request->verifikasi == "setuju" ? true : false;
    $id = @$request->id;

    // monitoring
    $status = DB::table('t_monitoring_pelayanan_kapal')->where("pelayanan_kapal_id", $id)->update([
      "spog" => 2,
    ]);

    $status = DB::table('t_pelayanan_kapal_rpkro')->where("pelayanan_kapal_id", $id)->update([
      "flag_spog" => @$status ? "2" : "R",
    ]);

    if ($status) {
      return redirect(session()->get("role") . "/pelayanan-kapal/spog")->with('success', 'Berhasil verifikasi data!');
    }
    return redirect(session()->get("role") . "/pelayanan-kapal/spog")->withErrors(['msg' => 'Gagal verifikasi data!']);
  }
}
