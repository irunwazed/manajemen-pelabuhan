<?php

namespace App\Http\Controllers\AnekaUsaha;

use App\Http\Controllers\Controller;
use App\Models\SewaLahan;
use App\Services\AnekaUsaha\LahanService;
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
        $data = DB::table('t_au_lahan as b')
            ->select(
                'b.nama_perusahaan',
                'b.no_kontrak',
                'b.tgl_kontrak',
            );

        return view('app.aneka-usaha.create-permohonan-sewa-lahan', ['data' => $data]);
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
        return view('app.aneka-usaha.detail-permohonan-sewa-lahan');
    }

    public function addPerLahan()
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
            'periode_pakai_mulai' => now(),
            'periode_pakai_selesai' => now(),
            'keterangan' => '',
            'tarif' => '',
            'biaya_sewa' => '',
            'flag' => '',
            'no_pranota' => '',
            'tgl_pranota' => now(),
            'no_nota4e' => '',
            'tgl_nota4e' => now(),
            'kode_rek' => '',
            'status_lunsum' => ''
        ];
        SewaLahan::create($data);
        return redirect()->route('aneka-usaha.create-permohonan-sewa-lahan');
    }
    public function updLahan()
    {
    }
    public function delLahan()
    {
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
