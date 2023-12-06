<?php

namespace App\Http\Controllers\AnekaUsaha\lahan\LahanController;

namespace App\Http\Controllers\AnekaUsaha\lahan;

use App\Http\models\AnekaUsaha\lahan\SewaLahan;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Services\AnekaUsaha\LahanService;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Exception;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class LahanController extends Controller
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
            );

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

        return view('app.aneka-usaha.lahan.permohonan-sewa-lahan', $result);
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

        return view('app.aneka-usaha.lahan.create-permohonan-sewa-lahan', $query);
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
            'lokasiInfo'  => $lokasi,
            'user' => $user
        );
        return view('app.aneka-usaha.lahan.create-permohonan-sewa-lahan', $data);
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

    public function companyInfoId($id)
    {
        $info = DB::table('m_perusahaan as a')->select('a.*')
            ->where('a.perusahaan_id', $id)->get()->toArray();

        return (array) $info[0];
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


    public function Lahancreate(Request $request, $user)
    {
        $post = $request->post();

        $p = $this->companyInfoId($post['perusahaan_id']);

        $data = new SewaLahan();
        $data->no_kontrak       = trim($request->post('nomor'));
        $data->tgl_kontrak      = date('Y-m-d', strtotime($request->post('tanggal_kontrak')));
        $data->nama_perusahaan  = $p['nama_perusahaan'];
        $data->npwp_perusahaan  = $request->post('npwp');
        $data->kode_perusahaan  = '';
        $data->alamat           = $p['alamat'];
        $data->telephone        = $request->post('telepone');
        $data->contact_person   = $p['pic'];
        $data->lokasi_id        = $request->post('lokasi');
        $data->jenis_properti   = $request->post('jenis_properti');
        $data->luas_lahan       = $request->post('luas_lahan');
        $data->jangka_waktu     = $request->post('jangka_waktu');
        $data->periode_pakai_mulai      = date('Y-m-d', strtotime($request->post('tgl_mulai')));
        $data->periode_pakai_selesai    = date('Y-m-d', strtotime($request->post('tgl_selesai')));
        $data->keterangan       = $request->post('keterangan');
        $data->tarif            = $request->post('tarif');
        $data->biaya_sewa       = $request->post('pembulatan');
        $data->flag             = '1';
        $data->no_pranota       = '';
        $data->tgl_pranota      = date('Y-m-d');
        $data->no_nota4e        = '';
        $data->tgl_nota4e       = date('Y-m-d');
        $data->kode_rek         = $request->post('norek');
        $data->status_lunsum    = $request->post('lumpsium') == 0 ? 'N' : 'Y';
        $data->biaya_pbb        = $request->post('biaya_pbb');
        $data->biaya_admin      = $request->post('biaya_adm');
        $data->biaya_lain       = $request->post('biaya_lain');
        $data->save();

        return redirect("$user/aneka-usaha/lahan/create-permohonan-sewa-lahan");
    }
    public function LahanUpdate(Request $request, $user)
    {
        $post = $request->post();

        $p = $this->companyInfoId($post['perusahaan_id']);

        //$data = new SewaLahan();
        $data = SewaLahan::find($id);
        $data->no_kontrak       = trim($request->post('nomor'));
        $data->tgl_kontrak      = date('Y-m-d', strtotime($request->post('tanggal_kontrak')));
        $data->nama_perusahaan  = $p['nama_perusahaan'];
        $data->npwp_perusahaan  = $request->post('npwp');
        $data->kode_perusahaan  = '';
        $data->alamat           = $p['alamat'];
        $data->telephone        = $request->post('telepone');
        $data->contact_person   = $p['pic'];
        $data->lokasi_id        = $request->post('lokasi');
        $data->jenis_properti   = $request->post('jenis_properti');
        $data->luas_lahan       = $request->post('luas_lahan');
        $data->jangka_waktu     = $request->post('jangka_waktu');
        $data->periode_pakai_mulai      = date('Y-m-d', strtotime($request->post('tgl_mulai')));
        $data->periode_pakai_selesai    = date('Y-m-d', strtotime($request->post('tgl_selesai')));
        $data->keterangan       = $request->post('keterangan');
        $data->tarif            = $request->post('tarif');
        $data->biaya_sewa       = $request->post('pembulatan');
        $data->flag             = '1';
        $data->no_pranota       = '';
        $data->tgl_pranota      = date('Y-m-d');
        $data->no_nota4e        = '';
        $data->tgl_nota4e       = date('Y-m-d');
        $data->status_lunsum    = $request->post('lumpsium') == 0 ? 'N' : 'Y';
        $data->kode_rek         = $request->post('norek');
        $data->biaya_pbb        = $request->post('biaya_pbb');
        $data->biaya_admin      = $request->post('biaya_adm');
        $data->biaya_lain       = $request->post('biaya_lain');
        $data->update();

        return redirect("$user/aneka-usaha/lahan/edit-permohonan-sewa-lahan");
    }


    public function lahansewaList(Request $request)
    {
        $data = DB::table('t_au_lahan as ab')
            ->select('*')->get();
        //dd($record);
        // echo "<pre>";
        // print_r($data);
        // echo $id;
        // die;
        return view('app.aneka-usaha.lahan.permohonan-sewa-lahan', ['data' => $data, 'request' => $request]);
    }

    public function detailsewaLahan($id)
    {
        //get post by ID
        $post = SewaLahan::findOrFail($id);

        //render view with post
        return view('app.aneka-usaha.lahan.detail-permohonan-sewa-lahan', compact('post'));
    }
}
