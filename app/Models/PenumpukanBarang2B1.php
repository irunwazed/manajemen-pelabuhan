<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenumpukanBarang2B1 extends Model
{
    protected $table = 't_pbau_penumpukan_2b1';
    protected $fillable = [
        'pbau_penumpukan_2b1',
        'pelayanan_kapal_id',
        'pelayanan_kapal_rkbm_id',
        'no_form2b1',
        'tgl_2b1',
        'flag'
    ];
    use HasFactory;
}
