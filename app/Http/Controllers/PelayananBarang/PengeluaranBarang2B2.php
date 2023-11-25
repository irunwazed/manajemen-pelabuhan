<?php

namespace App\Http\Controllers\PelayananBarang;

use App\Http\Controllers\Controller;
use App\Models\PengeluaranBarang2B2 as ModelsPengeluaranBarang2B2;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class PengeluaranBarang2B2 extends Controller
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
            ->select('a.pelayanan_kapal_id', 'no_pkk', 'c.pelayanan_kapal_rkbm_id', 'd.pbau_penumpukan_2b1', 'd.no_form2b1', 'no_form_2b2', 'nama_perusahaan', 'nama_agen', 'nama_kapal', 'tgl_2b1')
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

        return view('app.pelayanan-barang.pengeluaran-2b2', $result);
    }

    public function form_create(Request $request, $user, $pelayanan_kapal_id)
    {
        $head_form = DB::table('t_pelayanan_kapal as a')
            ->join('t_pelayanan_kapal_pbm as b', 'a.pelayanan_kapal_id', 'b.pelayanan_kapal_id')
            ->join('t_pelayanan_kapal_rkbm as c', 'a.pelayanan_kapal_id', 'c.pelayanan_kapal_id')
            ->join('t_pbau_penumpukan_2b1 as d', 'a.pelayanan_kapal_id', 'd.pelayanan_kapal_id')
            ->leftjoin('t_pbau_pengeluaran_2b2 as e', 'd.pbau_penumpukan_2b1', 'e.pbau_penumpukan_2b1')
            ->select('a.pelayanan_kapal_id', 'no_pkk', 'c.pelayanan_kapal_rkbm_id', 'kegiatan', 'd.pbau_penumpukan_2b1', 'd.no_form2b1', 'no_form_2b2', 'nama_perusahaan', 'nama_agen', 'nama_kapal', 'tgl_2b1')
            ->where('a.pelayanan_kapal_id', $pelayanan_kapal_id)->first();

        $detail_form = DB::table('t_pelayanan_kapal_rkbm_barang')->where('pelayanan_kapal_rkbm_id', $head_form->pelayanan_kapal_rkbm_id)->get();
        $tuslag = DB::table('m_tuslag')->get();
        $trf_dermaga = DB::table('m_tarif_dermaga')->get();
        $trf_penumpukan = DB::table('m_tarif_penumpukan')->get();
        $masa_penumpukan = DB::table('m_masa_penumpukan')->get();
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
        return view('app.pelayanan-barang.create-2b2', $result);
    }

    public function create2B2(Request $request)
    {
        $barang = DB::table('t_pelayanan_kapal_rkbm_barang')->where('pelayanan_kapal_rkbm_barang_id', $request->pelayanan_kapal_rkbm_id)
            ->first();

        $data = DB::table('t_pelayanan_kapal_rkbm_barang')->where('pelayanan_kapal_rkbm_barang_id', $request->pelayanan_kapal_rkbm_barang_id)
            ->update([
                "flag" => 2,
            ]);

        $data2b1 = DB::table('t_pbau_penumpukan_2b1')->where('no_form2b1', $request->no_form2b1)->first();

        // dd($data_id);

        $validation = $barang->masa_mulai_penumpukan_2 - $barang->masa_mulai_penumpukan_1;

        if ($validation > $barang->masa_mulai_penumpukan_2) {
            $masa_1 = $barang->masa_mulai_penumpukan_2 - $barang->masa_mulai_penumpukan_1;
            $masa_2 = Carbon::parse($request->tgl_2b2)->diffInDays(Carbon::parse($data2b1->tgl_2b1)) - $barang->masa_mulai_penumpukan_2 - $barang->masa_mulai_penumpukan_1;
        } else {
            $masa_1 = Carbon::parse($request->tgl_2b2)->diffInDays(Carbon::parse($data2b1->tgl_2b1)) - $barang->masa_penumpukan_bebas;
            $masa_2 = 0;
        }

        $biaya_dermaga = $barang->jlh_brg_trf * $barang->trf_dermaga * $barang->persentase / 100;
        $biaya_penumpukan = ($barang->jlh_brg_trf * $barang->trf_dermaga * $barang->persentase / 100 * $masa_1) + ($barang->jlh_brg_trf * $barang->trf_dermaga * $barang->persentase / 100 * $masa_2 * 2);


        DB::table('t_pengeluaran_rkbm_barang')->insert([
            "jlh_brg_trf_keluar" => $request->jlh_brg_trf,
            "masa_1" => $masa_1,
            "masa_2" => $masa_2,
            "biaya_dermaga" => $biaya_dermaga,
            "biaya_penumpukan" => $biaya_penumpukan
        ]);

        DB::table('t_pbau_pengeluaran_2b2')->insert([
            "pbau_penumpukan_2b1" => $request->pbau_penumpukan_2b1,
            "tgl_2b2" => $request->tgl_2b2,
            "no_form_2b2" => $request->no_form_2b2,
            "flag" => 2,
            "total_biaya_penumpukan" => $biaya_penumpukan,
            "total_biaya_dermaga" => $biaya_dermaga,
        ]);

        return redirect()->back();
    }
}
