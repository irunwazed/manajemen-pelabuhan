<?php

namespace App\Http\Controllers\PelayananKapal;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\PelayananKapal\MTrfAir;
use App\Models\PelayananKapal\MTrfPandu;
use App\Models\PelayananKapal\PermohonanAir;

class PermohonanAirController extends Controller
{
    //
    public function index(Request $request){
        return view("app.pelayanan-kapal.permohonan-air.air");
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
            ->leftjoin('t_pelayanan_kapal_air','t_pelayanan_kapal_air.pelayanan_kapal_rpkro_id','=','t_pelayanan_kapal_rpkro.pelayanan_kapal_rpkro_id')          
            ->select('t_pelayanan_kapal.pelayanan_kapal_id','t_pelayanan_kapal_air.no_permohonan','t_pelayanan_kapal_rpkro.pelayanan_kapal_rpkro_id','no_layanan_kapal','no_pkk','nama_agen','nama_kapal','no_rpkro')
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

    return view('app.pelayanan-kapal.permohonan-air.air', $result);
  }


  public function detailAir($user,$id_rpkro)
    {
        $data=PermohonanAir::getpelayananKapalCreateAir($id_rpkro);
        $trfAir=MTrfAir::get_all();
            $result = [
                "user" => $user,
                "data" => $data,
                "trfAir" =>$trfAir
              ];

      return view('app.pelayanan-kapal.permohonan-air.air-create',  $result);
    }

    public function viewlAir($user,$id_rpkro)
    {
        $data=PermohonanAir::getpelayananKapalCreateAir($id_rpkro);
        $trfAir=MTrfAir::get_all();
            $result = [
                "user" => $user,
                "data" => $data,
                "trfAir" =>$trfAir
              ];

      return view('app.pelayanan-kapal.permohonan-air.air-view',  $result);
    }
    
    public function tambahDataAir(Request $request,$user){
      $pelayanan_kapal_id = $request->pelayanan_kapal_id;
      $pelayanan_kapal_rpkro_id = $request->pelayanan_kapal_rpkro_id;
       $trf_pengisian_id = $request->trf_pengisian_id;
       $tarif_air = $request->tarif_air;
       $minimal_volume_pengisian = $request->minimal_volume_pengisian;
       $volume_air = $request->volume_air;
       $flag ="2";
       $no_permohonan=$request->no_permohonan;
       $nama_pengisian=$request->nama_pengisian;
       $this->validate($request, [
         'no_permohonan' => 'required',
         'volume_air' => 'required'
     ]);

     $data=array(
               'pelayanan_kapal_id'=>$pelayanan_kapal_id,
               'pelayanan_kapal_rpkro_id'=>$pelayanan_kapal_rpkro_id,
                'no_permohonan' =>$no_permohonan,
               'trf_pengisian_id'=>$trf_pengisian_id,
               "tarif_air"=>$tarif_air,
               "minimal_volume_pengisian"=>$minimal_volume_pengisian,
               "volume_air"=>$volume_air,
               "nama_pengisian"=>$nama_pengisian,
               'flag'=>$flag,
             );
         PermohonanAir::tambahAir($data);
     return redirect("/".$user."/pelayanan-kapal/air");
     //dd ($data);
   }

}
