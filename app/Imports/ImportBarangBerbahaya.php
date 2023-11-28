<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\DB;

class ImportBarangBerbahaya implements ToCollection
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

            $getId = DB::table('t_pelayanan_kapal_bm_brgberbahaya')
            ->orderBy("pelayanan_kapal_bm_brgberbahaya_id", "DESC")->first();
            $lastId = 1;
            if(@$getId){
                $lastId = @$getId->pelayanan_kapal_bm_brgberbahaya_id+1;
            }

            DB::table('t_pelayanan_kapal_bm_brgberbahaya')->insert([
                "pelayanan_kapal_id" => @$_POST['pelayanan_kapal_id'],
                "pelayanan_kapal_bm_brgberbahaya_id" => $lastId,
                "nama_pengirim" => @$row[0],
                "nama_barang" => @$row[1],
                "nomor_un" => @$row[2],
                "jenis_kemasan" => @$row[3],
                "nama_kemasan" => @$row[4],
                "kelas_bb" => @$row[5],
                "jumlah_muatan" => @$row[6],
                "satuan" => @$row[7],
                "jenis_barang" => @$row[8],
                "nama_jenis_barang" => @$row[9],
                "type_barang" => @$row[10],
                "nama_type_barang" => @$row[11],
                "flag" => 0,
              ]);
        }
    }
}
