<?php

namespace App\Repositories\AnekaUsaha;
use Illuminate\Support\Facades\DB;

class LahanRepository
{
    public function listSewaLahan(){
        return DB::table(DB::raw("t_au_lahan"))
        ->select(DB::raw('au_lahan_id as id'), 'no_kontrak', 'tgl_kontrak', 'nama_perusahaan')
        ->get();;
        
    }
}