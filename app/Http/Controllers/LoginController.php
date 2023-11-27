<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LoginController extends Controller
{


  public function login()
  {
    return view('pages/login');
  }

  public function doLogin(Request $request)
  {
    //     1. agen-kapal
    // 2. petugas-lala
    // 3. pbm
    // 4. bup
    // 5. syahbandar
    // 6. Pelindo-kapal
    // 7. Pelindo-pbau
    // 8. Pelindo-keuangan
    // 9. admin
    // $PASSWORD_BCRYPT = "testing-pelabuhan";

    // $password = "testing";
    // $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $username = @$request->input('username');
    $password = @$request->input('password');

    $user = DB::table("login")->where("username", $username)->first();

    if ($user) {
      if (password_verify($password, $user->password)) {

        // session()->flush();

        session()->put('username', $username);
        session()->put('name', $user->name);
        session()->put('id', $user->id);
        session()->put('level', $user->level);

        $link = $username;

        if($user->level == 1){
          $link = 'admin';

          $agen = DB::table("m_perusahaan")->where("jenis_usaha", "AGEN")->first();
          session()->put('agen_id', @$agen->perusahaan_id);
          session()->put('agen_nama_perusahaan', @$agen->nama_perusahaan);
          session()->put('agen_alamat_perusahaan', @$agen->alamat);
          session()->put('agen_pic', @$agen->pic);
          
          $pbm = DB::table("m_perusahaan")->where("jenis_usaha", "PBM")->first();
          session()->put('pbm_id', @$pbm->perusahaan_id);
          session()->put('pbm_nama_perusahaan', @$pbm->nama_perusahaan);
          session()->put('pbm_alamat_perusahaan', @$pbm->alamat);
          session()->put('pbm_pic', @$pbm->pic);

        }else if($user->level == 2){
          $link = 'agen-kapal';

          $agen = DB::table("m_perusahaan")->where("user_id", $user->id)->first();
          session()->put('name', @$agen->nama_perusahaan);
          
          session()->put('agen_id', @$agen->perusahaan_id);
          session()->put('agen_nama_perusahaan', @$agen->nama_perusahaan);
          session()->put('agen_alamat_perusahaan', @$agen->alamat);
          session()->put('agen_pic', @$agen->pic);
          
        }else if($user->level == 3){
          $link = 'petugas-lala';
        }else if($user->level == 4){
          $link = 'pbm';

          $pbm = DB::table("m_perusahaan")->where("user_id", $user->id)->first();
          session()->put('name', @$pbm->nama_perusahaan);
          
          session()->put('pbm_id', @$pbm->perusahaan_id);
          session()->put('pbm_nama_perusahaan', @$pbm->nama_perusahaan);
          session()->put('pbm_alamat_perusahaan', @$pbm->alamat);
          session()->put('pbm_pic', @$pbm->pic);
        }else if($user->level == 5){
          $link = 'bup';
        }else if($user->level == 6){
          $link = 'syahbandar';
        }else if($user->level == 7){
          $link = 'pelindo-kapal';
        }else if($user->level == 8){
          $link = 'pelindo-pbau';
        }else if($user->level == 9){
          $link = 'pelindo-keuangan';
        }
        
        session()->put('role', @$link);

        return redirect("/".$link);
      }
    }
    return redirect("/login?message=Username dan Password salah!");

  }
}
