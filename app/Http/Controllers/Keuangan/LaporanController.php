<?php

namespace App\Http\Controllers\Keuangan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController
{
    private $query = "
select n.tanggal, n.nama_perusahaan, n.rekening_id, r.kode_rekening, r.nama_rekening,n.keterangan, n.jumlah, n.terbayar
from t_keu_nota as n
left join m_kode_rekening r on n.rekening_id = r.rekening_id
where n.nama_perusahaan like ? or r.kode_rekening like ? or r.nama_rekening like ? or n.keterangan like ?
order by n.tanggal asc;";

    public function pendapatan(Request $request)
    {
        $search = $request->input('search');
        $arg = $this->appendPercent($search);
        $args = array($arg, $arg, $arg, $arg);
        $laporan = DB::select($this->query, $args);

        return view('app/keuangan.laporan-pendapatan', compact('laporan', 'search'));
    }

    private function appendPercent($var)
    {
        if (!str_starts_with($var, '%'))
            $var = '%' . $var;

        if (!str_ends_with($var, '%'))
            $var = $var . '%';

        return $var;
    }
}
