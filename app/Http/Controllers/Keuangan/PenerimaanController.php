<?php

namespace App\Http\Controllers\Keuangan;

use App\Models\Penerimaan;
use App\Models\Perusahaan;
use App\Services\Keuangan\PenerimaanService;
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
