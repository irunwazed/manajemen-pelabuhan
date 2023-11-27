<?php

namespace App\Http\Controllers\Alat;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\PbauAlat;
use App\Models\PbauAlatDetail;
use App\Models\Perusahaan;
use App\Models\Kapal;
use App\Models\Alat;

use Carbon\Carbon;

class PbauAlatController extends Controller
{
    //sub menu 1
    public function index(Request $request)
    {
        $tahun = $request->input('tahun');
        $noPermohonan1C = $request->input('no_permohonan_1c');
        $perusahaan = $request->input('perusahaan');

        $data = PbauAlat::when($tahun, function ($query) use ($tahun) {
            $query->where('periode_1c', 'LIKE', "%$tahun%");
        })
        ->when($noPermohonan1C, function ($query) use ($noPermohonan1C) {
            $query->where('noform_1c', 'LIKE', "%$noPermohonan1C%");
        })
        ->when($perusahaan, function ($query) use ($perusahaan) {
            $query->where('nama_perusahaan', 'LIKE', "%$perusahaan%");
        })
        ->orderBy("pbau_alat_1c_id", "desc")
        ->paginate(10);

        return view('app/penyewaan-alat.permohonan-1c', compact('data', 'tahun', 'noPermohonan1C', 'perusahaan'));
    }

    public function create(Request $request)
    {

        $data = [];

        $companies = Perusahaan::all();
        $ships = Kapal::all();
        $tools = Alat::all();
        $subName = "Buat";

        return view('app/penyewaan-alat.create-permohonan-1c', compact('data', 'companies', 'ships', 'tools', 'subName'));
    }

