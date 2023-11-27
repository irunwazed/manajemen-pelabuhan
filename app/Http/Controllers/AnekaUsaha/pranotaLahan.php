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

class pranotaLahan
{

    public function praNota(Request $request, $user)
    {


        $data = DB::table('t_au_lahan')->select();

        return view('app.aneka-usaha.pranota-permohonan-sewa-lahan', ['data' => $data]);
    }

    public function exportPdf()
    {
        $data = [
            'title' => 'Contoh PDF',
            'content' => 'Isi dari PDF ini.',
        ];

        $pdf = DomPDFPDF::loadView('pdf.export', ['data' => $data]);

        return $pdf->download('export.pdf');
    }
}
