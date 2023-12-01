<?php

namespace App\Http\Controllers\AnekaUsaha;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\SewaLahan;
use App\Services\AnekaUsaha\LahanService;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Exception;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BunkerController
{

    public function show(Request $request, $user)
    {
        $search = $request->input('search');
        $page = @$request->input('page') ? $request->input('page') : 1;
        $perPage = @$request->input('perPage') ? $request->input('perPage') : 10;

        $query = DB::table('t_au_bunker as a')
            ->where(
                function ($query) use ($search) {
                    return $query

                        ->where('nama_perusahaan', 'like', '%' . $search . '%');
                }
            );;

        $total = $query->count();
        $data = $query->skip(($page - 1) * $perPage)->take($perPage)
            ->get();

        $result = [
            "user" => $user,
            "request" => $request->input(),
            "data" => $data,
            "page" => $page,
            "perPage" => $perPage,
            "total" => $total,
            "totalPage" => (ceil($total / $perPage)),
        ];

        return view('app.sewa-bunker.index', $result);
    }

    public function formCreate()
    {
        $data['perusahaan'] = DB::table('m_perusahaan')->get();
        $data['kapal'] = DB::table('m_kapal')->get();

        return view('app.sewa-bunker.create-form', compact('data'));
    }

    public function getPerusahaan(Request $request)
    {
        try {
            $data['perusahaan'] = DB::table('m_perusahaan')->where('perusahaan_id', $request->data)->first();
            return response()->json($data);
        } catch (Exception $th) {
            return response()->json($th);
        }
    }

    public function AddSewaLahan()
    {
        $data = [
            'no_kontrak' => '',
            'tgl_kontrak' => now(),
            'nama_perusahaan' => '',
            'npwp_perusahaan' => '',
            'kode_perusahaan' => '',
            'alamat' => '',
            'telephone' => '',
            'contact_person' => '',
            'lokasi_id' => '',
            'jenis_properti' => '',
            'luas_lahan' => '',
            'jangka_waktu' => '',
            'periode_pakai_mulai' => '',
            'periode_pakai_selesai' => '',
            'keterangan' => '',
            'tarif' => '',
            'biaya_sewa' => '',
            'flag' => '',
            'no_pranota' => '',
            'tgl_pranota' => '',
            'no_nota4e' => '',
            'tgl_nota4e' => '',
            'kode_rek' => '',
            'status_lunsum' => ''
        ];
        SewaLahan::create($data);
        return redirect()->route('aneka-usaha.create-permohonan-sewa-lahan');
    }
    public function UpSewaLahan()
    {
    }

    public function DelSewaLahan($id)
    {
        try {
            DB::table('t_au_lahan')->where('id', $id)->delete();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function exportPdf()
    {
        $data = [
            'title' => 'Contoh PDF',
            'content' => 'Isi dari PDF ini.',
        ];

        $pdf = DomPDFPDF::loadView('pdf.export', $data);

        return $pdf->download('export.pdf');
    }
}
