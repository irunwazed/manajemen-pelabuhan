<?php

namespace App\Http\Controllers\AnekaUsaha\lahan;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AnekaUsaha;
use App\Http\Models\lahan\SewaLahan;
use App\Services\AnekaUsaha\LahanService;
use PDF;
use Exception;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class pranotaController extends Controller
{

    public function praNota(Request $request, $user, $id)
    {
        $query = DB::table('t_au_lahan')->select('*')->where('au_lahan_id', $id)->first();

        // echo "<pre>";
        // print_r($query);
        // die;
        $pranota = [
            'nota' => $query,
            'id' => $id,
            'user' => $user

        ];

        return view('app.aneka-usaha.lahan.pranota-permohonan-sewa-lahan', $pranota);
    }

    public function listPranota(Request $request, $user, $id)
    {
        //SELECT * FROM m_perusahaan a JOIN t_au_lahan AS b ON a.nama_perusahaan=b.nama_perusahaan
        $toPranota = DB::table('t_au_lahan as a')->where('flag', '3')
            ->get();
        return view('app.aneka-usaha.lahan.list_to_pranota', ['toPranota' => $toPranota]);
    }

    public function praNotaDetail(Request $request, $user, $id)
    {
        // Use $id to get the detail data based on the ID
        $detailData =  $query = DB::table('t_au_lahan')->where('au_lahan_id', $id)
            ->select('*')->first();

        return view('app.aneka-usaha.lahan.detail-permohonan-sewa-lahan', (array) $detailData);
    }

    // public function pranota(Request $request, $user, $id)
    // {
    //     $post = $request->post();
    //     //$data = new SewaLahan();
    //     $data = SewaLahan::find($id);
    //     $data->no_kontrak       = trim($request->post('nomor'));
    // }

    public function exportPdf($user, $id)
    {
        $pranotaPdf =  $query = DB::table('t_au_lahan')->where('au_lahan_id', $id)
            ->select('*')->first();

        $data = [
            'title' => 'Pranota',
            'data' => $pranotaPdf,
        ];

        // return view('pdf.export', $data);

        $pdf = PDF::loadView('pdf.export', $data)->setPaper('a4', 'landscape');;
        return $pdf->download('pranota.pdf');
    }


    public function upPranota($user, $id)
    {
    }
}
