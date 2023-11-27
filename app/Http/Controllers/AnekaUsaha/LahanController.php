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

class LahanController
{

    public function listSewaLahan(Request $request, $user)
    {
        $search = $request->input('search');
        $page = @$request->input('page') ? $request->input('page') : 1;
        $perPage = @$request->input('perPage') ? $request->input('perPage') : 10;

        $query = DB::table('m_au_lahan_bangunan as a')
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
            )->where(
                function ($query) use ($search) {
                    return $query

                        ->where('c.nama_perusahaan', 'like', '%' . $search . '%');
                }
            );;

        $total = $query->count();
        $data = $query->skip(($page - 1) * $perPage)->take($perPage)
            ->get();

        $result = [
            "user" => $user,
            "request" => $request->input(),
            "data" => $data,
            "page" => $page,
            "perPage" => $perPage,
            "total" => $total,
            "totalPage" => (ceil($total / $perPage)),
        ];

        return view('app.aneka-usaha.permohonan-sewa-lahan', $result);
    }



    public function listSewaPers(Request $request, $user)
    {
        $query = DB::table('m_perusahaan as c')
            ->select(
                'c.nama_perusahaan',
                'c.npwp',
                'c.no_telp_kantor',
                'c.alamat',
                'c.pic',
                'c.no_tel_pic',
                'c.perusahaan_id',
                'c.jenis_usaha'
            );

        return view('app.aneka-usaha.create-permohonan-sewa-lahan', $query);
    }

    public function companyInfo(Request $request, $user)
    {
        $companyInfo = DB::table('m_au_lahan_bangunan as a')
            ->join('t_au_lahan as b', 'a.au_lahan_bangunan_id', 'b.au_lahan_id')
            ->join('m_perusahaan as c', 'b.nama_perusahaan', 'c.nama_perusahaan')
            ->leftJoin('m_lokasi_penumpukan as d', 'b.lokasi_id', 'd.lokasi_penumpukan_id')
            ->select(
                'a.au_lahan_bangunan_id',
                'b.no_pranota',
                'c.nama_perusahaan',
                'c.npwp',
                'c.no_telp_kantor',
                'c.alamat',
                'c.pic',
                'c.no_tel_pic',
                'c.perusahaan_id',
                'c.jenis_usaha',
                'a.jenis_properti',
                'a.nama_lahan_bangunan',
                'a.trf_permeter',
                'b.no_kontrak',
                'b.tgl_kontrak',
                'b.kode_perusahaan',
                'b.luas_lahan',
                'b.jangka_waktu',
                'b.tarif',
                'd.nama_lokasi',
                'd.luas_lokasi',
                'b.periode_pakai_mulai',
                'b.periode_pakai_selesai',
                'b.keterangan',
                'b.biaya_sewa',
                'b.tarif',
                'b.status_lunsum'
            )->get();
        $lokasi = DB::table('m_au_lahan_bangunan')->get()->toArray();

        $data = array(
            'companyInfo' => $companyInfo,
            'lokasiInfo'  => $lokasi
        );
        //luas_lokasi*periode*tarif
        return view('app.aneka-usaha.create-permohonan-sewa-lahan', $data);
    }

    public function companyinfoById($id)
    {
        $res = array();

        try {
            $info = DB::table('m_perusahaan as a')->select('a.*')
                ->where('a.perusahaan_id', $id)->get()->toArray();

            $res = array(
                'err' => false,
                'data' => $info[0]
            );
        } catch (Exception $th) {
            $res =  array(
                'err'   => 'true',
                'data'  => null
            );
        }

        return $res;
    }


    public function lahaninfoById($id)
    {
        try {
            $info = DB::table('m_au_lahan_bangunan as a')->select('a.*')
                ->where('a.au_lahan_bangunan_id', $id)->get()->toArray();

            $res = array(
                'err' => false,
                'data' => $info[0]
            );
        } catch (Exception $th) {
            $res =  array(
                'err'   => 'true',
                'data'  => null
            );
        }
        return $res;
    }

    // ambil data perusahaan
    public function nama_perusahaan($id)
    {
        $nama_perusahaan = DB::table('m_perusahaan')
            ->select(
                'nama_perusahaan',
                'alamat',
                'no_telp_kantor',
                'no_tel_pic',
                'pic',
                'npwp'
            )->first();
        return view('app.aneka-usaha.create-permohonan-sewa-lahan', $nama_perusahaan);
    }

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
        $data->save();

        // Redirect back with a success message (you can customize this part)
        return redirect()->back()->with('success', 'Data inserted successfully');
    }

    public function listLahan(Request $request, $user)
    {
        $listLahan = DB::table('m_au_lahan_bangunan')->where('au_lahan_bangunan_id')->first();

        return view('app.aneka-usaha.create-permohonan-sewa-lahan', ['companyInfo' => $listLahan]);
    }
    public function detailSewaLahan(Request $request)
    {
        dd('test');
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
            )->get();
        return view('app.aneka-usaha.detail-permohonan-sewa-lahan', $detaillahan);
    }


    public function UpSewaLahan()
    {
    }

    public function DelSewaLahan($id)
    {
        try {
            DB::table('t_au_lahan')->where('id', $id)->delete();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function exportPdf()
    {
        $data = [
            'title' => 'Contoh PDF',
            'content' => 'Isi dari PDF ini.',
        ];

        $pdf = DomPDFPDF::loadView('pdf.export', $data);

        return $pdf->download('export.pdf');
    }
}
