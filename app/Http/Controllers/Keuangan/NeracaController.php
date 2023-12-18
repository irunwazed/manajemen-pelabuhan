<?php

namespace App\Http\Controllers\Keuangan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NeracaController
{
    private $query = "
with jurnal as (
    select kode_rekening,
           ifnull(sum(case debit_kredit when 'D' then jumlah else 0 end), 0) as debit,
           ifnull(sum(case debit_kredit when 'K' then jumlah else 0 end), 0) as kredit,
           ifnull(sum(case debit_kredit when 'D' then jumlah else -jumlah end), 0) as saldo
    from t_keu_jurnal
    group by kode_rekening
)
select rek.kode_rekening, rek.nama_rekening,
       ifnull(sum(jur.debit), 0) as debit,
       ifnull(sum(jur.kredit), 0) as kredit,
       ifnull(sum(jur.saldo), 0) as saldo
from m_kode_rekening as rek
left join jurnal as jur on jur.kode_rekening like concat(rek.kode_rekening, '%')
where rek.kode_rekening like ?
group by rek.kode_rekening, rek.nama_rekening
having ifnull(sum(jur.debit), 0) > 0 or ifnull(sum(jur.kredit), 0) > 0
order by rek.kode_rekening;";

    public function index(Request $request)
    {
        $kodeRekening = $request->input('kode_rekening');
        $neraca = DB::select($this->query, (array) $this->appendPercent($kodeRekening));

        return view('app/keuangan.neraca', compact('neraca', 'kodeRekening'));
    }

    private function appendPercent($var)
    {
        if (!str_ends_with($var, '%'))
            return $var . '%';

        return $var;
    }
}
