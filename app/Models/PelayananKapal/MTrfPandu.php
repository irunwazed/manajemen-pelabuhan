<?php

namespace App\Models\PelayananKapal;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class MTrfPandu extends Model
{
    //
     //
     public static function get_all(){
        return DB::table('m_trf_pandu')->get();
 
     }
 
     public static function get_byid($id){
         return DB::table('m_trf_pandu')->where('trf_pandu_id', $id)->first();
     }
     public static function get_byNamaTrf($namaTrf){
        return DB::table('m_trf_pandu')->where('nama_tarif','like', $namaTrf)->first();
    }
}
