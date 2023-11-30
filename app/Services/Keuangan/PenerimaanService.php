<?php

namespace App\Services\Keuangan;

use App\Models\Nota;
use App\Models\Perusahaan;
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
}
