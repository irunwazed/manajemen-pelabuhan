<?php

namespace App\Http\Controllers\EksportImport;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class EksportController extends Controller
{

  public function saveHeader(Request $request)
  {
      //insert data ke table
      DB::table('t_header_peb')->insert([
        'no_pengajuan' => $request->pengajuan,
        'kantor_pabean_muat_asal' => $request->pabeanasal,
        'pelabuhan_muat_ekspor_id'=> $request->muatekspor,
        'jenis_ekspor_id'=> $request->jns_ekspor_id,
        'kategori_ekspor_id'=> $request->kategori_ekspor_id,
        'cara_dagang_id'=> $request->cara_dagang_id,
        'cara_bayar_id'=> $request->cara_bayar_id,
        'jenis_komoditi'=> $request->komoditi,
        'jenis_curah'=> $request->curah,
      ]);
      return redirect('admin/eksport-import/header-ex');
  }

  public function saveEntitas(Request $request){
      // insert data ke table
      DB::table('t_entitas_peb')->insert([
        'header_peb_id' => 1,
        'nama_eksportir' => $request->namaEks,
        'alamat_eksportir' => $request->alamatEks,
        'npwp_eksportir' => $request->npwpEks,
        'npwp_pembeli' => $request->namaPen,
        'negara_pembeli' => $request->negaraPen,
        'alamat_pembeli' => $request->alamatPen,
        'npwp_penerima' => $request->namaPem,
        'negara_penerima' => $request->namaNeg,
        'alamat_penerima' => $request->alamatNeg,
      ]);
      return redirect('admin/eksport-import/entitas-ex');
  }

  public function savePemilikBarang(Request $request){
      // insert data ke table
      DB::table('t_entitas_peb_pemilik_barang')->insert([
        'entitas_peb_id' => $request->entitas_peb_id,
        'no_identitas' => $request->no_identitas,
        'alamat' => $request->alamat,
        'nama' => $request->nama,
      ]);
      return redirect('admin/eksport-import/entitas-ex');
  }

  public function saveDokumenPendukung(Request $request){
      // insert data ke table
      DB::table('t_dokument_pendukung_peb')->insert([
        'header_peb_id' => $request->header_peb_id,
        'no_seri' => $request->no_seri,
        'jenis_dokumen' => $request->jenis_dokumen,
        'izin' => $request->izin,
        'nomor_dokumen' => $request->nomor_dokumen,
        'tgl_dokumen' => $request->tgl_dokumen,
        'nama_file' => $request->nama_file,
      ]);
      return redirect('admin/eksport-import/dokumen-pendukung-ex');
  }

  public function saveDataPengangkut(Request $request){
      // insert data ke table
      DB::table('t_pengangkutan_peb')->insert([
        'pengangkutan_peb_id' => 1,
        'tempat_penimbunan' => $request->tempat_penimbunan,
        'pelabuhan_muat_asal_id' => $request->pelabuhan_muat_asal_id,
        'pelabuhan_muat_asal' => $request->pelabuhan_muat_asal,
        'pelabuhan_muat_ekspor_id'=> $request->pelabuhan_muat_ekspor_id,
        'pelabuhan_muat_bongkar'=> $request->pelabuhan_muat_bongkar,
        'negara_tujuan_ekspor'=> $request->negara_tujuan_ekspor,
        //'pelabuhan_muat_tujuan'=> $request->alamat,
        'tanggal_perkiraan_ekspor'=> $request->tanggal_perkiraan_ekspor,
        'lokasi_pemeriksaan'=> $request->lokasi_pemeriksaan,
        'tgl_pemeriksaan'=> $request->tgl_pemeriksaan,
        'kantor_pemeriksa'=> $request->kantor_pemeriksa,
      ]);
      return redirect('admin/eksport-import/pengangkutan-ex');
  }

  public function saveSaranaAngkut(Request $request){
      // insert data ke table
      DB::table('t_pengangkutan_peb_sarana')->insert([  
        'pengangkutan_peb_id' => $request->pengangkutan_peb_id,
        'no_seri' => $request->no_seri,
        'no_pengangkut' => $request->no_pengangkut,
        'nama_pengangkut' => $request->nama_pengangkut,
        'bendera' => $request->bendera,
      ]);
      return redirect('admin/eksport-import/pengangkutan-ex');
  }

