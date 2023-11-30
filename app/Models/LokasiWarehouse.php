<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LokasiWarehouse extends Model
{
    protected $table = 'm_lokasi_warehouse';
    protected $primaryKey = 'lokasi_warehouse_id';
    public $timestamps = false;

    protected $fillable = [
        "nama_lokasi_warehouse",
        "daya_tampung",
        "luas"
    ];

}