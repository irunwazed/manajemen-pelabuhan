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
        'header_peb_id' => 1,
        'no_pengajuan' => $request->no_pengajuan,
        'kantor_pabean_muat_asal' => $request->pabeanasal,
        'jenis_ekspor' => $request->pabeanasal,
        'kategori_ekspor'=> $request->pabeanasal,
        'cara_dagang'=> $request->pabeanasal,
        'cara_bayar'=> $request->pabeanasal,
        'jenis_komoditi'=> $request->pabeanasal,
        'jenis_curah'=> $request->pabeanasal,
        'kantor_pabean_muat_asal'=> $request->pabeanasal,
        'pelabuhan_muat_ekspor'=> $request->pabeanasal,
      ]);
      return redirect('admin/eksport-import/header-ex');
  }

  public function saveEntitas(Request $request){
      // insert data ke table
      DB::table('t_entitas_peb')->insert([
        'entitas_peb_id' => 1,
        'header_peb_id' => $request->npwp,
        'nama_eksportir' => $request->nama,
        'alamat_eksportir' => $request->alamat,
        'npwp_eksportir' => $request->npwp,
        'npwp_pembeli' => $request->npwp,
        'negara_pembeli' => $request->alamat,
        'alamat_pembeli' => $request->npwp,
        'npwp_penerima' => $request->npwp,
        'negara_penerima' => $request->nama,
        'alamat_penerima' => 1,
      ]);
      return redirect('admin/eksport-import/entitas-ex');
  }

  public function savePemilikBarang(Request $request){
      // insert data ke table
      DB::table('t_entitas_peb_pemilik_barang')->insert([
        'entitas_peb_pemilik_barang_id' => 1,
        'entitas_peb_id' => $request->npwp,
        'no_identitas' => $request->nama,
        'alamat' => $request->alamat,
        'nama' => $request->alamat,
      ]);
      return redirect('admin/eksport-import/entitas-ex');
  }

  public function saveDokumenPendukung(Request $request){
      // insert data ke table
      DB::table('t_dokument_pendukung_peb')->insert([
        'dokumen_pendukung_peb_id' => 1,
        'header_peb_id' => $request->npwp,
        'no_seri' => $request->nama,
        'jenis_dokumen' => $request->alamat,
        'izin' => $request->npwp,
        'nomor_dokumen' => $request->nama,
        'tgl_dokumen' => $request->alamat,
        'nama_file' => $request->alamat,
      ]);
      return redirect('admin/eksport-import/dokumen-pendukung-ex');
  }

  public function saveDataPengangkut(Request $request){
      // insert data ke table
      DB::table('t_pengangkutan_peb')->insert([
        'pengangkutan_peb_id' => 1,
        'tempat_penimbunan' => $request->npwp,
        'pelabuhan_muat_asal_id' => $request->nama,
        'pelabuhan_muat_asal' => $request->alamat,
        'pelabuhan_muat_ekspor_id'
        'pelabuhan_muat_ekspor'
        'pelabuhan_muat_bongkar'
        'negara_tujuan_ekspor'
        'pelabuhan_muat_tujuan'
        'tanggal_perkiraan_ekspor'
        'lokasi_pemeriksaan'
        'tgl_pemeriksaan'
        'kantor_pemeriksa'
      ]);
      return redirect('admin/eksport-import/pengangkutan-ex');
  }

  public function saveSaranaAngkut(Request $request){
      // insert data ke table
      DB::table('t_pengangkutan_peb_sarana')->insert([
        'pengangkutan_peb_sarana_id' => 1,
        'pengangkutan_peb_id' => $request->npwp,
        'no_seri' => $request->nama,
        'no_pengangkut' => $request->alamat,
        'nama_pengangkut' => $request->alamat,
        'bendera' => $request->alamat,
      ]);
      return redirect('admin/eksport-import/pengangkutan-ex');
  }

  public function saveKemasan(Request $request){
      // insert data ke table
      DB::table('t_kemasan_peb')->insert([
        'kemasan_peb_id' => 1,
        'header_peb_id' => $request->npwp,
        'seri_kemasan' => $request->nama,
        'jumlah_kemasan' => $request->alamat,
        'jenis_kemasan' => $request->alamat,
        'merk_kemasan' => $request->alamat,
      ]);
      return redirect('admin/eksport-import/kemasan-ex');
  }

  public function saveKontainer(Request $request){
       // insert data ke table
       DB::table('t_kontainer_peb')->insert([
        'kontainer_peb_id' => 1,
        'header_peb_id' => $request->npwp,
        'seri_kontainer' => $request->nama,
        'no_kontainer' => $request->alamat,
        'ukuran_kontainer' => $request->alamat,
        'type_kontainer' => $request->alamat,
      ]);
      return redirect('admin/eksport-import/kontainer-ex');
  }

  public function saveTransaksi(Request $request){
      // insert data ke table
      DB::table('t_data_transaksi_peb')->insert([
      'data_transaksi_peb_id' => 1,
      'header_peb_id' => $request->npwp,
      'valuta' => $request->nama,
      'ndpbm' => $request->alamat,
      'cara_pembayaran_id' => 1,
      'cara_pembayaran' => $request->npwp,
      'nilai_ekspor' => $request->nama,
      'freight' => $request->alamat,
      'asuransi'
      'nilai_maklan'
      'nilai_bea_keluar'
      'ppn'
      'berat_kotor'
      'berat_bersih'
    ]);
    return redirect('admin/eksport-import/transaksi-ex');
  }

  public function saveDevisa(Request $request){
     // insert data ke table
     DB::table('t_data_transaksi_peb_bank_devisa')->insert([
      'data_transaksi_peb_bank_devisa_id' => 1,
      'data_transaksi_peb_id' => $request->npwp,
      'no_seri' => $request->nama,
      'kode_bank' => $request->alamat,
      'nama_bank'
    ]);
    return redirect('admin/eksport-import/transaksi-ex');
  }

  public function saveDataBarang(Request $request){
     // insert data ke table
     DB::table('t_data_barang_peb')->insert([
      'data_barang_peb_id' => 1,
      'header_peb_id' => $request->npwp,
      'no_seri' => $request->nama,
      'hs_code' => $request->alamat,
      'lartas'
      'kode'
      'uraian'
      'merk'
      'type'
      'ukuran'
      'negara_asal_barang'
      'daerah_asal_barang'
      'satuan_id'
      'satuan'
      'kemasan_id'
      'kemasan'
      'harga_fob'
      'volume'
      'berat_bersih'
      'harga_satuan_fob'
    ]);
    return redirect('admin/eksport-import/data-barang-ex');

  public function saveLartas(Request $request){
    // insert data ke table
    DB::table('t_data_barang_peb_dok_fasilitas_lartas')->insert([
      'data_barang_peb_dok_fasilitas_lartas_id' => 1,
      'data_barang_peb_id' => $request->npwp,
      'no_seri' => $request->nama,
      'jenis' => $request->alamat,
      'nomor'
      'tanggal_dok'
      'fasilitas'
      'izin'
      'nama_file'
    ]);
    return redirect('admin/eksport-import/data-barang-ex');
  }

  public function savePernyataan(Request $request){
      // insert data ke table
      DB::table('t_pernyataan_peb')->insert([
        'pernyataan_peb_id' => 1,
        'header_peb_id' => $request->npwp,
        'tempat' => $request->nama,
        'tanggal' => $request->alamat,
        'nama' => $request->alamat,
        'jabatan' => $request->alamat,
      ]);
      return redirect('admin/eksport-import/pernyataan-ex');
  }

}
