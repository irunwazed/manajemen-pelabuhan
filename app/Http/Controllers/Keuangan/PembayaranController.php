<?php

namespace App\Http\Controllers\Keuangan;

use App\Models\Jurnal;
use App\Models\Pembayaran;
use App\Models\PembayaranDetail;
use App\Models\Rekening;
use App\Models\RekeningKas;
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
            $query->where('no_pembayaran', 'LIKE', "%$noPembayaran%");
        })
            ->when($namaRekening, function ($query) use ($namaRekening) {
                $query->where('nama_rekening_kas', 'LIKE', "%$namaRekening%");
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
        $rekeningKas = RekeningKas::orderBy('nama_rekening')->get();
        $rekeningPengeluaran = RekeningPengeluaran::orderBy('nama_rekening')->get();

        return view('app/keuangan.pembayaran.create', compact('rekeningKas','rekeningPengeluaran'));
    }

    public function save(Request $request, $user)
    {
        $rekKas = $this->getRekening($request->input('rekening'));

        try {
            DB::beginTransaction();
            $pembayaran = $this->savePembayaran($request, $rekKas);
            $jumlah = $this->savePembayaranDetail($request, $pembayaran);
            $pembayaran->jumlah = $jumlah;
            $pembayaran->save();
            $this->saveJurnal($request, $pembayaran);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }

        return redirect()->route('pembayaran-list', ['user' => $user]);
    }
    private function getRekening($idRekening)
    {
        return Rekening::find($idRekening);
    }

    public function savePembayaran(Request $request, $rekening)
    {
        return Pembayaran::create([
            'no_pembayaran' => $request->input('no_pembayaran'),
            'rekening_kas_id' => $rekening->rekening_id,
            'kode_rekening_kas' => $rekening->kode_rekening,
            'nama_rekening_kas' => $rekening->nama_rekening,
            'tanggal' => $request->input('tanggal'),
            'jumlah' => 0
        ]);
    }

    public function savePembayaranDetail($request, $pembayaran)
    {
        $total = 0;
        $rekenings = [];
        $rekPengeluaran = $request->input('rekening_pengeluaran_id');
        for ($i = 0; $i < count($rekPengeluaran); $i++)
        {
            $rek = $this->getRekeing($rekenings, $rekPengeluaran[$i]);
            $jumlah = $request->input('jumlah')[$i];
            PembayaranDetail::create([
                'pembayaran_id' => $pembayaran->pembayaran_id,
                'rekening_pengeluaran_id' => $rek->rekening_id,
                'kode_rekening_pengeluaran' => $rek->kode_rekening,
                'nama_rekening_pengeluaran' => $rek->nama_rekening,
                'keterangan'  => $request->input('keterangan')[$i],
                'jumlah'  => $jumlah,
            ]);
            $total += $jumlah;
        }
        return $total;
    }

    /**
     * @param $details
     * @param $rekening
     * @param Request $request
     * @param $pembayaran
     * @return array
     */
    public function saveJurnal(Request $request, $pembayaran): array
    {
        $jurnals = [];
        $rekenings = [];
        $total = 0;
        $rek_kas = $this->getRekeing($rekenings, $request->input('rekening'));
        $rekPengeluaran = $request->input('rekening_pengeluaran_id');
        for ($i = 0; $i < count($rekPengeluaran); $i++)
        {
            $rek = $this->getRekeing($rekenings, $rekPengeluaran[$i]);
            $jumlah = intval($request->input('jumlah')[$i]);
            $jurnals[] = [
                'kode_rekening' => $rek->kode_rekening,
                'tanggal' => $request->input('tanggal'),
                'ref_id' => $pembayaran->pembayaran_id,
                'ref_type' => 'pembayaran',
                'jumlah' => $jumlah,
                'debit_kredit' => 'D'
            ];
            $total += $jumlah;
        }
        $jurnals[] = [
            'kode_rekening' => $rek_kas->kode_rekening,
            'tanggal' => $request->input('tanggal'),
            'ref_id' => $pembayaran->pembayaran_id,
            'ref_type' => 'pembayaran',
            'jumlah' => $total,
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
