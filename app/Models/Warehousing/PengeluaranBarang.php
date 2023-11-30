<?php

namespace App\Models\Warehousing;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PengeluaranBarang extends Model
{
    //use HasFactory;

    public static function getPengeluaranById($id_pengeluaran){
        return DB::table('t_penerimaan_barang as penerimaan')
        ->join('t_pengeluaran_barang as pengeluaran','penerimaan.penerimaan_barang_id','=','pengeluaran.penerimaan_barang_id')
        ->select('penerimaan.penerimaan_barang_id',
        'penerimaan.no_penerimaan',
        'penerimaan.nama_pbm',
        'penerimaan.nama_kapal',
        'tanggal_masuk',
        'no_pengeluaran',
        'tgl_keluar',
        'pengeluaran.pic_pbm',              
        'pengeluaran.pic_gudang',
        'pengeluaran.dokumen_pendukung as dokumen_pendukung_pengeluaran',
        'penerimaan.dokumen_pendukung as dokumen_pendukung_penerimaan',
        'penerimaan.nama_pic_pbm',
        'penerimaan.nama_pic_gudang')
        ->where('pengeluaran.pengeluaran_barang_id', $id_pengeluaran)->first();
    }

    public static function getDetailBarangPengeluaranById($id_pengeluaran){
        return DB::table('t_penerimaan_barang_kontainer as masuk')
        ->join('t_pengeluaran_barang_kontainer as keluar','masuk.penerimaan_barang_kontainer_id','=','keluar.penerimaan_barang_kontainer_id')
        ->select('masuk.penerimaan_barang_kontainer_id',
        'keluar.pengeluaran_barang_id',
        'masuk.no_container',
        'masuk.lokasi_id',
        'masuk.lokasi',
        'type_kontainer',
        'masuk.posisi',
        'masuk.kegiatan',
        'masuk.row as baris',
        'masuk.column as kolom')
        ->where('pengeluaran_barang_id', $id_pengeluaran)->get();
    }

    public static function getPenerimaanById($id_penerimaan){
        return DB::table('t_penerimaan_barang')
        ->select('penerimaan_barang_id',
        'no_penerimaan',
        'nama_pbm',
        'nama_kapal',
        'tanggal_masuk',
        'kegiatan',
        'dokumen_pendukung',
        'nama_pic_pbm',
        'nama_pic_gudang')
        ->where('penerimaan_barang_id', $id_penerimaan)->first();
    }
    
    public static function getDetailBarangPenerimaanById($id_penerimaan){
        return DB::table('t_penerimaan_barang_kontainer as masuk')
        ->leftjoin('t_pengeluaran_barang_kontainer as keluar','masuk.penerimaan_barang_kontainer_id','=','keluar.penerimaan_barang_kontainer_id')
        ->select('masuk.penerimaan_barang_kontainer_id',
        'penerimaan_barang_id',
        'no_container',
        'type_kontainer',
        'lokasi_id',
        'lokasi',
        'posisi',
        'kegiatan',        
        'row as baris',
        'column as kolom')
        ->whereNull('keluar.penerimaan_barang_kontainer_id')
        ->where('penerimaan_barang_id', $id_penerimaan)->get();
    }

    public static function get_all_pbm(){
        return DB::table('m_perusahaan')
        ->select('perusahaan_id','nama_perusahaan')
        ->where('jenis_usaha','=','PBM')
        ->limit(100)
        ->get();
 
     }

     public static function get_all_kapal(){
        return DB::table('m_kapal')
        ->select('kapal_id','nama_kapal')
        ->limit(100)
        ->get();
 
     }

     public static function getMaxIdPengeluaran($penerimaan_barang_id){
       return DB::table('t_pengeluaran_barang')
        ->orderBy("pengeluaran_barang_id", "DESC")
        ->where("penerimaan_barang_id","=",$penerimaan_barang_id)
        ->first();
 
     }

    public static function tambahPengeluaran($data){
        DB::table('t_pengeluaran_barang')->insert($data); 
    }

    public static function tambahDetailPengeluaran($data){
        DB::table('t_pengeluaran_barang')->insert($data); 
    }
}
