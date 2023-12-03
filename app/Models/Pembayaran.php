<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 't_keu_pembayaran';
    protected $primaryKey = 'pembayaran_id';
    public $timestamps = false;

    protected $fillable = [
        'no_pembayaran',
        'rekening_kas_id',
        'kode_rekening',
        'nama_rekening',
        'tanggal',
        'keterangan',
        'jumlah'
    ];

    protected $casts = [
        'rekening_id' => 'string',
    ];

}
