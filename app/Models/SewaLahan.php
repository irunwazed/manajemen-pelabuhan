<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @property int $id
 * @property int $user_id
 * @property int $indikator_kegiatan_id
 * @property int $tahap
 * @property int $tahun
 * @property int $uraian
 * @property int $created_at
 */
class SewaLahan extends Model
{
    use HasFactory;

    protected $table = 't_au_lahan';
    public $timestamps = false;
    protected $primaryKey = 'au_lahan_id';
}
