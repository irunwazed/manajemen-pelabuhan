<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RekeningPiutangUsaha extends Model
{
    protected $table = 'v_rekening_piutang_usaha';
    protected $primaryKey = 'rekening_id';
    public $timestamps = false;

    protected $fillable = [];

    protected $casts = [
        'rekening_id' => 'string',
    ];

}
