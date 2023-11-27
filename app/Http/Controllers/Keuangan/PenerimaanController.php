<?php

namespace App\Http\Controllers\Keuangan;

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

    public function list(Request $request)
    {
        try {
            return DataTables::of(
                $this->service->list()
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
