<?php

namespace App\Http\Controllers\PelayananKapal;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\PelayananKapal\Nota4A;
use App\Models\PelayananKapal\MTrfAir;
use App\Models\PelayananKapal\TrfLabuh;
use App\Models\PelayananKapal\Trftambat;
//
class Nota4AController extends Controller
{
    //
    public function index(Request $request){
        return view("app.pelayanan-kapal.nota4-kapal.nota4a");
    }

    public function show(Request $request, $user)
  {
    $agen = $request->input('agen');
    $kapal = $request->input('kapal');
    $layanan_pkk = $request->input('layanan_pkk');


    $page = @$request->input('page') ? $request->input('page') : 1;
    $perPage = @$request->input('perPage') ? $request->input('perPage') : 10;


    $query = DB::table('t_pelayanan_kapal')
            ->leftjoin('t_nota_4a','t_pelayanan_kapal.pelayanan_kapal_id','=','t_nota_4a.pelayanan_kapal_id')
            ->select('t_pelayanan_kapal.pelayanan_kapal_id','t_nota_4a.no_nota4a','no_layanan_kapal','no_pkk','nama_agen','nama_kapal')
            ->where(
                function ($query) use ($layanan_pkk,$kapal,$agen) {
                return $query
                    ->where('no_pkk', 'like', '%' . $layanan_pkk . '%')
                    ->orWhere('no_layanan_kapal', 'like', '%' . $layanan_pkk . '%')
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

    return view('app.pelayanan-kapal.nota4-kapal.nota4a', $result);
  }


  public function viewNota4A($user,$id_pelkab)
  {
      $data=Nota4A::getpelayananKapalNota4AAfterCreate($id_pelkab);
      $jumlah=$data->biaya_labuh+$data->biaya_tambat+$data->biaya_air+$data->biaya_pandu+$data->biaya_tunda;
      $jumlahTerhutang=$jumlah+ $data->biaya_materai+$data->biaya_ppn;
          $result = [
              "user" => $user,
              "data" => $data,
              "jumlah"=>$jumlah,
              "jumlahTerhutang"=> $jumlahTerhutang
            ];

    return view('app.pelayanan-kapal.nota4-kapal.nota4a-detail',  $result);
  }

  public function terbitNota4A($user,$id_pelkab)
  {
      $data=Nota4A::getpelayananKapalNota4ABeforeCreate($id_pelkab);
      $dataTunda=Nota4A::getbiayapanduTundaNota4ABeforeCreate($id_pelkab);
      $dataAir=Nota4A::getbiayaAirNota4ABeforeCreate($id_pelkab);
      $trfLabuh=TrfLabuh::get_rowPertama();
      $trfTambat=Trftambat::get_rowPertama();
      //untuk mencari lama pemakaian pembulatan ke hari (labuh dan tambat)
      $tgl1 = strtotime($data->waktu_berangkat); 
      $tgl2 = strtotime($data->waktu_tiba);
      $selisihHari= (strtotime($data->waktu_berangkat)-strtotime($data->waktu_tiba))/(86400);
      if(ceil($selisihHari)==0){
        $selisihHari=1;
      }else{
        ceil($selisihHari);
      }
      //dd(ceil($selisihHari));
      //dd($trfLabuh);
      $biayaLabuh=$data->grt_kapal *  $trfLabuh[0]->trf_labuh_rp;
     
      if($selisihHari>3){
        $biayaTambat=(3 * $data->grt_kapal * $trfTambat[0]->tarif_rp) +(($selisihHari-3) * $data->grt_kapal * $trfTambat[0]->tarif_rp);
      }else{
        $biayaTambat= $selisihHari * $data->grt_kapal * $trfTambat[0]->tarif_rp;
      }
      
      $jumlah=$biayaLabuh+$biayaTambat+$dataAir[0]->biayaAir+$dataTunda[0]->biayaPandu+$dataTunda[0]->biayaTunda;
      $ppn=(11*$jumlah)/100;
      $jumlahTerhutang=$jumlah+ $ppn+10000;
          $result = [
              "user" => $user,
              "data" => $data,
             "dataAir" =>$dataAir[0],
             "dataPanduTunda" =>$dataTunda[0],
             "biayaLabuh" =>$biayaLabuh,
             "biayaTambat" =>$biayaTambat,
             "jumlahTerhutang"=>$jumlahTerhutang,
             "ppn"=>$ppn,
             "jumlah"=>$jumlah
            ];

      //     dd($result);

    return view('app.pelayanan-kapal.nota4-kapal.nota4a-terbit',  $result);
  }


  public function tambahNota(Request $request,$user){
    $pelayanan_kapal_id=$request->pelayanan_kapal_id;
    $no_nota4a="4A".$request->no_layanan_kapal;
    $kode_rek_labuh="701.01.00.00";
    $biaya_labuh=$request->biaya_labuh;
    $kode_rek_tambat="701.02.00.00";
    $biaya_tambat=$request->biaya_tambat;
    $kode_rek_pandu="701.03.00.00";
    $biaya_pandu=$request->biaya_pandu;
    $kode_rek_tunda="701.04.01.01";
    $biaya_tunda=$request->biaya_tunda;
    $kode_rek_air="701.05.00.00";
    $biaya_air=$request->biaya_air;
    $flag="4";
    $biaya_materai =$request->biaya_materai;
    $biaya_ppn=$request->biaya_ppn;
    $kode_rek_materai="791.11.00.00";
    $kode_rek_ppn="409.06.02.00";
    
     $this->validate($request, [
       'pelayanan_kapal_id' => 'required',
       'biaya_labuh' => 'required'
   ]);

   $data=array(
             'pelayanan_kapal_id'=>$pelayanan_kapal_id,
             'no_nota4a'=>$no_nota4a,
              'kode_rek_labuh' =>$kode_rek_labuh,
             'biaya_labuh'=>$biaya_labuh,
             "kode_rek_tambat"=>$kode_rek_tambat,
             "biaya_tambat"=>$biaya_tambat,
             "kode_rek_pandu"=>$kode_rek_pandu,
             "biaya_pandu"=>$biaya_pandu,
             'flag'=>$flag,
             'kode_rek_tunda' =>$kode_rek_tunda,
             'biaya_tunda'=>$biaya_tunda,
             "kode_rek_air"=>$kode_rek_air,
             "biaya_air"=>$biaya_air,
             "biaya_materai"=>$biaya_materai,
             "biaya_ppn"=>$biaya_ppn,
             'flag'=>$flag,
             "kode_rek_materai"=>$kode_rek_materai,
             "kode_rek_ppn"=>$kode_rek_ppn
           );
          // dd ($data);
       Nota4A::tambahDataNota4($data);
   return redirect("/".$user."/pelayanan-kapal/nota4a");
   
 }



}
