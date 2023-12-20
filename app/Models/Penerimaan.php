<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penerimaan extends Model
{
    protected $table = 't_keu_penerimaan';
    protected $primaryKey = 'penerimaan_id';
    public $timestamps = false;

    protected $fillable = [
        "no_penerimaan",
        "perusahaan_id",
        "nama_perusahaan",
        "rekening_id",
        "kode_rekening",
        "nama_rekening",
        "tanggal",
        "jumlah"
    ];

    protected $casts = [
        'rekening_id' => 'string',
    ];

}
