<?php

namespace App\Http\Controllers\PelayananKapal;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use App\User;
use Excel;
use App\Imports\ImportCrewList;
use App\Imports\ImportKargo;
use App\Imports\ImportBarangBerbahaya;
use App\Imports\ImportBarangTercemar;
use App\Imports\ImportKontainer;
use App\Imports\ImportPenumpang;

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

      
    $dataCrewList = DB::table('t_pelayanan_kapal_crew_list')
    ->where("pelayanan_kapal_id", $id)
    ->get();

    $dataKargo = DB::table('t_pelayanan_kapal_bm_kargo')
    ->where("pelayanan_kapal_id", $id)
    ->get();

    $dataBrgBerbahaya = DB::table('t_pelayanan_kapal_bm_brgberbahaya')
    ->where("pelayanan_kapal_id", $id)
    ->get();

    $dataBrgTercemar = DB::table('t_pelayanan_kapal_bm_brgtercemar')
    ->where("pelayanan_kapal_id", $id)
    ->first();

    $dataKontainer = DB::table('t_pelayanan_kapal_bm_kontainer')
    ->where("pelayanan_kapal_id", $id)
    ->get();

    $dataBrgMayoritas = DB::table('t_pelayanan_kapal_brg_mayoritas')
    ->where("pelayanan_kapal_id", $id)
    ->get();

    $dataPelabuhan = DB::table('m_pelabuhan')
    ->get();

    $dataDermaga = DB::table('m_lokasi_dermaga')
    ->get();

    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";

    $result = [
      "user" => $user,
      "request" => $request->input(),
      "data" => $data,
      "dataPerusahaan" => $dataPerusahaan,
      "dataCrewList" => $dataCrewList,
      "dataKargo" => $dataKargo,
      "dataBrgBerbahaya" => $dataBrgBerbahaya,
      "dataBrgTercemar" => $dataBrgTercemar,
      "dataKontainer" => $dataKontainer,
      "dataBrgMayoritas" => $dataBrgMayoritas,
      "dataPelabuhan" => $dataPelabuhan,
      "dataDermaga" => $dataDermaga,
    ];

    return view('app.pelayanan-kapal.pengajuan-pkk', $result);
  }

  public function save(Request $request){
    
    $input = $request->input();

    $data = [];

    foreach($input as $obj => $val) {
      if($val != '' && $val != null && $obj != 'pelayanan_kapal_id'){
        $data[$obj] = $val;
      }
    }
    
    $status = DB::table('t_pelayanan_kapal')->where("pelayanan_kapal_id", $input['pelayanan_kapal_id'])->update($data);

    if ($status) {
      return [
        "status" => true,
        "message" => "berhasil memasukkan data",
      ];
    }
    return [
      "status" => false,
      "message" => "gagal memasukkan data",
      "data" => $status,
    ];

    // $status = DB::table('t_pelayanan_kapal_pbm')->insert($data);
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
      $pelayanan_kapal_id = $request->input('pelayanan_kapal_id');
      $file = $request->file('files');
      $filename = time() . '_' . $file->getClientOriginalName();

      // File upload location
      $location = 'files/manifest/penumpang';

      // Upload file
      $file->move($location, $filename);

      
      $status = DB::table('t_pelayanan_kapal')->where("pelayanan_kapal_id", $pelayanan_kapal_id)->update([
        "file_manifest_penumpang" => $location."/".$filename,
      ]);

      return redirect()->back()->with('success', 'Berhasil upload file!');  
    } 


    return redirect()->back()->withErrors(['msg' => 'gagal upload file!']);
  }

  public function deleteManifestPenumpang($user, $id){
    $status = DB::table('t_pelayanan_kapal')->where("pelayanan_kapal_id", $id)->update([
      "file_manifest_penumpang"=> "",
    ]);

    if ($status) {
      return redirect()->back()->with('success', 'Berhasil hapus file!');  
    }
    return redirect()->back()->withErrors(['msg' => 'gagal hapus file!']);
  }

  public function manifestBM(Request $request)
  {
    if ($request->file('files')) {
      $pelayanan_kapal_id = $request->input('pelayanan_kapal_id');
      $file = $request->file('files');
      $filename = time() . '_' . $file->getClientOriginalName();

      // File upload location
      $location = 'files/manifest/bm';
      $file->move($location, $filename);
      $status = DB::table('t_pelayanan_kapal')->where("pelayanan_kapal_id", $pelayanan_kapal_id)->update([
        "file_manifest_bongkar_muat" => $location."/".$filename,
      ]);
      return redirect()->back()->with('success', 'Berhasil upload file!');  
    } 
    return redirect()->back()->withErrors(['msg' => 'gagal upload file!']);
  }

  public function deleteManifestBM($user, $id){
    $status = DB::table('t_pelayanan_kapal')->where("pelayanan_kapal_id", $id)->update([
      "file_manifest_bongkar_muat"=> "",
    ]);

    if ($status) {
      return redirect()->back()->with('success', 'Berhasil hapus file!');  
    }
    return redirect()->back()->withErrors(['msg' => 'gagal hapus file!']);
  }

  public function manifestBB(Request $request)
  {
    if ($request->file('files')) {
      $pelayanan_kapal_id = $request->input('pelayanan_kapal_id');
      $file = $request->file('files');
      $filename = time() . '_' . $file->getClientOriginalName();

      // File upload location
      $location = 'files/manifest/bm';
      $file->move($location, $filename);
      $status = DB::table('t_pelayanan_kapal')->where("pelayanan_kapal_id", $pelayanan_kapal_id)->update([
        "file_manifest_barang_berbahaya" => $location."/".$filename,
      ]);
      return redirect()->back()->with('success', 'Berhasil upload file!');  
    } 
    return redirect()->back()->withErrors(['msg' => 'gagal upload file!']);
  }

  public function deleteManifestBB($user, $id){
    $status = DB::table('t_pelayanan_kapal')->where("pelayanan_kapal_id", $id)->update([
      "file_manifest_barang_berbahaya"=> "",
    ]);

    if ($status) {
      return redirect()->back()->with('success', 'Berhasil hapus file!');  
    }
    return redirect()->back()->withErrors(['msg' => 'gagal hapus file!']);
  }

  public function manifestBK(Request $request)
  {
    if ($request->file('files')) {
      $pelayanan_kapal_id = $request->input('pelayanan_kapal_id');
      $file = $request->file('files');
      $filename = time() . '_' . $file->getClientOriginalName();

      // File upload location
      $location = 'files/manifest/bm';
      $file->move($location, $filename);
      $status = DB::table('t_pelayanan_kapal')->where("pelayanan_kapal_id", $pelayanan_kapal_id)->update([
        "file_manifest_barang_khusus" => $location."/".$filename,
      ]);
      return redirect()->back()->with('success', 'Berhasil upload file!');  
    } 
    return redirect()->back()->withErrors(['msg' => 'gagal upload file!']);
  }

  public function deleteManifestBK($user, $id){
    $status = DB::table('t_pelayanan_kapal')->where("pelayanan_kapal_id", $id)->update([
      "file_manifest_barang_khusus"=> "",
    ]);

    if ($status) {
      return redirect()->back()->with('success', 'Berhasil hapus file!');  
    }
    return redirect()->back()->withErrors(['msg' => 'gagal hapus file!']);
  }

  public function importCrewList(Request $request){
    $pelayanan_kapal_id = $request->input('pelayanan_kapal_id');
    Excel::import(new ImportCrewList, $request->file('files'));
    
    return redirect()->back()->with('success', 'Berhasil upload data!');  
  }

  public function deleteCrewList($user, $pelayanan_kapal_id, $kode){
    $status = DB::table('t_pelayanan_kapal_crew_list')
    ->where("pelayanan_kapal_id", $pelayanan_kapal_id)
    ->where("kode_pelaut", $kode)
    ->delete();

    if ($status) {
      return redirect()->back()->with('success', 'Berhasil hapus data!');  
    }
    return redirect()->back()->withErrors(['msg' => 'gagal hapus data!']);
  }

  

  public function importKargo(Request $request){
    $pelayanan_kapal_id = $request->input('pelayanan_kapal_id');
    Excel::import(new ImportKargo, $request->file('files'));
    
    return redirect()->back()->with('success', 'Berhasil upload data!');  
  }

  public function deleteKargo($user, $pelayanan_kapal_id, $kode){
    $status = DB::table('t_pelayanan_kapal_bm_kargo')
    ->where("pelayanan_kapal_id", $pelayanan_kapal_id)
    ->where("pelayanan_kapal_bm_kargo_id", $kode)
    ->delete();

    if ($status) {
      return redirect()->back()->with('success', 'Berhasil hapus data!');  
    }
    return redirect()->back()->withErrors(['msg' => 'gagal hapus data!']);
  }

  public function importKontainer(Request $request){
    $pelayanan_kapal_id = $request->input('pelayanan_kapal_id');
    Excel::import(new ImportKontainer, $request->file('files'));
    
    return redirect()->back()->with('success', 'Berhasil upload data!');  
  }

  public function deleteKontainer($user, $pelayanan_kapal_id, $kode){
    $status = DB::table('t_pelayanan_kapal_bm_kontainer')
    ->where("pelayanan_kapal_id", $pelayanan_kapal_id)
    ->where("pelayanan_kapal_bm_kontainer_id", $kode)
    ->delete();

    if ($status) {
      return redirect()->back()->with('success', 'Berhasil hapus data!');  
    }
    return redirect()->back()->withErrors(['msg' => 'gagal hapus data!']);
  }

  public function importBrgBerbahaya(Request $request){
    $pelayanan_kapal_id = $request->input('pelayanan_kapal_id');
    Excel::import(new ImportBarangBerbahaya, $request->file('files'));
    
    return redirect()->back()
    ->withInput($request->input())
    ->with('success', 'Berhasil upload data!');  
  }

  public function deleteBrgBerbahaya($user, $pelayanan_kapal_id, $kode){
    $status = DB::table('t_pelayanan_kapal_bm_brgberbahaya')
    ->where("pelayanan_kapal_id", $pelayanan_kapal_id)
    ->where("pelayanan_kapal_bm_brgberbahaya_id", $kode)
    ->delete();

    if ($status) {
      return redirect()->back()->with('success', 'Berhasil hapus data!');  
    }
    return redirect()->back()->withErrors(['msg' => 'gagal hapus data!']);
  }

  public function saveBrgTercemar(Request $request){
    
    $pelayanan_kapal_id = $request->input('pelayanan_kapal_id');
    
    $getId = DB::table('t_pelayanan_kapal_bm_brgtercemar')
            ->where("pelayanan_kapal_id", @$pelayanan_kapal_id)
            ->orderBy("pelayanan_kapal_bm_brgtercemar_id", "DESC")->first();

            $lastId = 1;
            if(@$getId){
                $lastId = @$getId->pelayanan_kapal_bm_brgtercemar_id+1;
            }

    
    $check = DB::table('t_pelayanan_kapal_bm_brgtercemar')
    ->where("pelayanan_kapal_id", $pelayanan_kapal_id)->first();
    
    $data = [];
    $data['pelayanan_kapal_bm_brgtercemar_id'] = $lastId;

    foreach($request->input() as $obj => $val) {
      if($val != '' && $val != null && $obj != 'pelayanan_kapal_id'){
        $data[$obj] = $val;
      }
      // else if(!$check && ($val == '' || $val == null)){
      //   $data[$obj] = 0;
      // }
    }

    if ($request->file('files')) {
      $file = $request->file('files');
      $filename = time() . '_' . $file->getClientOriginalName();

      // File upload location
      $location = 'files/manifest/barang-tercemar';
      $file->move($location, $filename);
      $data['nama_file'] = $location."/".$filename;
    } 


    if($check){
      $status = DB::table('t_pelayanan_kapal_bm_brgtercemar')->where("pelayanan_kapal_id", $pelayanan_kapal_id)->update($data);
    }else{
      $data['pelayanan_kapal_id'] = $pelayanan_kapal_id;
      $status = DB::table('t_pelayanan_kapal_bm_brgtercemar')->insert($data);
    }
    if ($status) {
      return redirect()->back()->with('success', 'Berhasil input data!');  
    }
    return redirect()->back()->withErrors(['msg' => 'Gagal input data!']);
    
  }

}
