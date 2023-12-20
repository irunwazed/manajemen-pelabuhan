<?php

namespace App\Models\lahan\SewaLahan;

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
    protected $table = 't_au_lahan';
    // protected $primaryKey = 'au_lahan_id';
    public $timestamps = false;
    // Set to false if you don't have created_at and updated_at columns
    protected $fillable = [
        'no_kontrak',
        'tgl_kontrak',
        'nama_perusahaan',
        'npwp_perusahaan',
        'kode_perusahaan',
        'alamat',
        'telephone',
        'contact_person',
        'lokasi_id',
        'jenis_properti',
        'luas_lahan',
        'jangka_waktu',
        'periode_pakai_mulai',
        'periode_pakai_selesai',
        'keterangan',
        'tarif',
        'biaya_sewa',
        'flag',
        'no_pranota',
        'tgl_pranota',
        'no_nota4e',
        'tgl_nota4e',
        'kode_rek',
        'status_lunsum',
        'biaya_pbb',
        'biaya_admin',
        'biaya_lain'

    ];
}
