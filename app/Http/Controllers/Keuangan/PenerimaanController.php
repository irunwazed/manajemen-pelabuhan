<?php

namespace App\Http\Controllers\Keuangan;

use App\Models\Nota;
use App\Models\Penerimaan;
use App\Models\PenerimaanDetail;
use App\Models\Perusahaan;
use App\Models\Rekening;
use App\Models\RekeningKas;
use App\Services\Keuangan\PenerimaanService;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PenerimaanController
{
    private $service;
    private $view;

    public function __construct(PenerimaanService $service)
    {
        $this->service = $service;
        $this->view = 'app.keuangan.penerimaan.';
    }

    public function index(Request $request)
    {
        $listPerusahaan = Perusahaan::all();
        $noPenerimaan = $request->input('no_penerimaan');
        $namaPerusahaan = $request->input('nama_perusahaan');

        $data = Penerimaan::when($noPenerimaan, function ($query) use ($noPenerimaan) {
            $query->where('no_penerimaan', 'LIKE', "%$noPenerimaan%");
        })
            ->when($namaPerusahaan, function ($query) use ($namaPerusahaan) {
                $query->where('nama_perusahaan', 'LIKE', "%$namaPerusahaan%");
            })
            ->orderBy("tanggal", "desc")
            ->paginate(10);

        return view('app/keuangan.penerimaan', compact('listPerusahaan', 'data', 'noPenerimaan', 'namaPerusahaan'));
    }

    public function detail(Request $request)
    {
        $id = $request->route('id');
        $penerimaan = Penerimaan::where('penerimaan_id', '=', $id)->first();
        $details = PenerimaanDetail::where('penerimaan_id', '=', $id)
                ->orderBy('penerimaan_detail_id', 'desc')
                ->get();

        return view('app/keuangan.penerimaan.detail', compact('penerimaan', 'details'));
    }

    public function create(Request $request)
    {
        $id = $request->input('perusahaan_id');
        $perusahaan = Perusahaan::where('perusahaan_id', '=', $id)->first();
        $rekening = RekeningKas::orderBy('nama_rekening')->get();
        $nota = Nota::where('perusahaan_id', '=', $id)->where('terbayar_penuh', '=', false)
            ->orderBy('tanggal')->get();

        return view('app/keuangan.penerimaan.create', compact('perusahaan', 'rekening', 'nota'));
    }

    public function save(Request $request, $user)
    {
        $perusahaan = $this->getPerusahaan($request);
        $rekening = $this->getRekening($request);

        try {
            DB::beginTransaction();
            $penerimaan = $this->savePenerimaan($request, $perusahaan, $rekening);
            $notas = Nota::find($request->input('nota'));
            $jumlah = $this->savePenerimaanDetail($notas, $penerimaan);
            $penerimaan->jumlah = $jumlah;
            $penerimaan->save();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }

        return redirect()->route('penerimaan-list', ['user' => $user]);
    }

    private function getPerusahaan(Request $request)
    {
        $idPerusahaan = $request->input('perusahaan_id');
        return Perusahaan::find($idPerusahaan);
    }

    private function getRekening(Request $request)
    {
        $idRekening = $request->input('rekening');
        return Rekening::where('kode_rekening', '=', $idRekening)->first();
    }

    public function savePenerimaan(Request $request, $perusahaan, $rekening)
    {
        return Penerimaan::create([
            'no_penerimaan' => $request->input('no_penerimaan'),
            'perusahaan_id' => $perusahaan->perusahaan_id,
            'nama_perusahaan' => $perusahaan->nama_perusahaan,
            'rekening_id' => $rekening->rekening_id,
            'kode_rekening' => $rekening->kode_rekening,
            'nama_rekening' => $rekening->nama_rekening,
            'tanggal' => $request->input('tanggal'),
            'jumlah' => 0
        ]);
    }

    public function savePenerimaanDetail($notas, $penerimaan)
    {
        $jumlah = 0;
        foreach ($notas as $nota) {
            PenerimaanDetail::create([
                'penerimaan_id' => $penerimaan->penerimaan_id,
                'nota_id' => $nota->nota_id,
                'no_nota' => $nota->no_nota,
                'jenis' => $nota->jenis,
                'keterangan' => $nota->keterangan,
                'jumlah' => $nota->jumlah
            ]);
            $jumlah += $nota->jumlah;
            $nota->terbayar = $nota->jumlah;
            $nota->save();
        }
        return $jumlah;
    }
}
