<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $table = 't_keu_nota';
    protected $primaryKey = 'nota_id';
    public $timestamps = false;

    protected $fillable = [
        "perusahaan_id",
        "nama_perusahaan",
        "rekening_id",
        "jenis",
        "tanggal",
        "jumlah",
        "terbayar",
        "keterangan"
    ];

}
