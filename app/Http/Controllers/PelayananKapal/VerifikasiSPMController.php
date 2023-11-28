<?php

namespace App\Http\Controllers\PelayananKapal;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class VerifikasiSPMController
{
    public function __construct(){
        $this->view = 'app.pelayanan-kapal.spm.';
    }

    public function index(Request $request, $user){
        $nama_agen = $request->input('nama_agen');
        $nama_kapal = $request->input('nama_kapal');

        $page = @$request->input('page') ? $request->input('page') : 1;
        $perPage = @$request->input('perPage') ? $request->input('perPage') : 10;


        $query = DB::table('t_pelayanan_kapal')
        ->where(
            function ($query) use ($nama_agen, $nama_kapal) {
            return $query
                ->where('nama_kapal', 'like', '%' . $nama_kapal . '%')
                ->orWhere('nama_agen', 'like', '%' . $nama_agen . '%');
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

        return view($this->view.'spm', $result);
    }

    public function form($user, $pelayanan_kapal_id){
        $dataRkbm = [];
        $dataRkbmBarang = [];
        $dataTrayek = [];
        $dokumen = [];

        $data = DB::table('t_pelayanan_kapal')->where("pelayanan_kapal_id", "=", $pelayanan_kapal_id)->get();
        if(count($data) > 0){
            $dataRkbm = DB::table('t_pelayanan_kapal_rkbm')->where("pelayanan_kapal_id", "=", $data[0]->pelayanan_kapal_id)->get();
        }
        if(count($dataRkbm) > 0){
            $dataRkbmBarang = DB::table('t_pelayanan_kapal_rkbm_barang')->where("pelayanan_kapal_rkbm_id", "=", $dataRkbm[0]->pelayanan_kapal_rkbm_id)->get();
        }
        if(count($dataTrayek) > 0){
            $dataTrayek = DB::table('mt_simlala_rpk')->where("kode_kapal", "=", $data[0]->kode_kapal)->get();
        }
        if(count($data) > 0){
            $dokumen = DB::table('t_pelayanan_kapal_dokumen')->where("pelayanan_kapal_id", "=", $data[0]->pelayanan_kapal_id)->get();
        }
        $awakKapal = DB::table('t_pelayanan_kapal_crew_list')->where("pelayanan_kapal_id", "=", $pelayanan_kapal_id)->get();
        $barangBerbahaya = DB::table('t_pelayanan_kapal_bm_brgberbahaya')->where("pelayanan_kapal_id", "=", $pelayanan_kapal_id)->get();
        $barangTercemar = DB::table('t_pelayanan_kapal_bm_brgtercemar')->where("pelayanan_kapal_id", "=", $pelayanan_kapal_id)->get();
        
        return view($this->view.'verifikasi-spm', [
            "data" => $data,
            "dataRkbmBarang" => $dataRkbmBarang,
            "dataTrayek" => $dataTrayek,
            "dokumen" => $dokumen,
            "user" => $user,
            "awakKapal" => $awakKapal,
            "barangBerbahaya" => $barangBerbahaya,
            "barangTercemar" => $barangTercemar
        ]);
    }

    public function detail($user, $pelayanan_kapal_id){
        $dataRkbm = [];
        $dataRkbmBarang = [];
        $dataTrayek = [];

        $data = DB::table('t_pelayanan_kapal')->where("pelayanan_kapal_id", "=", $pelayanan_kapal_id)->get();
        if(count($data) > 0){
            $dataRkbm = DB::table('t_pelayanan_kapal_rkbm')->where("pelayanan_kapal_id", "=", $data[0]->pelayanan_kapal_id)->get();
        }
        if(count($dataRkbm) > 0){
            $dataRkbmBarang = DB::table('t_pelayanan_kapal_rkbm_barang')->where("pelayanan_kapal_rkbm_id", "=", $dataRkbm[0]->pelayanan_kapal_rkbm_id)->get();
        }
        if(count($dataTrayek) > 0){
            $dataTrayek = DB::table('mt_simlala_rpk')->where("kode_kapal", "=", $data[0]->kode_kapal)->get();
        }
        
        if(count($data) > 0){
            $dokumen = DB::table('t_pelayanan_kapal_dokumen')->where("pelayanan_kapal_id", "=", $data[0]->pelayanan_kapal_id)->get();
        }
        $awakKapal = DB::table('t_pelayanan_kapal_crew_list')->where("pelayanan_kapal_id", "=", $pelayanan_kapal_id)->get();
        $barangBerbahaya = DB::table('t_pelayanan_kapal_bm_brgberbahaya')->where("pelayanan_kapal_id", "=", $pelayanan_kapal_id)->get();
        $barangTercemar = DB::table('t_pelayanan_kapal_bm_brgtercemar')->where("pelayanan_kapal_id", "=", $pelayanan_kapal_id)->get();
        
        return view($this->view.'detail-verifikasi-spm', [
            "data" => $data,
            "dataRkbmBarang" => $dataRkbmBarang,
            "dataTrayek" => $dataTrayek,
            "dokumen" => $dokumen,
            "user" => $user,
            "awakKapal" => $awakKapal,
            "barangBerbahaya" => $barangBerbahaya,
            "barangTercemar" => $barangTercemar
        ]);
    }

    public function setuju(Request $request){
        $id = $request->id;
        $user = $request->user;
        $updateData = DB::table('t_pelayanan_kapal')
        ->where('pelayanan_kapal_id', $id)
        ->update([
            "flag_spm" => "2"
        ]);

        $updateDataMonitoring = DB::table('t_monitoring_pelayanan_kapal')
        ->where('pelayanan_kapal_id', $id)
        ->update([
            "rkbm" => 1,
            "spm" => 2
        ]);
        return redirect($user."/pelayanan-kapal/verifikasi-spm")->with('success', 'Berhasil Disetujui');
    }

    public function tolak(Request $request){
        $id = $request->id;
        $user = $request->user;
        $updateData = DB::table('t_pelayanan_kapal')
        ->where('pelayanan_kapal_id', $id)
        ->update([
            "flag_spm" => "R",
        ]);
        return redirect($user."/pelayanan-kapal/verifikasi-spm")->with('success', 'Berhasil Ditolak'); 
    }

}
