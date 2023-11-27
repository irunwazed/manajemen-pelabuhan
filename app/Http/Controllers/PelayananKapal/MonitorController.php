<?php

namespace App\Http\Controllers\PelayananKapal;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MonitorController extends Controller
{

  public function show(Request $request, $user)
  {
    $search = $request->input('search');


    $page = @$request->input('page') ? $request->input('page') : 1;
    $perPage = @$request->input('perPage') ? $request->input('perPage') : 10;


    $query = DB::table('t_monitoring_pelayanan_kapal')
    ->select([
      "t_monitoring_pelayanan_kapal.*",
      "t_pelayanan_kapal.no_layanan_kapal",
      "t_pelayanan_kapal.no_pkk",
      "t_pelayanan_kapal.nama_kapal",
    ])
    ->leftJoin("t_pelayanan_kapal", "t_pelayanan_kapal.pelayanan_kapal_id", "t_monitoring_pelayanan_kapal.pelayanan_kapal_id")
    ->where(
        function ($query) use ($search) {
          return $query
            ->where('t_pelayanan_kapal.no_layanan_kapal', 'like', '%' . $search . '%')
            ->orWhere('t_pelayanan_kapal.no_pkk', 'like', '%' . $search . '%')
            ->orWhere('t_pelayanan_kapal.nama_kapal', 'like', '%' . $search . '%');
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

    return view('app.pelayanan-kapal.monitor', $result);
  }

  

}
