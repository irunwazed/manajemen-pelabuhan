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
        'kode_rekening_kas',
        'nama_rekening_kas',
        'tanggal',
        'jumlah'
    ];

    protected $casts = [
        'rekening_kas_id' => 'string',
    ];

}
