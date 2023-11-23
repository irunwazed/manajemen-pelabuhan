<?php

namespace App\Http\Controllers\PelayananBarang;

use App\Http\Controllers\Controller;
use App\Models\PengeluaranBarang2B2 as ModelsPengeluaranBarang2B2;
use Illuminate\Http\Request;

class PengeluaranBarang2B2 extends Controller
{
    public function show(Request $request, $user)
    {
        $search = $request->input('search');


        $page = @$request->input('page') ? $request->input('page') : 1;
        $perPage = @$request->input('perPage') ? $request->input('perPage') : 10;


        $query = ModelsPengeluaranBarang2B2::where(
            function ($query) use ($search) {
                return $query
                    ->where('no_form_2b2', 'like', '%' . $search . '%')
                    ->orWhere('pbau_penumpukan_2b1', 'like', '%' . $search . '%');
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

        return view('app.pelayanan-barang.pengeluaran-2b2', $result);
    }
}
