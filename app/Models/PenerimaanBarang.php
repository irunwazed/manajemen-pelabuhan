<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenerimaanBarang extends Model
{
    protected $table = 't_penerimaan_barang';
    protected $primaryKey = 'penerimaan_barang_id';
    public $timestamps = false;

    protected $fillable = [
        "no_penerimaan",
        "nama_pbm",      
        "dokumen_pendukung",
        "tanggal_masuk",
        "nama_kapal",
        "nama_pic_gudang",
        "nama_pic_pbm",
        "flag"
    ];

}
