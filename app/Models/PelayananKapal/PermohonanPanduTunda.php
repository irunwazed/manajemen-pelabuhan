<?php

namespace App\Models\PelayananKapal;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class PermohonanPanduTunda extends Model
{
    //
    public static function getpelayananKapalCreatePanduTunda($id_rpkro){
        return DB::table('t_pelayanan_kapal')
        ->join('t_pelayanan_kapal_rpkro','t_pelayanan_kapal.pelayanan_kapal_id','=','t_pelayanan_kapal_rpkro.pelayanan_kapal_id')
        ->select('t_pelayanan_kapal.pelayanan_kapal_id','no_layanan_kapal','no_pkk','nama_agen','nama_kapal','no_rpkro','pelayanan_kapal_rpkro_id')
        ->where('t_pelayanan_kapal_rpkro.pelayanan_kapal_rpkro_id', $id_rpkro)->first();
    }

    
    public static function tambahPanduTunda($data){
        DB::table('t_pelayanan_kapal_pandu_tunda')->insert($data); 
    }
}
