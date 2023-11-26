<?php

namespace App\Http\Controllers\EksportImport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ImportController extends Controller
{
  public function saveHeader(Request $request)
  {
    // insert data ke table
    DB::table('t_header_pib')->insert([
      'header_pib_id' => 1,
      'no_pengajuan' => $request->no_pengajuan,
    ]);
    // return redirect('');
  }
}