<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenerimaanBarangKontainer extends Model
{
    protected $table = 't_penerimaan_barang_kontainer';
    protected $primaryKey = 'penerimaan_barang_kontainer_id';
    public $timestamps = false;

    protected $fillable = [
        "no_container",
        "penerimaan_barang_id",
        "type_kontainer",      
        "kegiatan",
        "lokasi_id",
        "lokasi",
        "posisi_id",
        "posisi",
        "row",
        "column",
        "flag"
    ];

}