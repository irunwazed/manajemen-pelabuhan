<?php

namespace App\Http\Controllers\Warehousing;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Warehousing\PengeluaranBarang;

class PengeluaranBarangController extends Controller
{
     //
     public function index(Request $request){
        return view("app.warehousing.pengeluaran-barang");
    }

    public function show(Request $request, $user)
    {
        $noPenerimaan = $request->input('noPenerimaan');
        $namaPBM = $request->input('namaPBM');
         $noPengeluaran = $request->input('noPengeluaran');

        $page = @$request->input('page') ? $request->input('page') : 1;
        $perPage = @$request->input('perPage') ? $request->input('perPage') : 10;


        $query = DB::table('t_penerimaan_barang as penerimaan')
                ->leftjoin('t_pengeluaran_barang as pengeluaran','penerimaan.penerimaan_barang_id','=','pengeluaran.penerimaan_barang_id')
            ->select('penerimaan.penerimaan_barang_id',
                        'pengeluaran.pengeluaran_barang_id',   
                        'penerimaan.no_penerimaan',
                        'penerimaan.nama_pbm',
                        'penerimaan.nama_kapal',
                        'tanggal_masuk',
                        'no_pengeluaran',
                        'tgl_keluar')
                    ->where(
                      function ($query) use ($noPenerimaan,$namaPBM,$noPengeluaran) {
                     return $query
                        ->where('penerimaan.no_penerimaan', 'like', '%' . $noPenerimaan . '%')
                        ->where('penerimaan.nama_pbm', 'like', '%' . $namaPBM . '%')
                        ->where('pengeluaran.no_pengeluaran', 'like', '%' . $noPengeluaran . '%')
                        ->orWhereNull('pengeluaran.no_pengeluaran');
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
     //  dd($result);
        return view('app.warehousing.pengeluaran-barang', $result);
    }

    public function addPengeluaran($user,$id_penerimaan)
    {
    
     $data=PengeluaranBarang::getPenerimaanById($id_penerimaan);
     $dataDetail=PengeluaranBarang::getDetailBarangPenerimaanById($id_penerimaan);
     $dataPbm=PengeluaranBarang::get_all_pbm();
     $dataKapal=PengeluaranBarang::get_all_kapal();
        $result = [
            "user" => $user,
            "data" => $data,
            "dataDetail" => $dataDetail,
            "dataPbm" => $dataPbm,
            "dataKapal" => $dataKapal
        ];

      return view('app.warehousing.create-pengeluaran-barang',  $result);
    }


  public function viewPengeluaran($user,$id_pengeluaran)
    {
    
     $data=PengeluaranBarang::getPengeluaranById($id_pengeluaran);
     $dataDetail=PengeluaranBarang::getDetailBarangPengeluaranById($id_pengeluaran);
    $result = [
        "user" => $user,
        "data" => $data,
        "dataDetail" => $dataDetail
      ];

      return view('app.warehousing.view-pengeluaran-barang',  $result);
    }


    public function tambahDataPengeluaran(Request $request,$user){
       $no_pengeluaran = $request->no_pengeluaran;
       $tgl_keluar = $request->tgl_keluar;
        $pic_pbm = $request->pic_pbm;
        $pic_gudang = $request->pic_gudang;
        $flag ="Y";
        $penerimaan_barang_kontainer_id=$request->penerimaan_barang_kontainer_id;
        $penerimaan_barang_id=$request->penerimaan_barang_id;
  /*      $this->validate($request, [
          'pandu_id' => 'required',
          'tunda_id' => 'required'
         ]); */
         
         if ($request->file('files')) {
          $file = $request->file('files');
          $filename = time() . '_' . $file->getClientOriginalName();
    
          // File upload location
          $location = 'files/dok_warehouse_keluar';
          $file->move($location, $filename);
          $dokumen_pendukung = $location . "/" . $filename;
        }


        $data=array(
          'no_pengeluaran'=>$no_pengeluaran,
          'pic_gudang'=>$pic_gudang,
           'pic_pbm' =>$pic_pbm,
          'tgl_keluar'=>$tgl_keluar,
          "dokumen_pendukung"=>$dokumen_pendukung,
          "penerimaan_barang_id"=>$penerimaan_barang_id,
          'flag'=>$flag
        );

        $data=PengeluaranBarang::tambahPengeluaran($data);
        $getId = PengeluaranBarang::getMaxIdPengeluaran($penerimaan_barang_id);
        for($i=0;$i<count($penerimaan_barang_kontainer_id);$i++ )
        {
            DB::table('t_pengeluaran_barang_kontainer')->insert(
              ['pengeluaran_barang_id' => $getId->pengeluaran_barang_id,
              'penerimaan_barang_kontainer_id' => $penerimaan_barang_kontainer_id[$i]]
          );
        }
     
   return redirect("/".$user."/warehousing/pengeluaran-barang");
   //dd ($data);
    }

}
