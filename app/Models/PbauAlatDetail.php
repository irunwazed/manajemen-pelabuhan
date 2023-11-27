<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PbauAlatDetail extends Model
{
    protected $table = 't_pbau_alat_1c_detail';
    protected $primaryKey = 'pbau_alat_1c_detail';
    public $timestamps = false;

    protected $fillable = [
        "pbau_alat_1c_id",
        "alat_id",
        "nama_alat",
        "jumlah_alat",
        "satuan_tarif",
        "minimal_pakai",
        "tgl_mulai_mohon",
        "tgl_selesai_mohon",
        "tgl_mulai_realisasi",
        "tgl_selesai_realisasi",
        "kode_rek",
        "biaya_sewa",
        "flag"
    ];

}
