<?php

namespace App\Http\Controllers\PelayananKapal;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RKBMBarangController extends Controller
{


  public function show(Request $request, $user)
  {
    $pelayanan_kapal_rkbm_id = $request->input("id");
    // $data = DB::table("t_pelayanan_kapal")->where("pelayanan_kapal_id", $pelayanan_kapal_id)->first();

    
    // $input = DB::table("t_pelayanan_kapal_rkbm")->where("pelayanan_kapal_id", $pelayanan_kapal_id)->first();

    // $dataDermaga = DB::table("m_lokasi_dermaga")->get();

    $data = DB::table("t_pelayanan_kapal_rkbm_barang")->where("pelayanan_kapal_rkbm_id", $pelayanan_kapal_rkbm_id)->get();

    $result = [
      "user" => $user,
      "request" => $request->input(),
      // "input" => $input,
      "data" => $data,
      // "dataDermaga" => $dataDermaga,
    ];

    return view('app.pelayanan-kapal.rkbm.barang', $result);
  }

  public function save(Request $request){
    $pelayanan_kapal_rkbm_id = $request->input("pelayanan_kapal_rkbm_id");

    $data = [
      "pelayanan_kapal_rkbm_id" => $pelayanan_kapal_rkbm_id,
      "jenis_kegiatan" => @$request->input("jenis_kegiatan"),
      "nama_barang" => @$request->input("nama_barang"),
      "npwp_shipper_pbm_jpt" => @$request->input("npwp_shipper_pbm_jpt"),
      "jlh_palka" => @$request->input("jlh_palka"),
      "sistem_penyaluran" => @$request->input("sistem_penyaluran"),
      "no_bl" => @$request->input("no_bl"),
      "jlh_satuan_unit" => @$request->input("jlh_satuan_unit"),
      "jlh_satuan_ton" => @$request->input("jlh_satuan_ton"),
      "jlh_satuan_metrik" => @$request->input("jlh_satuan_metrik"),
      "jlh_buruh" => @$request->input("jlh_buruh"),
      "flag" => "0",
    ];

    
    // get ID
    $lastData = DB::table('t_pelayanan_kapal_rkbm_barang')->orderBy("pelayanan_kapal_rkbm_barang_id", "DESC")->first();
    $pelayanan_kapal_rkbm_barang_id = 1;
    if(@$lastData->pelayanan_kapal_rkbm_barang_id){
      $pelayanan_kapal_rkbm_barang_id = $lastData->pelayanan_kapal_rkbm_barang_id +1;
    }

    $data['pelayanan_kapal_rkbm_barang_id'] = $pelayanan_kapal_rkbm_barang_id;

    $status = DB::table('t_pelayanan_kapal_rkbm_barang')->insert($data);
    if ($status) {
      return redirect()->back()->with('success', 'Berhasil simpan data!');
    }
    return redirect()->back()->withErrors(['msg' => 'Gagal simpan data!']);

  }

  public function delete($user, $id){
    
    $status = DB::table('t_pelayanan_kapal_rkbm_barang')->where("pelayanan_kapal_rkbm_barang_id", $id)->delete();
    if ($status) {
      return redirect()->back()->with('success', 'Berhasil simpan data!');
    }
    return redirect()->back()->withErrors(['msg' => 'Gagal simpan data!']);
  }
  
}
