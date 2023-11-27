<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PbauAlat extends Model
{
    protected $table = 't_pbau_alat';
    protected $primaryKey = 'pbau_alat_1c_id';
    public $timestamps = false;

    protected $fillable = [
        "periode_1c",
        "noform_1c",      
        "tgl_noform_1c",
        "periode_2c",
        "noform_2c",
        "tgl_noform_2c",
        "periode_nota3c",
        "nonota3c",
        "tgl_nota3c",
        "periode_nota4c",
        "nonota4c",
        "tgl_nota4c",
        "nama_perusahaan",
        "perusahaan_id",
        "lokasi",
        "kapal_id",
        "nama_kapal",
        "keperluan",
        "flag"
    ];

}
