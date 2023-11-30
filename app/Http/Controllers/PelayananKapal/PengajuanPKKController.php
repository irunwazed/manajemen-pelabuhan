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

    $dataDokumen = DB::table('t_pelayanan_kapal_dokumen')
      ->where("pelayanan_kapal_id", $id)
      ->get();

    $dataPelabuhan = DB::table('m_pelabuhan')
      ->get();

    $dataDermaga = DB::table('m_lokasi_dermaga')
      ->get();

    $dataBarang = DB::table('s_referensi_barang')
      ->where("kelompok_data", "like", "JENIS BARANG")
      ->get();

    $dataMuat = DB::table('t_pelayanan_kapal_brg_mayoritas')
      ->where("pelayanan_kapal_id", $id)
      ->where("jenis_kegiatan", "1")
      ->first();

    $dataBongkar = DB::table('t_pelayanan_kapal_brg_mayoritas')
      ->where("pelayanan_kapal_id", $id)
      ->where("jenis_kegiatan", "2")
      ->first();

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
      "dataDokumen" => $dataDokumen,
      "dataBarang" => $dataBarang,
      "dataMuat" => $dataMuat,
      "dataBongkar" => $dataBongkar,
    ];

    return view('app.pelayanan-kapal.pengajuan-pkk', $result);
  }

  public function detail(Request $request, $user)
  {

    $id = @$request->input('id');


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

    $dataDokumen = DB::table('t_pelayanan_kapal_dokumen')
      ->where("pelayanan_kapal_id", $id)
      ->get();

    $dataPelabuhan = DB::table('m_pelabuhan')
      ->get();

    $dataDermaga = DB::table('m_lokasi_dermaga')
      ->get();

    $dataBarang = DB::table('s_referensi_barang')
      ->where("kelompok_data", "like", "JENIS BARANG")
      ->get();

    $dataMuat = DB::table('t_pelayanan_kapal_brg_mayoritas')
      ->where("pelayanan_kapal_id", $id)
      ->where("jenis_kegiatan", "1")
      ->first();

    $dataBongkar = DB::table('t_pelayanan_kapal_brg_mayoritas')
      ->where("pelayanan_kapal_id", $id)
      ->where("jenis_kegiatan", "2")
      ->first();

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
      "dataDokumen" => $dataDokumen,
      "dataBarang" => $dataBarang,
      "dataMuat" => $dataMuat,
      "dataBongkar" => $dataBongkar,
    ];

    return view('app.pelayanan-kapal.detail-pkk', $result);
  }

  public function save(Request $request)
  {

    $input = $request->input();

    $data = [];

    foreach ($input as $obj => $val) {
      if ($val != '' && $val != null && $obj != 'pelayanan_kapal_id') {
        $data[$obj] = $val;
      }
    }

    if ($request->file('files')) {
      // echo "ada";
      // print_r($request->file('files'));
      $file = $request->file('files');
      $filename = time() . '_' . $file->getClientOriginalName();

      // File upload location
      $location = 'files/agen/dokumen';
      $file->move($location, $filename);
      $data['file_dokumen_keagenan'] = $location . "/" . $filename;
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

  public function kirim(Request $request){
    
    $pelayanan_kapal_id = $request->input("pelayanan_kapal_id");

    $check = DB::table('t_pelayanan_kapal')->where("pelayanan_kapal_id", $pelayanan_kapal_id)
    ->leftJoin("m_pelabuhan", "m_pelabuhan.pelabuhan_id", "t_pelayanan_kapal.pelabuhan_asal")
    ->first();

    $status = DB::table('t_pelayanan_kapal')->where("pelayanan_kapal_id", $pelayanan_kapal_id)->update([
      "flag" => "1",
      "no_pkk" => "PKK.".@$check->kode_pelabuhan.".".date("Y").".".generateNumberToCode($pelayanan_kapal_id),
      "no_layanan_kapal" => generateNumberToCode($pelayanan_kapal_id),
    ]);

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
      "pelayanan_kapal_pbm_id" => $dataPerusahaan->perusahaan_id,
      "kode_pbm" => @$dataPerusahaan->perusahaan_id,
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
        "file_manifest_penumpang" => $location . "/" . $filename,
      ]);

      return redirect()->back()->with('success', 'Berhasil upload file!');
    }


    return redirect()->back()->withErrors(['msg' => 'gagal upload file!']);
  }

  public function deleteManifestPenumpang($user, $id)
  {
    $status = DB::table('t_pelayanan_kapal')->where("pelayanan_kapal_id", $id)->update([
      "file_manifest_penumpang" => "",
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
        "file_manifest_bongkar_muat" => $location . "/" . $filename,
      ]);
      return redirect()->back()->with('success', 'Berhasil upload file!');
    }
    return redirect()->back()->withErrors(['msg' => 'gagal upload file!']);
  }

  public function deleteManifestBM($user, $id)
  {
    $status = DB::table('t_pelayanan_kapal')->where("pelayanan_kapal_id", $id)->update([
      "file_manifest_bongkar_muat" => "",
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
        "file_manifest_barang_berbahaya" => $location . "/" . $filename,
      ]);
      return redirect()->back()->with('success', 'Berhasil upload file!');
    }
    return redirect()->back()->withErrors(['msg' => 'gagal upload file!']);
  }

  public function deleteManifestBB($user, $id)
  {
    $status = DB::table('t_pelayanan_kapal')->where("pelayanan_kapal_id", $id)->update([
      "file_manifest_barang_berbahaya" => "",
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
        "file_manifest_barang_khusus" => $location . "/" . $filename,
      ]);
      return redirect()->back()->with('success', 'Berhasil upload file!');
    }
    return redirect()->back()->withErrors(['msg' => 'gagal upload file!']);
  }

  public function deleteManifestBK($user, $id)
  {
    $status = DB::table('t_pelayanan_kapal')->where("pelayanan_kapal_id", $id)->update([
      "file_manifest_barang_khusus" => "",
    ]);

    if ($status) {
      return redirect()->back()->with('success', 'Berhasil hapus file!');
    }
    return redirect()->back()->withErrors(['msg' => 'gagal hapus file!']);
  }

  public function importCrewList(Request $request)
  {
    $pelayanan_kapal_id = $request->input('pelayanan_kapal_id');
    Excel::import(new ImportCrewList, $request->file('files'));

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



  public function importKargo(Request $request)
  {
    $pelayanan_kapal_id = $request->input('pelayanan_kapal_id');
    Excel::import(new ImportKargo, $request->file('files'));

    return redirect()->back()->with('success', 'Berhasil upload data!');
  }

  public function deleteKargo($user, $pelayanan_kapal_id, $kode)
  {
    $status = DB::table('t_pelayanan_kapal_bm_kargo')
      ->where("pelayanan_kapal_id", $pelayanan_kapal_id)
      ->where("pelayanan_kapal_bm_kargo_id", $kode)
      ->delete();

    if ($status) {
      return redirect()->back()->with('success', 'Berhasil hapus data!');
    }
    return redirect()->back()->withErrors(['msg' => 'gagal hapus data!']);
  }

  public function importKontainer(Request $request)
  {
    $pelayanan_kapal_id = $request->input('pelayanan_kapal_id');
    Excel::import(new ImportKontainer, $request->file('files'));

    return redirect()->back()->with('success', 'Berhasil upload data!');
  }

  public function deleteKontainer($user, $pelayanan_kapal_id, $kode)
  {
    $status = DB::table('t_pelayanan_kapal_bm_kontainer')
      ->where("pelayanan_kapal_id", $pelayanan_kapal_id)
      ->where("pelayanan_kapal_bm_kontainer_id", $kode)
      ->delete();

    if ($status) {
      return redirect()->back()->with('success', 'Berhasil hapus data!');
    }
    return redirect()->back()->withErrors(['msg' => 'gagal hapus data!']);
  }

  public function importBrgBerbahaya(Request $request)
  {
    $pelayanan_kapal_id = $request->input('pelayanan_kapal_id');
    Excel::import(new ImportBarangBerbahaya, $request->file('files'));

    return redirect()->back()
      ->withInput($request->input())
      ->with('success', 'Berhasil upload data!');
  }

  public function deleteBrgBerbahaya($user, $pelayanan_kapal_id, $kode)
  {
    $status = DB::table('t_pelayanan_kapal_bm_brgberbahaya')
      ->where("pelayanan_kapal_id", $pelayanan_kapal_id)
      ->where("pelayanan_kapal_bm_brgberbahaya_id", $kode)
      ->delete();

    if ($status) {
      return redirect()->back()->with('success', 'Berhasil hapus data!');
    }
    return redirect()->back()->withErrors(['msg' => 'gagal hapus data!']);
  }

  public function saveBrgTercemar(Request $request)
  {

    $pelayanan_kapal_id = $request->input('pelayanan_kapal_id');

    $getId = DB::table('t_pelayanan_kapal_bm_brgtercemar')
      ->where("pelayanan_kapal_id", @$pelayanan_kapal_id)
      ->orderBy("pelayanan_kapal_bm_brgtercemar_id", "DESC")->first();

    $lastId = 1;
    if (@$getId) {
      $lastId = @$getId->pelayanan_kapal_bm_brgtercemar_id + 1;
    }


    $check = DB::table('t_pelayanan_kapal_bm_brgtercemar')
      ->where("pelayanan_kapal_id", $pelayanan_kapal_id)->first();

    $data = [];
    $data['pelayanan_kapal_bm_brgtercemar_id'] = $lastId;

    foreach ($request->input() as $obj => $val) {
      if ($val != '' && $val != null && $obj != 'pelayanan_kapal_id') {
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
      $data['nama_file'] = $location . "/" . $filename;
    }


    if ($check) {
      $status = DB::table('t_pelayanan_kapal_bm_brgtercemar')->where("pelayanan_kapal_id", $pelayanan_kapal_id)->update($data);
    } else {
      $data['pelayanan_kapal_id'] = $pelayanan_kapal_id;
      $status = DB::table('t_pelayanan_kapal_bm_brgtercemar')->insert($data);
    }
    if ($status) {
      return redirect()->back()->with('success', 'Berhasil input data!');
    }
    return redirect()->back()->withErrors(['msg' => 'Gagal input data!']);
  }

  public function saveDokumenKapal(Request $request)
  {

    $pelayanan_kapal_id = $request->input('pelayanan_kapal_id');
    $nama_dokumen = $request->input('nama_dokumen');
    $no_dokumen = $request->input('no_dokumen');
    $jenis_dokumen = $request->input('jenis_dokumen');
    $tempat_dikeluarkan = $request->input('tempat_dikeluarkan');
    $tgl_dikeluarkan = $request->input('tgl_dikeluarkan');
    $tgl_endorsment = $request->input('tgl_endorsment');
    $tanggal_expired = $request->input('tanggal_expired');

    $data = [
      "pelayanan_kapal_id" => $pelayanan_kapal_id,
      "nama_dokumen" => $nama_dokumen,
      "no_dokumen" => $no_dokumen,
      "jenis_dokumen" => $jenis_dokumen,
      "tempat_dikeluarkan" => $tempat_dikeluarkan,
      "tgl_dikeluarkan" => $tgl_dikeluarkan,
      "tgl_endorsment" => $tgl_endorsment,
      "tanggal_expired" => $tanggal_expired,
    ];

    if ($request->file('files')) {
      $file = $request->file('files');
      $filename = time() . '_' . $file->getClientOriginalName();

      // File upload location
      $location = 'files/dokumen-kapal';
      $file->move($location, $filename);
      $data['nama_file'] = $location . "/" . $filename;
    }

    $getId = DB::table('t_pelayanan_kapal_dokumen')
      ->orderBy("pelayanan_kapal_dokumen_id", "DESC")->first();
    $lastId = 1;
    if (@$getId) {
      $lastId = @$getId->pelayanan_kapal_dokumen_id + 1;
    }
    $data['pelayanan_kapal_dokumen_id'] = $lastId;

    $status = DB::table('t_pelayanan_kapal_dokumen')->insert($data);

    if ($status) {
      return redirect()->back()->with('success', 'Berhasil input data!');
    }
    return redirect()->back()->withErrors(['msg' => 'Gagal input data!']);
  }

  public function deleteDokumenKapal($user, $pelayanan_kapal_id, $kode)
  {
    $status = DB::table('t_pelayanan_kapal_dokumen')
      ->where("pelayanan_kapal_id", $pelayanan_kapal_id)
      ->where("pelayanan_kapal_dokumen_id", $kode)
      ->delete();

    if ($status) {
      return redirect()->back()->with('success', 'Berhasil hapus data!');
    }
    return redirect()->back()->withErrors(['msg' => 'gagal hapus data!']);
  }

  public function saveBongkarMuat(Request $request)
  {

    $getId = DB::table('t_pelayanan_kapal_brg_mayoritas')
      ->orderBy("pelayanan_kapal_brg_mayoritas_id", "DESC")->first();
    $lastId = 1;
    if (@$getId) {
      $lastId = @$getId->pelayanan_kapal_brg_mayoritas_id + 1;
    }

    $pelayanan_kapal_id = @$request->input("pelayanan_kapal_id");


    $dataMuat = [];
    $dataMuat['jenis_barang_mayoritas'] = @$request->input("jenis_barang_mayoritas");
    $dataMuat['nama_jenis_barang'] = @$request->input("nama_jenis_barang");
    $dataMuat['tonase_40_feet_isi'] = @$request->input("tonase_40_feet_isi");
    $dataMuat['box_40_feet_isi'] = @$request->input("box_40_feet_isi");
    $dataMuat['tonase_20_feet_isi'] = @$request->input("tonase_20_feet_isi");
    $dataMuat['box_20_feet_isi'] = @$request->input("box_20_feet_isi");
    $dataMuat['tonase_45_feet_isi'] = @$request->input("tonase_45_feet_isi");
    $dataMuat['box_45_feet_isi'] = @$request->input("box_45_feet_isi");
    $dataMuat['tonase_40_feet_kosong'] = @$request->input("tonase_40_feet_kosong");
    $dataMuat['box_40_feet_kosong'] = @$request->input("box_40_feet_kosong");
    $dataMuat['tonase_20_feet_kosong'] = @$request->input("tonase_20_feet_kosong");
    $dataMuat['box_20_feet_kosong'] = @$request->input("box_20_feet_kosong");
    $dataMuat['tonase_45_feet_kosong'] = @$request->input("tonase_45_feet_kosong");
    $dataMuat['box_45_feet_kosong'] = @$request->input("box_45_feet_kosong");
    $dataMuat['tonase_kargo_brg_campur'] = @$request->input("tonase_kargo_brg_campur");
    $dataMuat['tonase_kargo_brg_curah'] = @$request->input("tonase_kargo_brg_curah");
    $dataMuat['tonase_kargo_brg_berbahaya'] = @$request->input("tonase_kargo_brg_berbahaya");
    $dataMuat['tonase_kargo_brg_karung'] = @$request->input("tonase_kargo_brg_karung");
    $dataMuat['tonase_kargo_brg_cair'] = @$request->input("tonase_kargo_brg_cair");
    $dataMuat['roda_dua'] = @$request->input("roda_dua");
    $dataMuat['roda_empat'] = @$request->input("roda_empat");
    $dataMuat['bus'] = @$request->input("bus");
    $dataMuat['truk'] = @$request->input("truk");
    $dataMuat['alat_berat'] = @$request->input("alat_berat");
    $dataMuat['jenis_brg_lain'] = @$request->input("jenis_brg_lain");
    $dataMuat['tonase_brg_lain'] = @$request->input("tonase_brg_lain");
    $dataMuat['total_tonase_brg_lain'] = @$request->input("total_tonase_brg_lain");
    $dataMuat['jlh_penumpang'] = @$request->input("jlh_penumpang");
    $dataMuat['jlh_hewan'] = @$request->input("jlh_hewan");
    $dataMuat['jenis_kegiatan'] = 1;
    $dataMuat['flag'] = 0;

    $check = DB::table('t_pelayanan_kapal_brg_mayoritas')
      ->where("pelayanan_kapal_id", $pelayanan_kapal_id)
      ->where("jenis_kegiatan", "1")->first();

    if ($check) {

      $status = DB::table('t_pelayanan_kapal_brg_mayoritas')
        ->where("pelayanan_kapal_id", $check->pelayanan_kapal_id)
        ->where("pelayanan_kapal_brg_mayoritas_id", $check->pelayanan_kapal_brg_mayoritas_id)
        ->update($dataMuat);
    } else {

      $dataMuat['pelayanan_kapal_brg_mayoritas_id'] = $lastId;
      $dataMuat['pelayanan_kapal_id'] = $pelayanan_kapal_id;

      $status = DB::table('t_pelayanan_kapal_brg_mayoritas')->insert($dataMuat);
    }



    $dataBongkar = [];

    $dataBongkar['pelayanan_kapal_id'] = $pelayanan_kapal_id;
    $dataBongkar['jenis_barang_mayoritas'] = @$request->input("jenis_barang_mayoritas ");
    $dataBongkar['nama_jenis_barang'] = @$request->input("nama_jenis_barang2");
    $dataBongkar['tonase_40_feet_isi'] = @$request->input("tonase_40_feet_isi2");
    $dataBongkar['box_40_feet_isi'] = @$request->input("box_40_feet_isi2");
    $dataBongkar['tonase_20_feet_isi'] = @$request->input("tonase_20_feet_isi2");
    $dataBongkar['box_20_feet_isi'] = @$request->input("box_20_feet_isi2");
    $dataBongkar['tonase_45_feet_isi'] = @$request->input("tonase_45_feet_isi2");
    $dataBongkar['box_45_feet_isi'] = @$request->input("box_45_feet_isi2");
    $dataBongkar['tonase_40_feet_kosong'] = @$request->input("tonase_40_feet_kosong2");
    $dataBongkar['box_40_feet_kosong'] = @$request->input("box_40_feet_kosong2");
    $dataBongkar['tonase_20_feet_kosong'] = @$request->input("tonase_20_feet_kosong2");
    $dataBongkar['box_20_feet_kosong'] = @$request->input("box_20_feet_kosong2");
    $dataBongkar['tonase_45_feet_kosong'] = @$request->input("tonase_45_feet_kosong2");
    $dataBongkar['box_45_feet_kosong'] = @$request->input("box_45_feet_kosong2");
    $dataBongkar['tonase_kargo_brg_campur'] = @$request->input("tonase_kargo_brg_campur2");
    $dataBongkar['tonase_kargo_brg_curah'] = @$request->input("tonase_kargo_brg_curah2");
    $dataBongkar['tonase_kargo_brg_berbahaya'] = @$request->input("tonase_kargo_brg_berbahaya2");
    $dataBongkar['tonase_kargo_brg_karung'] = @$request->input("tonase_kargo_brg_karung2");
    $dataBongkar['tonase_kargo_brg_cair'] = @$request->input("tonase_kargo_brg_cair2");
    $dataBongkar['roda_dua'] = @$request->input("roda_dua2");
    $dataBongkar['roda_empat'] = @$request->input("roda_empat2");
    $dataBongkar['bus'] = @$request->input("bus2");
    $dataBongkar['truk'] = @$request->input("truk2");
    $dataBongkar['alat_berat'] = @$request->input("alat_berat2");
    $dataBongkar['jenis_brg_lain'] = @$request->input("jenis_brg_lain2");
    $dataBongkar['tonase_brg_lain'] = @$request->input("tonase_brg_lain2");
    $dataBongkar['total_tonase_brg_lain'] = @$request->input("total_tonase_brg_lain2");
    $dataBongkar['jlh_penumpang'] = @$request->input("jlh_penumpang2");
    $dataBongkar['jlh_hewan'] = @$request->input("jlh_hewan2");
    $dataBongkar['jenis_kegiatan'] = 2;
    $dataBongkar['flag'] = 0;

    $check = DB::table('t_pelayanan_kapal_brg_mayoritas')
      ->where("pelayanan_kapal_id", $pelayanan_kapal_id)
      ->where("jenis_kegiatan", "2")->first();
    if ($check) {

      $status = DB::table('t_pelayanan_kapal_brg_mayoritas')
        ->where("pelayanan_kapal_id", $check->pelayanan_kapal_id)
        ->where("pelayanan_kapal_brg_mayoritas_id", $check->pelayanan_kapal_brg_mayoritas_id)
        ->update($dataBongkar);
    } else {

      $dataBongkar['pelayanan_kapal_brg_mayoritas_id'] = $lastId + 1;
      $dataBongkar['pelayanan_kapal_id'] = $pelayanan_kapal_id;

      $status = DB::table('t_pelayanan_kapal_brg_mayoritas')->insert($dataBongkar);
    }
    // print_r($status);
    // die();
    return redirect()->back()->with('success', 'Berhasil simpan data!');

  }
}
