<?php

namespace App\Models\PelayananKapal;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Nota4A extends Model
{
    //
    public static function getpelayananKapalNota4ABeforeCreate($id_rpkro){
        return DB::table('t_pelayanan_kapal')
       ->select('pelayanan_kapal_id',
        'grt_kapal',
        'no_layanan_kapal',
        'no_pkk',
        't_pelayanan_kapal.loa_kapal',
        't_pelayanan_kapal.dwt_kapal',
        't_pelayanan_kapal.waktu_tiba',
        't_pelayanan_kapal.waktu_berangkat',        
        'nama_agen',
        'alamat_agen',
        'npwp_agen',
        'nama_kapal')
        ->where('pelayanan_kapal_id', $id_rpkro)->first();
    }

       //
       public static function getbiayapanduTundaNota4ABeforeCreate($id_pelkab){
        return DB::table('t_pelayanan_kapal')
        ->leftjoin('t_pelayanan_kapal_pandu_tunda','t_pelayanan_kapal.pelayanan_kapal_id','=','t_pelayanan_kapal_pandu_tunda.pelayanan_kapal_id')
        ->select('t_pelayanan_kapal.pelayanan_kapal_id')        
        ->selectRaw("sum(trf_pandu +(trf_pandu_variable*grt_kapal)) as biayaPandu")
        ->selectRaw('sum(trf_tunda+(trf_tunda_variable*grt_kapal)) AS biayaTunda')
        ->groupBy('t_pelayanan_kapal.pelayanan_kapal_id')
        ->where('t_pelayanan_kapal.pelayanan_kapal_id', $id_pelkab)->get();
    }

    public static function getbiayaAirNota4ABeforeCreate($id_pelkab){
        return DB::table('t_pelayanan_kapal')
        ->leftjoin('t_pelayanan_kapal_air','t_pelayanan_kapal.pelayanan_kapal_id','=','t_pelayanan_kapal_air.pelayanan_kapal_id')
        ->select('t_pelayanan_kapal.pelayanan_kapal_id')        
        ->selectRaw('sum(volume_air * tarif_air) as biayaAir')
        ->groupBy('t_pelayanan_kapal.pelayanan_kapal_id')
        ->where('t_pelayanan_kapal.pelayanan_kapal_id', $id_pelkab)->get();
    }

    public static function getpelayananKapalNota4AAfterCreate($id_pelkab){
        return DB::table('t_pelayanan_kapal')
        ->join('t_nota_4a','t_pelayanan_kapal.pelayanan_kapal_id','=','t_nota_4a.pelayanan_kapal_id')
        ->select('t_pelayanan_kapal.pelayanan_kapal_id',
        't_pelayanan_kapal.grt_kapal',
        't_pelayanan_kapal.no_layanan_kapal',
        't_pelayanan_kapal.no_pkk',
        't_pelayanan_kapal.loa_kapal',
        't_pelayanan_kapal.dwt_kapal',
        't_pelayanan_kapal.waktu_tiba',
        't_pelayanan_kapal.waktu_berangkat',        
        't_pelayanan_kapal.nama_agen',
        't_pelayanan_kapal.npwp_agen',
        't_pelayanan_kapal.nama_kapal',
        'alamat_agen',
        'no_nota4a',
        'kode_rek_labuh',
        'biaya_labuh',
        'kode_rek_tambat',
        'biaya_tambat',
        'kode_rek_pandu',
        'biaya_pandu',
        'kode_rek_tunda',
        'biaya_tunda',
        'kode_rek_air',
        'biaya_air',
        't_nota_4a.flag',
        'biaya_materai' ,
        'biaya_ppn',
        'kode_rek_materai',
        'kode_rek_ppn')
        ->where('t_pelayanan_kapal.pelayanan_kapal_id', $id_pelkab)->first();
    }
    
    public static function tambahDataNota4($data){
        DB::table('t_nota_4a')->insert($data); 
    }
}
