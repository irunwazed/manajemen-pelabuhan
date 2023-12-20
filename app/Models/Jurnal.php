<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    protected $table = 't_keu_jurnal';
    protected $primaryKey = 'jurnal_id';
    public $timestamps = false;

    protected $fillable = [
        'kode_rekening',
        'tanggal',
        'ref_id',
        'ref_type',
        'jumlah',
        'debit_kredit'
    ];

}
