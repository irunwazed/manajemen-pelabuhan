<?php

namespace App\Models\PelayananKapal;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class PermohonanAir extends Model
{
    //
    //
    public static function getpelayananKapalCreateAir($id_rpkro){
        return DB::table('t_pelayanan_kapal')
        ->join('t_pelayanan_kapal_rpkro','t_pelayanan_kapal.pelayanan_kapal_id','=','t_pelayanan_kapal_rpkro.pelayanan_kapal_id')
        ->leftjoin('t_pelayanan_kapal_air','t_pelayanan_kapal_air.pelayanan_kapal_rpkro_id','=','t_pelayanan_kapal_rpkro.pelayanan_kapal_rpkro_id')
        ->select('t_pelayanan_kapal.pelayanan_kapal_id',
        't_pelayanan_kapal_air.no_permohonan' ,
        't_pelayanan_kapal.grt_kapal',
        'no_layanan_kapal',
        'no_pkk','nama_agen',
        'npwp_agen',
        'nama_kapal',
        'no_rpkro',
        't_pelayanan_kapal_rpkro.pelayanan_kapal_rpkro_id',
        'nama_dermaga',
        'jenis_rpk_ro',
        'nama_pengisian',
        'minimal_volume_pengisian',
        'volume_air',
        'tarif_air')
        ->where('t_pelayanan_kapal_rpkro.pelayanan_kapal_rpkro_id', $id_rpkro)->first();
    }

    
    public static function tambahAir($data){
        DB::table('t_pelayanan_kapal_air')->insert($data); 
    }
}
