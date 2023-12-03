<?php

namespace App\Http\Controllers\Keuangan;

use App\Models\Jurnal;
use App\Models\Nota;
use App\Models\Pembayaran;
use App\Models\Penerimaan;
use App\Models\PenerimaanDetail;
use App\Models\Perusahaan;
use App\Models\Rekening;
use App\Models\RekeningPengeluaran;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PembayaranController
{
    private $view;

    public function __construct()
    {
        $this->view = 'app.keuangan.pembayaran.';
    }

    public function index(Request $request)
    {
        $noPembayaran = $request->input('no_pembayaran');
        $namaRekening = $request->input('nama_rekening');

        $data = Pembayaran::when($noPembayaran, function ($query) use ($noPembayaran) {
            $query->where('PenerimaanController.php', 'LIKE', "%$noPembayaran%");
        })
            ->when($namaRekening, function ($query) use ($namaRekening) {
                $query->where('nama_rekening', 'LIKE', "%$namaRekening%");
            })
            ->orderBy("tanggal", "desc")
            ->paginate(10);

        return view('app/keuangan.pembayaran', compact('data', 'noPembayaran', 'namaRekening'));
    }

    public function detail(Request $request)
    {
        $id = $request->route('id');
        $pembayaran = Pembayaran::where('pembayaran_id', '=', $id)->first();
        $details = PembayaranDetail::where('pembayaran_id', '=', $id)
                ->orderBy('pembayaran_detail_id', 'desc')
                ->get();

        return view('app/keuangan.pembayaran.detail', compact('pembayaran', 'details'));
    }

    public function create(Request $request)
    {
        $perusahaan = Perusahaan::where('perusahaan_id', '=', $id)->first();
        $rekening = RekeningPengeluaran::orderBy('nama_rekening')->get();

        return view('app/keuangan.pembayaran.create', compact('perusahaan', 'rekening'));
    }

    public function save(Request $request, $user)
    {
        $rekening = $this->getRekening($request);
        $details = Nota::find($request->input('details'));

        try {
            DB::beginTransaction();
            $pembayaran = $this->savePembayaran($request, $rekening);
            $jumlah = $this->savePembayaranDetail($pembayaran, $details);
            $pembayaran->jumlah = $jumlah;
            $pembayaran->save();
            $this->saveJurnal($details, $request, $pembayaran);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }

        return redirect()->route('pembayaran-list', ['user' => $user]);
    }
    private function getRekening(Request $request)
    {
        $idRekening = $request->input('rekening');
        return Rekening::where('kode_rekening', '=', $idRekening)->first();
    }

    public function savePembayaran(Request $request, $perusahaan, $rekening)
    {
        return Penerimaan::create([
            'no_pembayaran' => $request->input('no_pembayaran'),
            'rekening_kas_id' => $rekening->rekening_id,
            'kode_rekening_kas' => $rekening->kode_rekening,
            'nama_rekening_kas' => $rekening->nama_rekening,
            'tanggal' => $request->input('tanggal'),
            'keterangan' => $request->input('keterangan'),
            'jumlah' => 0
        ]);
    }

    public function savePembayaranDetail($pembayaran, $details)
    {
        $jumlah = 0;
        foreach ($details as $detail) {
            PenerimaanDetail::create([
                'pembayaran_id' => $pembayaran->pembayaran_id,
                'rekening_pengeluaran_id' => $detail->rekening_pengeluaran_id,
                'kode_rekening_pengeluaran' => $detail->kode_rekening_pengeluaran,
                'nama_rekening_pengeluaran' => $detail->nama_rekening_pengeluaran,
                'keterangan'  => $detail->keterangan,
                'jumlah'  => $detail->jumlah
            ]);
            $jumlah += $detail->jumlah;
        }
        return $jumlah;
    }

    /**
     * @param $details
     * @param $rekening
     * @param Request $request
     * @param $pembayaran
     * @return array
     */
    public function saveJurnal($details, $rekening, Request $request, $pembayaran): array
    {
        $jurnals = [];
        $rekenings = [];
        $total = 0;
        $rek_kas = $this->getRekeing($rekenings, $rekening->rekening_id);
        foreach ($details as $detail) {
            $rek_pembayaran = $this->getRekeing($rekenings, $detail->rekening_id);
            $jurnals[] = [
                'kode_rekening' => $rek_pembayaran->kode_rekening,
                'tanggal' => $request->input('tanggal'),
                'ref_id' => $pembayaran->pembayaran_id,
                'ref_type' => 'pembayaran',
                'jumlah' => $detail->jumlah,
                'debit_kredit' => 'D'
            ];
            $total += $details->jumlah;
        }
        $jurnals[] = [
            'kode_rekening' => $rek_kas->kode_rekening,
            'tanggal' => $request->input('tanggal'),
            'ref_id' => $pembayaran->penerimaan_id,
            'ref_type' => 'pembayaran',
            'jumlah' => $jumlah,
            'debit_kredit' => 'K'
        ];
        Jurnal::insert($jurnals);
        return $jurnals;
    }

    /**
     * @param array $rekenings
     * @param $nota
     * @return mixed
     */
    public function getRekeing(array $rekenings, $rekeningId)
    {
        if (isset($rekenings[$rekeningId])) {
            $rek_piutang = $rekenings[$rekeningId];
        } else {
            $rek_piutang = Rekening::find($rekeningId);
            $rekenings[$rek_piutang->rekening_id] = $rek_piutang;
        }
        return $rek_piutang;
    }
}
