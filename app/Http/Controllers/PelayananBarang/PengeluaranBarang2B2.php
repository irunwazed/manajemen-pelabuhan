<?php

namespace App\Http\Controllers\PelayananBarang;

use App\Http\Controllers\Controller;
use App\Models\PengeluaranBarang2B2 as ModelsPengeluaranBarang2B2;
use Illuminate\Http\Request;

class PengeluaranBarang2B2 extends Controller
{
    public function show(Request $request, $user)
    {
        $page = @$request->input('page') ? $request->input('page') : 1;
        $perPage = @$request->input('perPage') ? $request->input('perPage') : 10;

        $query = ModelsPengeluaranBarang2B2::when(request()->filled('no_form_2b2'), function ($q) {
            $q->where('no_form_2b2', request('no_form_2b2'));
        })->when(request()->filled('pbau_pengeluaran_2b2_id'), function ($q) {
            $q->where('pbau_pengeluaran_2b2_id', request('pbau_pengeluaran_2b2_id'));
        });

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
