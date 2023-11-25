<?php

namespace App\Http\Controllers\PelayananBarang;

use App\Http\Controllers\Controller;
use App\Models\PenumpukanBarang2B1 as ModelsPenumpukanBarang2B1;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class PenumpukanBarang2B1 extends Controller
{
    public function show(Request $request, $user)
    {
        $page = @$request->input('page') ? $request->input('page') : 1;
        $perPage = @$request->input('perPage') ? $request->input('perPage') : 10;

        $query = DB::table('t_pelayanan_kapal as a')
            ->join('t_pelayanan_kapal_pbm as b', 'a.pelayanan_kapal_id', 'b.pelayanan_kapal_id')
            ->join('t_pelayanan_kapal_rkbm as c', 'a.pelayanan_kapal_id', 'c.pelayanan_kapal_id')
            ->leftJoin('t_pbau_penumpukan_2b1 as d', 'a.pelayanan_kapal_id', 'd.pelayanan_kapal_id')
            ->select('a.pelayanan_kapal_id', 'no_pkk', 'c.pelayanan_kapal_rkbm_id', 'no_form2b1', 'nama_perusahaan', 'nama_agen', 'nama_kapal', 'tgl_2b1')
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

        return view('app.pelayanan-barang.penumpukan-2b1', $result);
    }

    public function form_create(Request $request, $user, $pelayanan_kapal_id)
    {
        $head_form = DB::table('t_pelayanan_kapal as a')
            ->join('t_pelayanan_kapal_pbm as b', 'a.pelayanan_kapal_id', 'b.pelayanan_kapal_id')
            ->join('t_pelayanan_kapal_rkbm as c', 'a.pelayanan_kapal_id', 'c.pelayanan_kapal_id')
            ->leftJoin('t_pbau_penumpukan_2b1 as d', 'a.pelayanan_kapal_id', 'd.pelayanan_kapal_id')
            ->select('a.pelayanan_kapal_id', 'no_pkk', 'c.pelayanan_kapal_rkbm_id', 'no_form2b1', 'nama_perusahaan', 'nama_agen', 'nama_kapal', 'tgl_2b1', 'kegiatan')
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
        return view('app.pelayanan-barang.create-2b1', $result);
    }

    public function getBarang(Request $request)
    {
        try {
            $data = DB::table('t_pelayanan_kapal_rkbm_barang')->where('pelayanan_kapal_rkbm_id', $request->pelayanan_kapal_rkbm_id)->first();

            return response()->json($data);
        } catch (Exception $th) {
            return response()->json($th);
        }
    }

    public function updateBarang(Request $request)
    {
        try {
            $trf_penumpukan = DB::table('m_tarif_penumpukan')->where('nama_tarif_penumpukan', $request->trf_penumpukan)->first();
            $presentasi = DB::table('m_tuslag')->where('nama_tuslag', $request->tuslag)->first();
            $trf_dermaga = DB::table('m_tarif_dermaga')->where('nama_tarif_dermaga', $request->trf_dermaga)->first();
            $masa_penumpukan = DB::table('m_masa_penumpukan')->where('nama_masa_penumpukan', $request->nama_masa_penumpukan)->first();


            $data = DB::table('t_pelayanan_kapal_rkbm_barang')->where('pelayanan_kapal_rkbm_barang_id', $request->pelayanan_kapal_rkbm_barang_id)
                ->update([
                    "tuslag" => $request->tuslag,
                    "persentase" => $presentasi->prosentase,
                    "trf_dermaga" => $trf_dermaga->uang_dermaga1,
                    "nama_trf_dermaga" => $request->trf_dermaga,
                    "trf_penumpukan" => $trf_penumpukan->trf_penumpukan,
                    "nama_trf_penumpukan" => $request->trf_penumpukan,
                    "masa_penumpukan_bebas" => $masa_penumpukan->masa_bebas,
                    "masa_mulai_penumpukan_1" => $masa_penumpukan->masa1_dari,
                    "masa_mulai_penumpukan_2" => $masa_penumpukan->masa2_dari,
                    "jlh_brg_trf" => $request->jlh_brg_trf,
                ]);

            return redirect()->back();
        } catch (Throwable $e) {
            return response()->json($e);
        }
    }

    public function create2B1(Request $request)
    {
        try {
            $data = DB::table('t_pbau_penumpukan_2b1')->where('no_form2b1', $request->no_form2b1)->get();
            if ($data) {
                DB::table('t_pbau_penumpukan_2b1')->where('no_form2b1', $request->no_form2b1)->update([
                    "pelayanan_kapal_id" => $request->pelayanan_kapal_id,
                    "no_form2b1" => $request->no_form2b1,
                    "tgl_2b1" => $request->tgl_2b1,
                    "pelayanan_kapal_rkbm_id" => $request->pelayanan_kapal_rkbm_id
                ]);
            } else {
                DB::table('t_pbau_penumpukan_2b1')
                    ->insert([
                        "pelayanan_kapal_id" => $request->pelayanan_kapal_id,
                        "no_form2b1" => $request->no_form2b1,
                        "tgl_2b1" => $request->tgl_2b1,
                        "pelayanan_kapal_rkbm_id" => $request->pelayanan_kapal_rkbm_id
                    ]);
            }

            return redirect()->back()->withInput();
        } catch (Exception $e) {
            return response()->json($e);
        }
    }
}
