<?php

namespace App\Http\Controllers\Warehousing;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\PenerimaanBarang;
use App\Models\PenerimaanBarangKontainer;
use App\Models\Perusahaan;
use App\Models\Kapal;
use App\Models\LokasiWarehouse;

use Carbon\Carbon;

class WarehousingController extends Controller
{
    //sub menu 1
    public function index(Request $request)
    {
        $no  = $request->input('no_penerimaan');
        $pbm = $request->input('pbm');

        $data = PenerimaanBarang::when($no, function ($query) use ($no) {
            $query->where('no_penerimaan', 'LIKE', "%$no%");
        })
        ->when($pbm, function ($query) use ($pbm) {
            $query->where('nama_pbm', 'LIKE', "%$pbm%");
        })
        ->orderBy("penerimaan_barang_id", "desc")
        ->paginate(10);

        return view('app/warehousing.penerimaan-barang', compact('data', 'no', 'pbm'));
    }

    public function penerimaanBarangForm(Request $request, $user, $id=null)
    {
        $data    = [];
        $subName = "Buat";
        if(!empty($id)){
            $data = PenerimaanBarang::find($id);
            $subName = "Edit";
        }

        $ships           = Kapal::all();
        $lokasiWarehouse = LokasiWarehouse::all();
        $pbm = Perusahaan::where("jenis_usaha", "PBM")->get();

        return view('app/warehousing.create-penerimaan-barang', compact('data', 'subName', 'pbm', 'ships', 'lokasiWarehouse'));
    }

    public function viewPenerimaanBarangForm(Request $request, $user, $id=null)
    {

             
        $data  = PenerimaanBarang::find($id);
        $pbm   = Perusahaan::where("jenis_usaha", "PBM")->get();

        $subName = "View";

        $ships           = Kapal::all();
        $lokasiWarehouse = LokasiWarehouse::all();

        return view('app/warehousing.create-penerimaan-barang', compact('data', 'subName', 'pbm', 'ships', 'lokasiWarehouse'));
    }

