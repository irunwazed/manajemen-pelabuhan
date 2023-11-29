<?php

namespace App\Http\Controllers\PelayananKapal;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use App\User;

class SimlalaController extends Controller
{

  public function show(Request $request, $user)
  {
    $search = $request->input('search');


    $page = @$request->input('page') ? $request->input('page') : 1;
    $perPage = @$request->input('perPage') ? $request->input('perPage') : 10;


    $query = DB::table('mt_simlala_rpk')
      ->where(
        function ($query) use ($search) {
          return $query
            ->where('no_rpk', 'like', '%' . $search . '%')
            ->orWhere('jenis_trayek', 'like', '%' . $search . '%')
            ->orWhere('trayek', 'like', '%' . $search . '%')
            ->orWhere('nama_kapal', 'like', '%' . $search . '%')
            ->orWhere('nama_perusahaan', 'like', '%' . $search . '%')
            ->orWhere('muatan', 'like', '%' . $search . '%');
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
    //dd(  $result);
    return view('app.pelayanan-kapal.simlala', $result);
  }

}
