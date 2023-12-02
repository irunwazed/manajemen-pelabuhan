<?php

namespace App\Http\Controllers\Warehousing;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MonitoringWareHousingController extends Controller
{
    //
     //
     public function index(Request $request){
        return view("app.warehousing.monitoring-warehousing");
    }

    public function show(Request $request, $user)
    {
      $search = $request->input('search');

        $page = @$request->input('page') ? $request->input('page') : 1;
        $perPage = @$request->input('perPage') ? $request->input('perPage') : 10;


        $query = DB::table('m_lokasi_warehouse as gudang')
        ->leftjoin('t_penerimaan_barang_kontainer as penerimaan','gudang.lokasi_warehouse_id','=','penerimaan.lokasi_id')
        ->leftjoin('t_pengeluaran_barang_kontainer as pengeluaran','penerimaan.penerimaan_barang_kontainer_id','=','pengeluaran.penerimaan_barang_kontainer_id')
        ->select('gudang.lokasi_warehouse_id',
                'gudang.nama_lokasi_warehouse',   
                'gudang.daya_tampung'
                )
        ->selectRaw('COUNT(penerimaan.penerimaan_barang_kontainer_id)-COUNT(pengeluaran.penerimaan_barang_kontainer_id) as jlh_brg_digudang')
        ->where('gudang.nama_lokasi_warehouse','like', '%' . $search . '%')
        ->groupBy('lokasi_warehouse_id','nama_lokasi_warehouse','daya_tampung');
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
    //dd($result);
        return view('app.warehousing.monitoring-warehousing', $result);
    }

 


  public function detailGudang(Request $request,$user,$id_Gudang)
    {
      $search = $request->input('search');

      $page = @$request->input('page') ? $request->input('page') : 1;
      $perPage = @$request->input('perPage') ? $request->input('perPage') : 10;


      $query = DB::table('m_lokasi_warehouse as gudang')
      ->leftjoin('t_penerimaan_barang_kontainer as penerimaan','gudang.lokasi_warehouse_id','=','penerimaan.lokasi_id')
      ->leftjoin('t_penerimaan_barang as parentPenerimaan','parentPenerimaan.penerimaan_barang_id','=','penerimaan.penerimaan_barang_id')
      ->leftjoin('t_pengeluaran_barang_kontainer as pengeluaran','penerimaan.penerimaan_barang_kontainer_id','=','pengeluaran.penerimaan_barang_kontainer_id')
      ->select('gudang.lokasi_warehouse_id',
              'gudang.nama_lokasi_warehouse',   
              'penerimaan.posisi AS blok_gudang',
              'parentPenerimaan.nama_pbm AS pemilik',
              )
      ->selectRaw('COUNT(penerimaan.penerimaan_barang_kontainer_id)-COUNT(pengeluaran.penerimaan_barang_kontainer_id) as jlh_brg_digudang')
      ->where('gudang.lokasi_warehouse_id','=', $id_Gudang)
      ->groupBy('lokasi_warehouse_id','nama_lokasi_warehouse','penerimaan.posisi','parentPenerimaan.nama_pbm');
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

      return view('app.warehousing.detail-monitoring-warehousing',  $result);
    }

}
