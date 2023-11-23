<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengeluaranBarang2B2 extends Model
{
    protected $table = 't_pbau_pengeluaran_2b2';
    protected $fillable = [
        'pbau_pengeluaran_2b2_id',
        'pbau_pengeluaran_2b2_id',
        'pbau_penumpukan_2b1' ,
        'no_form_2b2' ,
        'tgl_2b2' ,
        'no_nota3b' ,
        'tgl_nota3b' ,
        'no_nota4b',
        'tgl_nota4b',
        'kode_rek_dermaga',
        'kode_rek_penumpukan',
        'flag'
    ];
    use HasFactory;
}
