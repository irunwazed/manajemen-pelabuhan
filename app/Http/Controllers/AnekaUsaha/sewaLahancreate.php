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

class sewaLahancreate
{

    public function Lahancreate(Request $request, $user)
    {
        // Validate the incoming request data
        $request->validate([
            'nomor_kontrak' => 'required',
            'tanggal_kontrak' => 'required',
        ]);

        // Create a new instance of your model
        $data = new SewaLahan();

        // Assign values from the request to the model attributes
        $data->nomor_kontrak = $request->input('nomor_kontrak');
        $data->tanggal_kontrak = $request->input('tanggal_kontrak');
        $data->jenis_usaha = $request->input('jenis_usaha');
        $data->lokasi = $request->input('lokasi');
        $data->luas_lahan = $request->input('luas_lahan');
        $data->periode_pakai_mulai = $request->input('tgl_mulai');
        $data->periode_pakai_selesai = $request->input('tgl_selesai');
        $data->tarif = $request->input('tarif');
        $data->keterangan = $request->input('keterangan');
        $data->biaya = $request->input('biaya');
        $data->nama_perusahaan = $request->input('biaya_pbb');
        $data->nama_perusahaan = $request->input('ppn');
        $data->nama_perusahaan = $request->input('biaya_adm');
        $data->nama_perusahaan = $request->input('biaya_lain');
        $data->nama_perusahaan = $request->input('total_biaya');
        $data->biaya_sewa = $request->input('pembulatan');
        $data->status_lunsum = $request->input('lumpsium');
        // Assign other fields here

        // Save the data to the database
        $data->save();

        // Redirect back with a success message (you can customize this part)
        return redirect()->back()->with('success', 'Data inserted successfully');
    }
}
