<?php

namespace App\Http\Controllers\Keuangan;

use App\Models\Penerimaan;
use App\Models\PenerimaanDetail;
use App\Models\Perusahaan;
use App\Services\Keuangan\PenerimaanService;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

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

        return view('app/keuangan.penerimaan', compact('data', 'noPenerimaan', 'namaPerusahaan'));
    }

    public function detail(Request $request)
    {
        $id = $request->route('id');
        $penerimaan = Penerimaan::where('penerimaan_id', '=', $id)->first();
        $details = PenerimaanDetail::where('penerimaan_id', '=', $id)
                ->orderBy('penerimaan_detail_id', 'desc')
                ->get();
//            DB::table(app(PenerimaanDetail::class)->getTable())->where('penerimaan_id', '=', $id)->orderBy('penerimaan_detail_id', 'desc')->get();

        return view('app/keuangan.penerimaan.detail', compact('penerimaan', 'details'));
    }

    public function create(Request $request)
    {
        $data = [];

        $perusahaan = Perusahaan::all();

        return view('app/keuangan.penerimaan.create', compact('data', 'perusahaan'));
    }

    public function getMaster(Request $request)
    {
        try {
            return DataTables::of(
                $this->service->listMaster()
            )->addColumn('action', function ($data) {
                if ($data) {
                    return view($this->view . 'action')
                        ->with([
                            'data' => $data
                        ]);
                } else {
                    return '';
                }
            })->make(true);
        } catch (\Exception $ex) {
            dd($ex);
        }
    }
}
