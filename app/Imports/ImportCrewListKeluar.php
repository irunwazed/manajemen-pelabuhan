<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\DB;

class ImportCrewListKeluar implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        // echo "<pre>";
        // print_r($collection);
        // echo "</pre>";

        $idx = -1;
        foreach ($collection as $row) 
        {
            $idx++;
            if($idx == 0) continue;

            $checkData = DB::table('t_pelayanan_kapal_crew_list')
            ->where("pelayanan_kapal_id", @$_POST['pelayanan_kapal_id'])
            ->where("kode_pelaut", @$row[0])
            ->first();

            if($checkData) continue;

            DB::table('t_pelayanan_kapal_crew_list')->insert([
                "pelayanan_kapal_id" => @$_POST['pelayanan_kapal_id'],
                "kode_pelaut" => @$row[0],
                "nama" => @$row[1],
                "jenis_kelamin" => @$row[2],
                "tgl_lahir" => @$row[3],
                "kebangsaan" => @$row[4],
                "no_buku_pelaut" => @$row[5],
                "tgl_expired_sertifikasi" => @$row[6],
                "jabatan" => @$row[7],
                "flag" => 0,
                "kapal_masuk_keluar" => "KELUAR",
              ]);
        }
        
    }
}
