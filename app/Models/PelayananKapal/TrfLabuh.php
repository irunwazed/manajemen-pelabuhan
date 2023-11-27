<?php

namespace App\Models\PelayananKapal;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class TrfLabuh extends Model
{
    //
    public static function get_all(){
        return DB::table('m_trf_labuh')->get();
 
     }
 
     public static function get_byid($id){
         return DB::table('m_trf_labuh')->where('trf_labuh_id', $id)->first();
     }
     public static function get_rowPertama(){
        return DB::table('m_trf_labuh')->limit(1)->get();
    }
}
