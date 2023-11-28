<?php

namespace App\Http\Controllers\PelayananKapal;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\PelayananKapal\MPandu;
use App\Models\PelayananKapal\MKapalTunda;
use App\Models\PelayananKapal\MTrfTunda;
use App\Models\PelayananKapal\MTrfPandu;
use App\Models\PelayananKapal\PermohonanPanduTunda;

class PermohonanPanduTundaController extends Controller
{
    //
    public function index(Request $request){
        return view("app.pelayanan-kapal.permohonan-pandu-tunda.pandu-tunda");
    }

    public function show(Request $request, $user)
  {
    $agen = $request->input('agen');
    $kapal = $request->input('kapal');
    $layanan_pkk = $request->input('layanan_pkk');
    $rpkro = $request->input('rpkro');


    $page = @$request->input('page') ? $request->input('page') : 1;
    $perPage = @$request->input('perPage') ? $request->input('perPage') : 10;


    $query = DB::table('t_pelayanan_kapal')
            ->join('t_pelayanan_kapal_rpkro','t_pelayanan_kapal.pelayanan_kapal_id','=','t_pelayanan_kapal_rpkro.pelayanan_kapal_id')
            ->leftjoin('t_pelayanan_kapal_pandu_tunda','t_pelayanan_kapal_pandu_tunda.pelayanan_kapal_rpkro_id','=','t_pelayanan_kapal_rpkro.pelayanan_kapal_rpkro_id')
            ->select('t_pelayanan_kapal.pelayanan_kapal_id','no_layanan_kapal','t_pelayanan_kapal_pandu_tunda.no_permohonan','no_pkk','nama_agen','nama_kapal','no_rpkro','t_pelayanan_kapal_rpkro.pelayanan_kapal_rpkro_id')
            ->where(
                function ($query) use ($layanan_pkk,$rpkro,$kapal,$agen) {
                return $query
                    ->where('no_pkk', 'like', '%' . $layanan_pkk . '%')
                    ->orWhere('no_layanan_kapal', 'like', '%' . $layanan_pkk . '%')
                    ->orWhere('no_rpkro', 'like', '%' . $rpkro . '%')
                    ->orWhere('nama_kapal', 'like', '%' . $kapal . '%')
                    ->orWhere('nama_agen', 'like', '%' . $agen . '%');
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

    return view('app.pelayanan-kapal.permohonan-pandu-tunda.pandu-tunda', $result);
  }


  public function detailPandu($user,$id_rpkro)
    {
    
     $data = DB::table('t_pelayanan_kapal')
              ->join('t_pelayanan_kapal_rpkro','t_pelayanan_kapal.pelayanan_kapal_id','=','t_pelayanan_kapal_rpkro.pelayanan_kapal_id')
              ->leftjoin('t_pelayanan_kapal_pandu_tunda','t_pelayanan_kapal_pandu_tunda.pelayanan_kapal_rpkro_id','=','t_pelayanan_kapal_rpkro.pelayanan_kapal_rpkro_id')
              ->select('t_pelayanan_kapal.pelayanan_kapal_id','t_pelayanan_kapal_pandu_tunda.no_permohonan' ,'t_pelayanan_kapal.grt_kapal','no_layanan_kapal','no_pkk','nama_agen','nama_kapal','no_rpkro','t_pelayanan_kapal_rpkro.pelayanan_kapal_rpkro_id','nama_dermaga','jenis_rpk_ro')
              ->where('t_pelayanan_kapal_rpkro.pelayanan_kapal_rpkro_id', $id_rpkro)->first();
//echo $id_rpkro."=".$user;
  //            dd($data);

 // $pandu=Mpandu::get_all();
 $trfTunda=MTrfTunda::get_byGrt($data->grt_kapal);
 $trfPandu=MTrfPandu::get_byNamaTrf($data->jenis_rpk_ro);
    $result = [
        "user" => $user,
        "data" => $data,
        "pandu" => Mpandu::get_all(),
        "tunda" => MKapalTunda::get_all(),
        "trfTunda" =>$trfTunda,
        "trfPandu" =>$trfPandu
      ];

      //return view('app.pelayanan-kapal.pandu-tunda-create', ["data"=> $data]);
      return view('app.pelayanan-kapal.permohonan-pandu-tunda.pandu-tunda-create',  $result);
    }


    public function detailView($user,$id_rpkro)
    {
    
     $data = DB::table('t_pelayanan_kapal')
              ->join('t_pelayanan_kapal_rpkro','t_pelayanan_kapal.pelayanan_kapal_id','=','t_pelayanan_kapal_rpkro.pelayanan_kapal_id')
              ->leftjoin('t_pelayanan_kapal_pandu_tunda','t_pelayanan_kapal_pandu_tunda.pelayanan_kapal_rpkro_id','=','t_pelayanan_kapal_rpkro.pelayanan_kapal_rpkro_id')
              ->select('t_pelayanan_kapal.pelayanan_kapal_id','t_pelayanan_kapal_pandu_tunda.no_permohonan' ,'t_pelayanan_kapal.grt_kapal','no_layanan_kapal','no_pkk','nama_agen','nama_kapal','no_rpkro','t_pelayanan_kapal_rpkro.pelayanan_kapal_rpkro_id','nama_dermaga','jenis_rpk_ro')
              ->where('t_pelayanan_kapal_rpkro.pelayanan_kapal_rpkro_id', $id_rpkro)->first();
//echo $id_rpkro."=".$user;
  //            dd($data);

 // $pandu=Mpandu::get_all();
 $trfTunda=MTrfTunda::get_byGrt($data->grt_kapal);
 $trfPandu=MTrfPandu::get_byNamaTrf($data->jenis_rpk_ro);
    $result = [
        "user" => $user,
        "data" => $data,
        "pandu" => Mpandu::get_all(),
        "tunda" => MKapalTunda::get_all(),
        "trfTunda" =>$trfTunda,
        "trfPandu" =>$trfPandu
      ];
      return view('app.pelayanan-kapal.permohonan-pandu-tunda.pandu-tunda-view',  $result);
    }

    public function tambahDataPanduTunda(Request $request,$user){
       $pelayanan_kapal_id = $request->pelayanan_kapal_id;
       $pelayanan_kapal_rpkro_id = $request->pelayanan_kapal_rpkro_id;
        $pandu_id = $request->pandu_id;
        $tgl_pandu_awal = $request->tgl_pandu_awal;
        $tgl_pandu_selesai = $request->tgl_pandu_selesai;
        $tunda_id = $request->tunda_id;
        $tgl_tunda_awal = $request->tgl_tunda_awal;
        $tgl_tunda_selesai =$request->tgl_tunda_selesai;
        $trf_pandu=$request->trf_pandu; //$request->trf_pandu;
        $trf_pandu_variable =$request->trf_pandu_variable;
        $persentase_tarif_pandu =$request->persentase_tarif_pandu;
        $trf_tunda = $request->trf_tunda;
        $trf_tunda_variable =$request->trf_tunda_variable;
        $persentase_tarif_tunda =$request->persentase_tarif_tunda;
        $flag ="2";
        $no_permohonan=$request->no_permohonan;

        $this->validate($request, [
          'pandu_id' => 'required',
          'tunda_id' => 'required'
      ]);

      $data=array(
                'pelayanan_kapal_id'=>$pelayanan_kapal_id,
                'pelayanan_kapal_rpkro_id'=>$pelayanan_kapal_rpkro_id,
                 'no_permohonan' =>$no_permohonan,
                'pandu_id'=>$pandu_id,
                "tgl_pandu_awal"=>$tgl_pandu_awal,
                "tgl_pandu_selesai"=>$tgl_pandu_selesai,
                "tunda_id"=>$tunda_id,
                "tgl_tunda_awal"=>$tgl_tunda_awal,
                "tgl_tunda_selesai"=>$tgl_tunda_selesai,
                'trf_pandu'=>$trf_pandu,
                'trf_pandu_variable'=>$trf_pandu_variable,
                'persentase_tarif_pandu'=>$persentase_tarif_pandu,
                'trf_tunda'=>$trf_tunda,
                'trf_tunda_variable'=>$trf_tunda_variable,
                'persentase_tarif_tunda'=>$persentase_tarif_tunda,
                'flag'=>$flag,
              );
      PermohonanPanduTunda::tambahPanduTunda($data);
      return redirect("/".$user."/pelayanan-kapal/pandu-tunda");
     // dd ($data);
    }

}
