<?php

namespace App\Services\Keuangan;

use App\Models\Jurnal;
use App\Models\Nota;
use App\Models\Perusahaan;
use App\Models\Rekening;
use App\Models\RekeningPiutangUsaha;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class PenerimaanService
{
    /**
     * @param $idPerusahaan perusahaan_id on table m_perusahaan
     * @param $rekeningId rekening_id on table m_kode_rekening. kode_rekening format should 103.xx.xx.xx (PIUTANG USAHA)
     * @param $jenis type of note, could be transaction type (4A, 4B, etc)
     * @param $tanggal
     * @param $jumlah note value, should be positif value
     * @param $keterangan
     * @return mixed
     */
    public function createNota($idPerusahaan, $rekeningId, $jenis, $tanggal, $jumlah, $keterangan)
    {
        $perusahaan = $this->getPerusahaan($idPerusahaan);

        $rekening = $this->getRekening($rekeningId);

        $kodeRekPendapatan = '700' . $jenis;
        $rekPendapatan = Rekening::find($kodeRekPendapatan);
        if ($rekPendapatan === null) {
            $rekPendapatan = Rekening::find('7004L');
        }

        try {
            DB::beginTransaction();
            $nota = $this->buatNota($perusahaan, $rekening, $jenis, $tanggal, $jumlah, $keterangan);
            $this->buatJurnal($rekening, $tanggal, $jumlah, $rekPendapatan);
            DB::commit();
            return $nota;
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
    }

    /**
     * @param $idPerusahaan
     * @return mixed
     */
    private function getPerusahaan($idPerusahaan)
    {
        $perusahaan = Perusahaan::find($idPerusahaan);
        if (!$perusahaan) {
            throw new ModelNotFoundException("Perusahaan tidak diketemukan");
        }
        return $perusahaan;
    }

    /**
     * @param $rekeningId
     * @return mixed
     */
    private function getRekening($rekeningId)
    {
        $rekening = RekeningPiutangUsaha::find($rekeningId);
        if (!$rekening) {
            throw new ModelNotFoundException("Rekening tidak diketemukan atau bukan rekening pitang usaha");
        }
        return $rekening;
    }

    /**
     * @param $perusahaan
     * @param $rekening
     * @param type $jenis
     * @param $tanggal
     * @param note $jumlah
     * @param $keterangan
     * @return mixed
     */
    public function buatNota($perusahaan, $rekening, $jenis, $tanggal, $jumlah, $keterangan)
    {
        return Nota::create([
            'perusahaan_id' => $perusahaan->perusahaan_id,
            'nama_perusahaan' => $perusahaan->nama_perusahaan,
            'rekening_id' => $rekening->rekening_id,
            'jenis' => $jenis,
            'tanggal' => $tanggal,
            'jumlah' => abs($jumlah),
            'terbayar' => 0,
            'keterangan' => $keterangan
        ]);
    }

    /**
     * @param $rekPiutangPendapatan
     * @param $tanggal
     * @param $jumlah
     * @param $rekPendapatan
     * @return void
     */
    public function buatJurnal($rekPiutangPendapatan, $tanggal, $jumlah, $rekPendapatan): void
    {
        $jurnals = [[
            'kode_rekening' => $rekPiutangPendapatan->kode_rekening,
            'tanggal' => $tanggal,
//            'ref_id' => '',
            'ref_type' => 'pedapatan',
            'jumlah' => $jumlah,
            'debit_kredit' => 'D'
        ], [
            'kode_rekening' => $rekPendapatan->kode_rekening,
            'tanggal' => $tanggal,
//            'ref_id' => '',
            'ref_type' => 'pedapatan',
            'jumlah' => $jumlah,
            'debit_kredit' => 'K'
        ]];
        Jurnal::insert($jurnals);
    }
}
