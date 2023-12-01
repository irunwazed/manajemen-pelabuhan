<?php

namespace App\Http\Controllers\PelayananBarang;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Nota4B extends Controller
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
            ->select('a.pelayanan_kapal_id', 'no_pkk', 'c.pelayanan_kapal_rkbm_id', 'd.pbau_penumpukan_2b1', 'd.no_form2b1', 'no_form_2b2', 'nama_perusahaan', 'nama_agen', 'nama_kapal', 'tgl_2b1', 'no_nota3b', 'no_nota4b')
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

        return view('app.pelayanan-barang.nota-4b', $result);
    }

    public function form_create(Request $request, $user, $pelayanan_kapal_id)
    {
        $head_form = DB::table('t_pelayanan_kapal as a')
            ->join('t_pelayanan_kapal_pbm as b', 'a.pelayanan_kapal_id', 'b.pelayanan_kapal_id')
            ->join('t_pelayanan_kapal_rkbm as c', 'a.pelayanan_kapal_id', 'c.pelayanan_kapal_id')
            ->join('t_pbau_penumpukan_2b1 as d', 'a.pelayanan_kapal_id', 'd.pelayanan_kapal_id')
            ->leftjoin('t_pbau_pengeluaran_2b2 as e', 'd.pbau_penumpukan_2b1', 'e.pbau_penumpukan_2b1')
            ->select(
                'a.pelayanan_kapal_id',
                'alamat',
                'no_pkk',
                'c.pelayanan_kapal_rkbm_id',
                'pbau_pengeluaran_2b2_id',
                'kegiatan',
                'd.pbau_penumpukan_2b1',
                'd.no_form2b1',
                'no_form_2b2',
                'nama_perusahaan',
                'nama_agen',
                'nama_kapal',
                'tgl_2b1',
                'tgl_2b2',
                'no_nota3b',
                'total_biaya_penumpukan',
                'total_biaya_dermaga'
            )
            ->where('a.pelayanan_kapal_id', $pelayanan_kapal_id)->first();

        $no_nota4b = "4B." . Carbon::now()->format("Y") . ".0000-" . $head_form->pbau_pengeluaran_2b2_id;

        $result = [
            'head_form' => $head_form,
            'user' => $user,
            'no_nota4b' => $no_nota4b,
        ];
        return view('app.pelayanan-barang.create-nota-4B', $result);
    }

    public function create4B(Request $request)
    {
        $data2b2 = DB::table('t_pbau_pengeluaran_2b2')->where('no_form_2b2', $request->no_form_2b2)->first();

        $data = DB::table('t_pbau_pengeluaran_2b2')->where('no_form_2b2', $request->no_form_2b2)
            ->update([
                "flag" => 4,
                "no_nota4b" => "4B." . Carbon::now()->format("Y") . ".0000-" . $data2b2->pbau_pengeluaran_2b2_id,
                "tgl_nota4b" => Carbon::now(),
                "biaya_materai" => 10000,
                "biaya_ppn" => ($data2b2->total_biaya_dermaga + $data2b2->total_biaya_penumpukan) * 0.1
            ]);

        return redirect()->back();
    }
}
