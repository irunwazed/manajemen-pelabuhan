<?php

namespace App\Http\Controllers\PelayananBarang;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Nota3B extends Controller
{
    public function show(Request $request, $user)
    {
        $page = @$request->input('page') ? $request->input('page') : 1;
        $perPage = @$request->input('perPage') ? $request->input('perPage') : 10;

        $query = DB::table('t_pelayanan_kapal as a')
            ->join('t_pelayanan_kapal_pbm as b', 'a.pelayanan_kapal_id', 'b.pelayanan_kapal_id')
            ->join('t_pelayanan_kapal_rkbm as c', 'a.pelayanan_kapal_id', 'c.pelayanan_kapal_id')
            ->join('t_pbau_penumpukan_2b1 as d', 'a.pelayanan_kapal_id', 'd.pelayanan_kapal_id')
            ->leftjoin('t_pbau_pengeluaran_2b2 as e', 'd.pbau_penumpukan_2b1', 'e.pbau_penumpukan_2b1')
            ->select('a.pelayanan_kapal_id', 'no_pkk', 'c.pelayanan_kapal_rkbm_id', 'd.pbau_penumpukan_2b1', 'd.no_form2b1', 'no_form_2b2', 'nama_perusahaan', 'nama_agen', 'nama_kapal', 'tgl_2b1', 'no_nota3b')
            ->when(request()->filled('no_pkk'), function ($q) {
                $q->where('no_pkk', request('no_pkk'));
            })->when(request()->filled('no_form2b1'), function ($q) {
                $q->where('no_form2b1', request('no_form2b1'));
            })->when(request()->filled('nama_agen'), function ($q) {
                $q->where('nama_agen', request('nama_agen'));
            });

        $total = $query->count();
        $data = $query->skip(($page - 1) * $perPage)->take($perPage)
            ->get();

        // dd($data);

        $result = [
            "user" => $user,
            "request" => $request->input(),
            "data" => $data,
            "page" => $page,
            "perPage" => $perPage,
            "total" => $total,
            "totalPage" => (ceil($total / $perPage)),
        ];

        return view('app.pelayanan-barang.nota-3b', $result);
    }

    public function form_create(Request $request, $user, $pelayanan_kapal_id)
    {
        $head_form = DB::table('t_pelayanan_kapal as a')
            ->join('t_pelayanan_kapal_pbm as b', 'a.pelayanan_kapal_id', 'b.pelayanan_kapal_id')
            ->join('t_pelayanan_kapal_rkbm as c', 'a.pelayanan_kapal_id', 'c.pelayanan_kapal_id')
            ->join('t_pbau_penumpukan_2b1 as d', 'a.pelayanan_kapal_id', 'd.pelayanan_kapal_id')
            ->leftjoin('t_pbau_pengeluaran_2b2 as e', 'd.pbau_penumpukan_2b1', 'e.pbau_penumpukan_2b1')
            ->select('a.pelayanan_kapal_id', 'no_pkk', 'c.pelayanan_kapal_rkbm_id', 'kegiatan', 'd.pbau_penumpukan_2b1', 'd.no_form2b1', 'no_form_2b2', 'nama_perusahaan', 'nama_agen', 'nama_kapal', 'tgl_2b1', 'tgl_2b2')
            ->where('a.pelayanan_kapal_id', $pelayanan_kapal_id)->first();

        $detail_form = DB::table('t_pelayanan_kapal_rkbm_barang as a')
            ->join('t_pengeluaran_rkbm_barang as b', 'a.pelayanan_kapal_rkbm_barang_id', 'b.pelayanan_kapal_rkbm_barang_id')
            ->where('pelayanan_kapal_rkbm_id', $head_form->pelayanan_kapal_rkbm_id)->get();
        $tuslag = DB::table('m_tuslag')->get();
        $trf_dermaga = DB::table('m_tarif_dermaga')->get();
        $trf_penumpukan = DB::table('m_tarif_penumpukan')->get();
        $masa_penumpukan = DB::table('m_masa_penumpukan')->get();
       // dd( $head_form,)
        $result = [
            'head_form' => $head_form,
            'detail_form' => $detail_form,
            'user' => $user,
            'option' => [
                'tuslag' => $tuslag,
                'trf_dermaga' => $trf_dermaga,
                'trf_penumpukan' => $trf_penumpukan,
                'masa_penumpukan' => $masa_penumpukan
            ]
        ];
      //  dd( $result);
        return view('app.pelayanan-barang.create-nota-3B', $result);
    }

    public function create3B(Request $request)
    {
        $data2b2 = DB::table('t_pbau_pengeluaran_2b2')->where('no_form_2b2', $request->no_form_2b2)->first();

        $data = DB::table('t_pbau_pengeluaran_2b2')->where('no_form_2b2', $request->no_form_2b2)
            ->update([
                "flag" => 3,
                "no_nota3b" => "3B." . Carbon::now()->format("Y") . "0000-" . $data2b2->pbau_pengeluaran_2b2_id,
                "tgl_nota3b" => Carbon::now()
            ]);

        return redirect()->back();
    }
}
