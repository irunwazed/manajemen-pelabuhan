<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rekening extends Model
{
    protected $table = 'm_kode_rekening';
    protected $primaryKey = 'rekening_id';
    public $timestamps = false;

    protected $fillable = [];

}