    public function submitPenerimaanBarang(Request $request, $user, $id=null)
    {
        $allParams = $request->input();

        $arr = [
            "no_penerimaan"   => $allParams["no_penerimaan"],
            "nama_pbm"        => $allParams["nama_pbm"],
            "tanggal_masuk"   => $allParams["tanggal_masuk"],
            "nama_kapal"      => $allParams["nama_kapal"],
            "nama_pic_gudang" => $allParams["nama_pic_gudang"],
            "nama_pic_pbm"    => $allParams["nama_pic_pbm"],
        ];

        if ($request->hasFile('file')) {

            $rules = [
                'file' => 'required|mimes:pdf,doc,docx,xlsx,xls|max:1024',
            ];
        
            $customMessages = [
                'file.required' => 'Dokumen Pendukung is required.',
                'file.mimes' => 'Dokumen Pendukung: Only PDF, DOC, DOCX, XLSX, and XLS files are allowed.',
                'file.max' => 'Dokumen Pendukung: The file must not be larger than :max kilobytes.',
            ];
        
            $validator = Validator::make($request->all(), $rules, $customMessages);
        
    
            if ($validator->fails()) {
                return response()->json(['success' => false, 'error' => $validator->errors()->first()]);
            }

            if($id === "noid" && empty($allParams["id"])){
                //
            } else {
                if(!empty($allParams["id"])){
                    $id = $allParams["id"];
                }

                $penerimaanBarang = PenerimaanBarang::findOrFail($id);
                if(!empty($penerimaanBarang->dokumen_pendukung)){
                    $file_path = public_path('document') . '/' . $penerimaanBarang->dokumen_pendukung;
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
            }

            $file = $request->file('file');
            
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('document'), $fileName);

            $arr["dokumen_pendukung"] = $fileName;
        }

        try {
            
            if($id === "noid" && empty($allParams["id"])){
                $penerimaanBarang = PenerimaanBarang::create($arr);   
            } 
            else {
                if(!empty($allParams["id"])){
                    $id = $allParams["id"];
                }

                $penerimaanBarang = PenerimaanBarang::findOrFail($id);
                $penerimaanBarang->update($arr);
            }

            return response()->json(['message' => 'Record created/updated successfully', 'data' => $penerimaanBarang, "code" => 200], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to create/update record', 'error' => $e->getMessage(), "code" => 500], 500);
        }
    }

    public function getDetail(Request $request)
    {
        $allParams = $request->input();
        $id = $allParams["id"];

        $data = PenerimaanBarangKontainer::leftJoin('t_penerimaan_barang', 't_penerimaan_barang.penerimaan_barang_id', '=', 't_penerimaan_barang_kontainer.penerimaan_barang_kontainer_id')
        ->when(!empty($id), function ($query) use ($id) {
            $query->where('t_penerimaan_barang_kontainer.penerimaan_barang_id', $id);
        })
        ->orderBy("t_penerimaan_barang_kontainer.penerimaan_barang_kontainer_id", "desc")
        ->paginate(10); // Adjust the number of items per page as needed

        $pagination = [
            'total' => $data->total(),
            'per_page' => $data->perPage(),
            'current_page' => $data->currentPage(),
            'last_page' => $data->lastPage(),
            'next_page_url' => $data->nextPageUrl(),
            'prev_page_url' => $data->previousPageUrl(),
            'path' => $data->path(),
        ];

        return response()->json([
            'data' => $data->items(),
            'links' => $pagination,
        ]);
    }

    public function getContainerDetail(Request $request)
    {
        try {
            $record = PenerimaanBarangKontainer::find($request->input('id'));

            if (!$record) {
                return response()->json(['message' => 'Record not found'], 404);
            }

            return response()->json(['message' => 'Record List', 'data' => $record], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed get list', 'error' => $e->getMessage()], 500);
        }
    }

    public function submitPenerimaanContaner(Request $request, $user, $id=null)
    {
        $allParams = $request->input();

        $arr = [
            "no_container"         => $allParams["no_container"],
            "kegiatan"             => $allParams["kegiatan"],
            "penerimaan_barang_id" => $allParams["idPenerimaan"],
            "posisi"               => $allParams["posisi"],
            "type_kontainer"       => $allParams["type_kontainer"],
            "lokasi_id"            => $allParams["lokasi_id"],
            "lokasi"               => $allParams["lokasi"],
            "row"                  => $allParams["row"],
            "column"               => $allParams["column"],
        ];

        try {
            if($allParams["idPenerimaanDetail"] === null){
                $penerimaanBarangKontainer = PenerimaanBarangKontainer::create($arr);   
            } else {
                $penerimaanBarangKontainer = PenerimaanBarangKontainer::findOrFail($allParams["idPenerimaanDetail"]);
                $penerimaanBarangKontainer->update($arr);
            }

            return response()->json(['message' => 'Record created/updated successfully', 'data' => $penerimaanBarangKontainer, "code" => 200], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to create/update record', 'error' => $e->getMessage(), "code" => 500], 500);
        }
    }

    public function destroy(Request $request, $user = null, $id = null)
    {

        try {
            $record = PenerimaanBarang::find($id);

            if (!$record) {
                return response()->json(['message' => 'Record not found'], 404);
            }

            $record->delete();

            return back()->with('message', 'Operation successful!');
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to delete record', 'error' => $e->getMessage()], 500);
        }
    }

    public function destroyContainer(Request $request)
    {
        try {
            $record = PenerimaanBarangKontainer::find($request->input('id'));

            if (!$record) {
                return response()->json(['message' => 'Record not found'], 404);
            }

            $record->delete();

            return response()->json(['message' => 'Record deleted successfully', 'data' => $record], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to delete record', 'error' => $e->getMessage()], 500);
        }
    }

}
