<?php

namespace App\Models\PelayananKapal;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Trftambat extends Model
{
    //
    public static function get_all(){
        return DB::table('m_trf_tambat')->get();
 
     }
 
     public static function get_byid($id){
         return DB::table('m_trf_tambat')->where('trf_tambat_id', $id)->first();
     }
     public static function get_rowPertama(){
        return DB::table('m_trf_tambat')->limit(1)->get();
 
     }
}
