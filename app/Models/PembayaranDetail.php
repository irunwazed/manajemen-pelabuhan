<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PembayaranDetail extends Model
{
    protected $table = 't_keu_pembayaran_detail';
    protected $primaryKey = 'pembayaran_detail_id';
    public $timestamps = false;

    protected $fillable = [
        'pembayaran_id',
        'rekening_pengeluaran_id',
        'kode_rekening_pengeluaran',
        'nama_rekening_pengeluaran',
        'keterangan',
        'jumlah'
    ];

    protected $casts = [
        'rekening_pengeluaran_id' => 'string',
    ];

}