  public function saveKemasan(Request $request){
      // insert data ke table
      DB::table('t_kemasan_peb')->insert([
        //'header_peb_id' => $request->header_peb_id,
        'seri_kemasan' => $request->seri_kemasan,
        'jumlah_kemasan' => $request->jumlah_kemasan,
        'jenis_kemasan' => $request->jenis_kemasan,
        'merk_kemasan' => $request->merk_kemasan,
      ]);
      return redirect('admin/eksport-import/kemasan-kontainer-ex');
  }

  public function saveKontainer(Request $request){
       // insert data ke table
       DB::table('t_kontainer_peb')->insert([
        //'header_peb_id' => $request->npwp,
        'seri_kontainer' => $request->seri_kontainer,
        'no_kontainer' => $request->no_kontainer,
        'ukuran_kontainer' => $request->ukuran_kontainer,
        'type_kontainer' => $request->type_kontainer,
      ]);
      return redirect('admin/eksport-import/kemasan-kontainer-ex');
  }

  public function saveTransaksi(Request $request){
      // insert data ke table
      DB::table('t_data_transaksi_peb')->insert([
      //'data_transaksi_peb_id' => 1,
      //'header_peb_id' => $request->npwp,
      'valuta' => $request->valuta,
      'ndpbm' => $request->ndpbm,
      'cara_pembayaran_id' => $request->cara_pembayaran_id,
      //'cara_pembayaran' => $request->cara_pembayaran,
      'nilai_ekspor' => $request->nilai_ekspor,
      'freight' => $request->freight,
      'asuransi' => $request->asuransi,
      'nilai_maklan' => $request->nilai_maklan,
      'nilai_bea_keluar'=> $request->nilai_bea_keluar,
      'ppn' => $request->ppn,
      'berat_kotor' => $request->berat_kotor,
      'berat_bersih'=> $request->berat_bersih,
    ]);
    return redirect('admin/eksport-import/transaksi-ex');
  }

  public function saveDevisa(Request $request){
     // insert data ke table
     DB::table('t_data_transaksi_peb_bank_devisa')->insert([
      //'data_transaksi_peb_bank_devisa_id' => 1,
      //'data_transaksi_peb_id' => $request->npwp,
      'no_seri' => $request->seri,
      'kode_bank' => $request->kode_bank,
      'nama_bank' => $request->nama_bank,
    ]);
    return redirect('admin/eksport-import/transaksi-ex');
  }

  public function saveDataBarang(Request $request){
     // insert data ke table
     DB::table('t_data_barang_peb')->insert([
      //'data_barang_peb_id' => 1,
      'header_peb_id' => $request->header_peb_id,
      'no_seri' => $request->no_seri,
      'hs_code' => $request->hs_code,
      'lartas' => $request->lartas,
      'kode'  => $request->kode,
      'uraian'  => $request->uraian,
      'merk'  => $request->merk,
      'type'  => $request->type,
      'ukuran'  => $request->ukuran,
      'negara_asal_barang' => $request->negara_asal_barang,
      'daerah_asal_barang' => $request->daerah_asal_barang,
      //'satuan_id'  => $request->satuan_id,
      'satuan' => $request->satuan,
      'kemasan_id'  => $request->kemasan_id,
      'kemasan'  => $request->kemasan,
      'harga_fob' => $request->harga_fob,
      'volume' => $request->volume,
      'berat_bersih'  => $request->berat_bersih,
      'harga_satuan_fob'  => $request->harga_satuan_fob,
    ]);
    return redirect('admin/eksport-import/data-barang-ex');
  
  }


  public function saveLartas(Request $request){
    // insert data ke table
    DB::table('t_data_barang_peb_dok_fasilitas_lartas')->insert([
      //'data_barang_peb_dok_fasilitas_lartas_id' => 1,
      'data_barang_peb_id' => $request->data_barang_peb_id,
      'no_seri' => $request->no_seri,
      'jenis' => $request->jenis,
      'nomor' => $request->nomor,
      'tanggal_dok' => $request->tanggal_dok,
      'fasilitas' => $request->fasilitas,
      'izin'=> $request->izin,
      'nama_file'=> $request->nama_file,
    ]);
    return redirect('admin/eksport-import/data-barang-ex');
  }

  public function savePernyataan(Request $request){
      // insert data ke table
      DB::table('t_pernyataan_peb')->insert([
        //'pernyataan_peb_id' => 1,
        'header_peb_id' => $request->header_peb_id,
        'tempat' => $request->tempat,
        'tanggal' => $request->tanggal,
        'nama' => $request->nama,
        'jabatan' => $request->jabatan,
      ]);
      return redirect('admin/eksport-import/pernyataan-ex');
  }

}
