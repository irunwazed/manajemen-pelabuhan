<?php

namespace App\Models\PelayananKapal;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class MPandu extends Model
{
    //
    public static function get_all(){
       return DB::table('m_pandu')->get();

    }

    public static function get_byid($id){
        return DB::table('m_pandu')->where('pandu_id', $id)->first();
    }
}
