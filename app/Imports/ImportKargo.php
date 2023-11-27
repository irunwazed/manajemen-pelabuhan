<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\DB;

class ImportKargo implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        $idx = -1;
        foreach ($collection as $row) 
        {
            $idx++;
            if($idx == 0) continue;

            $getId = DB::table('t_pelayanan_kapal_bm_kargo')
            ->where("pelayanan_kapal_id", @$_POST['pelayanan_kapal_id'])
            ->orderBy("pelayanan_kapal_bm_kargo_id", "DESC")->first();

            $lastId = 1;
            if(@$getId){
                $lastId = @$getId->pelayanan_kapal_bm_kargo_id+1;
            }

            DB::table('t_pelayanan_kapal_bm_kargo')->insert([
                "pelayanan_kapal_id" => @$_POST['pelayanan_kapal_id'],
                "pelayanan_kapal_bm_kargo_id" => $lastId,
                "jenis_kemasan" => @$row[0],
                "nama_kemasan" => @$row[1],
                "nama_komoditas" => @$row[2],
                "jenis_kegiatan" => @$row[3],
                "nama_kegiatan" => @$row[4],
                "jlh_satuan_unit" => @$row[5],
                "jlh_satuan_ton" => @$row[6],
                "jlh_satuan_metrik" => @$row[7],
                "no_bl" => @$row[8],
                "file_bl" => "",
                "flag" => 0,
              ]);
        }
    }
}
