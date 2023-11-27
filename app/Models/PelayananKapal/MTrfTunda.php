<?php

namespace App\Models\PelayananKapal;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class MTrfTunda extends Model
{
    //
    //
     //
     public static function get_all(){
        return DB::table('m_trf_tunda')->get();
 
     }
 

     public static function get_byid($id){
         return DB::table('m_trf_tunda')->where('trf_pandu_id', $id)->first();
     }

     public static function get_byGrt($grt){
        $data=DB::table('m_trf_tunda')->orderBy('awal_grt','desc')->get();
         foreach($data as $row){
            if($grt >= $row->awal_grt)
            return $row;
         }

    }
}
