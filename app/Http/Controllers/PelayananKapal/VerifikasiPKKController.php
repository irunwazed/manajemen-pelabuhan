<?php

namespace App\Http\Controllers\PelayananKapal;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class VerifikasiPKKController
{
    public function __construct(){
        $this->view = 'app.pelayanan-kapal.pkk.';
    }

    public function index(Request $request, $user){
        $nama_agen = $request->input('nama_agen');
        $nama_kapal = $request->input('nama_kapal');

        $page = @$request->input('page') >= 1 ? $request->input('page') : 1;
        $perPage = @$request->input('perPage') >= 1 ? $request->input('perPage') : 10;

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

        return view($this->view.'permohonan-pkk', $result);
    }

    public function form($user, $pelayanan_kapal_id){
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
        
        return view($this->view.'persetujuan-pkk', [
            "data" => $data,
            "dataRkbmBarang" => $dataRkbmBarang,
            "dataTrayek" => $dataTrayek,
            "user" => $user
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
        
        return view($this->view.'detail-persetujuan-pkk', [
            "data" => $data,
            "dataRkbmBarang" => $dataRkbmBarang,
            "dataTrayek" => $dataTrayek,
            "user" => $user,
        ]);
    }

    public function setuju(Request $request){
        $id = $request->id;
        $user = $request->user;
        $updateData = DB::table('t_pelayanan_kapal')
        ->where('pelayanan_kapal_id', $id)
        ->update([
            "flag" => "2",
            "flag_spm" => "1",
            "no_spm" => "SPM".$request->id
        ]);

        $updateDataMonitoring = DB::table('t_monitoring_pelayanan_kapal')
        ->where('pelayanan_kapal_id', $id)
        ->update([
            "pkk" => 2,
            "spm" => 1
        ]);
        return redirect($user."/pelayanan-kapal/verifikasi-pkk")->with('success', 'Berhasil Disetujui');
    }

    public function tolak(Request $request){
        $id = $request->id;
        $user = $request->user;
        $updateData = DB::table('t_pelayanan_kapal')
        ->where('pelayanan_kapal_id', $id)
        ->update([
            "flag" => "R",
        ]);
        return redirect($user."/pelayanan-kapal/verifikasi-pkk")->with('success', 'Berhasil Ditolak'); 
    }

}
