<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenerimaanDetail extends Model
{
    protected $table = 't_keu_penerimaan_detail';
    protected $primaryKey = 'penerimaan_detail_id';
    public $timestamps = false;

    protected $fillable = [
        "penerimaan_id",
        "nota_id",
        "jenis",
        "keterangan",
        "jumlah"
    ];

}