    public function submitPermohonan(Request $request, $user, $id)
    {

        $allParams = $request->input();

        $arrPbauAlat = [
            "periode_1c"      => $allParams["tahun"],
            "noform_1c"       => $allParams["no_form_1c"],
            "tgl_noform_1c"   => $allParams["tanggal_1c"],
            "nama_perusahaan" => $allParams["nama_perusahaan"],
            "perusahaan_id"   => $allParams["perusahaan"],
            "kapal_id"        => $allParams["kapal"],
            "nama_kapal"      => $allParams["nama_kapal"],
            "keperluan"       => $allParams["keperluan"],
        ];

        try {
            if($id === "noid"){
                $pbauAlat = PbauAlat::create($arrPbauAlat);   
            } else {
                $pbauAlat = PbauAlat::findOrFail($id);
                $pbauAlat->update($arrPbauAlat);
            }

            return response()->json(['message' => 'Record created successfully', 'data_alat' => $pbauAlat], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to create record', 'error' => $e->getMessage()], 500);
        }

    }

    public function editPermohonan(Request $request, $user, $id)
    {
        $data = PbauAlat::find($id);

        $companies = Perusahaan::all();
        $ships   = Kapal::all();
        $tools   = Alat::all();
        $subName = "Edit";

        return view('app/penyewaan-alat.create-permohonan-1c', compact('data', 'companies', 'ships', 'tools', 'subName'));
    }

    public function getAlatDetail(Request $request)
    {
        $allParams = $request->input();
        $id = $allParams["id"];

        $data = PbauAlatDetail::leftJoin('m_alat', 't_pbau_alat_1c_detail.alat_id', '=', 'm_alat.alat_id')
        ->when(!empty($id), function ($query) use ($id) {
            $query->where('pbau_alat_1c_id', $id);
        })
        ->orderBy("t_pbau_alat_1c_detail.pbau_alat_1c_detail", "desc")
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

    public function store(Request $request)
    {

        $allParams = $request->input();

        try {

            $arrInsertPbauAlatDetail = [
                
                "pbau_alat_1c_id"   => $allParams["id"],
                "alat_id"           => $allParams["alat"],
                "nama_alat"         => $allParams["nama_alat"],
                "jumlah_alat"       => $allParams["jumlah_alat"],
                "satuan_tarif"      => $allParams["satuan_tarif"],
                "minimal_pakai"     => $allParams["minimal_pakai"],
                "tgl_mulai_mohon"   => $allParams["tgl_mulai_mohon"],
                "tgl_selesai_mohon" => $allParams["tgl_selesai_mohon"],
            ];

            $createdPbauAlatDetail = PbauAlatDetail::create($arrInsertPbauAlatDetail);

            return response()->json(['message' => 'Record created successfully', 'data_alat_detail' => $createdPbauAlatDetail], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to create record', 'error' => $e->getMessage()], 500);
        }

    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'tahun'         => 'required|numeric',
            'no_form_1c'    => 'required|string',
            'perusahaan'    => 'required|exists:m_perusahaan,perusahaan_id',
            'kapal'         => 'required',
            'keperluan'     => 'required|in:KOMERSIL,DINAS',
            'tanggal_1c'    => 'required|date',
            'alat'          => 'required|string',
            'jumlah_alat'   => 'required|numeric',
            'satuan_tarif'  => 'required|in:JAM,KG,METER',
            'harga_alat'    => 'required',
        ]);

        $allParams = $request->input();

        try {
            $pbauAlatDetail = PbauAlatDetail::findOrFail($allParams["pbauAlat1cIdDetail"]);
            $pbauAlatDetailData = [
                'alat_id'           => $allParams['alat'],
                'nama_alat'         => $allParams['nama_alat'],
                'jumlah_alat'       => $allParams['jumlah_alat'],
                'satuan_tarif'      => $allParams['satuan_tarif'],
                'minimal_pakai'     => $allParams['minimal_pakai'],
                'tgl_mulai_mohon'   => $allParams['tgl_mulai_mohon'],
                'tgl_selesai_mohon' => $allParams['tgl_selesai_mohon'],
            ];

            $pbauAlatDetail->update($pbauAlatDetailData);

            return response()->json(['message' => 'Record updated successfully', 'data_alat_detail' => $pbauAlatDetail], 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['message' => 'Record not found', 'error' => $e->getMessage()], 404);
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json(['message' => 'Failed to update record', 'error' => $e->getMessage()], 500);
        }
    }


    public function edit(Request $request)
    {
        try {
            $record = PbauAlatDetail::find($request->input('id'));

            if (!$record) {
                return response()->json(['message' => 'Record not found'], 404);
            }

            return response()->json(['message' => 'Record List', 'data' => $record], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed get list', 'error' => $e->getMessage()], 500);
        }
    }

    public function destroy(Request $request)
    {
        try {
            $record = PbauAlatDetail::find($request->input('id'));

            if (!$record) {
                return response()->json(['message' => 'Record not found'], 404);
            }

            $record->delete();

            return response()->json(['message' => 'Record deleted successfully', 'data' => $record], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to delete record', 'error' => $e->getMessage()], 500);
        }
    }

    public function getAlat(Request $request)
    {

        $alat = Alat::find($request->input('id'));
        return response()->json(['code' => 200,'success' => true, 'message' => 'Successfully', 'data' => $alat]);
    }


    //sub menu 2
    public function indexBukti2C(Request $request)
    {
        $tahun = $request->input('tahun');
        $noPermohonan1C = $request->input('no_permohonan_1c');
        $noForm2C = $request->input('no_form_2c');

        $data = PbauAlat::when($tahun, function ($query) use ($tahun) {
            $query->where('periode_1c', 'LIKE', "%$tahun%");
        })
        ->when($noPermohonan1C, function ($query) use ($noPermohonan1C) {
            $query->where('noform_1c', 'LIKE', "%$noPermohonan1C%");
        })
        ->when($noForm2C, function ($query) use ($noForm2C) {
            $query->where('noform_2c', 'LIKE', "%$noForm2C%");
        })
        ->orderBy("pbau_alat_1c_id", "desc")
        ->paginate(10);

        return view('app/penyewaan-alat.bukti-2c', compact('data', 'tahun', 'noPermohonan1C', 'noForm2C'));
    }

    public function realisasiBukti(Request $request, $user, $id)
    {
        $data = PbauAlat::find($id);

        $companies = Perusahaan::all();
        $ships   = Kapal::all();
        $tools   = Alat::all();
        $subName = "Edit";

        return view('app/penyewaan-alat.create-bukti-2c', compact('data', 'companies', 'ships', 'tools', 'subName'));
    }

    public function submitTanggalBukti(Request $request)
    {
        $allParams = $request->input();

        try {
            $pbauAlatDetailData = [
                'tgl_mulai_realisasi'   => $allParams['tgl_mulai_realisasi'],
                'tgl_selesai_realisasi' => $allParams['tgl_selesai_realisasi'],
            ];
            
            PbauAlatDetail::where("pbau_alat_1c_id", $allParams["id"])->update($pbauAlatDetailData);

            return response()->json(['message' => 'Tanggal updated successfully'], 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['message' => 'Record not found', 'error' => $e->getMessage()], 404);
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json(['message' => 'Failed to update record', 'error' => $e->getMessage()], 500);
        }
    }
    
    public function submitRealisasi(Request $request)
    {
        $allParams = $request->input();

        try {
            $pbauAlatDetailData = [
                'tgl_mulai_realisasi'   => $allParams['tgl_mulai_realisasi'],
                'tgl_selesai_realisasi' => $allParams['tgl_selesai_realisasi'],
            ];
            
            PbauAlatDetail::where("pbau_alat_1c_id", $allParams["id"])->update($pbauAlatDetailData);

            $arrPbauAlat = [
                "noform_2c"       => $allParams["no_form_2c"],
                "tgl_noform_2c"   => $allParams["tgl_noform_2c"],
            ];

            $pbauAlat = PbauAlat::findOrFail($allParams["id"]);
            $pbauAlat->update($arrPbauAlat);

            return response()->json(['message' => 'Form updated successfully'], 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['message' => 'Record not found', 'error' => $e->getMessage()], 404);
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json(['message' => 'Failed to update record', 'error' => $e->getMessage()], 500);
        }
    }

    public function getTanggalDetail(Request $request)
    {
        try {
            $record = PbauAlatDetail::where("pbau_alat_1c_id", $request->input('id'))->first();

            if (!$record) {
                return response()->json(['message' => 'Record not found'], 404);
            }

            return response()->json(['message' => 'Record List', 'data' => $record], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed get list', 'error' => $e->getMessage()], 500);
        }
    }

    //sub menu 3
    public function indexNota3c(Request $request)
    {
        $noPermohonan1C = $request->input('no_permohonan_1c');
        $noForm2C = $request->input('no_form_2c');
        $noForm3C = $request->input('no_form_3c');

        $data = PbauAlat::when($noPermohonan1C, function ($query) use ($noPermohonan1C) {
            $query->where('noform_1c', 'LIKE', "%$noPermohonan1C%");
        })
        ->when($noForm2C, function ($query) use ($noForm2C) {
            $query->where('noform_2c', 'LIKE', "%$noForm2C%");
        })
        ->when($noForm3C, function ($query) use ($noForm3C) {
            $query->where('nonota3c', 'LIKE', "%$noForm3C%");
        })
        ->orderBy("pbau_alat_1c_id", "desc")
        ->paginate(10);

        return view('app/penyewaan-alat.nota-3c', compact('data', 'noPermohonan1C', 'noForm2C', 'noForm3C'));
    }

    public function createNota3c(Request $request, $user, $id)
    {
        $data       = PbauAlat::find($id);
        $dataDetail = PbauAlatDetail::where("pbau_alat_1c_id", $id)->get();

        $summary    = [
            "sum_istirahat"  => 0,
            "sum_penambahan" => 0,
            "sum_total_jam"  => 0,
            "sum_biaya_alat" => 0,
            "tgl_cetak"      => date("Y-m-d H:i:s"),
        ];

        foreach ($dataDetail as $dataDetails) {
            $totalJamIstirahat        = $this->countSurpasses01($dataDetails->tgl_mulai_mohon, $dataDetails->tgl_selesai_mohon);
            $summary["sum_istirahat"] += $totalJamIstirahat;
            $totalJam                 = $this->countHoursBetweenDates($dataDetails->tgl_mulai_mohon, $dataDetails->tgl_selesai_mohon);
            //$dataDetails->waktu_pakai = $this->convertHoursToHIFormat($totalJam - $totalJamIstirahat);
            $dataDetails->waktu_pakai = $totalJam;
            $summary["sum_total_jam"] += $totalJam;

            $penambahan               = $this->hitungSelisihWaktu($dataDetails->tgl_mulai_mohon,  $dataDetails->tgl_mulai_realisasi, $dataDetails->tgl_selesai_mohon, $dataDetails->tgl_selesai_realisasi);
            $summary["sum_penambahan"] += $penambahan;
            
            $checkAlat         = Alat::find($dataDetails->alat_id);
            if(!empty($checkAlat)){
                $dataDetails->tarif_alat = $checkAlat->tarif_alat;
                $dataDetails->harga_sewa = $dataDetails->tarif_alat * $dataDetails->jumlah_alat;
                $summary["sum_biaya_alat"] += $dataDetails->harga_sewa;
            }
        }

        $summary["ppn10"]       = $this->calculatePPN($summary["sum_biaya_alat"]);
        $summary["total_biaya"] = $summary["ppn10"] + $summary["sum_biaya_alat"];
        
        //format currency
        $summary["sum_biaya_alat"] = $this->formatCurrency($summary["sum_biaya_alat"]);
        $summary["ppn10"]          = $this->formatCurrency($summary["ppn10"]);
        $summary["total_biaya"]    = $this->formatCurrency($summary["total_biaya"]);


        return view('app/penyewaan-alat.create-nota-3c', compact('data', 'dataDetail', 'summary'));
    }

    public function submitNota3c(Request $request)
    {
        $allParams = $request->input();

        try {

            $arrPbauAlat = [
                "nonota3c"       => $allParams["nota3c"],
                "tgl_nota3c"   => $allParams["tglCetakNota3c"],
            ];

            $pbauAlat = PbauAlat::findOrFail($allParams["id"]);
            $pbauAlat->update($arrPbauAlat);

            return response()->json(['message' => 'Form updated successfully'], 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['message' => 'Record not found', 'error' => $e->getMessage()], 404);
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json(['message' => 'Failed to update record', 'error' => $e->getMessage()], 500);
        }
    }

    function countSurpasses01($tanggalAwal, $tanggalAkhir) {
        $waktuAwal = Carbon::parse($tanggalAwal);
        $waktuAkhir = Carbon::parse($tanggalAkhir);

        // Inisialisasi hitung jam
        $hitungJam = 0;

        // Loop setiap satu jam dalam rentang waktu
        while ($waktuAwal->lessThanOrEqualTo($waktuAkhir)) {
            // Periksa apakah saat ini berada dalam salah satu jam yang ditentukan
            if (
                ($waktuAwal->hour >= 0 && $waktuAwal->hour < 1) ||
                ($waktuAwal->hour >= 6 && $waktuAwal->hour < 7) ||
                ($waktuAwal->hour >= 12 && $waktuAwal->hour < 13) ||
                ($waktuAwal->hour >= 18 && $waktuAwal->hour < 19)
            ) {
                $hitungJam++;
            }

            // Tambah satu jam ke waktu awal
            $waktuAwal->addHour();
        }

        return $hitungJam;
    }

    function countHoursBetweenDates($startDateTime, $endDateTime) {
        // Convert string dates to Carbon objects
        $start = Carbon::parse($startDateTime);
        $end = Carbon::parse($endDateTime);
    
        // Calculate the difference in hours
        $hoursDifference = $start->diffInHours($end);
    
        return $hoursDifference;
    }

    function convertHoursToHIFormat($hours) {
        // Calculate the number of full hours and minutes
        $fullHours = floor($hours);
        $remainingMinutes = round(($hours - $fullHours) * 60);

        // Format the result as h:i
        $formattedTime = sprintf("%02d:%02d", $fullHours, $remainingMinutes);
        return $formattedTime;
    }

    function hitungSelisihWaktu($waktuMulaiMohon, $waktuMulaiBukti, $waktuSelesaiMohon, $waktuSelesaiBukti)
    {
        // Mengubah string waktu menjadi objek Carbon
        $carbonMulaiMohon = Carbon::parse($waktuMulaiMohon);
        $carbonMulaiBukti = Carbon::parse($waktuMulaiBukti);
        $carbonSelesaiMohon = Carbon::parse($waktuSelesaiMohon);
        $carbonSelesaiBukti = Carbon::parse($waktuSelesaiBukti);

        // Menghitung selisih waktu mulai dalam menit
        $selisihMulaiMenit = $carbonMulaiBukti->diffInMinutes($carbonMulaiMohon);

        // Menghitung selisih waktu selesai dalam menit
        $selisihSelesaiMenit = $carbonSelesaiMohon->diffInMinutes($carbonSelesaiBukti);

        // Jumlahkan kedua selisih waktu dalam menit
        $totalMenit = $selisihMulaiMenit + $selisihSelesaiMenit;

        // Konversi total menit ke dalam jam dan menit
        $totalJam = floor($totalMenit / 60);
        $totalMenitSisa = $totalMenit % 60;

        return $totalJam;

    }

    function calculatePPN($amount)
    {
        $ppnPercentage = 10;
        $ppn = ($ppnPercentage / 100) * $amount;

        return $ppn;
    }

    function formatCurrency($amount)
    {
        $formattedAmount = "Rp. " . number_format($amount, 0, ',', '.');

        return $formattedAmount;
    }

    //sub menu 4
    public function indexNota4c(Request $request)
    {
        $noPermohonan1C = $request->input('no_permohonan_1c');
        $noForm2C = $request->input('no_form_2c');
        $noForm3C = $request->input('no_form_3c');

        $data = PbauAlat::when($noPermohonan1C, function ($query) use ($noPermohonan1C) {
            $query->where('noform_1c', 'LIKE', "%$noPermohonan1C%");
        })
        ->when($noForm2C, function ($query) use ($noForm2C) {
            $query->where('noform_2c', 'LIKE', "%$noForm2C%");
        })
        ->when($noForm3C, function ($query) use ($noForm3C) {
            $query->where('nonota3c', 'LIKE', "%$noForm3C%");
        })
        ->orderBy("pbau_alat_1c_id", "desc")
        ->paginate(10);

        return view('app/penyewaan-alat.nota-4c', compact('data', 'noPermohonan1C', 'noForm2C', 'noForm3C'));
    }

    public function createNota4C(Request $request, $user, $id)
    {
        $data = PbauAlat::find($id);
        $dataDetail = PbauAlatDetail::where("pbau_alat_1c_id", $id)->get();

        $summary    = [
            "sum_istirahat"  => 0,
            "sum_penambahan" => 0,
            "sum_total_jam"  => 0,
            "sum_biaya_alat" => 0,
            "tgl_cetak"      => date("Y-m-d H:i:s"),
        ];

        foreach ($dataDetail as $dataDetails) {
            $totalJamIstirahat        = $this->countSurpasses01($dataDetails->tgl_mulai_mohon, $dataDetails->tgl_selesai_mohon);
            $summary["sum_istirahat"] += $totalJamIstirahat;
            $totalJam                 = $this->countHoursBetweenDates($dataDetails->tgl_mulai_mohon, $dataDetails->tgl_selesai_mohon);
            //$dataDetails->waktu_pakai = $this->convertHoursToHIFormat($totalJam - $totalJamIstirahat);
            $dataDetails->waktu_pakai = $totalJam;
            $summary["sum_total_jam"] += $totalJam;

            $penambahan               = $this->hitungSelisihWaktu($dataDetails->tgl_mulai_mohon,  $dataDetails->tgl_mulai_realisasi, $dataDetails->tgl_selesai_mohon, $dataDetails->tgl_selesai_realisasi);
            $summary["sum_penambahan"] += $penambahan;
            
            $checkAlat         = Alat::find($dataDetails->alat_id);
            if(!empty($checkAlat)){
                $dataDetails->tarif_alat = $checkAlat->tarif_alat;
                $dataDetails->harga_sewa = $dataDetails->tarif_alat * $dataDetails->jumlah_alat;
                $summary["sum_biaya_alat"] += $dataDetails->harga_sewa;
            }
        }

        $summary["ppn10"]       = $this->calculatePPN($summary["sum_biaya_alat"]);
        $summary["materai"]     = 5000;
        $summary["total_biaya"] = $summary["ppn10"] + $summary["sum_biaya_alat"] + $summary["materai"];
        
        //format currency
        $summary["sum_biaya_alat"] = $this->formatCurrency($summary["sum_biaya_alat"]);
        $summary["ppn10"]          = $this->formatCurrency($summary["ppn10"]);
        $summary["materai"]        = $this->formatCurrency($summary["materai"]);
        $summary["total_biaya"]    = $this->formatCurrency($summary["total_biaya"]);

        $companies = Perusahaan::where("perusahaan_id", $data->perusahaan_id)->first();
        $ships     = Kapal::where("kapal_id", $data->kapal_id)->first();

        return view('app/penyewaan-alat.create-nota-4c', compact('data', 'dataDetail', 'summary', 'companies', 'ships'));
    }

    public function submitNota4c(Request $request)
    {
        $allParams = $request->input();

        try {

            $arrPbauAlat = [
                "nonota4c"       => $allParams["nota4c"],
                "tgl_nota4c"   => date("Y-m-d H:i:s"),
            ];

            $pbauAlat = PbauAlat::findOrFail($allParams["id"]);
            $pbauAlat->update($arrPbauAlat);

            return response()->json(['message' => 'Form updated successfully'], 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['message' => 'Record not found', 'error' => $e->getMessage()], 404);
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json(['message' => 'Failed to update record', 'error' => $e->getMessage()], 500);
        }
    }

    public function generateInvoice(Request $request, $user, $id)
    {
        $data = PbauAlat::find($id);
        $dataDetail = PbauAlatDetail::where("pbau_alat_1c_id", $id)->get();

        $summary    = [
            "sum_istirahat"  => 0,
            "sum_penambahan" => 0,
            "sum_total_jam"  => 0,
            "sum_biaya_alat" => 0,
            "tgl_cetak"      => date("Y-m-d H:i:s"),
        ];

        foreach ($dataDetail as $dataDetails) {
            $totalJamIstirahat        = $this->countSurpasses01($dataDetails->tgl_mulai_mohon, $dataDetails->tgl_selesai_mohon);
            $summary["sum_istirahat"] += $totalJamIstirahat;
            $totalJam                 = $this->countHoursBetweenDates($dataDetails->tgl_mulai_mohon, $dataDetails->tgl_selesai_mohon);
            //$dataDetails->waktu_pakai = $this->convertHoursToHIFormat($totalJam - $totalJamIstirahat);
            $dataDetails->waktu_pakai = $totalJam;
            $summary["sum_total_jam"] += $totalJam;

            $penambahan               = $this->hitungSelisihWaktu($dataDetails->tgl_mulai_mohon,  $dataDetails->tgl_mulai_realisasi, $dataDetails->tgl_selesai_mohon, $dataDetails->tgl_selesai_realisasi);
            $summary["sum_penambahan"] += $penambahan;
            
            $checkAlat         = Alat::find($dataDetails->alat_id);
            if(!empty($checkAlat)){
                $dataDetails->tarif_alat = $checkAlat->tarif_alat;
                $dataDetails->harga_sewa = $dataDetails->tarif_alat * $dataDetails->jumlah_alat;
                $summary["sum_biaya_alat"] += $dataDetails->harga_sewa;
            }
        }

        $summary["ppn10"]       = $this->calculatePPN($summary["sum_biaya_alat"]);
        $summary["materai"]     = 5000;
        $summary["total_biaya"] = $summary["ppn10"] + $summary["sum_biaya_alat"] + $summary["materai"];
        
        //format currency
        $summary["sum_biaya_alat"] = $this->formatCurrency($summary["sum_biaya_alat"]);
        $summary["ppn10"]          = $this->formatCurrency($summary["ppn10"]);
        $summary["materai"]        = $this->formatCurrency($summary["materai"]);
        $summary["total_biaya"]    = $this->formatCurrency($summary["total_biaya"]);

        $companies = Perusahaan::where("perusahaan_id", $data->perusahaan_id)->first();
        $ships     = Kapal::where("kapal_id", $data->kapal_id)->first();

        $html = view('app/penyewaan-alat.print-nota-4c', compact('data', 'dataDetail', 'summary', 'companies', 'ships'))->render();
        
        return $html; 
    }
    
}
