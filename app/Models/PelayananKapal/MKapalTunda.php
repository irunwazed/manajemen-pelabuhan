<?php

namespace App\Models\PelayananKapal;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class MKapalTunda extends Model
{
    //

    public static function get_all(){
        return DB::table('m_kapal_tunda')->get();
 
     }
 
     public static function get_byid($id){
         return DB::table('m_kapal_tunda')->where('kapal_tunda_id', $id)->first();
     }
}
