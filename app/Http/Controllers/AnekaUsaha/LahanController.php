<?php

namespace App\Http\Controllers\AnekaUsaha;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\SewaLahan;
use App\Services\AnekaUsaha\LahanService;
use Exception;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use PDF;

class LahanController
{
    private $service;

    public function __construct(LahanService $service)
    {
        $this->service = $service;
        $this->view = 'app.aneka-usaha.lahan.';
    }

    public function index()
    {
        return view($this->view . 'index');
    }

    public function listSewaLahan(Request $request, $user)
    {

        $search = $request->input('search');
        $page = @$request->input('page') ? $request->input('page') : 1;
        $perPage = @$request->input('perPage') ? $request->input('perPage') : 10;


        $query = DB::table('mt_simlala_rpk')
            ->where(
                function ($query) use ($search) {
                    return $query

                        ->where('nama_perusahaan', 'like', '%' . $search . '%');
                }
            );

        // $query = DB::table('t_au_lahan')
        //     ->where(
        //         function ($query) use ($search) {
        //             return $query
        //                 ->where('nama_perusahaan', 'like', '%' . $search . '%')
        //         }
        //     );
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

        return view('app.permohonan-sewa-lahan', $result);
    }


    public function detailSewaLahan(Request $request)
    {
        $detaillahan = DB::table('m_au_lahan_bangunan as a')
            ->join('t_au_lahan as b', 'a.au_lahan_bangunan_id', 'b.au_lahan_id')
            ->join('m_perusahaan as c', 'b.nama_perusahaan', 'c.nama_perusahaan')
            ->leftJoin('m_lokasi_penumpukan as d', 'b.lokasi_id', 'd.lokasi_penumpukan_id')
            ->select(
                'b.no_pranota',
                'c.nama_perusahaan',
                'c.npwp',
                'c.no_telp_kantor',
                'c.alamat',
                'c.pic',
                'c.no_tel_pic',
                'c.perusahaan_id',
                'c.jenis_usaha',
                'a.nama_lahan_bangunan',
                'b.no_kontrak',
                'b.tgl_kontrak',
                'b.kode_perusahaan',
                'd.nama_lokasi',
                'd.luas_lokasi',
                'b.periode_pakai_mulai',
                'b.periode_pakai_selesai',
                'b.keterangan',
                'b.biaya_sewa',
                'b.tarif',
                'b.status_lunsum'
            );
        return view('app.aneka-usaha.detail-permohonan-sewa-lahan', $detaillahan);
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

        $pdf = PDF::loadView('pdf.export', $data);

        return $pdf->download('export.pdf');
    }
}
