<?php

namespace App\Services\Keuangan;

use Illuminate\Support\Facades\DB;

class PenerimaanService
{
    public function createNota($data)
    {
        return DB::table(DB::raw('t_nota'))
            ->insert($data);
    }

    public function list()
    {
        return DB::table(DB::raw('t_penerimaan'))
            ->select(['t_penerimaan.penerimaan_id'
                , 't_penerimaan.no_penerimaan'
                , 'm_perusahaan.nama_perusahaan'
                , 't_penerimaan.tanggal'
                , 't_penerimaan.jumlah'])
            ->leftJoin('m_perusahaan', 't_penerimaan.perusahaan_id', '=', 'm_perusahaan.perusahaan_id')
            ->orderByDesc('t_penerimaan.tanggal')
            ->get();
    }

    public function listNota($nomorMaster, $offset = 0, $limit = 20)
    {
        return DB::table(DB::raw('t_nota'))
            ->where('nomor_master', '=', $nomorMaster)
            ->offset($offset)
            ->limit($limit)
            ->orderBy('tanggal', 'desc')
            ->get();
    }

    private function selectQuery($offset, $limit)
    {
        return DB::table(DB::raw('t_master'))
            ->select('nomor_master')
            ->groupBy('nomor_master')
            ->offset($offset)
            ->limit($limit)
            ->orderBy('nomor_master', 'desc');
}

    public function listMaster($offset = 0, $limit = 20)
    {
        return $this->selectQuery($offset, $limit)
            ->get();
    }
}
