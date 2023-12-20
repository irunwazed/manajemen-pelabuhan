<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RekeningKas extends Model
{
    protected $table = 'v_rekening_kas';
    protected $primaryKey = 'rekening_id';
    public $timestamps = false;

    protected $fillable = [];

    protected $casts = [
        'rekening_id' => 'string',
    ];

}
