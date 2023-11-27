<?php

namespace App\Models\PelayananKapal;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class MTrfAir extends Model
{
    //
     //
     public static function get_all(){
        return DB::table('m_trf_air')->get();
 
     }
 
     public static function get_byid($id){
         return DB::table('m_trf_air')->where('trf_air_id', $id)->first();
     }
}
