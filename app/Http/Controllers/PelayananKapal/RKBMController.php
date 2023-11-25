<?php

namespace App\Http\Controllers\PelayananKapal;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RKBMController extends Controller
{

  public function show(Request $request, $user)
  {
    $search = $request->input('search');

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
      ->where(
        function ($query) use ($search) {
          return $query
            ->where('t_pelayanan_kapal.no_layanan_kapal', 'like', '%' . $search . '%')
            ->orWhere('t_pelayanan_kapal.no_pkk', 'like', '%' . $search . '%')
            ->orWhere('t_pelayanan_kapal.nama_kapal', 'like', '%' . $search . '%');
        }
      )
      ->where("t_pelayanan_kapal.flag", "2")
      ->where("t_pelayanan_kapal.flag_spm", "2")
      ->where("t_pelayanan_kapal_pbm.pelayanan_kapal_pbm_id", session()->get("pbm_id"));
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

    return view('app.pelayanan-kapal.rkbm.rkbm', $result);
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

  public function tkbm(Request $request, $user)
  {
    $pelayanan_kapal_rkbm_id = $request->input("id");
    // $data = DB::table("t_pelayanan_kapal")->where("pelayanan_kapal_id", $pelayanan_kapal_id)->first();


    $input = DB::table("t_pelayanan_kapal_rkbm_tkbm")->where("pelayanan_kapal_rkbm_id", $pelayanan_kapal_rkbm_id)->first();

    $dataDermaga = DB::table("m_lokasi_dermaga")->get();

    $result = [
      "user" => $user,
      "request" => $request->input(),
      "input" => $input,
      // "data" => $data,
      "dataDermaga" => $dataDermaga,
    ];

    return view('app.pelayanan-kapal.rkbm.tkbm', $result);
  }

  public function verifikasi(Request $request, $user)
  {
    $search = $request->input('search');

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
      ->where(
        function ($query) use ($search) {
          return $query
            ->where('t_pelayanan_kapal.no_layanan_kapal', 'like', '%' . $search . '%')
            ->orWhere('t_pelayanan_kapal.no_pkk', 'like', '%' . $search . '%')
            ->orWhere('t_pelayanan_kapal.nama_kapal', 'like', '%' . $search . '%');
        }
      )
      ->where("t_pelayanan_kapal.flag", "2")
      ->where("t_pelayanan_kapal.flag_spm", "2")
      ->where("t_pelayanan_kapal_rkbm.flag", "1");
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

    return view('app.pelayanan-kapal.rkbm.verifikasi', $result);
  }

  public function verifikasiDetail(Request $request, $user, $id){
    
    $data = DB::table('t_pelayanan_kapal')
    ->select([
      "t_pelayanan_kapal.*",
      "p_asal.nama_pelabuhan as nama_pelabuhan_asal",
      "p_tujuan.nama_pelabuhan as nama_pelabuhan_tujuan",
    ])
    ->leftJoin("m_pelabuhan as p_asal", "p_asal.pelabuhan_id", "t_pelayanan_kapal.pelabuhan_asal")
    ->leftJoin("m_pelabuhan as p_tujuan", "p_tujuan.pelabuhan_id", "t_pelayanan_kapal.pelabuhan_tujuan")
    ->where("t_pelayanan_kapal.pelayanan_kapal_id", $id)
    ->first();

    $dataBongkar = DB::table('t_pelayanan_kapal_rkbm_barang')
    ->leftJoin("t_pelayanan_kapal_rkbm", "t_pelayanan_kapal_rkbm.pelayanan_kapal_rkbm_id", "t_pelayanan_kapal_rkbm_barang.pelayanan_kapal_rkbm_id")
    ->where("t_pelayanan_kapal_rkbm.pelayanan_kapal_id", $id)
    ->where("t_pelayanan_kapal_rkbm_barang.jenis_kegiatan", "BONGKAR")
    ->get();

    $dataMuat = DB::table('t_pelayanan_kapal_rkbm_barang')
    ->leftJoin("t_pelayanan_kapal_rkbm", "t_pelayanan_kapal_rkbm.pelayanan_kapal_rkbm_id", "t_pelayanan_kapal_rkbm_barang.pelayanan_kapal_rkbm_id")
    ->where("t_pelayanan_kapal_rkbm.pelayanan_kapal_id", $id)
    ->where("t_pelayanan_kapal_rkbm_barang.jenis_kegiatan", "MUAT")
    ->get();

    $result = [
      "request" => $request,
      "data" => $data,
      "user" => $user,
      "dataBongkar" => $dataBongkar,
      "dataMuat" => $dataMuat,
    ];
    return view('app.pelayanan-kapal.rkbm.verifikasi-detail', $result);
  }


  public function saveRKBM(Request $request)
  {
    $pelayanan_kapal_id = $request->input("pelayanan_kapal_id");

    $data = [
      "tgl_rencana" => @$request->input("tgl_rencana"),
      "tgl_mulai" => @$request->input("tgl_mulai"),
      "tgl_selesai" => @$request->input("tgl_selesai"),
      "jlh_group" => @$request->input("jlh_group"),
      "dermaga_id" => @$request->input("dermaga_id"),
      "perusahaan_pbm_jpt_id" => @session()->get("pbm_id"),
    ];

    if ($request->file('files')) {
      $file = $request->file('files');
      $filename = time() . '_' . $file->getClientOriginalName();

      // File upload location
      $location = 'files/rkbm';
      $file->move($location, $filename);
      $data['nama_dok_upload'] = $location . "/" . $filename;
    }

    $check = DB::table('t_pelayanan_kapal_rkbm')
      ->where("pelayanan_kapal_id", $pelayanan_kapal_id)
      ->first();

    if ($check) {

      $status = DB::table('t_pelayanan_kapal_rkbm')
        ->where("pelayanan_kapal_id", $check->pelayanan_kapal_id)
        ->where("pelayanan_kapal_rkbm_id", $check->pelayanan_kapal_rkbm_id)
        ->update($data);
    } else {
      $data['pelayanan_kapal_id'] = $pelayanan_kapal_id;

      $status = DB::table('t_pelayanan_kapal_rkbm')->insert($data);
    }


    if ($status) {
      return redirect(session()->get("role") . "/pelayanan-kapal/rkbm")->with('success', 'Berhasil simpan data!');
    }
    return redirect(session()->get("role") . "/pelayanan-kapal/rkbm")->withErrors(['msg' => 'Gagal simpan data!']);
  }


  public function saveTKBM(Request $request)
  {
    $pelayanan_kapal_rkbm_id = $request->input("pelayanan_kapal_rkbm_id");

    $data = [
      "tgl_permohonan_tkbm" => str_replace("T", " ", @$request->input("tgl_permohonan_tkbm")),
      "jlh_shift_total" => @$request->input("jlh_shift_total"),
      "no_spk_tkbm" => @$request->input("no_spk_tkbm"),
      "jlh_group" => @$request->input("jlh_group"),
      "jlh_buruh_group" => @$request->input("jlh_buruh_group"),
      "sifat_kerja" => @$request->input("sifat_kerja"),
      "flag" => "0",
    ];


    $check = DB::table('t_pelayanan_kapal_rkbm_tkbm')
      ->where("pelayanan_kapal_rkbm_id", $pelayanan_kapal_rkbm_id)
      ->first();

    if ($check) {

      $status = DB::table('t_pelayanan_kapal_rkbm_tkbm')
        ->where("pelayanan_kapal_rkbm_tkbm_id", $check->pelayanan_kapal_rkbm_tkbm_id)
        ->where("pelayanan_kapal_rkbm_id", $check->pelayanan_kapal_rkbm_id)
        ->update($data);
    } else {
      $getId = DB::table('t_pelayanan_kapal_rkbm_tkbm')
        ->orderBy("pelayanan_kapal_rkbm_tkbm_id", "DESC")->first();
      $lastId = 1;
      if (@$getId) {
        $lastId = @$getId->pelayanan_kapal_rkbm_tkbm_id + 1;
      }

      
      $data['pelayanan_kapal_rkbm_id'] = $pelayanan_kapal_rkbm_id;
      $data['pelayanan_kapal_rkbm_tkbm_id'] = $lastId;

      $status = DB::table('t_pelayanan_kapal_rkbm_tkbm')->insert($data);
    }


    if ($status) {
      return redirect(session()->get("role") . "/pelayanan-kapal/rkbm")->with('success', 'Berhasil simpan data!');
    }
    return redirect(session()->get("role") . "/pelayanan-kapal/rkbm")->withErrors(['msg' => 'Gagal simpan data!']);
  }

  

  public function kirim(Request $request){
    
    $pelayanan_kapal_rkbm_id = $request->input("id");

    $status = DB::table('t_pelayanan_kapal_rkbm')->where("pelayanan_kapal_rkbm_id", $pelayanan_kapal_rkbm_id)->update([
      "flag" => "1",
    ]);

    if ($status) {
      return redirect()->back()->with('success', 'Berhasil kirim data!');
    }
    return redirect()->back()->withErrors(['msg' => 'Gagal kirim data!']);
  }

  public function doVerifikasi(Request $request){
    $status = @$request->verifikasi=="setuju"?true:false;
    $id = @$request->id;

    $status = DB::table('t_pelayanan_kapal_rkbm')->where("pelayanan_kapal_id", $id)->update([
      "flag" => @$status?"2":"R",
    ]);

    if ($status) {
      return redirect(session()->get("role") . "/pelayanan-kapal/rkbm/verifikasi")->with('success', 'Berhasil verifikasi data!');
    }
    return redirect(session()->get("role") . "/pelayanan-kapal/rkbm/verifikasi")->withErrors(['msg' => 'Gagal verifikasi data!']);
  }
}
