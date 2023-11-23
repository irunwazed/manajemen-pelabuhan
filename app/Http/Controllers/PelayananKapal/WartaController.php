<?php

namespace App\Http\Controllers\PelayananKapal;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class WartaController extends Controller
{

  public function show(Request $request, $user)
  {
    $search = $request->input('search');


    $page = @$request->input('page') ? $request->input('page') : 1;
    $perPage = @$request->input('perPage') ? $request->input('perPage') : 10;


    $query = DB::table('t_pelayanan_kapal')
      ->where(
        function ($query) use ($search) {
          return $query
            ->where('no_layanan_kapal', 'like', '%' . $search . '%')
            ->orWhere('no_pkk', 'like', '%' . $search . '%')
            ->orWhere('nama_kapal', 'like', '%' . $search . '%');
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

    return view('app.pelayanan-kapal.warta', $result);
  }

  
  function generatePengajuanPKK(Request $request){

    // get ID
    $lastData = DB::table('t_pelayanan_kapal')->orderBy("pelayanan_kapal_id", "DESC")->first();
    $pelayanan_kapal_id = 1;
    if(@$lastData->pelayanan_kapal_id){
      $pelayanan_kapal_id = $lastData->pelayanan_kapal_id +1;
    }

    
    $jenis = @$request->input('jenis');
    $noRpk = @$request->input('no_rpk');

    
    $dataRPK = DB::table('mt_simlala_rpk')
    // ->leftJoin("m_kapal", "m_kapal.kode_kapal", "mt_simlala_rpk.kode_kapal");
      ->where("no_rpk", $noRpk);

      if(@$jenis != ""){
        $dataRPK = $dataRPK->where("jenis_trayek", $jenis);
      }
      $dataRPK = $dataRPK->first();
      echo "<pre>";
      print_r($dataRPK);
      echo "</pre>";

      if(@$dataRPK){
        
        $savePBM = DB::table('t_pelayanan_kapal')->insert([
          "pelayanan_kapal_id" => $pelayanan_kapal_id,
          "kode_kapal" => @$dataRPK->kode_kapal?$dataRPK->kode_kapal:"",
          "nama_kapal" => @$dataRPK->nama_kapal?@$dataRPK->nama_kapal:"",
          "tanda_pendaftaran_kapal" => $dataRPK->tanda_pendaftaran_kapal,
          "grt_kapal" => $dataRPK->grt,
          "loa_kapal" => $dataRPK->loa,
          "dwt_kapal" => $dataRPK->dwt,
          "draft_muka" => 0,
          "jumlah_palka" => 0,
          "gros_tonase" => 0,
          "deadweight_tonase" => 0,
          "ketinggian_udara" => 0,
          "draft_maksimum" => 0,
          "draft_belakang" => 0,
          "panjang_kapal" => 0,
          "lebar_kapal" => 0,
          "flag" => "0",
        ]);
        return redirect()->back()->with('success', 'Berhasil ajukan PKK');   
      }else{  
        return redirect()->back()->withErrors(['msg' => 'Data Simlala tidak ditemukan!']);
      }
    
  }

}
