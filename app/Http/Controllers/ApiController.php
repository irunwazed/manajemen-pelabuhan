<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ApiController extends Controller
{

  
  function getDermagaByPelabuhan($pelabuhan){

    // get ID
    $data = DB::table('m_lokasi_dermaga')->where("pelabuhan_id", $pelabuhan)->get();

    return [
      "status" => true,
      "data" => $data,
    ];
    
    
  }

}
