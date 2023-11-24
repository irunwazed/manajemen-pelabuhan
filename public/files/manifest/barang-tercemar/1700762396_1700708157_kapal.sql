-- Adminer 4.8.1 MySQL 8.0.35-0ubuntu0.20.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `level` tinyint NOT NULL COMMENT '1. Admin\r\n2. agen-kapal\r\n3. petugas-lala\r\n4. pbm\r\n5. bup\r\n6. syahbandar\r\n7. Pelindo-kapal\r\n8. Pelindo-pbau\r\n9. Pelindo-keuangan',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `m_alat`;
CREATE TABLE `m_alat` (
  `alat_id` int NOT NULL,
  `kode_alat` varchar(20) DEFAULT NULL,
  `nama_alat` varchar(200) DEFAULT NULL,
  `keterangan` tinytext,
  `min_pemakaian` decimal(10,0) DEFAULT NULL,
  `kapasitas1` decimal(10,0) DEFAULT NULL,
  `kapasitas2` decimal(10,0) DEFAULT NULL,
  `satuan_kapasitas` varchar(10) DEFAULT NULL,
  `tarif_alat` decimal(10,0) DEFAULT NULL,
  `satuan_tarif` varchar(10) DEFAULT NULL,
  `rekening` varchar(50) DEFAULT NULL,
  `jumlah_unit` int DEFAULT NULL,
  `flag` char(1) DEFAULT NULL,
  PRIMARY KEY (`alat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_alat` (`alat_id`, `kode_alat`, `nama_alat`, `keterangan`, `min_pemakaian`, `kapasitas1`, `kapasitas2`, `satuan_kapasitas`, `tarif_alat`, `satuan_tarif`, `rekening`, `jumlah_unit`, `flag`) VALUES
(1,	'00001',	'CRANE DARAT 30.0',	NULL,	1,	1,	35,	'TON',	250000,	'JAM',	'703.01.03.01',	2,	'Y'),
(2,	'00002',	'CRANE DARAT 15.0',	NULL,	1,	1,	15,	'TON',	55000,	'JAM',	'703.01.05.01',	3,	'Y'),
(3,	'00003',	'FORKLIFT (03.02)',	NULL,	1,	1,	3,	'TON',	30000,	'JAM',	'703.03.03.01',	5,	'Y'),
(4,	'00004',	'TRONTON',	NULL,	1,	1,	10,	'TON',	75000,	'JAM',	'703.11.00.00',	6,	'Y'),
(5,	'00005',	'TONGKANG BARANG/AIR',	NULL,	1,	1,	100,	'TON',	115000,	'JAM',	'703.06.00.00',	2,	'Y'),
(6,	'00006',	'PEMADAM KEBAKARAN',	NULL,	2,	1,	4,	'JAM',	40000,	'JAM',	'703.10.00.00',	10,	'Y');

DROP TABLE IF EXISTS `m_au_lahan_bangunan`;
CREATE TABLE `m_au_lahan_bangunan` (
  `au_lahan_bangunan_id` int NOT NULL,
  `nama_lahan_bangunan` varchar(200) DEFAULT NULL,
  `jenis_properti` varchar(20) DEFAULT NULL COMMENT 'TANAH,BANGUNAN,DERMAGA',
  `kode_rekening` varchar(50) DEFAULT NULL,
  `trf_permeter` decimal(10,0) DEFAULT NULL,
  `flag` char(1) DEFAULT NULL,
  PRIMARY KEY (`au_lahan_bangunan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_au_lahan_bangunan` (`au_lahan_bangunan_id`, `nama_lahan_bangunan`, `jenis_properti`, `kode_rekening`, `trf_permeter`, `flag`) VALUES
(0,	'GUDANG PENUMPUKAN 103',	'BANGUNAN',	'702.02.01.03',	NULL,	NULL),
(1,	'GUDANG PENUMPUKAN 101',	'BANGUNAN',	'702.02.01.01',	30000,	'Y'),
(2,	'GUDANG PENUMPUKAN 102',	'BANGUNAN',	'702.02.01.02',	30000,	'Y'),
(4,	'LAPANGAN CARGO',	'TANAH',	'702.02.02.01',	15000,	'Y'),
(5,	'LAPANGAN KONTAINER',	'TANAH',	'702.02.02.02',	15000,	'Y'),
(6,	'TERMINAL PENUMPANG',	'BANGUNAN',	'706.02.00.00',	30000,	'Y'),
(7,	'GUDANG LINI II',	'BANGUNAN',	'702.02.01.04',	30000,	'Y'),
(8,	'DERMAGA',	'DERMAGA',	'702.02.00.00',	15000,	'Y');

DROP TABLE IF EXISTS `m_cara_bayar`;
CREATE TABLE `m_cara_bayar` (
  `cara_bayar_id` decimal(10,0) NOT NULL,
  `cara_bayar` varchar(100) DEFAULT NULL,
  `flag` char(1) DEFAULT 'Y',
  PRIMARY KEY (`cara_bayar_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_cara_bayar` (`cara_bayar_id`, `cara_bayar`, `flag`) VALUES
(1,	'Tunai',	'Y'),
(2,	'Open Account Secara Bertahap',	'Y'),
(3,	'Open Account Secara Tunai',	'Y'),
(4,	'Advance Payment(Pembayaran Dimuka)',	'Y'),
(5,	'Dilakukan Tanpa Pembayaran',	'Y'),
(6,	'Consignment',	'Y'),
(7,	'Letter of Credit',	'Y');

DROP TABLE IF EXISTS `m_cara_dagang`;
CREATE TABLE `m_cara_dagang` (
  `cara_dagang_id` decimal(10,0) NOT NULL,
  `cara_dagang` varchar(100) DEFAULT NULL,
  `flag` char(1) DEFAULT 'Y',
  PRIMARY KEY (`cara_dagang_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_cara_dagang` (`cara_dagang_id`, `cara_dagang`, `flag`) VALUES
(1,	'Biasa',	'Y'),
(2,	'Lainnya',	'Y'),
(3,	'Imbal Dagang',	'Y');

DROP TABLE IF EXISTS `m_cara_penyerahan`;
CREATE TABLE `m_cara_penyerahan` (
  `cara_penyerahan_id` decimal(10,0) NOT NULL,
  `cara_penyerahan` varchar(100) DEFAULT NULL,
  `flag` char(1) DEFAULT 'Y',
  PRIMARY KEY (`cara_penyerahan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_cara_penyerahan` (`cara_penyerahan_id`, `cara_penyerahan`, `flag`) VALUES
(1,	'CFR- Cost and Freight',	'Y'),
(2,	'CIF- Cost Inssurance and Freight',	'Y'),
(3,	'CIP- Carriage and Inssurance Paid To',	'Y'),
(4,	'CPT- Carriage Paid To',	'Y'),
(5,	'DAP- Delivered at Place',	'Y'),
(6,	'DAT- Deeliver at Terminal',	'Y'),
(7,	'DDP-Delivered Duty Paid',	'Y'),
(8,	'EXW-Ex Works',	'Y');

DROP TABLE IF EXISTS `m_hs_code`;
CREATE TABLE `m_hs_code` (
  `hs_code_id` int NOT NULL AUTO_INCREMENT,
  `hs_code` varchar(20) DEFAULT NULL,
  `uraian_barang` tinytext,
  `lartas` char(1) DEFAULT 'N',
  PRIMARY KEY (`hs_code_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_hs_code` (`hs_code_id`, `hs_code`, `uraian_barang`, `lartas`) VALUES
(1,	'0201',	'Daging binatang jenis lembu, segar atau dingin.',	'N'),
(2,	'02012000',	'Potongan daging lainnya, bertulang',	'Y'),
(3,	'06021020',	'Kayu karet',	'Y'),
(4,	'0906',	'Kayu manis dan bunga kayu manis.',	'N'),
(5,	'44124110',	'Kayu Jati Dengan paling tidak satu lapisan luar dari jati',	'Y'),
(6,	'0901',	'Kopi, digongseng atau dihilangkan kafeinnya maupun tidak; sekam dan kulit kopi; pengganti kopi mengandung kopi dengan perbandingan berapapun.',	'N'),
(7,	'09019010',	'Sekam dan kulit kopi',	'Y'),
(8,	'2101',	'Ekstrak, esens dan konsentrat, dari kopi, teh atau mate dan olahan dengan dasar produk ini atau dengan dasar kopi, teh atau mate; chicory digongseng dan pengganti kopi yang digongseng lainnya, dan ekstrak, esens dan konsentratnya.',	'Y'),
(9,	'210112',	' Olahan dengan dasar ekstrak, esens atau konsentrat atau olahan dengan dasar kopi',	'N'),
(10,	'21011210',	'Campuran dalam bentuk pasta dengan bahan kopi gongseng ditumbuk, mengandung lemak sayuran',	'N'),
(11,	'84378030',	'Penggiling kopi dan jagung tipe industri, dioperasikan secara elektrik',	'N'),
(12,	'01061220',	'Anjing laut, singa laut dan beruang laut (mamalia dari sub ordo Pinnipedia)',	'N'),
(13,	'9404',	'Alas kasur; barang keperluan tidur dan perabotan semacam itu (misalnya, kasur, selimut tebal, eiderdown, bantalan kursi, pouffe dan bantal) dilengkapi dengan pegas atau diisi atau dilengkapi bagian dalamnya dengan berbagai bahan atau dengan karet atau pla',	'N'),
(14,	'9022',	'Aparatus yang didasarkan atas penggunaan sinar X atau radiasi sinar alfa, beta, gamma atau pengion lainnya untuk keperluan medis, pembedahan, perawatan gigi atau kedokteran hewan, maupun tidak, termasuk aparatus radiografi atau radioterapi, tabung sinar X',	'N'),
(15,	'12099920',	'Biji karet',	'Y'),
(16,	'06021020',	'Kayu karet',	'N'),
(17,	'392620',	'Pakaian dan aksesori pakaian (termasuk sarung tangan, mitten dan mitt)',	'N'),
(18,	'4202',	'Peti, koper, vanity-case, tas eksekutif, tas kantor, tas sekolah, dompet kacamata, tas teropong, tas kamera, tas peralatan musik, koper senjata, sarung pistol dan kemasan semacam itu; tas untuk bepergian, tas makanan dan minuman bersekat, tas rias, ransel',	'N'),
(19,	'03011110',	'Benih ikan',	'Y'),
(20,	'03011192',	'Ikan mas koki (Carassius auratus)',	'Y'),
(21,	'03011193',	' Ikan cupang aduan (Beta splendens)',	'Y'),
(22,	'030193',	'Ikan mas (Cyprinus spp., Carassius spp., Ctenopharyngodon idellus, Hypophthalmichthys spp., Cirrhinus spp., Mylopharyngodon piceus, Catla catla, Labeo spp., Osteochilus hasselti, Leptobarbus hoeveni, Megalobrama spp.) ',	'N'),
(23,	'0302',	'Ikan, segar atau dingin, tidak termasuk potongan ikan tanpa tulang dan daging ikan lainnya dari pos 03.04.',	'N'),
(24,	'03019400',	'Tuna sirip biru Atlantik dan Pasifik (Thunnus thynnus, Thunnus orientalis)',	'Y'),
(25,	'03019500',	'Tuna (dari genus Thunnus), cakalang (stripe-bellied bonito) (Katsuwonus pelamis), tidak termasuk sisa ikan yang dapat dimakan dari subpos 0302.91 sampai dengan 0302.99',	'N'),
(26,	'03023200',	'Tuna sirip kuning (Thunnus albacares)',	'Y'),
(27,	'03023100',	'Albacore atau tuna sirip panjang (Thunnus alalunga)',	'Y'),
(28,	'95049095',	' Blok kayu atau akar dibentuk secara kasar untuk pembuatan pipa',	'N'),
(29,	'94035000',	'Perabotan kayu dari jenis yang digunakan di kamar tidur',	'N'),
(30,	'94034000',	'Perabotan kayu dari jenis yang digunakan di dapur',	'N'),
(31,	'95043050',	'Lain-lain, bagian dari kayu, kertas atau plastik',	'N'),
(32,	'95049034',	'Balok mahjong, dari kayu atau dari kertas atau dari plastik',	'N'),
(33,	'0505',	'Kulit dan bagian lainnya dari unggas, masih berbulu atau berbulu halus, bulu unggas dan bagiannya (pinggirannya dipangkas maupun tidak) dan bulu halus, tidak dikerjakan lebih lanjut selain dibersihkan, disucihamakan atau dikerjakan untuk pengawetan; bubuk',	'N'),
(34,	'02109920',	'Kulit babi dikeringkan',	'Y'),
(35,	'08140000',	'Kulit buah jeruk atau melon (termasuk semangka), segar, beku, dikeringkan atau diawetkan sementara dalam air garam, air belerang atau dalam larutan pengawet lainnya.',	'Y');

DROP TABLE IF EXISTS `m_jenis_ekspor`;
CREATE TABLE `m_jenis_ekspor` (
  `jenis_ekspor_id` decimal(10,0) NOT NULL,
  `jenis_ekspor` varchar(50) DEFAULT NULL,
  `flag` char(1) DEFAULT 'Y',
  PRIMARY KEY (`jenis_ekspor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_jenis_ekspor` (`jenis_ekspor_id`, `jenis_ekspor`, `flag`) VALUES
(1,	'Ekspor Biasa',	'Y'),
(2,	'Ekspor Berkala',	'Y'),
(3,	'Fasilitas',	'Y');

DROP TABLE IF EXISTS `m_jenis_impor`;
CREATE TABLE `m_jenis_impor` (
  `jenis_import_id` decimal(10,0) NOT NULL,
  `jenis_import` varchar(100) DEFAULT NULL,
  `flag` char(1) DEFAULT 'Y',
  PRIMARY KEY (`jenis_import_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_jenis_impor` (`jenis_import_id`, `jenis_import`, `flag`) VALUES
(1,	'untuk dipakai',	'Y'),
(2,	'Sementara',	'Y'),
(3,	'Rush Handling',	'Y'),
(4,	'Untuk dipakai sementara',	'Y');

DROP TABLE IF EXISTS `m_jenis_usaha`;
CREATE TABLE `m_jenis_usaha` (
  `jenis_usaha_id` int NOT NULL,
  `nama_usaha` varchar(100) DEFAULT NULL,
  `flag` char(1) DEFAULT NULL,
  PRIMARY KEY (`jenis_usaha_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `m_kapal`;
CREATE TABLE `m_kapal` (
  `kapal_id` decimal(10,0) NOT NULL,
  `kode_kapal` varchar(50) DEFAULT NULL,
  `nama_kapal` varchar(200) DEFAULT NULL,
  `imo` varchar(20) DEFAULT NULL,
  `call_sign` varchar(50) DEFAULT NULL,
  `bendera` decimal(10,0) NOT NULL,
  `perusahaan_pemilik_kapal` varchar(200) DEFAULT NULL,
  `penanggung_jawab` varchar(200) DEFAULT NULL,
  `alamat` tinytext,
  `siupal_pemilik` varchar(200) DEFAULT NULL,
  `keperluan` varchar(200) DEFAULT NULL,
  `mata_uang` decimal(10,0) NOT NULL,
  `keterangan` tinytext,
  `grt_kapal` decimal(10,0) NOT NULL,
  `loa_kapal` decimal(10,0) NOT NULL,
  `dwt_kapal` decimal(10,0) NOT NULL,
  `draft_muka` decimal(10,0) NOT NULL,
  `draft_belakang` decimal(10,0) NOT NULL,
  `jumlah_palka` decimal(10,0) NOT NULL,
  `tipe_kapal` decimal(10,0) NOT NULL,
  `jenis_kapal` decimal(10,0) NOT NULL,
  `jenis_pelayaran` decimal(10,0) NOT NULL,
  `flag` char(1) DEFAULT 'Y',
  `create_dated` date DEFAULT NULL,
  `update_dated` date DEFAULT NULL,
  `created_user` decimal(10,0) NOT NULL,
  `updated_user` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `m_kapal_tunda`;
CREATE TABLE `m_kapal_tunda` (
  `kapal_tunda_id` int NOT NULL,
  `nama_kapal_tunda` varchar(200) DEFAULT NULL,
  `jumlah_daya` decimal(10,0) DEFAULT NULL,
  `pemilik_kapal` varchar(100) DEFAULT NULL,
  `persen_pelindo` decimal(10,0) DEFAULT NULL,
  `hari_kesiapan` decimal(10,0) DEFAULT NULL,
  `kode_rekening` varchar(50) DEFAULT NULL,
  `flag` char(1) DEFAULT NULL,
  PRIMARY KEY (`kapal_tunda_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_kapal_tunda` (`kapal_tunda_id`, `nama_kapal_tunda`, `jumlah_daya`, `pemilik_kapal`, `persen_pelindo`, `hari_kesiapan`, `kode_rekening`, `flag`) VALUES
(1,	'ROYAL II TB',	2500,	'PELINDO',	100,	0,	'701.04.01.01',	'Y'),
(2,	'TOBATI.KT',	235,	'PELINDO',	100,	30,	'701.04.01.01',	'Y'),
(3,	'RAMA I TB',	2500,	'-',	20,	0,	'701.04.01.01',	'Y'),
(4,	'SINDOMAS TB',	2600,	'-',	20,	0,	'701.04.01.01',	'Y'),
(5,	'SEGARA TB',	1500,	'PELINDO',	100,	10,	'701.04.01.01',	'Y'),
(6,	'BAHARI PERDANA-X',	2500,	'PELINDO',	100,	10,	'701.04.01.01',	'Y'),
(7,	'DANNY 18',	1500,	'PELINDO',	100,	10,	'701.04.01.01',	'Y'),
(8,	'TB IM 5',	1500,	'PELINDO',	100,	10,	'701.04.01.01',	'Y'),
(9,	'BAHARI PERDANA VIII',	1500,	'PELINDO',	100,	10,	'701.04.01.01',	'Y');

DROP TABLE IF EXISTS `m_kategroi_ekspor`;
CREATE TABLE `m_kategroi_ekspor` (
  `kategroi_ekspor_id` decimal(10,0) NOT NULL,
  `kategori_ekspor` varchar(100) DEFAULT NULL,
  `flag` char(1) DEFAULT 'Y',
  PRIMARY KEY (`kategroi_ekspor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_kategroi_ekspor` (`kategroi_ekspor_id`, `kategori_ekspor`, `flag`) VALUES
(0,	'Khusus Barang Kiriman',	'Y'),
(1,	'UMUM',	'Y'),
(2,	'Ekspor dari PLB',	'Y'),
(4,	'Khusus Barang Perwakilan Badan Internasional',	'Y'),
(5,	'Khusus Barang Perwakilan Negara Asing',	'Y');

DROP TABLE IF EXISTS `m_kemasan`;
CREATE TABLE `m_kemasan` (
  `m_kemasan_id` decimal(10,0) NOT NULL,
  `kemasan` varchar(100) DEFAULT NULL,
  `flag` char(1) DEFAULT 'Y',
  PRIMARY KEY (`m_kemasan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_kemasan` (`m_kemasan_id`, `kemasan`, `flag`) VALUES
(1,	'Drum',	'Y'),
(2,	'Box Plywood',	'Y'),
(3,	'Box Plastic',	'Y'),
(4,	'Bag Paper',	'Y'),
(5,	'Hamper',	'Y'),
(6,	'Bag Paper',	'Y'),
(7,	'Package',	'Y');

DROP TABLE IF EXISTS `m_lokasi_dermaga`;
CREATE TABLE `m_lokasi_dermaga` (
  `lokasi_dermaga_id` int NOT NULL,
  `nama_dermaga` varchar(200) DEFAULT NULL,
  `flag` char(1) DEFAULT 'Y',
  `pelabuhan_id` int DEFAULT NULL COMMENT 'referensi ke master pelabuhan pelabuhan pelindo',
  PRIMARY KEY (`lokasi_dermaga_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_lokasi_dermaga` (`lokasi_dermaga_id`, `nama_dermaga`, `flag`, `pelabuhan_id`) VALUES
(1,	'DONDANG',	'Y',	533),
(2,	'KALHOLD',	'Y',	533),
(3,	'LAKOSTA',	'Y',	533),
(4,	'KERBAU TIMUR',	'Y',	533),
(5,	'LOA BAKUNG',	'Y',	533),
(6,	'KR. ASAM',	'Y',	533),
(7,	'LOA BUAH',	'Y',	533),
(8,	'MA.BERAU',	'Y',	533),
(9,	'MAHAKAM',	'Y',	533),
(10,	'MAHULU',	'Y',	533),
(11,	'LOA DURI',	'Y',	533),
(12,	'MAHKOTA II',	'Y',	533),
(13,	'PINGGIRAN',	'Y',	533),
(14,	'PALARAN',	'Y',	533),
(15,	'MUARA JAWA',	'Y',	533),
(16,	'MERANDAI',	'Y',	533),
(17,	'PERTAMINA',	'Y',	533),
(18,	'REDE',	'Y',	533),
(19,	'SALIKI',	'Y',	533),
(20,	'PULAU BUAYA',	'Y',	533),
(21,	'RANJI KARY',	'Y',	533),
(22,	'SANGATTA',	'Y',	533),
(23,	'SELKAPIH',	'Y',	533),
(25,	'SUNGAI/LAUT',	'Y',	533),
(26,	'SEII MARIAM',	'Y',	533),
(27,	'TJ BAJAU',	'Y',	533),
(28,	'SEMENT TONASA',	'Y',	533),
(29,	'SENIPAH',	'Y',	NULL);

DROP TABLE IF EXISTS `m_lokasi_penumpukan`;
CREATE TABLE `m_lokasi_penumpukan` (
  `lokasi_penumpukan_id` int NOT NULL,
  `kode_lokasi` varchar(20) DEFAULT NULL,
  `nama_lokasi` varchar(200) DEFAULT NULL,
  `lokasi_penumpukan` varchar(100) DEFAULT NULL COMMENT 'gudang,Lapangan,Kandang',
  `kode_rekening` varchar(50) DEFAULT NULL,
  `panjang_lokasi` decimal(10,0) DEFAULT NULL,
  `lebar_lokasi` decimal(10,0) DEFAULT NULL,
  `luas_lokasi` decimal(10,0) DEFAULT NULL,
  `luas_efektif` decimal(10,0) DEFAULT NULL,
  `daya_pikul_ton` decimal(10,0) DEFAULT NULL,
  `daya_pikul_m3` decimal(10,0) DEFAULT NULL,
  `jumlah_party` decimal(10,0) DEFAULT NULL,
  `flag` char(1) DEFAULT NULL,
  PRIMARY KEY (`lokasi_penumpukan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_lokasi_penumpukan` (`lokasi_penumpukan_id`, `kode_lokasi`, `nama_lokasi`, `lokasi_penumpukan`, `kode_rekening`, `panjang_lokasi`, `lebar_lokasi`, `luas_lokasi`, `luas_efektif`, `daya_pikul_ton`, `daya_pikul_m3`, `jumlah_party`, `flag`) VALUES
(1,	'00001',	'DERMAGA',	'LAPANGAN',	'702.01.00.00',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(2,	'00002',	'DIATAS PALKA/KAPAL',	'LAPANGAN',	'702.03.01.01',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(3,	'00003',	'DILUAR PELABUHAN',	'LAPANGAN',	'702.03.01.02',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(4,	'00004',	'GUDANG',	'GUDANG',	'702.02.01.03',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(5,	'00005',	'LAPANGAN',	'LAPANGAN',	'702.03.01.01',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL);

DROP TABLE IF EXISTS `m_masa_penumpukan`;
CREATE TABLE `m_masa_penumpukan` (
  `masa_penumpukan_id` int NOT NULL,
  `nama_masa_penumpukan` varchar(200) DEFAULT NULL,
  `masa_bebas` varchar(100) DEFAULT NULL,
  `masa1_dari` decimal(10,0) DEFAULT NULL,
  `masa1_sd` decimal(10,0) DEFAULT NULL,
  `masa1_persen` decimal(10,0) DEFAULT NULL,
  `masa2_dari` decimal(10,0) DEFAULT NULL,
  `masa2_sd` decimal(10,0) DEFAULT NULL,
  `masa2_persen` decimal(10,0) DEFAULT NULL,
  `masa3_dari` decimal(10,0) DEFAULT NULL,
  `masa3_sd` decimal(10,0) DEFAULT NULL,
  `masa3_persen` decimal(10,0) DEFAULT NULL,
  `ppn_masa_penumpukan` decimal(10,0) DEFAULT NULL,
  `flag` char(1) DEFAULT NULL,
  PRIMARY KEY (`masa_penumpukan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_masa_penumpukan` (`masa_penumpukan_id`, `nama_masa_penumpukan`, `masa_bebas`, `masa1_dari`, `masa1_sd`, `masa1_persen`, `masa2_dari`, `masa2_sd`, `masa2_persen`, `masa3_dari`, `masa3_sd`, `masa3_persen`, `ppn_masa_penumpukan`, `flag`) VALUES
(1,	'BONGKAR ANTAR PULAU',	'5',	6,	10,	100,	11,	999,	200,	1000,	2000,	200,	0,	'Y'),
(2,	'BONGKAR IMPORT',	'5',	6,	10,	100,	11,	999,	200,	1000,	2000,	200,	0,	'Y'),
(3,	'MUAT ANTAR PULAU',	'7',	8,	14,	100,	15,	999,	200,	1000,	2000,	200,	0,	'Y'),
(4,	'MUAT EKSPORT',	'7',	8,	14,	100,	15,	999,	200,	1000,	2000,	200,	0,	'Y');

DROP TABLE IF EXISTS `m_pandu`;
CREATE TABLE `m_pandu` (
  `pandu_id` int NOT NULL,
  `nama_pandu` varchar(200) DEFAULT NULL,
  `status_pandu` varchar(50) DEFAULT NULL,
  `kode_rek` varchar(50) DEFAULT NULL,
  `flag` char(1) DEFAULT NULL,
  PRIMARY KEY (`pandu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_pandu` (`pandu_id`, `nama_pandu`, `status_pandu`, `kode_rek`, `flag`) VALUES
(1,	'SAMSUL MAARIF',	'PANDU BANDAR',	NULL,	'Y'),
(2,	'SAMSURIZAL',	'PANDU BANDAR',	NULL,	'Y'),
(3,	'KASIANTO',	'PANDU BANDAR',	NULL,	'Y'),
(4,	'WIDIARTO',	'PANDU BANDAR',	NULL,	'Y'),
(5,	'MANGGIH',	'PANDU BANDAR',	NULL,	'Y'),
(6,	'EDY WIYAJA',	'PANDU BANDAR',	NULL,	'Y'),
(7,	'SUHADI TANDA',	'PANDU BANDAR',	NULL,	'Y'),
(8,	'AGUS SITANGGANG',	'PANDU BANDAR',	NULL,	'Y'),
(9,	'WYLTEIN',	'PANDU BANDAR',	NULL,	'Y'),
(10,	'IRWAN ABDI ESA',	'PANDU BANDAR',	NULL,	'Y'),
(11,	'ACHMAD',	'PANDU BANDAR',	NULL,	'Y');

DROP TABLE IF EXISTS `m_pelabuhan`;
CREATE TABLE `m_pelabuhan` (
  `pelabuhan_id` int NOT NULL AUTO_INCREMENT,
  `kode_pelabuhan` varchar(20) DEFAULT NULL,
  `nama_pelabuhan` varchar(100) DEFAULT NULL,
  `lokasi_pelabuhan` varchar(100) DEFAULT NULL,
  `unit_kerja` varchar(100) DEFAULT NULL,
  `alamat_kantor` tinytext,
  PRIMARY KEY (`pelabuhan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_pelabuhan` (`pelabuhan_id`, `kode_pelabuhan`, `nama_pelabuhan`, `lokasi_pelabuhan`, `unit_kerja`, `alamat_kantor`) VALUES
(1,	'AAT',	'Adaut',	'MALUKU TENGGARA BARAT',	'KUPP KELAS II SAUMLAKI',	'Jl.Pelabuhan Saumlaki Kec. Tanibar Selatan Kab. Saumlaki Maluku 97762'),
(2,	'AAU',	'Atapupu',	'BELU',	'KUPP KELAS II ATAPUPU',	'Jl. Pelabuhan No. 1 Atapupu Nusa Tenggara Timur'),
(3,	'ABA',	'Air Buaya',	'BURU',	'KUPP KELAS II NAMLEA',	'Jl.Dermaga Pelabuhan Namlea Kabupaten Buru Maluku 97571'),
(4,	'ABL',	'Ambalau',	'BURU SELATAN',	'KUPP KELAS III NAMROLE',	'Jl. Komp. Pelabuhan Leksula Kec. Leksula Kab. Buru Selatan - Ambon Maluku 97573'),
(5,	'ABS',	'Air Bangis',	'PASAMAN BARAT',	'KSOP KELAS II TELUK BAYUR',	'Jl. Tanjung Priok No. 4 Teluk Bayur Sumatera Barat 25217'),
(6,	'AEA',	'Probolinggo',	'PROBOLINGGO',	'KSOP KELAS IV PROBOLINGGO',	'-'),
(7,	'AGS',	'Agats',	'ASMAT',	'KUPP KELAS III AGATS',	'Jl. Pelabuhan Baru No. 1 Agats Kab. Asmat Papua'),
(8,	'AGU',	'AwerangeBarru',	'LUWU TIMUR',	'UPP KELAS III AWARENGEBARRU',	'Jl. Pelabuhan No.57 Awarenge Kab. Barru Sulawesi Selatan 90752'),
(9,	'AHI',	'Amahai',	'MALUKU TENGAH',	'UPP KELAS III AMAHAI',	'Jl. Christina Martha Tiahahu Komp. Pelabuhan Amahai Maluku 97511'),
(10,	'ALO',	'Anyer Lor',	'SERANG',	'KUPP KELAS III ANYER LOR',	'SERANG'),
(11,	'AMA',	'Amamapare',	'MIMIKA',	'KUPP KELAS II AMAMAPARE',	'Komp. Pelabuhan Amamapare Timika Papua 99900'),
(12,	'AMP',	'Ampenan',	'LOMBOK BARAT',	'KUPP KELAS III PAMENANGTANJUNG',	'LOMBOK BARAT'),
(13,	'AMQ',	'Ambon',	'KOTA AMBON',	'KSOP KELAS I AMBON',	'Jl.Yos Komp.Pelabuhan Ambon Maluku 97126'),
(14,	'ANS',	'Ansus',	'KEPULAUAN YAPEN',	'KUPP KELAS II SERUI',	'Jl. Moh. Hatta No. 2 Serui Papua 98201'),
(15,	'APN',	'Ampana',	'TOJO UNA-UNA',	'KUPP KELAS III AMPANA',	'Jl. Yos Sudarso No. 25 Ampana Sulteng 94683'),
(16,	'APU',	'Pasapuat',	'KEPULAUAN MENTAWAI',	'KUPP KELAS III SIKAKAP',	'MENTAWAI'),
(17,	'ARE',	'Pare-Pare',	'KOTA PARE-PARE',	'KSOP KELAS III PARE-PARE',	'Jl.Tarakan Komplek Pelabuhan Cappa Ujung Parepare Sulawesi Selatan 91112'),
(18,	'ASG',	'Arwala  Sutilarang',	'MALUKU BARAT DAYA',	'UPP KELAS III WONRELI',	'Jl. Pelabuhan Wonreli Maluku 97653'),
(19,	'ASI',	'Asiki',	'BOVEN DIGUL',	'KSOP KELAS IV MERAUKE',	'Jl. Sabang No. 312 Merauke - Papua 99613'),
(20,	'ASM',	'Mangga Dua',	'KOTA TERNATE',	'KSOP KELAS II TERNATE',	'Jl. Jend. Ahmad Yani Kompleks Pelabuhan Ahmad Yani Ternate Maluku Utara 97724'),
(21,	'ASO',	'Pasokan',	'TOJO UNA-UNA',	'KUPP KELAS III AMPANA',	'Jl. Yos Sudarso No. 25 Ampana Sulteng 94683'),
(22,	'ATY',	'Atsy',	'ASMAT',	'KUPP KELAS III AGATS',	'Jl. Pelabuhan Baru No. 1 Agats Kab. Asmat Papua'),
(23,	'AUG',	'Amurang',	'MINAHASA SELATAN',	'UPP KELAS III LIKUPANG',	'Jl. Raya Manado Likupang Sulawesi Utara 95375'),
(24,	'AYU',	'Pasangkayu',	'MAMUJU UTARA',	'KUPP KELAS III BELANG-BELANG',	'Jl. Pelabuhan Sumatera No. 3 Belang-belang Sulbar 91561'),
(25,	'BAA',	'Baranusa',	'ALOR',	'KUPP KELAS III BARANUSA',	'Jl.Komp. Pelabuhan Baranusa Nusa Tenggara Timur'),
(26,	'BAD',	'Badas',	'SUMBAWA',	'KSOP KELAS IV BADAS',	'Jl. Raya Pelabuhan Badas Sumbawa Besar Nusa Tenggara Barat 84351'),
(27,	'BAE',	'Bajoe',	'BONE',	'UPP KELAS II BAJOE',	'Jl. Pelabuhan No.21 Bajoe Kab. Bone Sulsel 92781 Telp. 0481-21436 Fax. 0481-2911962 upp.bajoe@dephub.go.id'),
(28,	'BAG',	'Baing',	'SUMBA TIMUR',	'KSOP KELAS IV WAINGAPU',	'Jl. Nangamesi No. 11 Waingapu Nusa Tenggara Timur 87110'),
(29,	'BAT',	'Bataka',	'HALMAHERA BARAT',	'KUPP KELAS III JAILOLO',	'Jl. Pelabuhan jailolo Kab. Halmahera Barat Maluku Utara 97752'),
(30,	'BBE',	'BulukumbaLappe\'e',	'BULUKUMBA',	'KUPP KELAS II BULUKUMBA',	'Jl. Pelabuhan Leppe\'e No. 1 Bulu Kumba Sulsel 92511'),
(31,	'BBG',	'Babang',	'HALMAHERA SELATAN',	'KUPP KELAS II LABUHABABANG',	'Jl.Pelabuhan No. 25 Desa Babang Kec. Bacan Timur 97791'),
(32,	'BBI',	'Banabungi Pasarwajo',	'BUTON',	'KUPP KELAS I BAU-BAU',	'Jl. Yos Sudarso No. 5 Kel. Wale Kec. Wolio Kota Baubau Provinsi Sultra 93711'),
(33,	'BBM',	'Bau-BauMurhum',	'KOTA BAU-BAU',	'KUPP KELAS I BAU-BAU',	'Jl. Yos Sudarso No. 5 Kel. Wale Kec. Wolio Kota Baubau Provinsi Sultra 93711'),
(34,	'BBN',	'Bumbulan',	'POHUWATO',	'UPP KELAS III TILAMUTA',	'Jl. Pelabuhan No. 106 Kec. Tilamuta Kab. Boalemo Gorontalo 96263'),
(35,	'BBU',	'Biu',	'SABU RAIJUA',	'KUPP KELAS III SEBA',	'Jl. Pelabuhan No. 01 Kec.Sabu Barat Kab.Seburaijua Seba Nusa Tenggara Timur'),
(36,	'BCI',	'Bicoli',	'HALMAHERA TIMUR',	'KUPP KELAS III BULI',	'Jl. Pelabuhan Buli Kec. Maba Kab. Halmahera Malut'),
(37,	'BDG',	'Budong-Budong',	'MAMUJU',	'KUPP KELAS III BELANG-BELANG',	'Jl. Pelabuhan Sumatera No. 3 Belang-belang Sulbar 91561'),
(38,	'BDJ',	'Banjarmasin',	'KOTA BANJARMASIN',	'KSOP KELAS I BANJARMASIN',	'Jl. Duyung Raya Komp. Lumba-lumba No. 45 Banjarmasin Kalimantan Selatan 70119'),
(39,	'BEE',	'Bere - Bere',	'PULAU MOROTAI',	'KUPP KELAS III DARUBA',	'Jl. Komp. Pelabuhan Imam Lastori Kab. Pulau Morotai Prov. Malut 97771'),
(40,	'BEL',	'Belang-Belang',	'MAMUJU',	'KUPP KELAS III BELANG-BELANG',	'Jl. Pelabuhan Sumatera No. 3 Belang-belang Sulbar 91561'),
(41,	'BEN',	'Benete',	'SUMBAWA BARAT',	'KUPP KELAS II BENETE',	'Jl. Pelabuhan Benete Kec.Maluku Kab. Sumbawa Barat Nusa Tenggara Barat 84357'),
(42,	'BEO',	'Beo',	'KEPULAUAN TALAUD',	'KUPP KELAS III MELONGUANE',	'Jl Komp. Pelabuhan Lirung Kec. Lirung Kab. Talaud Lirung Sulawesi Utara 95871'),
(43,	'BGA',	'Bojonegara',	'SERANG',	'KUPP KELAS III BOJONEGARA',	'SERANG'),
(44,	'BGG',	'Banggai',	'BANGGAI KEPULAUAN',	'KUPP KELAS II BANGGAI',	'Jl. Komp. Pelabuhan Banggai Kab. Banggai Kepulauan Sulteng 94791'),
(45,	'BGN',	'Bantaeng',	'JENEPONTO',	'KUPP KELAS III JENEPONTO',	'Jl. Dermaga Desa Bungeng Kec. Batang Kab. Jeneponto Sulsel 92361'),
(46,	'BHS',	'Buhias',	'SITARO',	'KUPP KELAS III ULU SIAU',	'Jl. Komp. Pelabuhan Ulu Siau Kel. Tatahadeng Kec. Siau Timur Kep. Tagulandang Biaro Sultra 95861'),
(47,	'BIG',	'Bastiong',	'KOTA TERNATE',	'KSOP KELAS II TERNATE',	'Jl. Jend. Ahmad Yani Kompleks Pelabuhan Ahmad Yani Ternate Maluku Utara 97724'),
(48,	'BIK',	'Biak',	'BIAK NUMFOR',	'KSOP KELAS III BIAK',	'Jl.Jendral Sudirman No. 53 Biak Papua 98115'),
(49,	'BIT',	'Bitung',	'KOTA BITUNG',	'KSOP KELAS II BITUNG',	'Jl. Ir. Soekarno No. 4 Bitung Sulawesi Utara 95225'),
(50,	'BJU',	'Tanjung Wangi',	'BANYUWANGI',	'KSOP MENENGTANJUNG WANGI',	'-'),
(51,	'BKE',	'Bukide',	'KEPULAUAN SANGIHE',	'KUPP KELAS II TAHUNA',	'Jl.Pelabuhan Tahuna No.1 Kab .Kepl.Sangihe Tahuna Sulawesi Utara 95851'),
(52,	'BKI',	'Bengkalis',	'BENGKALIS',	'KSOP KELAS IV BENGKALIS',	'Jl. A. Yani No. 5 Rt. 01Rw. 01 Bengkalis - Riau 28712'),
(53,	'BKS',	'Pulau Baai',	'BENGKULU',	'KSOP KELAS III PULAU BAAI',	'Jl. Ir. Rustandi Sugianto Pulau Baai Bengkulu 38216'),
(54,	'BLA',	'Bula',	'SERAM BAGIAN TIMUR',	'KUPP KELAS III BULA',	'Jl. Pelabuhan Teluk Hatiling Wahai Maluku 97557'),
(55,	'BLG',	'Belang',	'MINAHASA TENGGARA',	'UPP KELAS III LIKUPANG',	'Jl. Raya Manado Likupang Sulawesi Utara 95375'),
(56,	'BLT',	'Manggar',	'BELITUNG TIMUR',	'KUPP KELAS III MANGGAR',	'Jl. Jend. Sudirman No. 74 Rt.27'),
(57,	'BLU',	'Belinyu',	'BANGKA',	'KSOP KELAS IV PANGKAL BALAM',	'-'),
(58,	'BLW',	'Belawan',	'KOTA MEDAN',	'OP UTAMA BELAWAN',	'JL. Suar No. 1 Pelabuhan Belawan Medan Sumut - 20411'),
(59,	'BLY',	'Buli',	'HALMAHERA TIMUR',	'KUPP KELAS III BULI',	'Jl. Pelabuhan Buli Kec. Maba Kab. Halmahera Malut'),
(60,	'BMU',	'Bima',	'BIMA',	'KSOP KELAS IV BIMA',	'Jl. Martadinata No. 1 Bima - Nusa Tenggara Barat 84114'),
(61,	'BNA',	'Benjina',	'KEPULAUAN ARU',	'KUPP KELAS II DOBO',	'Jl.Pelabuhan No. 3 Dobo Maluku 97662'),
(62,	'BNO',	'Banemo',	'HALMAHERA TENGAH',	'KUPP KELAS III WEDA',	'Jl. Pulau Fao Kec. Pilau Gebe Kab. Halmahera Tengah Komp. Pelabuhan Gebe Maluku Utara'),
(63,	'BNQ',	'Brondong',	'LAMONGAN',	'UPP KELAS III BRONDONG',	'Jl. Pelabuhan No. 1 Sedayulawas Kec. Brondong Lamongan Jawa Timur - 662814'),
(64,	'BNU',	'Bungku',	'MOROWALI',	'UPP KELAS III KOLONEDALE',	'Jl. Pelabuhan No. 1 Kolonedale Sulteng 94671'),
(65,	'BOA',	'Benoa',	'KOTA DENPASAR',	'KSOP KELAS II BENOA',	'Jl. Raya Pelabuhan Benoa Denpasar Bali 80223'),
(66,	'BOK',	'Binongko',	'KOTA BAU-BAU',	'KUPP KELAS I BAU-BAU',	'Jl. Yos Sudarso No. 5 Kel. Wale Kec. Wolio Kota Baubau Provinsi Sultra 93711'),
(67,	'BOR',	'Bonerate',	'LUWU UTARA',	'KUPP KELAS III JAMPEA',	'Jl. Pelabuhan No. 1 Benteng Jampea Sulsel'),
(68,	'BPA',	'Batu Panjang',	'BENGKALIS',	'KUPP KELAS III BATU PANJANG',	'BENGKALIS'),
(69,	'BPN',	'Balikpapan',	'KOTA BALIKPAPAN',	'KSOP KELAS I BALIKPAPAN',	'Jl. Yos Sudarso No. 1 Balikpapan Kalimantan Timur 76111'),
(70,	'BRE',	'Brebes',	'BREBES',	'KUPP KELAS III BREBES',	'BREBES'),
(71,	'BRG',	'Balauring',	'LEMBATA',	'KUPP KELAS II LARANTUKA',	'Flores Timus-Nusa Tenggara Timur'),
(72,	'BRO',	'Baa',	'ROTENDAO',	'KUPP KELAS III BAA',	'Jl. Pelabuhan No. 1 Ba\'a - Rote NTT'),
(73,	'BRS',	'Barus',	'TAPANULI TENGAH',	'KUPP KELAS III BARUS',	'Jl. Yos Sudarso No. 02 Kel. Pasar Batu Grigis Barus Kab. Tapanuli Tengah Sumatera Utara 22564'),
(74,	'BSI',	'Bisui',	'HALMAHERA SELATAN',	'KUPP KELAS II LABUHABABANG',	'Jl.Pelabuhan No. 25 Desa Babang Kec. Bacan Timur 97791'),
(75,	'BSO',	'Biringkasi',	'PANGKAJENE KEPULAUAN',	'KUPP KELAS II MACCINI BAJI',	'Jl. Pelabuhan BiringKasie Pengkeb Sulsel 90651'),
(76,	'BTA',	'Batutua',	'ROTENDAO',	'KUPP KELAS III BAA',	'Jl. Pelabuhan No. 1 Ba\'a - Rote NTT'),
(77,	'BTG',	'Batang',	'BATANG',	'KUPP KELAS III BATANG',	'BATANG'),
(78,	'BTS',	'Batu Atas',	'BUTON',	'KUPP KELAS I BAU-BAU',	'Jl. Yos Sudarso No. 5 Kel. Wale Kec. Wolio Kota Baubau Provinsi Sultra 93711'),
(79,	'BTU',	'Binanatu',	'SUMBA BARAT',	'KUPP KELAS III WAIKELO',	'Jl. Waikelo Kec. Luara Kab. Sumba Barat Waikelo Nusa Tenggara Timur - 87254'),
(80,	'BUB',	'Baturube',	'MOROWALI',	'UPP KELAS III KOLONEDALE',	'Jl. Pelabuhan No. 1 Kolonedale Sulteng 94671'),
(81,	'BUD',	'Bunta',	'BANGGAI',	'KUPP KELAS III BUNTA',	'Jl. RA. Kartini No. 42 Bunta Sulteng 94753'),
(82,	'BUG',	'Sangsit',	'BULELENG',	'KUPP KELAS III BULELENG',	'Jl. Pabean Sangsit Singaraja Buleleng Bali - 81171'),
(83,	'BUH',	'Batu Merah',	'KOTA AMBON',	'KSOP KELAS I AMBON',	'Jl.Yos Komp.Pelabuhan Ambon Maluku 97126'),
(84,	'BUM',	'Batu Enam',	'ROKAN HILIR',	'KUPP KELAS III SINABOI',	'BENGKALIS'),
(85,	'BUR',	'BatamBatu Ampar',	'KOTA BATAM',	'KSOP KHUSUS BATAM',	'-'),
(86,	'BUS',	'Busua',	'HALMAHERA SELATAN',	'KUPP KELAS II LABUHABABANG',	'Jl.Pelabuhan No. 25 Desa Babang Kec. Bacan Timur 97791'),
(87,	'BUT',	'Tanjung Buton',	'SIAK',	'KSOP KELAS III SUNGAI PAKNING',	'bengkalis'),
(88,	'BWB',	'Banyu Wangi Boom',	'BANYUWANGI',	'KUPP KELAS III KETAPANG',	'Jl. Jend. Gatot Subroto No. 2 Komplek Pelabuhan LCM Ketapang Banyuwangi Jawa Timur - 68401'),
(89,	'BWN',	'Bawean',	'GRESIK',	'KUPP KELAS III SANGKAPURABAWEAN',	'Jl Beringinan No. 1 Sangka Pura Jawa Timur 61181'),
(90,	'BXD',	'Bade',	'MAPPI',	'KUPP KELAS III BADE',	'Jl. Pelita No. 32 Distrik Edera Bade Kab. Mappi-Papua 99653'),
(91,	'BYG',	'Batu Goyang',	'KEPULAUAN ARU',	'KUPP KELAS II DOBO',	'Jl.Pelabuhan No. 3 Dobo Maluku 97662'),
(92,	'BYK',	'Pulau Banyak',	'ACEH SINGKIL',	'KUPP KELAS III SINGKIL',	'Jl. Utama No. 20 Pulo Sarok Singkil Kab. Aceh Singkil 24785'),
(93,	'BYN',	'Bayun',	'ASMAT',	'KUPP KELAS III AGATS',	'Jl. Pelabuhan Baru No. 1 Agats Kab. Asmat Papua'),
(94,	'BYQ',	'Bunyu',	'BULUNGAN',	'KUPP KELAS III PULAU BUNYU',	'Jl. Dermaga No. 2 Pulau Bunyu Kec. Bunyu Kab. Bulungan Kalimantan Utara 77181'),
(95,	'CBN',	'Cirebon',	'CIREBON',	'KSOP KELAS II CIREBON',	'Jl. Donggala No. 3 Cirebon Jawa Barat 45112'),
(96,	'CEB',	'Celukan Bawang',	'BULELENG',	'KSOP KELAS IV CELUKAN BAWANG',	'Jl. Pelabuhan No. 36 Celukan Bawang Bali 81155'),
(97,	'CLG',	'Calang',	'ACEH JAYA',	'KUPP KELAS III CALANG',	'Jl. Pelabuhan No. 9 Calang Kab Aceh Java Nanggroe Aceh Darussalam 23654 Telp.0654-2210219 Fax. 0654-7000890 Email : upp.calang@gmail.com  uppcalang@dephub.go.id'),
(98,	'CLI',	'Calabai',	'DOMPU',	'KUPP KELAS III CALABAI',	'Jl. Raya Pelabuhan Calabahi Kab. Dompu PO.BOX. 123 Dompu Nusa Tenggara Barat 84200'),
(99,	'CON',	'Carocok Painan',	'PESISIR SELATAN',	'KSOP KELAS II TELUK BAYUR',	'Jl. Tanjung Priok No. 4 Teluk Bayur Sumatera Barat 25217'),
(100,	'CRI',	'Carik',	'LOMBOK UTARA',	'KUPP KELAS II PEMENANG TANJUNG',	'Jl. Pariwisata Gili Indah Pemenang Kab. Lombok Utara Pemenang NTB 83352'),
(101,	'Cituis',	'TANGERANG',	'KUPP KELAS III KARANGANTU',	'SERANG',	NULL),
(102,	'CXP',	'Cilacap',	'CILACAP',	'KSOP KELAS II CILACAP',	'Jl. Niaga No. 9 Cilacap Jawa Tengah 53213'),
(103,	'DAA',	'Dama',	'HALMAHERA UTARA',	'KUPP KELAS I TOBELO',	'Jl. Pelabuhan No.1 Tobelo Kab. Halmahera Utara Prov. Maluku Utara'),
(104,	'DAI',	'Dawai',	'KEPULAUAN YAPEN',	'KUPP KELAS II SERUI',	'Jl. Moh. Hatta No. 2 Serui Papua 98201'),
(105,	'DAN',	'Sukadana',	'KOTA SINGKAWANG',	'KUPP KELAS III TELUK MELANO',	'Jl. Gusti Aplos No. 93 Rt.8RwIII Kalbar 78853'),
(106,	'DAR',	'DaweraDawelor',	'MALUKU BARAT DAYA',	'KUPP KELAS II SAUMLAKI',	'Jl.Pelabuhan Saumlaki Kec. Tanibar Selatan Kab. Saumlaki Maluku 97762'),
(107,	'DAS',	'Dabo Singkep',	'LINGGA',	'KUPP KELAS III DABO SINGKEP',	'DABO SINGKEP - KEPULAUAN RIAU'),
(108,	'DJJ',	'Jayapura',	'JAYAPURA',	'KSOP KELAS II JAYAPURA',	'JL.Koti No9 Jayapura 99221'),
(109,	'DMK',	'Dompak',	'KOTA TANJUNG PINANG',	'KSOP KELAS II TANJUNG PINANG',	'Jl. SM. Amin No. 18 Kota Tanjung Pinang Kepulauan Riau 29111 TelpFax. 0771-21014 ksoptanjungpinang@dephub.go.id'),
(110,	'DMR',	'Damar',	'MALUKU BARAT DAYA',	'KUPP KELAS II SAUMLAKI',	'Jl.Pelabuhan Saumlaki Kec. Tanibar Selatan Kab. Saumlaki Maluku 97762'),
(111,	'DNA',	'Teluk Palu',	'DONGGALA',	'KSOP KELAS II TELUK PALUXXXXX',	'Jl. Mutiara No.4 Donggala'),
(112,	'DOB',	'Dobo',	'KEPULAUAN ARU',	'KUPP KELAS II DOBO',	'Jl.Pelabuhan No. 3 Dobo Maluku 97662'),
(113,	'DOF',	'Dofa',	'KEPULAUAN SULA',	'KUPP KELAS II SANANA',	'Jl.Komplek Pelabuhan Sanana Maluku Utara 97795'),
(114,	'DOU',	'Dorosagu',	'HALMAHERA TIMUR',	'KUPP KELAS III BULI',	'Jl. Pelabuhan Buli Kec. Maba Kab. Halmahera Malut'),
(115,	'DPE',	'Depapre',	'JAYAPURA',	'KSOP KELAS II JAYAPURA',	'JL.Koti No9 Jayapura 99221'),
(116,	'DPN',	'Dapalan',	'KEPULAUAN TALAUD',	'KUPP KELAS III MELONGUANE',	'Jl Komp. Pelabuhan Lirung Kec. Lirung Kab. Talaud Lirung Sulawesi Utara 95871'),
(117,	'DRA',	'Daruba',	'PULAU MOROTAI',	'KUPP KELAS III DARUBA',	'Jl. Komp. Pelabuhan Imam Lastori Kab. Pulau Morotai Prov. Malut 97771'),
(118,	'DRE',	'Darume',	'HALMAHERA UTARA',	'KUPP KELAS I TOBELO',	'Jl. Pelabuhan No.1 Tobelo Kab. Halmahera Utara Prov. Maluku Utara'),
(119,	'DUM',	'Dumai',	'KOTA DUMAI',	'KSOP KELAS I DUMAI',	'Jl. Yos Sudarso No. 9 Dumai Riau 28814'),
(120,	'DWD',	'Dawi-dawi',	'KOLAKA',	'KUPP KELAS III POMALAA',	'Jl.Protokol No1 Pomala Kab. Kolaka Prov. Sulawesi Tenggara 93562 (0405) 310241'),
(121,	'EEI',	'Eci',	'MAPPI',	'KUPP KELAS III BADE',	'Jl. Pelita No. 32 Distrik Edera Bade Kab. Mappi-Papua 99653'),
(122,	'EGU',	'Segun',	'SORONG SELATAN',	'KUPP KELAS III TAMINABUAN',	'Jl. Pelabuhan Teminibuan Kab. Sorang Selatan Papua Barat'),
(123,	'ELT',	'Elat',	'MALUKU TENGGARA',	'KUPP KELAS II TUAL',	'Jl.Pidnang Armau No1 Komp.Pelabuhan Tual Maluku 97613'),
(124,	'ENE',	'Ende',	'ENDE',	'KSOP KELAS IV ENDE',	'Jl. Adi Sucipto Ippi Ende NTT 86316'),
(125,	'ENO',	'Kuala Enok',	'INDRAGIRI HILIR',	'KSOP KELAS IV KUALA ENOK',	'riau'),
(126,	'ERE',	'Ereke',	'BUTON UTARA',	'KUPP KELAS II RAHA',	'Jl. Pelabuhan No. 1 Raha Sulawesi Tenggara 93611'),
(127,	'ERY',	'Eray',	'MALUKU BARAT DAYA',	'UPP KELAS III WONRELI',	'Jl. Pelabuhan Wonreli Maluku 97653'),
(128,	'ESG',	'Essang',	'KEPULAUAN TALAUD',	'KUPP KELAS III MELONGUANE',	'Jl Komp. Pelabuhan Lirung Kec. Lirung Kab. Talaud Lirung Sulawesi Utara 95871'),
(129,	'FAI',	'Fani',	'RAJA AMPAT',	'KUPP KELAS II RAJA AMPAT',	'Jl. Trikora No. 19 Saonek Kab. Raja Ampat Prov. Papua Barat'),
(130,	'FKQ',	'Fak-fak',	'FAKFAK',	'KSOP KELAS IV FAK-FAK',	'Jl.Izak Telussa No.1 Fak Fak Papua Barat 98611'),
(131,	'FOI',	'Fogi',	'BURU SELATAN',	'KUPP KELAS III NAMROLE',	'Jl. Komp. Pelabuhan Leksula Kec. Leksula Kab. Buru Selatan - Ambon Maluku 97573'),
(132,	'FTA',	'Falabisahaya',	'KEPULAUAN SULA',	'KUPP KELAS II SANANA',	'Jl.Komplek Pelabuhan Sanana Maluku Utara 97795'),
(133,	'GEG',	'Giliketapang',	'PROBOLINGGO',	'KSOP KELAS IV PROBOLINGGO',	'-'),
(134,	'GER',	'Geser',	'SERAM BAGIAN TIMUR',	'KUPP KELAS III GESER',	'Jl. Pelabuhan Geser Seram Bagian Timur- Maluku 97594'),
(135,	'GGR',	'Galesong',	'JENEPONTO',	'KUPP KELAS III JENEPONTO',	'Jl. Dermaga Desa Bungeng Kec. Batang Kab. Jeneponto Sulsel 92361'),
(136,	'GIL',	'Gilimanuk',	'JEMBRANA',	'KUPP KELAS II GILIMANUK',	'Jl. Parkir Manauver No. 5 Gilimanuk Kab. Jembrana Bali - 82253'),
(137,	'GLX',	'Galela',	'HALMAHERA UTARA',	'KUPP KELAS I TOBELO',	'Jl. Pelabuhan No.1 Tobelo Kab. Halmahera Utara Prov. Maluku Utara'),
(138,	'GMM',	'ManuGamumu',	'HALMAHERA SELATAN',	'KUPP KELAS II LABUHABABANG',	'Jl.Pelabuhan No. 25 Desa Babang Kec. Bacan Timur 97791'),
(139,	'GMR',	'Gorom',	'SERAM BAGIAN TIMUR',	'UPP KELAS III AMAHAI',	'Jl. Christina Martha Tiahahu Komp. Pelabuhan Amahai Maluku 97511'),
(140,	'GNG',	'Garongkong',	'BARRU',	'UPP KELAS III AWARENGEBARRU',	'Jl. Pelabuhan No.57 Awarenge Kab. Barru Sulawesi Selatan 90752'),
(141,	'GNN',	'Glimandangin',	'SAMPANG',	'UPP KELAS II BRANTA',	'Jl. Pelabuhan Branta No. 1 Tlanakan Pamekasan - 69371'),
(142,	'GNS',	'Gunung Sitoli',	'KOTA GUNUNGSITOLI',	'KSOP KELAS IV GUNUNG SITOLI',	'Jl. Yos Sudarso No. 194 Km. 2 Pelabuhan Angin Gunung Sitoli Sumatera Utara 22812'),
(143,	'GRE',	'Gresik',	'GRESIK',	'KSOP KELAS II GRESIK',	'Jl. Yos Sudarso No. 36 Gresik Jawa Timur 61114'),
(144,	'GRY',	'Talaga Raya',	'BUTON',	'KUPP KELAS I BAU-BAU',	'Jl. Yos Sudarso No. 5 Kel. Wale Kec. Wolio Kota Baubau Provinsi Sultra 93711'),
(145,	'GTO',	'Gorontalo',	'GORONTALO',	'KSOP KELAS III GORONTALO',	'Jl.Manyor Dullah Kota Gorontalo .Gorontalo 96118'),
(146,	'HUU',	'Hatu Piru',	'SERAM BAGIAN BARAT',	'KUPP KELAS III KAIRATU',	'Jl. Kompleks PT. IMJ Waisarisa Maluku'),
(147,	'IAU',	'amahaii',	'MALUKU TENGAH',	'UPP KELAS III AMAHAI',	'Jl. Christina Martha Tiahahu Komp. Pelabuhan Amahai Maluku 97511'),
(148,	'IBG',	'Boipinang',	'KOLAKA',	'KUPP KELAS III POMALAA',	'Jl.Protokol No1 Pomala Kab. Kolaka Prov. Sulawesi Tenggara 93562 (0405) 310241'),
(149,	'IBI',	'Bagan siapi-api',	'ROKAN HILIR',	'KSOP KELAS IV BAGAN SIAPI-API',	'Jl. Syahbandar No. 4B Bagan Siapiapi Telp. 0767-21264 Fax. 0767-23150 adpelbagansiapiapi@yahoo.com'),
(150,	'IBJ',	'BintuhanLinau',	'KAUR',	'KUPP KELAS II LINAUBINTUHAN',	'Jl. Pelabuhan Linau Bintuhan Kab. Kaur Bengkulu 38565'),
(151,	'IBL',	'Buano',	'SERAM BAGIAN BARAT',	'KUPP KELAS III KAIRATU',	'Jl. Kompleks PT. IMJ Waisarisa Maluku'),
(152,	'IBM',	'Batanjung',	'KAPUAS',	'KSOP KELAS IV PULANG PISAU',	'Jl. Samudera No. 137 Rt. XIII Pulang Pisau Kalimantan Tengah 73561'),
(153,	'IBP',	'BantenCigading',	'KOTA CILEGON',	'KSOP KELAS I BANTEN',	'Jl. Yos Sudarso No. 120 Merak Banten 42438'),
(154,	'IBQ',	'Bemo',	'SERAM BAGIAN TIMUR',	'UPP KELAS III AMAHAI',	'Jl. Christina Martha Tiahahu Komp. Pelabuhan Amahai Maluku 97511'),
(155,	'IBS',	'Biaro',	'KEPULAUAN SANGIHE',	'KUPP KELAS III ULU SIAU',	'Jl. Komp. Pelabuhan Ulu Siau Kel. Tatahadeng Kec. Siau Timur Kep. Tagulandang Biaro Sultra 95861'),
(156,	'IBX',	'Bagan Asahan',	'ASAHAN',	'KSOP KELAS IV TANJUNG BALAI ASAHAN',	'Jl. Pelabuhan Teluk Nibung 21351'),
(157,	'IGY',	'Gudang Arang',	'KOTA AMBON',	'KSOP KELAS I AMBON',	'Jl.Yos Komp.Pelabuhan Ambon Maluku 97126'),
(158,	'IIA',	'Indari',	'HALMAHERA SELATAN',	'KUPP KELAS II LABUHABABANG',	'Jl.Pelabuhan No. 25 Desa Babang Kec. Bacan Timur 97791'),
(159,	'IIH',	'Bulaa',	'MALUKU TENGAH',	'KUPP KELAS III BULA',	'Jl. Pelabuhan Teluk Hatiling Wahai Maluku 97557'),
(160,	'III',	'Idi',	'ACEH TIMUR',	'KUPP KELAS III IDI',	'Jl.Petua Husen Komp. Pelabuhan No.1 Kec Idie Rayeuk Kab Aceh Timur 24454'),
(161,	'IKD',	'Kotabunan',	'BOLAANG MONGONDO',	'KUPP KELAS III KOTABUNAN',	'Jl. Komp. Pelabuhan Kotabaru Kec. Kotabunan Kab. Bomlang Kotabunan Sulut 95782'),
(162,	'IKL',	'Ketapang',	'SUMENEP',	'KUPP KELAS III KETAPANG',	'Jl. Jend. Gatot Subroto No. 2 Komplek Pelabuhan LCM Ketapang Banyuwangi Jawa Timur - 68401'),
(163,	'IKR',	'Kepulauan Seribu',	'KEPULAUAN SERIBU',	'KSOP KELAS IV KEPULAUAN SERIBU',	'jakarta'),
(164,	'IKU',	'Korido',	'BIAK NUMFOR',	'KUPP KELAS III KORIDO',	'Jl. Pelabuhan No.1 Korido Supiori Selatan'),
(165,	'ILT',	'lamakera',	'FLORES TIMUR',	'KUPP KELAS II LARANTUKA',	'Flores Timus-Nusa Tenggara Timur'),
(166,	'IMC',	'Mangoli',	'KEPULAUAN SULA',	'KUPP KELAS II SANANA',	'Jl.Komplek Pelabuhan Sanana Maluku Utara 97795'),
(167,	'IME',	'Muara SiberutSimailepet',	'KEPULAUAN MENTAWAI',	'KUPP KELAS III MUARA SIBERUT',	'Kepulauan Mentawai-Sumatera Barat'),
(168,	'IMG',	'Mantangisi',	'TOJO UNA-UNA',	'KUPP KELAS III AMPANA',	'Jl. Yos Sudarso No. 25 Ampana Sulteng 94683'),
(169,	'IMH',	'Melonguane',	'KEPULAUAN SANGIHE',	'KUPP KELAS III MELONGUANE',	'Jl Komp. Pelabuhan Lirung Kec. Lirung Kab. Talaud Lirung Sulawesi Utara 95871'),
(170,	'IML',	'Maloy',	'KUTAI TIMUR',	'KUPP KELAS II SANGATTA',	'Jl. Pelabuhan No 6 Sangatta .Kab .Kutai Timur Kaliamntan Timur 75612'),
(171,	'IMM',	'MunteLuwu Utara',	'LUWU UTARA',	'KUPP KELAS III MALILI',	'Jl. Jend. Sudirman No. 16 Kec. Malili Kab. Luwu Timur Sulsel 91981'),
(172,	'IMS',	'MesujiOKI',	'OGAN KOMERING ILIR',	'KUPP KELAS III SUNGAI LUMPUR',	'OGAN KOMERING ILIR'),
(173,	'IMW',	'Marunda',	'JAKARTA UTARA',	'KUPP KELAS IV MARUNDA',	'Jl. Jayapura No. 1 KBN Marunda Cilincing Jakarta Utara 141210'),
(174,	'ING',	'Boom BaruPalembang',	'KOTA PALEMBANG',	'KSOP KELAS II PALEMBANG',	'Banyuasin-Sumatera Selatan'),
(175,	'INL',	'Natal  Sikara-kara',	'MANDAILING NATAL',	'KUPP KELAS III BATAHAN',	'Mandailing Natal-Sumatera Utara'),
(176,	'IPC',	'Pulau Laut',	'NATUNA',	'KUPP KELAS II TAREMPA',	'PASIR PANJANG - KEPULAUAN RIAU'),
(177,	'IPI',	'Ippi',	'ENDE',	'KSOP KELAS IV ENDE',	'Jl. Adi Sucipto Ippi Ende NTT 86316'),
(178,	'IPL',	'Pemalang',	'PEKALONGAN',	'KUPP KELAS II PEKALONGAN',	'KOTA PEKALONGAN'),
(179,	'IPM',	'Poom',	'KEPULAUAN YAPEN',	'KUPP KELAS II SERUI',	'Jl. Moh. Hatta No. 2 Serui Papua 98201'),
(180,	'IPW',	'Pawi',	'RAJA AMPAT',	'KUPP KELAS II RAJA AMPAT',	'Jl. Trikora No. 19 Saonek Kab. Raja Ampat Prov. Papua Barat'),
(181,	'IPZ',	'Ambo',	'MAMUJU',	'KUPP KELAS I MAMUJU',	'Jl. Yos Sudarso No. 2 Mamuju Kab. Mamuju Sulbar 91511'),
(182,	'IRU',	'Indramayu',	'INDRAMAYU',	'KUPP KELAS III INDRAMAYU',	'-'),
(183,	'ISA',	'Seba',	'SABU RAIJUA',	'KUPP KELAS III SEBA',	'Jl. Pelabuhan No. 01 Kec.Sabu Barat Kab.Seburaijua Seba Nusa Tenggara Timur'),
(184,	'ISG',	'Sapudi',	'SUMENEP',	'KUPP KELAS III SAPUDI',	'Jl. Pelabuhan No. 1 Gawam Sapudi Kab. Sumenep Madura Jawa Timur 69483'),
(185,	'ISK',	'Sagea',	'HALMAHERA TENGAH',	'KUPP KELAS III WEDA',	'Jl. Pulau Fao Kec. Pilau Gebe Kab. Halmahera Tengah Komp. Pelabuhan Gebe Maluku Utara'),
(186,	'ITF',	'Tanjung TiramKarimun',	'KARIMUN',	'KSOP KELAS I TANJUNG BALAI KARIMUN',	'-'),
(187,	'ITG',	'Teor',	'MALUKU TENGAH',	'KUPP KELAS III GESER',	'Jl. Pelabuhan Geser Seram Bagian Timur- Maluku 97594'),
(188,	'ITI',	'Belitung',	'BELITUNG',	'KSOP KELAS IV TANJUNG PANDAN',	'Jl. Pelabuhan No. 1 Tanjung Pandan Belitung 33411'),
(189,	'ITK',	'Tobilota',	'FLORES TIMUR',	'KUPP KELAS II LARANTUKA',	'Flores Timus-Nusa Tenggara Timur'),
(190,	'ITL',	'tulehuu',	'MALUKU TENGAH',	'KUPP KELAS II TULEHU',	'Jl.Pelabuhan Hurmala Tulehu Maluku 97582'),
(191,	'ITM',	'Tana PaserPondong',	'PASER',	'KUPP KELAS II TANAH GROGOTTANA PASER',	'Jl. Negara Desa Pondong KecKuaroKab Paser Kalimantan Timur 76211'),
(192,	'ITN',	'Tanjung Uban  Teluk Sasah',	'KEPULAUAN RIAU',	'KUPP KELAS I TANJUNG UBAN',	'KOTA TANJUNG PINANG'),
(193,	'ITO',	'Tinombo',	'PARIGI MOUTONG',	'KUPP KELAS III PARIGI',	'Jl. Pelabuhan Parigi No. 92 Kec. Parigi Kab. Donggala Parigi Palu Sulteng 94371'),
(194,	'ITP',	'Tanjung BatuKotabaru',	'KOTA BANJAR BARU',	'KUPP KELAS III TANJUNG BATU',	'Jl. Pangeran Arga Kusuma No. 2 Kec. Kelumpang Tengah Kab. Kotabaru Tanjung Batu Kalsel - 72164'),
(195,	'ITS',	'Toyando',	'MALUKU TENGGARA',	'KUPP KELAS II TUAL',	'Jl.Pidnang Armau No1 Komp.Pelabuhan Tual Maluku 97613'),
(196,	'ITV',	'Taddan',	'PAMEKASAN',	'UPP KELAS II BRANTA',	'Jl. Pelabuhan Branta No. 1 Tlanakan Pamekasan - 69371'),
(197,	'ITW',	'TepeleoTapaleo',	'HALMAHERA TENGAH',	'KUPP KELAS III WEDA',	'Jl. Pulau Fao Kec. Pilau Gebe Kab. Halmahera Tengah Komp. Pelabuhan Gebe Maluku Utara'),
(198,	'IUZ',	'Ujung Jampea',	'KEPULAUAN SELAYAR',	'KUPP KELAS III JAMPEA',	'Jl. Pelabuhan No. 1 Benteng Jampea Sulsel'),
(199,	'IWI',	'Ilwaki',	'MALUKU BARAT DAYA',	'UPP KELAS III WONRELI',	'Jl. Pelabuhan Wonreli Maluku 97653'),
(200,	'IWN',	'Inawatan',	'SORONG SELATAN',	'KUPP KELAS III TAMINABUAN',	'Jl. Pelabuhan Teminibuan Kab. Sorang Selatan Papua Barat'),
(201,	'JAM',	'Penajam Paser',	'KUTAI TIMUR',	'KUPP KELAS II TANAH GROGOTTANA PASER',	'Jl. Negara Desa Pondong KecKuaroKab Paser Kalimantan Timur 76211'),
(202,	'JEO',	'Jeneponto',	'JENEPONTO',	'KUPP KELAS III JENEPONTO',	'Jl. Dermaga Desa Bungeng Kec. Batang Kab. Jeneponto Sulsel 92361'),
(203,	'JEP',	'Jepara',	'JEPARA',	'KUPP KELAS II JEPARA',	'JEPARA'),
(204,	'JGN',	'Yenggarbun',	'SUPIORI',	'KUPP KELAS III KORIDO',	'Jl. Pelabuhan No.1 Korido Supiori Selatan'),
(205,	'JIO',	'Jailolo',	'HALMAHERA BARAT',	'KUPP KELAS III JAILOLO',	'Jl. Pelabuhan jailolo Kab. Halmahera Barat Maluku Utara 97752'),
(206,	'JNT',	'Jinato',	'PANGKAJENE KEPULAUAN',	'KUPP KELAS III JAMPEA',	'Jl. Pelabuhan No. 1 Benteng Jampea Sulsel'),
(207,	'JWA',	'Juwana',	'PATI',	'KUPP KELAS III JUWANA',	'PATI'),
(208,	'KAE',	'Kabare',	'RAJA AMPAT',	'KUPP KELAS II RAJA AMPAT',	'Jl. Trikora No. 19 Saonek Kab. Raja Ampat Prov. Papua Barat'),
(209,	'KAN',	'Kolonedale',	'MOROWALI',	'UPP KELAS III KOLONEDALE',	'Jl. Pelabuhan No. 1 Kolonedale Sulteng 94671'),
(210,	'KAO',	'Kawaluso',	'KEPULAUAN SANGIHE',	'KUPP KELAS II TAHUNA',	'Jl.Pelabuhan Tahuna No.1 Kab .Kepl.Sangihe Tahuna Sulawesi Utara 95851'),
(211,	'KAT',	'Kalianget',	'SUMENEP',	'KSOP KELAS IV KALIANGET',	'Jl. Komplek Pelabuhan No. 02 Kalianget Sumenep Jawa Timur 69471'),
(212,	'KAY',	'Kuala Jelay',	'SUKAMARA',	'KSOP KELAS IV SUKAMARA',	'Jl. Pelabuhan No. 14 Sukamara Kalimantan Tengah 74172'),
(213,	'KBD',	'Kobisadar',	'MALUKU TENGAH',	'KUPP KELAS III BULA',	'Jl. Pelabuhan Teluk Hatiling Wahai Maluku 97557'),
(214,	'KBE',	'Kereng Bengkirai',	'KOTA PALANGKA RAYA',	'KUPP KELAS II RANGGA ILUNG',	'Jl. Matal No. 18 Kereng Bengkirai Palangkaraya Kalteng 73111'),
(215,	'KBH',	'Kalabahi',	'ALOR',	'KSOP KELAS IV KALABAHI',	'Jl. R.E Marthadinata No. 7 Komp. Pelabuhan Kalabahi - Alor NTT 85813 TelpFax. 0386-21417 ksop_kalabahi@dephub.go.id'),
(216,	'KDA',	'Kaledupa',	'WAKATOBI',	'KUPP KELAS I BAU-BAU',	'Jl. Yos Sudarso No. 5 Kel. Wale Kec. Wolio Kota Baubau Provinsi Sultra 93711'),
(217,	'KDI',	'Kendari',	'KENDARI',	'KSOP KELAS II KENDARI',	'Jl.Jendral Sudirman NO .68 Rt.01 Rw.01 Kendari Sulawesi Tenggara 93127'),
(218,	'KDL',	'Kendal',	'KENDAL',	'KSOP KELAS I TANJUNG EMAS SEMARANG',	'Jl. Yos Sudarso No. 30 Kel. Tanjung Emas Kec. Semarang Jateng 50174 TelpFax. 024-3852335 ksoptanjungemas@dephub.go.id'),
(219,	'KDW',	'Kendawangan',	'KETAPANG',	'KUPP KELAS III KENDAWANGAN',	'Jl. Rahadi Usman No. 1 Kec. Kendawangan Ketapang-Kalbar 788862'),
(220,	'KEK',	'KresekKronjo',	'TANGERANG',	'KUPP KELAS III KARANGANTU',	'SERANG'),
(221,	'KEM',	'Kempo',	'DOMPU',	'KUPP KELAS III CALABAI',	'Jl. Raya Pelabuhan Calabahi Kab. Dompu PO.BOX. 123 Dompu Nusa Tenggara Barat 84200'),
(222,	'KGG',	'Karang Agung',	'BANYUASIN',	'KSOP KELAS II PALEMBANG',	'Banyuasin-Sumatera Selatan'),
(223,	'KGQ',	'Kuala Gaung',	'ROKAN HILIR',	'KUPP KELAS III KUALA GAUNG',	'INDRAGIRI HILIR'),
(224,	'KIA',	'Karimata',	'SAMBAS',	'KUPP KELAS III TELUK MELANO',	'Jl. Gusti Aplos No. 93 Rt.8RwIII Kalbar 78853'),
(225,	'KIE',	'Kasipute',	'BOMBANA',	'KUPP KELAS III POMALAA',	'Jl.Protokol No1 Pomala Kab. Kolaka Prov. Sulawesi Tenggara 93562 (0405) 310241'),
(226,	'KII',	'Kotiti',	'HALMAHERA SELATAN',	'KUPP KELAS II LABUHABABANG',	'Jl.Pelabuhan No. 25 Desa Babang Kec. Bacan Timur 97791'),
(227,	'KJA',	'Karimun Jawa',	'JEPARA',	'KUPP KELAS III KARIMUN JAWA',	'JEPARA'),
(228,	'KKG',	'Kahakitang',	'KEPULAUAN SANGIHE',	'KUPP KELAS II TAHUNA',	'Jl.Pelabuhan Tahuna No.1 Kab .Kepl.Sangihe Tahuna Sulawesi Utara 95851'),
(229,	'KKK',	'P. Kalukalukuang',	'BONE',	'KUPP KELAS II MACCINI BAJI',	'Jl. Pelabuhan BiringKasie Pengkeb Sulsel 90651'),
(230,	'KKO',	'Kao',	'HALMAHERA UTARA',	'KUPP KELAS I TOBELO',	'Jl. Pelabuhan No.1 Tobelo Kab. Halmahera Utara Prov. Maluku Utara'),
(231,	'KLM',	'Kalama',	'KEPULAUAN SANGIHE',	'KUPP KELAS II TAHUNA',	'Jl.Pelabuhan Tahuna No.1 Kab .Kepl.Sangihe Tahuna Sulawesi Utara 95851'),
(232,	'KLT',	'Kalatoa',	'PANGKAJENE KEPULAUAN',	'KUPP KELAS III JAMPEA',	'Jl. Pelabuhan No. 1 Benteng Jampea Sulsel'),
(233,	'KMD',	'Komodo',	'MANGGARAI BARAT',	'KSOP KELAS III LABUHAN BAJO',	'Jl. Yos Sudarso Labuan Bajo NTT 86554'),
(234,	'KME',	'Kuala Mendahara',	'TANJUNG JABUNG TIMUR',	'KUPP KELAS III MENDAHARA',	'-'),
(235,	'KND',	'Kalianda',	'LAMPUNG SELATAN',	'KUPP KELAS III TELUK BETUNG',	'BANDAR LAMPUNG'),
(236,	'KNG',	'Kaimana',	'KAIMANA',	'KUPP KELAS III KAIMANA',	'Jl. Pelabuhan Kaimana Kaimana Papua Barat 98654'),
(237,	'KNN',	'Kangean',	'SUMENEP',	'KUPP KELAS III PELABUHAN SAPEKEN',	'Jl. Pelabuhan No. 01 Sapeken Suminto Madura Jatim'),
(238,	'KNP',	'Kintap',	'TANAH LAUT',	'KUPP KELAS III KINTAP',	'Jl. Batu Anting Desa Kintap Kecil Kec. Kintap Kab. Tanah Laut Kalsel - 70883'),
(239,	'KNU',	'Karangantu',	'SERANG',	'KUPP KELAS III KARANGANTU',	'SERANG'),
(240,	'KNY',	'Kolbano',	'TIMOR TENGAH SELATAN',	'KSOP KELAS V TENAU KUPANG',	'Jl. Yos Sudarso No. 27 Tenau Kupang NTT 85351'),
(241,	'KOB',	'Kobror',	'KEPULAUAN ARU',	'KUPP KELAS II DOBO',	'Jl.Pelabuhan No. 3 Dobo Maluku 97662'),
(242,	'KOG',	'Kroing',	'MALUKU BARAT DAYA',	'KUPP KELAS II SAUMLAKI',	'Jl.Pelabuhan Saumlaki Kec. Tanibar Selatan Kab. Saumlaki Maluku 97762'),
(243,	'KOK',	'Kokas',	'FAKFAK',	'UPP KELAS III KOKAS',	'Jl. Rumagesan Komp. Pelabuhan No. 1 Kab. Fak-fak Papua Barat'),
(244,	'KOL',	'Kolaka',	'KOLAKA',	'UPP KELAS III KOLAKA',	'Jl. Dermaga No. 1 Kolaka Sultra 93512'),
(245,	'KON',	'Kakorotan',	'KEPULAUAN TALAUD',	'KUPP KELAS III MELONGUANE',	'Jl Komp. Pelabuhan Lirung Kec. Lirung Kab. Talaud Lirung Sulawesi Utara 95871'),
(246,	'KPE',	'Kuala Pembuang',	'SERUYAN',	'KSOP KELAS III TELUK SIGINTUNG',	'Jl. AIS Nasution Kuala Pembuang Kalimantan Tengah 74211'),
(247,	'KRN',	'Keramaian',	'SUMENEP',	'KUPP KELAS III MASALEMBO',	'Jl. Raya Pelabuhan No. 1 Masalembu Sumenep Jawa Timur - 69492'),
(248,	'KSI',	'Kesui',	'SERAM BAGIAN TIMUR',	'KUPP KELAS III GESER',	'Jl. Pelabuhan Geser Seram Bagian Timur- Maluku 97594'),
(249,	'KSO',	'Kalbut',	'SITUBONDO',	'KUPP KELAS III KALBUT',	'Jl. Pelabuhan Kalbut Situbondo Jawa Timur - 68363'),
(250,	'KTB',	'Kotabaru',	'BARU',	'KSOP KELAS III KOTA BARU',	'Jl. Pangeran Indera Kesuma Jaya Komp. Pelabuhan Panjang Kota Baru - Kalsel 72113'),
(251,	'KTI',	'Kertapati',	'KOTA PALEMBANG',	'KSOP KELAS II PALEMBANG',	'Banyuasin-Sumatera Selatan'),
(252,	'KTJ',	'Kuala Tanjung',	'BATU BARA',	'KSOP KELAS III KUALA TANJUNG',	'Jl. Pelabuhan Kuala Tanjung Kec. Sei Suka Kab. Batu Bara Sumatera Utara 21257'),
(253,	'KTK',	'Kuala Tungkal',	'TANJUNG JABUNG BARAT',	'KSOP KELAS IV KUALA TUNGKAL',	'Jl. Kesejahteraan No. 86 Rt.19 Kuala Tungkal Kab. Tanjung Jabung Barat Jambi 36513'),
(254,	'KTN',	'Karatung',	'KEPULAUAN TALAUD',	'KUPP KELAS III MELONGUANE',	'Jl Komp. Pelabuhan Lirung Kec. Lirung Kab. Talaud Lirung Sulawesi Utara 95871'),
(255,	'KTP',	'Sukabangun Ketapang',	'KETAPANG',	'KSOP KELAS IV KETAPANG',	'Jl. Gajah Mada No. 542 Komplek Pelabuhan Sukabangun Ketapang Kalimantan Barat 78851'),
(256,	'KTT',	'Kadatua',	'BUTON',	'KUPP KELAS I BAU-BAU',	'Jl. Yos Sudarso No. 5 Kel. Wale Kec. Wolio Kota Baubau Provinsi Sultra 93711'),
(257,	'KTU',	'Kairatu',	'SERAM BAGIAN BARAT',	'KUPP KELAS III KAIRATU',	'Jl. Kompleks PT. IMJ Waisarisa Maluku'),
(258,	'KUA',	'Kuala Langsa',	'KOTA LANGSA',	'KSOP KELAS IV KUALA LANGSA',	'Jl. Pelabuhan No. 04 Kuala Langsa NAD 24451 Telp. 0641-23459 Fax. 0641-21663 Email : ad_klgs@yahoo.com  ksopkualalangsa@dephub.go.id'),
(259,	'KUJ',	'Kuala SembojaSebulu',	'KUTAI KERTANEGARA',	'KUPP KELAS III KUALA SEMBOJA',	'Jl. Balikpapan Handil II No. 2 Rt. V Kuala Semboja Kaltim 75277'),
(260,	'KUM',	'Kumai',	'KOTAWARINGIN BARAT',	'KSOP KELAS IV KUMAI',	'Jl. Bendahara No. 230 Kumai Kab. Kotawaringin Barat - Kalteng 74181'),
(261,	'KUR',	'Kur',	'KAB. TUAL',	'KUPP KELAS II TUAL',	'Jl.Pidnang Armau No1 Komp.Pelabuhan Tual Maluku 97613'),
(262,	'KWG',	'Kwandang',	'GORONTALO UTARA',	'UPP KELAS III KWANDANG',	'Jl. Komp. Pelabuhan Desa Moluo Kec. Kwandang Gorontalo 96252'),
(263,	'KWO',	'Kawio',	'KEPULAUAN SANGIHE',	'KUPP KELAS II TAHUNA',	'Jl.Pelabuhan Tahuna No.1 Kab .Kepl.Sangihe Tahuna Sulawesi Utara 95851'),
(264,	'KWU',	'Moa',	'MALUKU BARAT DAYA',	'UPP KELAS III WONRELI',	'Jl. Pelabuhan Wonreli Maluku 97653'),
(265,	'KXR',	'Kisar',	'MALUKU BARAT DAYA',	'UPP KELAS III WONRELI',	'Jl. Pelabuhan Wonreli Maluku 97653'),
(266,	'KYD',	'Kayuadi',	'PANGKAJENE KEPULAUAN',	'KUPP KELAS III JAMPEA',	'Jl. Pelabuhan No. 1 Benteng Jampea Sulsel'),
(267,	'KYU',	'Kalibaru',	'JAKARTA UTARA',	'KSOP KELAS V KALIBARU',	'Jl. Raya Pelabuhan Kalibaru No. 1 Jakut 14140'),
(268,	'LAJ',	'Labuhan',	'PANDEGLANG',	'KUPP KELAS III PELABUHAN LABUHAN',	'-'),
(269,	'LBH',	'Labuha',	'HALMAHERA SELATAN',	'KUPP KELAS II LABUHABABANG',	'Jl.Pelabuhan No. 25 Desa Babang Kec. Bacan Timur 97791'),
(270,	'LBO',	'Labuan Bajo',	'MANGGARAI BARAT',	'KSOP KELAS III LABUHAN BAJO',	'Jl. Yos Sudarso Labuan Bajo NTT 86554'),
(271,	'LEA',	'Loleo Jaya',	'HALMAHERA SELATAN',	'UPP KELAS III OGOAMAS',	'Jl. Pelabuhan No. 7 Kec. Sojol Utara Kab. Donggala Sulteng'),
(272,	'LEI',	'Leti',	'MALUKU BARAT DAYA',	'UPP KELAS III WONRELI',	'Jl. Pelabuhan Wonreli Maluku 97653'),
(273,	'LEK',	'Leok',	'BUOL',	'UPP KELAS III LEOK',	'Jl. Syarif Mansyur No. 356 Kel. Leok 1 Kec. Biau Kab. Buol Sulteng 94563'),
(274,	'LFA',	'Maidi',	'KOTA TIDORE KEPULAUAN',	'KUPP KELAS III SOA-SIU',	'Jl. Yos Sudarso Kel. Indonesiana Kota Tidore Kepulauan 97813'),
(275,	'LGI',	'Lagundi',	'LAMPUNG SELATAN',	'KUPP KELAS III TELUK BETUNG',	'BANDAR LAMPUNG'),
(276,	'LGN',	'Lirang',	'MALUKU BARAT DAYA',	'UPP KELAS III WONRELI',	'Jl. Pelabuhan Wonreli Maluku 97653'),
(277,	'LHA',	'Lahewa',	'NIAS UTARA',	'KUPP KELAS III LAHEWA',	'Jl. Bowo No. 1 Kel. Pasar Lahewa Kab. Nias Utara Suamtera Utara 22853'),
(278,	'LHJ',	'Labuhan Haji',	'LOMBOK TIMUR',	'KUPP KELAS III LABUHAN LOMBOK',	'Jl. Khayangan Labuhan Lombok Kec. Pringgabaya Kab. Lombok Timur Nusa Tenggara Barat - 83655'),
(279,	'LIG',	'Teluk Leidong',	'LABUAN BATU UTARA',	'KUPP KELAS III LEIDONG',	'Jl. Bondar No. 79 Liendong Sumatera Utara 21475 Telp. 0623-71071 Fax. 0623-71371 Email : upplaeidong@gmail.com  uppleidong@dephub.go.id'),
(280,	'LKA',	'Larantuka',	'FLORES TIMUR',	'KUPP KELAS II LARANTUKA',	'Flores Timus-Nusa Tenggara Timur'),
(281,	'LKK',	'Legon Bajak',	'JEPARA',	'KUPP KELAS III KARIMUN JAWA',	'JEPARA'),
(282,	'LKO',	'Tanah Ampo',	'KARANG ASEM',	'KSOP KELAS IV PADANG BAI',	'Jl. Didalam Areal Pelabuhan Penyebrangan Padangbai Bali 80872'),
(283,	'LKS',	'Lerokis',	'MALUKU BARAT DAYA',	'UPP KELAS III WONRELI',	'Jl. Pelabuhan Wonreli Maluku 97653'),
(284,	'LLD',	'Kedi',	'HALMAHERA BARAT',	'KUPP KELAS III JAILOLO',	'Jl. Pelabuhan jailolo Kab. Halmahera Barat Maluku Utara 97752'),
(285,	'LLL',	'Lasalimu',	'BUTON',	'KUPP KELAS I BAU-BAU',	'Jl. Yos Sudarso No. 5 Kel. Wale Kec. Wolio Kota Baubau Provinsi Sultra 93711'),
(286,	'LLO',	'Labuhan Lombok',	'LOMBOK TIMUR',	'KUPP KELAS III LABUHAN LOMBOK',	'Jl. Khayangan Labuhan Lombok Kec. Pringgabaya Kab. Lombok Timur Nusa Tenggara Barat - 83655'),
(287,	'LMA',	'Labuhan Maringgai',	'LAMPUNG TIMUR',	'KUPP KELAS III LABUHAN MARINGGAI',	'Muara Gading Mas Labuhan Maringgai Lampung Timur'),
(288,	'LMR',	'Lembar',	'LOMBOK BARAT',	'KSOP KELAS III LEMBAR',	'Jl. Raya Pelabuhan Lembar Lombok Barat - NTB 83364'),
(289,	'LNA',	'Langara',	'KONAWE UTARA',	'UPP KELAS III LAPUKO',	'Jl. Pelabuhan No. 25 Langara 93393 P. Wawoni Kab. Konawe Sulawesi Tenggara'),
(290,	'LNB',	'Liana Banggai',	'BUTON',	'KUPP KELAS I BAU-BAU',	'Jl. Yos Sudarso No. 5 Kel. Wale Kec. Wolio Kota Baubau Provinsi Sultra 93711'),
(291,	'LOR',	'Lakor',	'MALUKU BARAT DAYA',	'UPP KELAS III WONRELI',	'Jl. Pelabuhan Wonreli Maluku 97653'),
(292,	'LPG',	'Lipang',	'KEPULAUAN SANGIHE',	'KUPP KELAS II TAHUNA',	'Jl.Pelabuhan Tahuna No.1 Kab .Kepl.Sangihe Tahuna Sulawesi Utara 95851'),
(293,	'LPI',	'Lampia',	'LUWU TIMUR',	'KUPP KELAS III MALILI',	'Jl. Jend. Sudirman No. 16 Kec. Malili Kab. Luwu Timur Sulsel 91981'),
(294,	'LPO',	'Lapuko',	'KONAWE SELATAN',	'UPP KELAS III LAPUKO',	'Jl. Pelabuhan No. 25 Langara 93393 P. Wawoni Kab. Konawe Sulawesi Tenggara'),
(295,	'LQA',	'Leksula',	'BURU SELATAN',	'KUPP KELAS III NAMROLE',	'Jl. Komp. Pelabuhan Leksula Kec. Leksula Kab. Buru Selatan - Ambon Maluku 97573'),
(296,	'LQR',	'Lakara',	'KONAWE SELATAN',	'UPP KELAS III LAPUKO',	'Jl. Pelabuhan No. 25 Langara 93393 P. Wawoni Kab. Konawe Sulawesi Tenggara'),
(297,	'LRG',	'Lirung',	'KEPULAUAN TALAUD',	'KUPP KELAS III MELONGUANE',	'Jl Komp. Pelabuhan Lirung Kec. Lirung Kab. Talaud Lirung Sulawesi Utara 95871'),
(298,	'LRN',	'Lurang',	'MALUKU BARAT DAYA',	'UPP KELAS III WONRELI',	'Jl. Pelabuhan Wonreli Maluku 97653'),
(299,	'LRT',	'Larat',	'MALUKU TENGGARA BARAT',	'KUPP KELAS II SAUMLAKI',	'Jl.Pelabuhan Saumlaki Kec. Tanibar Selatan Kab. Saumlaki Maluku 97762'),
(300,	'LSG',	'Loseng',	'KEPULAUAN SULA',	'KUPP KELAS II SANANA',	'Jl.Komplek Pelabuhan Sanana Maluku Utara 97795'),
(301,	'LSW',	'LhokseumaweKreung Geukeh',	'ACEH UTARA',	'KSOP KELAS IV LHOKSEUMAWE',	'Jl. Pelabuhan No. 1 Lhoksumawe 24315 TelpFax. 0645-43485 Email : adpel_lsm3@yahoo.co.id  ksoplhokseumawe@dephub.go.id'),
(302,	'LTG',	'Letung',	'KEPULAUAN ANAMBAS',	'KUPP KELAS II TAREMPA',	'PASIR PANJANG - KEPULAUAN RIAU'),
(303,	'LTU',	'Lhok Tuan',	'KOTA BONTANG',	'KUPP KELAS I LHOK TUAN',	'Gedung Shipping Lt.1 PT Pupuk Kalimantan Timur -Bontang 75313'),
(304,	'LUG',	'Likupang',	'MINAHSA UTARA',	'UPP KELAS III LIKUPANG',	'Jl. Raya Manado Likupang Sulawesi Utara 95375'),
(305,	'LUK',	'Labuhan Uki',	'BOLAANG MONGONDO',	'KUPP KELAS III LABUHAN UKIINEBONTO',	'Jl. Pelabuhan No. 128 Desa Labuhan Uki Kec. Loka Kab. Bolaang Mongondow Sulut 95761'),
(306,	'LUU',	'Lameruru',	'KONAWE UTARA',	'UPP KELAS III LAPUKO',	'Jl. Pelabuhan No. 25 Langara 93393 P. Wawoni Kab. Konawe Sulawesi Tenggara'),
(307,	'LUW',	'Luwuk',	'BANGGAI',	'KUPP KELAS II LUWUK',	'Jl. Yos Sudarso No. 1 Kel. Karaton Kec. Luwuk Kab. Banggai Sulteng 94715'),
(308,	'LWE',	'Lewoleba',	'LEMBATA',	'KUPP KELAS II LARANTUKA',	'Flores Timus-Nusa Tenggara Timur'),
(309,	'LWI',	'Laiwui',	'HALMAHERA SELATAN',	'KUPP KELAS III LAIWUI',	'Jl. Komp. Pelabuhan Jikotamo Malut 97792'),
(310,	'LWL',	'Lawele',	'BUTON',	'KUPP KELAS I BAU-BAU',	'Jl. Yos Sudarso No. 5 Kel. Wale Kec. Wolio Kota Baubau Provinsi Sultra 93711'),
(311,	'MAF',	'Maffa',	'HALMAHERA SELATAN',	'KUPP KELAS III WEDA',	'Jl. Pulau Fao Kec. Pilau Gebe Kab. Halmahera Tengah Komp. Pelabuhan Gebe Maluku Utara'),
(312,	'MAJ',	'Majene',	'MAJENE',	'KUPP KELAS III MAJENE',	'Jl. Ammana Wewang No. 21 Kab. Majene Sulbar 91411'),
(313,	'MAK',	'Makassar',	'KOTA MAKASAR',	'KANTOR OTORITAS PELABUHAN UTAMA MAKASSAR',	'Jl. Madura No. 1 Makasar - 90173 Telp. 0411-3616444 3632881 3632882 Fax. 0411-3616444 Email : op_makassar@yahoo.com  opIV_mks@dephub.go.id'),
(314,	'MAT',	'Marampit',	'KEPULAUAN TALAUD',	'KUPP KELAS III MELONGUANE',	'Jl Komp. Pelabuhan Lirung Kec. Lirung Kab. Talaud Lirung Sulawesi Utara 95871'),
(315,	'MBA',	'Muara Baru',	'JAKARTA UTARA',	'KSOP KELAS V MUARA BARU',	'Jl. Muara Baru Ujung Pelabuhan Perikanan Samudra Muara Baru Jakut 14440'),
(316,	'MBF',	'Malbufa',	'KEPULAUAN SULA',	'KUPP KELAS II SANANA',	'Jl.Komplek Pelabuhan Sanana Maluku Utara 97795'),
(317,	'MBG',	'Marabombang',	'PINRANG',	'KUPP KELAS II BANGGAI',	'Jl. Komp. Pelabuhan Banggai Kab. Banggai Kepulauan Sulteng 94791'),
(318,	'MBN',	'Marabatuan',	'BARU',	'KUPP KELAS III SEI DANAUSATUI',	'Jl. Kuripan No. 5 Rt.24Sungai Danau Satui Kab. Tanah Bumbu Sungai Danau Satui Kalsel 72175'),
(319,	'MCO',	'Tanjung Moco',	'KOTA TANJUNG PINANG',	'KSOP KELAS II TANJUNG PINANG',	'Jl. SM. Amin No. 18 Kota Tanjung Pinang Kepulauan Riau 29111 TelpFax. 0771-21014 ksoptanjungpinang@dephub.go.id'),
(320,	'MDA',	'Midai',	'NATUNA',	'KUPP KELAS II TAREMPA',	'PASIR PANJANG - KEPULAUAN RIAU'),
(321,	'MDC',	'Manado',	'KOTA MANADO',	'KSOP KELAS III MANADO',	'Jl. Pelabuhan Manado Sulawesi Utara 95111 Telp. 0431-867054 Fax. 0431-859721 Email : adpel_manado@yahoo.com  ksop_manado@dephub.go.id'),
(322,	'MEA',	'Mega',	'TAMBRAUW',	'KUPP KELAS II RAJA AMPAT',	'Jl. Trikora No. 19 Saonek Kab. Raja Ampat Prov. Papua Barat'),
(323,	'MEE',	'Malenge',	'TOJO UNA-UNA',	'KUPP KELAS III AMPANA',	'Jl. Yos Sudarso No. 25 Ampana Sulteng 94683'),
(324,	'MEH',	'Menanga',	'FLORES TIMUR',	'KUPP KELAS II LARANTUKA',	'Flores Timus-Nusa Tenggara Timur'),
(325,	'MEI',	'Menui',	'MOROWALI',	'UPP KELAS III KOLONEDALE',	'Jl. Pelabuhan No. 1 Kolonedale Sulteng 94671'),
(326,	'MEJ',	'MesujiLampung',	'MESUJI',	'KUPP KELAS III LABUHAN MESUJI',	'LAMPUNG UTARA'),
(327,	'MEL',	'Pulau Mules',	'MANGGARAI',	'KUPP KELAS II REO',	'Jl. Pelabuhan Reo Kec. Reo Kab. Manggarai Kediri Nusa Tenggara Timur - 86592'),
(328,	'MEN',	'Pemenang',	'LOMBOK UTARA',	'KUPP KELAS II PEMENANG TANJUNG',	'Jl. Pariwisata Gili Indah Pemenang Kab. Lombok Utara Pemenang NTB 83352'),
(329,	'MEQ',	'Meulaboh',	'ACEH BARAT',	'KSOP KELAS IV MEULABOH',	'Jl. T. Chik Ditiro No. 17 Meulaboh Aceh Barat NAD 23611 TelpFax. 0655- 7551443 Email : adpelmeulaboh@yahoo.com  ksopmeulaboh@dephub.go.id'),
(330,	'MGA',	'Menggala',	'TULANG BAWANG',	'KUPP KELAS III MENGGALA',	'TULANG BAWANG'),
(331,	'MGR',	'Mangarang',	'KEPULAUAN TALAUD',	'KUPP KELAS III MELONGUANE',	'Jl Komp. Pelabuhan Lirung Kec. Lirung Kab. Talaud Lirung Sulawesi Utara 95871'),
(332,	'MGS',	'Miangas',	'KEPULAUAN TALAUD',	'KUPP KELAS III MELONGUANE',	'Jl Komp. Pelabuhan Lirung Kec. Lirung Kab. Talaud Lirung Sulawesi Utara 95871'),
(333,	'MHE',	'Mahaleta',	'MALUKU BARAT DAYA',	'KUPP KELAS II SAUMLAKI',	'Jl.Pelabuhan Saumlaki Kec. Tanibar Selatan Kab. Saumlaki Maluku 97762'),
(334,	'MIG',	'Manitingting',	'HALMAHERA TIMUR',	'KUPP KELAS III BULI',	'Jl. Pelabuhan Buli Kec. Maba Kab. Halmahera Malut'),
(335,	'MII',	'Maccini Baji',	'BULUKUMBA',	'KUPP KELAS II MACCINI BAJI',	'Jl. Pelabuhan BiringKasie Pengkeb Sulsel 90651'),
(336,	'MJU',	'Mamuju',	'MAMUJU',	'KUPP KELAS I MAMUJU',	'Jl. Yos Sudarso No. 2 Mamuju Kab. Mamuju Sulbar 91511'),
(337,	'MKA',	'Muara Angke',	'JAKARTA UTARA',	'KSOP KELAS IV MUARA ANGKE',	'Jl. Dermaga No. 1 Pelabuhan Muara Angke Jakut 14450'),
(338,	'MKH',	'Makalehi',	'KEPULAUAN SANGIHE',	'KUPP KELAS III ULU SIAU',	'Jl. Komp. Pelabuhan Ulu Siau Kel. Tatahadeng Kec. Siau Timur Kep. Tagulandang Biaro Sultra 95861'),
(339,	'MKI',	'MalakoniP. Enggano',	'BENGKULU UTARA',	'KUPP KELAS III MALAKONI-ENGGANO',	'BENGKULU SELATAN'),
(340,	'MKQ',	'Merauke',	'MERAUKE',	'KSOP KELAS IV MERAUKE',	'Jl. Sabang No. 312 Merauke - Papua 99613'),
(341,	'MKT',	'MunteLikupang Barat',	'MINAHSA UTARA',	'UPP KELAS III LIKUPANG',	'Jl. Raya Manado Likupang Sulawesi Utara 95375'),
(342,	'MKW',	'Manokwari',	'MANOKWARI',	'KSOP KELAS IV MANOKWARI',	'Jl.Banjarmasin No 6 Monokwari Papua Barat 98311'),
(343,	'MKX',	'Makian',	'HALMAHERA SELATAN',	'KUPP KELAS III SOA-SIU',	'Jl. Yos Sudarso Kel. Indonesiana Kota Tidore Kepulauan 97813'),
(344,	'MLA',	'Teluk Malala',	'DONGGALA',	'UPP KELAS III OGOAMAS',	'Jl. Pelabuhan No. 7 Kec. Sojol Utara Kab. Donggala Sulteng'),
(345,	'MLD',	'Tarakan',	'KOTA TARAKAN',	'KSOP KELAS III TARAKAN',	'Jl. Yos Sudarso No. 8 Lingkas Ujug Tarakan Kalimantan Utara 77126'),
(346,	'MLE',	'MandopoloJojame',	'HALMAHERA SELATAN',	'KUPP KELAS III LAIWUI',	'Jl. Komp. Pelabuhan Jikotamo Malut 97792'),
(347,	'MLG',	'Maligano',	'MUNA',	'KUPP KELAS II RAHA',	'Jl. Pelabuhan No. 1 Raha Sulawesi Tenggara 93611'),
(348,	'MLH',	'Malahayati',	'ACEH BESAR',	'KSOP KELAS IV MALAHAYATI',	'Jl. Patimura No. 89 Kel. Sukaramai Blower Banda Aceh TelpFax. 0651-48555 Email : adpelmalahayati@yahoo.com  ksopmalahayati@dephub.go.id'),
(349,	'MLI',	'Malili (Sungai)',	'LUWU TIMUR',	'KUPP KELAS III MALILI',	'Jl. Jend. Sudirman No. 16 Kec. Malili Kab. Luwu Timur Sulsel 91981'),
(350,	'MLO',	'Malarko',	'KARIMUN',	'KSOP KELAS I TANJUNG BALAI KARIMUN',	'-'),
(351,	'MLS',	'Marlasi',	'KEPULAUAN ARU',	'KUPP KELAS II DOBO',	'Jl.Pelabuhan No. 3 Dobo Maluku 97662'),
(352,	'MLW',	'Molawe',	'KONAWE UTARA',	'UPP KELAS III LAPUKO',	'Jl. Pelabuhan No. 25 Langara 93393 P. Wawoni Kab. Konawe Sulawesi Tenggara'),
(353,	'MMA',	'Maumbawa',	'NGADA',	'KSOP KELAS IV ENDE',	'Jl. Adi Sucipto Ippi Ende NTT 86316'),
(354,	'MMO',	'Mamboro',	'SUMBA TENGAH',	'KUPP KELAS III WAIKELO',	'Jl. Waikelo Kec. Luara Kab. Sumba Barat Waikelo Nusa Tenggara Timur - 87254'),
(355,	'MMR',	'Moor',	'MAPPI',	'KUPP KELAS III BADE',	'Jl. Pelita No. 32 Distrik Edera Bade Kab. Mappi-Papua 99653'),
(356,	'MMU',	'Mumugu',	'ASMAT',	'KUPP KELAS III AGATS',	'Jl. Pelabuhan Baru No. 1 Agats Kab. Asmat Papua'),
(357,	'MNB',	'Teluk MelanoTeluk Batang',	'KAYONG UTARA',	'KUPP KELAS III TELUK MELANO',	'Jl. Gusti Aplos No. 93 Rt.8RwIII Kalbar 78853'),
(358,	'MNP',	'Manipa',	'SERAM BAGIAN BARAT',	'KUPP KELAS III KAIRATU',	'Jl. Kompleks PT. IMJ Waisarisa Maluku'),
(359,	'MOF',	'Maumere Laurentius Say',	'SIKA',	'KSOP KELAS IV LAURENTIUS SAYMAUMERE',	'Jl. R. E Marthadinata No. 7 Maumere - Nusa Tenggara Timur 86113'),
(360,	'MOI',	'Moti',	'KOTA TERNATE',	'KUPP KELAS III SOA-SIU',	'Jl. Yos Sudarso Kel. Indonesiana Kota Tidore Kepulauan 97813'),
(361,	'MOT',	'Marapokot',	'NAGEKO',	'KUPP KELAS III MARAPOKOT',	'Jl. Pelabuhan Marapokot No. 01 Marapokot Nusa Tenggara Timur 86472'),
(362,	'MOU',	'Moru',	'ALOR',	'KUPP KELAS III BARANUSA',	'Jl.Komp. Pelabuhan Baranusa Nusa Tenggara Timur'),
(363,	'MPC',	'Muko-Muko',	'MUKO-MUKO',	'KUPP KELAS II LINAUBINTUHAN',	'Jl. Pelabuhan Linau Bintuhan Kab. Kaur Bengkulu 38565'),
(364,	'MPG',	'Muara Padang',	'KOTA PADANG',	'KSOP KELAS II TELUK BAYUR',	'Jl. Tanjung Priok No. 4 Teluk Bayur Sumatera Barat 25217'),
(365,	'MPH',	'Mempawah',	'KETAPANG',	'KSOP KELAS II PONTIANAK',	'Jl. Rahadi Usman No. 2 Pontianak Kalimantan Barat'),
(366,	'MRE',	'Marore',	'KEPULAUAN SANGIHE',	'KUPP KELAS II TAHUNA',	'Jl.Pelabuhan Tahuna No.1 Kab .Kepl.Sangihe Tahuna Sulawesi Utara 95851'),
(367,	'MRG',	'Maritaing',	'ALOR',	'KUPP KELAS III BARANUSA',	'Jl.Komp. Pelabuhan Baranusa Nusa Tenggara Timur'),
(368,	'MRL',	'Marsela',	'MALUKU BARAT DAYA',	'KUPP KELAS II SAUMLAKI',	'Jl.Pelabuhan Saumlaki Kec. Tanibar Selatan Kab. Saumlaki Maluku 97762'),
(369,	'MRP',	'Mataritip',	'BERAU',	'KUPP KELAS II TANJUNG REDEP',	'Jl. P. Antasari No. 27 Rt.01Rw.01 Tanjung Redep Kaltim 77312'),
(370,	'MRT',	'MerantiDorak',	'PULAU MERANTI',	'KSOP KELAS IV SELAT PANJANG',	'Jl. Pelabuhan No. 2 Selat Panjang Riau 28753'),
(371,	'MSI',	'Masalembo',	'SUMENEP',	'KUPP KELAS III MASALEMBO',	'Jl. Raya Pelabuhan No. 1 Masalembu Sumenep Jawa Timur - 69492'),
(372,	'MSK',	'Muara Sabak',	'TANJUNG JABUNG TIMUR',	'KSOP KELAS IV MUARA SABAK',	'Jl. Syahbandar No. 5 Jambi'),
(373,	'MSN',	'Mansinam',	'MANOKWARI',	'KSOP KELAS IV MANOKWARI',	'Jl.Banjarmasin No 6 Monokwari Papua Barat 98311'),
(374,	'MSR',	'Matasiri',	'BARU',	'KUPP KELAS III SEI DANAUSATUI',	'Jl. Kuripan No. 5 Rt.24Sungai Danau Satui Kab. Tanah Bumbu Sungai Danau Satui Kalsel 72175'),
(375,	'MTT',	'Matutuang',	'KEPULAUAN SANGIHE',	'KUPP KELAS II TAHUNA',	'Jl.Pelabuhan Tahuna No.1 Kab .Kepl.Sangihe Tahuna Sulawesi Utara 95851'),
(376,	'MUE',	'Maurole',	'ENDE',	'KSOP KELAS IV ENDE',	'Jl. Adi Sucipto Ippi Ende NTT 86316'),
(377,	'MUG',	'Moutong',	'PARIGI MOUTONG',	'KUPP KELAS III PARIGI',	'Jl. Pelabuhan Parigi No. 92 Kec. Parigi Kab. Donggala Parigi Palu Sulteng 94371'),
(378,	'MUI',	'Matui',	'HALMAHERA BARAT',	'KUPP KELAS III JAILOLO',	'Jl. Pelabuhan jailolo Kab. Halmahera Barat Maluku Utara 97752'),
(379,	'MUO',	'Muntok',	'BANGKA BARAT',	'KSOP KELAS IV MUNTOK',	'Jl. Yos Sudarso No. 1 Muntok Bangka Belitung 33311'),
(380,	'NAB',	'Teminabuan',	'SORONG SELATAN',	'KUPP KELAS III TAMINABUAN',	'Jl. Pelabuhan Teminibuan Kab. Sorang Selatan Papua Barat'),
(381,	'NAM',	'Namlea',	'BURU',	'KUPP KELAS II NAMLEA',	'Jl.Dermaga Pelabuhan Namlea Kabupaten Buru Maluku 97571'),
(382,	'NBX',	'Nabire',	'NABIRE',	'KUPP KELAS II NABIRE',	'Jl. Pintu Masuk Pelabuhan No. 1 Nabire Papua 98851'),
(383,	'NDA',	'Banda Naira',	'MALUKU TENGAH',	'KSOP KELAS IV BANDA NAIRA',	'Jl.Pelabuhan Banda Naira Kab Maluku Tengah 97543'),
(384,	'NGG',	'Anggrek',	'GORONTALO UTARA',	'UPP KELAS II ANGGREK',	'Jl. Pelabuhan Anggrek Desa Ilangara Kec. Anggrek Kab. Gorontalo Utara 96252'),
(385,	'NIG',	'Ngalipaeng',	'KEPULAUAN SANGIHE',	'KUPP KELAS II TAHUNA',	'Jl.Pelabuhan Tahuna No.1 Kab .Kepl.Sangihe Tahuna Sulawesi Utara 95851'),
(386,	'NIP',	'Nipah Panjang',	'TANJUNG JABUNG TIMUR',	'KUPP KELAS III NIPAH PANJANG',	'Jl. Pelabuhan No. 1 Kec. Nipah Panjang Kab. Tanjung Jabung Timur Jambi 36571'),
(387,	'NIU',	'Naikliu',	'KUPANG',	'KUPP KELAS II ATAPUPU',	'Jl. Pelabuhan No. 1 Atapupu Nusa Tenggara Timur'),
(388,	'NOO',	'Ndao',	'ROTENDAO',	'KUPP KELAS III BAA',	'Jl. Pelabuhan No. 1 Ba\'a - Rote NTT'),
(389,	'NPA',	'Papela',	'ROTENDAO',	'KUPP KELAS III BAA',	'Jl. Pelabuhan No. 1 Ba\'a - Rote NTT'),
(390,	'NPE',	'Nusa Penida (Toyapakeh)',	'KLUNGKUNG',	'KUPP KELAS II NUSA PENIDA',	'Jl. Desa Ped Kec. Nusa Peninda Kab. Klungkung - Bali'),
(391,	'NRE',	'Namrole',	'BURU SELATAN',	'KUPP KELAS III NAMROLE',	'Jl. Komp. Pelabuhan Leksula Kec. Leksula Kab. Buru Selatan - Ambon Maluku 97573'),
(392,	'NTI',	'Bintuni',	'TELUK BINTUNI',	'KUPP KELAS II BINTUNI',	'Jl. Raya Umum Bintuni Manokwari Papua Barat 98364'),
(393,	'NUN',	'Nunbaun Sabu (Namosain)',	'KUPANG',	'KUPP KELAS II ATAPUPU',	'Jl. Pelabuhan No. 1 Atapupu Nusa Tenggara Timur'),
(394,	'ONG',	'Poopongan',	'MAMUJU',	'KUPP KELAS I MAMUJU',	'Jl. Yos Sudarso No. 2 Mamuju Kab. Mamuju Sulbar 91511'),
(395,	'ONN',	'Oswald SiahaanLabuhan Angin',	'TAPANULI TENGAH',	'KUPP KELAS III BARUS',	'Jl. Yos Sudarso No. 02 Kel. Pasar Batu Grigis Barus Kab. Tapanuli Tengah Sumatera Utara 22564'),
(396,	'ONR',	'KatalokaOndor',	'SERAM BAGIAN TIMUR',	'KUPP KELAS III GESER',	'Jl. Pelabuhan Geser Seram Bagian Timur- Maluku 97594'),
(397,	'OOS',	'Ogoamas',	'DONGGALA',	'UPP KELAS III OGOAMAS',	'Jl. Pelabuhan No. 7 Kec. Sojol Utara Kab. Donggala Sulteng'),
(398,	'OPI',	'Oepoli',	'KUPANG',	'KUPP KELAS II ATAPUPU',	'Jl. Pelabuhan No. 1 Atapupu Nusa Tenggara Timur'),
(399,	'ORA',	'Oransbari',	'MANOKWARI',	'KUPP KELAS III ORANSBARI',	'Jl. Pelabuhan Oransbari Papua Barat'),
(400,	'PAB',	'P. Sabutung',	'BONE',	'KUPP KELAS II MACCINI BAJI',	'Jl. Pelabuhan BiringKasie Pengkeb Sulsel 90651'),
(401,	'PAE',	'Palue',	'SIKA',	'KSOP KELAS IV LAURENTIUS SAYMAUMERE',	'Jl. R. E Marthadinata No. 7 Maumere - Nusa Tenggara Timur 86113'),
(402,	'PAH',	'PalohSakura',	'SAMBAS',	'KUPP KELAS III PALOHSAKURA',	'Jl. Komp. Pelabuhan Merbau Paloh Kab. Sambas Laimantan Barat 79466'),
(403,	'PAR',	'Para',	'KEPULAUAN SANGIHE',	'KUPP KELAS II TAHUNA',	'Jl.Pelabuhan Tahuna No.1 Kab .Kepl.Sangihe Tahuna Sulawesi Utara 95851'),
(404,	'PAZ',	'Pasuruan',	'PASURUAN',	'KSOP KELAS V PASURUAN',	'Jl. Yos Sudarso No. 158 Pasuruan Jatim 67126'),
(405,	'PBI',	'Padang Bai',	'KARANG ASEM',	'KSOP KELAS IV PADANG BAI',	'Jl. Didalam Areal Pelabuhan Penyebrangan Padangbai Bali 80872'),
(406,	'PCE',	'Pantai Cermin',	'SERDANG BEDAGAI',	'KUPP KELAS III PANTAI CERMIN',	'Jl. HT Rizal Nudin No.465 Pantai Cermin 20987 TelpFax 061-7970102 Email : upppantaicermin@dephub.go.id'),
(407,	'PCI',	'Pacitan',	'PACITAN',	'UPP KELAS III BRONDONG',	'Jl. Pelabuhan No. 1 Sedayulawas Kec. Brondong Lamongan Jawa Timur - 662814'),
(408,	'PDD',	'Pangkalan Dodek',	'BATU BARA',	'KUPP KELAS III PANGKALAN DODEK',	'Jl. Pelabuhan Desa Nenas Siau Batubara Suamtera Utara 21258 TelpFax. 0622-5892962 5892970 Email : kanpelpangkalandodek@yahoo.co.id  upppangkalandodek@dephub.go.id'),
(409,	'PDE',	'Pulau Ende',	'ENDE',	'KSOP KELAS IV ENDE',	'Jl. Adi Sucipto Ippi Ende NTT 86316'),
(410,	'PDR',	'Pangandaran',	'SUKABUMI',	'KUPP KELAS III PANGANDARAN',	'INDRAMAYU'),
(411,	'PEA',	'Petta',	'KEPULAUAN SANGIHE',	'KUPP KELAS II TAHUNA',	'Jl.Pelabuhan Tahuna No.1 Kab .Kepl.Sangihe Tahuna Sulawesi Utara 95851'),
(412,	'PEE',	'Pehe',	'SITARO',	'KUPP KELAS III ULU SIAU',	'Jl. Komp. Pelabuhan Ulu Siau Kel. Tatahadeng Kec. Siau Timur Kep. Tagulandang Biaro Sultra 95861'),
(413,	'PEI',	'Polewali',	'POLEWALI MANDAR',	'KUPP KELAS II SILOPO',	'Jl. Bahari I No. 1 Polewali Sulbar 91311'),
(414,	'PEL',	'Pelita',	'HALMAHERA SELATAN',	'KUPP KELAS II LABUHABABANG',	'Jl.Pelabuhan No. 25 Desa Babang Kec. Bacan Timur 97791'),
(415,	'PES',	'P. Sebesi',	'LAMPUNG SELATAN',	'KUPP KELAS III TELUK BETUNG',	'BANDAR LAMPUNG'),
(416,	'PEX',	'Pekalongan',	'PEKALONGAN',	'KUPP KELAS II PEKALONGAN',	'KOTA PEKALONGAN'),
(417,	'PGB',	'P. Gebe',	'HALMAHERA TIMUR',	'KUPP KELAS III WEDA',	'Jl. Pulau Fao Kec. Pilau Gebe Kab. Halmahera Tengah Komp. Pelabuhan Gebe Maluku Utara'),
(418,	'PGM',	'Pagimana',	'BANGGAI',	'KUPP KELAS III PAGIMANA',	'Jl. Pelabuhan No. 1 Kc. Pagimana Kab. Banggai- Sulteng 94752'),
(419,	'PGX',	'Pangkal Balam',	'KOTA PANGKAL PINANG',	'KSOP KELAS IV PANGKAL BALAM',	'-'),
(420,	'PHI',	'PelaihariSwarangan',	'TANAH LAUT',	'KUPP KELAS III KINTAP',	'Jl. Batu Anting Desa Kintap Kecil Kec. Kintap Kab. Tanah Laut Kalsel - 70883'),
(421,	'PIN',	'Panipahan',	'ROKAN HILIR',	'KUPP KELAS III PANIPAHAN',	'BENGKALIS'),
(422,	'PIO',	'Pattirobajo',	'BONE',	'KUPP KELAS III PATTIROBAJO',	'Jl. Pelabuhan No. 1 Kec. Sibulue Kab. Bone Sulsel 92781'),
(423,	'PJM',	'Jampea',	'KEPULAUAN SELAYAR',	'KUPP KELAS III JAMPEA',	'Jl. Pelabuhan No. 1 Benteng Jampea Sulsel'),
(424,	'PJN',	'Pekajang',	'LINGGA',	'KUPP KELAS III DABO SINGKEP',	'DABO SINGKEP - KEPULAUAN RIAU'),
(425,	'PKA',	'Pulau Kampai',	'LANGKAT',	'KUPP KELAS III PULAU KAMPAI',	'LANGKAT - SUMATERA UTARA'),
(426,	'PKR',	'Pangkalan Brandan',	'LANGKAT',	'KSOP KELAS IV PANGKALAN SUSU',	'Jl. Pelabuhan No. 05 Pangkalan Susu Langkat Sumatera Utara 20858'),
(427,	'PKS',	'Pangkalan Susu',	'LANGKAT',	'KSOP KELAS IV PANGKALAN SUSU',	'Jl. Pelabuhan No. 05 Pangkalan Susu Langkat Sumatera Utara 20858'),
(428,	'PLB',	'Pangkalan Bun',	'KOTAWARINGIN BARAT',	'KSOP KELAS IV PANGKALAN BUN',	'Jl. Pangeran Antasari Komp. Pelabuhan Pangkalan Bun Kalimantan Tengah'),
(429,	'PLH',	'Paleleh',	'BUOL',	'UPP KELAS III LEOK',	'Jl. Syarif Mansyur No. 356 Kel. Leok 1 Kec. Biau Kab. Buol Sulteng 94563'),
(430,	'PLI',	'Palipi',	'MAJENE',	'KUPP KELAS III MAJENE',	'Jl. Ammana Wewang No. 21 Kab. Majene Sulbar 91411'),
(431,	'PLY',	'Pulau Kayoa',	'HALMAHERA SELATAN',	'KUPP KELAS III SOA-SIU',	'Jl. Yos Sudarso Kel. Indonesiana Kota Tidore Kepulauan 97813'),
(432,	'PMI',	'Pegatan Mendawai',	'KATINGAN',	'KSOP KELAS V PEGATAN MENDAWAI',	'Jl. Merdeka No 2 Pegatan Mendawai Klateng 74463'),
(433,	'PMK',	'Pomako',	'MIMIKA',	'KUPP KELAS II POMAKO IPOMAKO II',	'Jl. Komp. Pelabuhan Pomako Timika Papua 99910'),
(434,	'PMN',	'PamanukanBlanakan',	'SUBANG',	'KUPP KELAS III PELABUHAN PAMANUKAN',	'PAMANUKAN'),
(435,	'PNI',	'Paniti',	'HALMAHERA TENGAH',	'KUPP KELAS III WEDA',	'Jl. Pulau Fao Kec. Pilau Gebe Kab. Halmahera Tengah Komp. Pelabuhan Gebe Maluku Utara'),
(436,	'PNJ',	'Panjang',	'BANDAR LAMPUNG',	'KSOP KELAS I PANJANG',	'Jl. Yos Sudarso No. 34A Panjang Bandar Lampung Lampung 35241'),
(437,	'PNK',	'Pontianak',	'PONTIANAK',	'KSOP KELAS II PONTIANAK',	'Jl. Rahadi Usman No. 2 Pontianak Kalimantan Barat'),
(438,	'POA',	'Pota',	'MANGGARAI TIMUR',	'KUPP KELAS II REO',	'Jl. Pelabuhan Reo Kec. Reo Kab. Manggarai Kediri Nusa Tenggara Timur - 86592'),
(439,	'POJ',	'PalopoTg. Ringgit',	'KOTA PALOPO',	'KUPP KELAS II PALOPO',	'LUWU'),
(440,	'POW',	'Pulau Owi',	'BIAK NUMFOR',	'KSOP KELAS III BIAK',	'Jl.Jendral Sudirman No. 53 Biak Papua 98115'),
(441,	'PPE',	'Pasipalele',	'HALMAHERA SELATAN',	'KUPP KELAS II LABUHABABANG',	'Jl.Pelabuhan No. 25 Desa Babang Kec. Bacan Timur 97791'),
(442,	'PPI',	'Popolii',	'TOJO UNA-UNA',	'KUPP KELAS III AMPANA',	'Jl. Yos Sudarso No. 25 Ampana Sulteng 94683'),
(443,	'PPM',	'Pam',	'RAJA AMPAT',	'KUPP KELAS II RAJA AMPAT',	'Jl. Trikora No. 19 Saonek Kab. Raja Ampat Prov. Papua Barat'),
(444,	'PPS',	'Pulang Pisau',	'PULANG PISAU',	'KSOP KELAS IV PULANG PISAU',	'Jl. Samudera No. 137 Rt. XIII Pulang Pisau Kalimantan Tengah 73561'),
(445,	'PQR',	'Pekanbaru',	'KOTA PEKANBARU',	'KSOP KELAS III PEKANBARU',	'Jl. Kampung Dalam I Rt.0105 Pekanbaru - Riau 28152'),
(446,	'PRA',	'Palabuhanratu',	'SUKABUMI',	'KUPP KELAS III PELABUHAN RATU',	'SUKABUMI'),
(447,	'PRI',	'Parigi',	'PARIGI MOUTONG',	'KUPP KELAS III PARIGI',	'Jl. Pelabuhan Parigi No. 92 Kec. Parigi Kab. Donggala Parigi Palu Sulteng 94371'),
(448,	'PRJ',	'Pigaraja',	'HALMAHERA SELATAN',	'KUPP KELAS II LABUHABABANG',	'Jl.Pelabuhan No. 25 Desa Babang Kec. Bacan Timur 97791'),
(449,	'PRN',	'Panarukan',	'SITUBONDO',	'KSOP KELAS IV PANARUKAN',	'Jl. Pelabuhan No.1 Panurukan Jatim - 68351'),
(450,	'PSJ',	'Poso',	'POSO',	'KUPP KELAS III POSO',	'Jl. Pattimura No 3 Poso Sulawesi Tengah 94616'),
(451,	'PSN',	'Pasean',	'PAMEKASAN',	'KUPP KELAS III TELAGA BIRU',	'Jl. Pelabuhan No. 54 Telagabiru Bangkalan Jawa Timur 69156'),
(452,	'PTA',	'Teluk Air  Padang Tikar',	'KUBU RAYA',	'KSOP KELAS III PADANG TIKAR',	'Jl. Pelabuhan No. 1 Kec. Batu Amper Kab. Kubu Raya Pontianak Kalimantan Barat 78385'),
(453,	'PTB',	'Pulau Tabuan',	'TANGGAMUS',	'KUPP KELAS III KOTA AGUNG',	'LAMPUNG SELATAN'),
(454,	'PTE',	'Pulau Tello',	'NIAS SELATAN',	'KUPP KELAS III PULAU TELLO',	'PULAU TELLO - NIAS SELATAN'),
(455,	'PTI',	'Patani',	'HALMAHERA TENGAH',	'KUPP KELAS III WEDA',	'Jl. Pulau Fao Kec. Pilau Gebe Kab. Halmahera Tengah Komp. Pelabuhan Gebe Maluku Utara'),
(456,	'PTK',	'Parit Rempak',	'KEPULAUAN RIAU',	'KSOP KELAS I TANJUNG BALAI KARIMUN',	'-'),
(457,	'PTL',	'Pantoloan',	'KOTA PALU',	'KSOP KELAS II TELUK PALUXXXXX',	'Jl. Mutiara No.4 Donggala'),
(458,	'PTM',	'Patimban',	'SUBANG',	'KUPP KELAS III PELABUHAN PAMANUKAN',	'PAMANUKAN'),
(459,	'PTT',	'Pamatata',	'KEPULAUAN SELAYAR',	'UPP KELAS III SELAYAR',	'Jl. Pelabuhan No. 1 anteng Selayar Sulsel 92812'),
(460,	'PUA',	'Pulau Salura',	'SUMBA TIMUR',	'KSOP KELAS IV WAINGAPU',	'Jl. Nangamesi No. 11 Waingapu Nusa Tenggara Timur 87110'),
(461,	'PUN',	'Pulau Seluan',	'NATUNA',	'KUPP KELAS II TAREMPA',	'PASIR PANJANG - KEPULAUAN RIAU'),
(462,	'PYH',	'Gita Payahe',	'KOTA TIDORE KEPULAUAN',	'KUPP KELAS III SOA-SIU',	'Jl. Yos Sudarso Kel. Indonesiana Kota Tidore Kepulauan 97813'),
(463,	'RAM',	'Tanjung TiramBatubara',	'BATU BARA',	'KUPP TANJUNG TIRAM',	'ASAHAN'),
(464,	'RAQ',	'Raha',	'MUNA',	'KUPP KELAS II RAHA',	'Jl. Pelabuhan No. 1 Raha Sulawesi Tenggara 93611'),
(465,	'RAS',	'P. Raas',	'SUMENEP',	'KUPP KELAS III SAPUDI',	'Jl. Pelabuhan No. 1 Gawam Sapudi Kab. Sumenep Madura Jawa Timur 69483'),
(466,	'RBG',	'Rembang',	'REMBANG',	'KUPP KELAS III PELABUHAN REMBANG',	'REMBANG'),
(467,	'RCI',	'RengatKuala Cinaku',	'INDRAGIRI HULU',	'KSOP KELAS IV RENGATKUALA CINAKU',	'Jl. Ahmad Yani No. 10 Rengat Inhu - Riau 29319 Telp. 0769-323355 Fax. 0769-323466 ksoprengat@dephub.go.id'),
(468,	'REO',	'Reo',	'MANGGARAI',	'KUPP KELAS II REO',	'Jl. Pelabuhan Reo Kec. Reo Kab. Manggarai Kediri Nusa Tenggara Timur - 86592'),
(469,	'RGG',	'Rangga Ilung',	'BARITO SELATAN',	'KSOP KELAS IV KUMAI',	'Jl. Bendahara No. 230 Kumai Kab. Kotawaringin Barat - Kalteng 74181'),
(470,	'RIA',	'Raijua',	'SABU RAIJUA',	'KUPP KELAS III SEBA',	'Jl. Pelabuhan No. 01 Kec.Sabu Barat Kab.Seburaijua Seba Nusa Tenggara Timur'),
(471,	'RIG',	'Riung',	'NGADA',	'KUPP KELAS III MARAPOKOT',	'Jl. Pelabuhan Marapokot No. 01 Marapokot Nusa Tenggara Timur 86472'),
(472,	'RIS',	'Rainis',	'KEPULAUAN TALAUD',	'KUPP KELAS III MELONGUANE',	'Jl Komp. Pelabuhan Lirung Kec. Lirung Kab. Talaud Lirung Sulawesi Utara 95871'),
(473,	'RMG',	'HilaRomang',	'MALUKU BARAT DAYA',	'UPP KELAS III WONRELI',	'Jl. Pelabuhan Wonreli Maluku 97653'),
(474,	'RNE',	'Sluke',	'REMBANG',	'KUPP KELAS III PELABUHAN REMBANG',	'REMBANG'),
(475,	'RNI',	'Ranai',	'NATUNA',	'KUPP KELAS II TAREMPA',	'PASIR PANJANG - KEPULAUAN RIAU'),
(476,	'RSK',	'Ransiki',	'MANOKWARI',	'KUPP KELAS III ORANSBARI',	'Jl. Pelabuhan Oransbari Papua Barat'),
(477,	'RUH',	'SaparuaHaria',	'MALUKU TENGAH',	'KUPP KELAS II TULEHU',	'Jl.Pelabuhan Hurmala Tulehu Maluku 97582'),
(478,	'SAA',	'Sukamara',	'SUKAMARA',	'KSOP KELAS IV SUKAMARA',	'Jl. Pelabuhan No. 14 Sukamara Kalimantan Tengah 74172'),
(479,	'SAG',	'Sampang',	'SAMPANG',	'UPP KELAS II BRANTA',	'Jl. Pelabuhan Branta No. 1 Tlanakan Pamekasan - 69371'),
(480,	'SAI',	'P. Sailus',	'PANGKAJENE KEPULAUAN',	'KUPP KELAS II MACCINI BAJI',	'Jl. Pelabuhan BiringKasie Pengkeb Sulsel 90651'),
(481,	'SAL',	'Salakan',	'BANGGAI KEPULAUAN',	'KUPP KELAS II BANGGAI',	'Jl. Komp. Pelabuhan Banggai Kab. Banggai Kepulauan Sulteng 94791'),
(482,	'SAP',	'Sape',	'BIMA',	'KUPP KELAS III SAPE',	'Jl. Pelabuhan Niaga No. 1 Sape Bima Kab. Bima Nusa Tenggara Barat'),
(483,	'SBD',	'Sibadeh',	'ACEH SELATAN',	'KUPP KELAS III TAPAK TUAN',	'ACEH SELATAN'),
(484,	'SBE',	'Sei Berombang',	'LABUAN BATU',	'KUPP KELAS III SEI BEROMBANG',	'Jl. Syahbandar No. 86 Sei Barombong Sumatera Utara 21473'),
(485,	'SBG',	'Sabang',	'KOTA SABANG',	'KSOP KELAS IV SABANG',	'Jl. Malahayati No. 82 Sabang NAD 23512 Telp. 0652-21016 Fax. 0652-21017 Email : adpelsabang@yahoo.co.id  ksopsabang@dephub.go.id'),
(486,	'SBO',	'Sibigo',	'SIMEULUE',	'KUPP KELAS III SINABANG',	'Jl. Naional No. 212 Sinabang NAD 23691'),
(487,	'SDI',	'Sadai',	'BANGKA SELATAN',	'UNIT PENYELENGGARA PELABUHAN KELAS III SADAI',	'BANGKA'),
(488,	'SDQ',	'Tanjung Sidupa',	'GORONTALO UTARA',	'KUPP KELAS III LABUHAN UKIINEBONTO',	'Jl. Pelabuhan No. 128 Desa Labuhan Uki Kec. Loka Kab. Bolaang Mongondow Sulut 95761'),
(489,	'SDU',	'Sedanau',	'NATUNA',	'KUPP KELAS II TAREMPA',	'PASIR PANJANG - KEPULAUAN RIAU'),
(490,	'SEG',	'Serongga',	'BARU',	'KUPP KELAS III TANJUNG BATU',	'Jl. Pangeran Arga Kusuma No. 2 Kec. Kelumpang Tengah Kab. Kotabaru Tanjung Batu Kalsel - 72164'),
(491,	'SEI',	'Sebuku',	'BARU',	'KUPP KELAS III SEBUKU',	'Jl. Raya Batulicin RT.010002 Batu Licin Tanah Bumbu Kalsel - 72171'),
(492,	'SEL',	'Sebalang',	'LAMPUNG SELATAN',	'KUPP KELAS III TELUK BETUNG',	'BANDAR LAMPUNG'),
(493,	'SEO',	'Sepo',	'HALMAHERA TENGAH',	'KUPP KELAS III WEDA',	'Jl. Pulau Fao Kec. Pilau Gebe Kab. Halmahera Tengah Komp. Pelabuhan Gebe Maluku Utara'),
(494,	'SEQ',	'Sungai Pakning',	'BENGKALIS',	'KSOP KELAS III SUNGAI PAKNING',	'bengkalis'),
(495,	'SET',	'Seget',	'SORONG',	'KUPP KELAS III TAMINABUAN',	'Jl. Pelabuhan Teminibuan Kab. Sorang Selatan Papua Barat'),
(496,	'SFI',	'Sofifi',	'KOTA TIDORE KEPULAUAN',	'KUPP KELAS III SOA-SIU',	'Jl. Yos Sudarso Kel. Indonesiana Kota Tidore Kepulauan 97813'),
(497,	'SGG',	'Sungsang',	'BANYUASIN',	'KSOP KELAS II PALEMBANG',	'Banyuasin-Sumatera Selatan'),
(498,	'SGQ',	'Sangatta',	'KUTAI TIMUR',	'KUPP KELAS II SANGATTA',	'Jl. Pelabuhan No 6 Sangatta .Kab .Kutai Timur Kaliamntan Timur 75612'),
(499,	'SII',	'Sigli',	'PIDIE',	'KSOP KELAS IV MALAHAYATI',	'Jl. Patimura No. 89 Kel. Sukaramai Blower Banda Aceh TelpFax. 0651-48555 Email : adpelmalahayati@yahoo.com  ksopmalahayati@dephub.go.id'),
(500,	'SIK',	'Sikakap',	'KEPULAUAN MENTAWAI',	'KUPP KELAS III SIKAKAP',	'MENTAWAI'),
(501,	'SIO',	'SoasioGoto',	'KOTA TIDORE KEPULAUAN',	'KUPP KELAS III SOA-SIU',	'Jl. Yos Sudarso Kel. Indonesiana Kota Tidore Kepulauan 97813'),
(502,	'SIUB',	'Siuban',	'KEPULAUAN MENTAWAI',	'KUPP KELAS III SIUBAN',	'MENTAWAI'),
(503,	'SJI',	'SinjaiLarea-rea',	'SINJAI',	'KUPP KELAS III SINJAI',	'Jl. Halim Perdana Kusuma Sinjai Sulsel 92614'),
(504,	'SKA',	'Saketa',	'HALMAHERA SELATAN',	'KUPP KELAS II LABUHABABANG',	'Jl.Pelabuhan No. 25 Desa Babang Kec. Bacan Timur 97791'),
(505,	'SKB',	'Pokai',	'KEPULAUAN MENTAWAI',	'KUPP KELAS III MUARA SIBERUT',	'Kepulauan Mentawai-Sumatera Barat'),
(506,	'SKE',	'Sunda Kelapa',	'JAKARTA UTARA',	'KSOP KELAS III SUNDA KELAPA',	'Jl. Raya Baruna No. 2 Pelabuhan Sunda Kelapa Jakarta Utara 14430'),
(507,	'SKI',	'Sangkulirang',	'KUTAI TIMUR',	'KUPP KELAS III SANGKULIRANG',	'Jl. Pelabuhan No. 20 Sankulirang Kaltim 75384'),
(508,	'SKJ',	'Sei Kolak Kijang',	'KOTA TANJUNG PINANG',	'KSOP KELAS III KIJANG',	'Jl. Pelabuhan Sri Bayintan No. 9 Kijang - Kepri 29151 Telp. 0771-463765 Fax. 0771-61561 ksopkijang@dephub.go.id'),
(509,	'SKL',	'Sikeli',	'BOMBANA',	'KUPP KELAS I BAU-BAU',	'Jl. Yos Sudarso No. 5 Kel. Wale Kec. Wolio Kota Baubau Provinsi Sultra 93711'),
(510,	'SKM',	'Saukorem',	'MANOKWARI',	'KSOP KELAS IV MANOKWARI',	'Jl.Banjarmasin No 6 Monokwari Papua Barat 98311'),
(511,	'SKW',	'Singkawang',	'SAMBAS',	'KSOP KELAS IV SINTETE PEMANGKAT',	'Jl. Pelabuhan No. 1 Sintete Pemangkat Prov. Kalimantan Barat 79453'),
(512,	'SLG',	'Sibolga',	'KOTA SIBOLGA',	'KSOP KELAS IV SIBOLGA',	'Jl. Horas Pelabuhan Sibolga Sibolga Sumatera Utara 22532'),
(513,	'SLJ',	'Selat Panjang',	'PULAU MERANTI',	'KSOP KELAS IV SELAT PANJANG',	'Jl. Pelabuhan No. 2 Selat Panjang Riau 28753'),
(514,	'SLU',	'Sungai Lumpur',	'OGAN KOMERING ILIR',	'KUPP KELAS III SUNGAI LUMPUR',	'OGAN KOMERING ILIR'),
(515,	'SMA',	'Samuda',	'KOTAWARINGIN TIMUR',	'KSOP KELAS V SAMUDA',	'Jl. H.M. Noor No .5 Rt.01Rw.01 Samuda Kalimantan Tengah 74363'),
(516,	'SME',	'Subaim',	'HALMAHERA TIMUR',	'KUPP KELAS III BULI',	'Jl. Pelabuhan Buli Kec. Maba Kab. Halmahera Malut'),
(517,	'SMQ',	'Sampit',	'KOTAWARINGIN TIMUR',	'KSOP KELAS III SAMPIT',	'Jl. Iskandar No. 3 Sampit Kota Waringin Timur Kalimantan Tengah 74322'),
(518,	'SMU',	'Pulau Sambu',	'KOTA BATAM',	'KSOP KELAS III PULAU SAMBU',	'-'),
(519,	'SNE',	'Sintete',	'SAMBAS',	'KSOP KELAS IV SINTETE PEMANGKAT',	'Jl. Pelabuhan No. 1 Sintete Pemangkat Prov. Kalimantan Barat 79453'),
(520,	'SNG',	'Sinabang',	'SIMEULUE',	'KUPP KELAS III SINABANG',	'Jl. Naional No. 212 Sinabang NAD 23691'),
(521,	'SNI',	'Sinaboi',	'ROKAN HILIR',	'KUPP KELAS III SINABOI',	'BENGKALIS'),
(522,	'SNL',	'Singkil',	'ACEH SINGKIL',	'KUPP KELAS III SINGKIL',	'Jl. Utama No. 20 Pulo Sarok Singkil Kab. Aceh Singkil 24785'),
(523,	'SNP',	'Branta',	'PAMEKASAN',	'UPP KELAS II BRANTA',	'Jl. Pelabuhan Branta No. 1 Tlanakan Pamekasan - 69371'),
(524,	'SNYK',	'Sungai NyamukSebatik',	'NUNUKAN',	'KUPP KELAS III SUNGAI NYAMUK',	'Jl. Dermaga Sungai Nyamuk No. 1 Kec. Sebatik Kab. Nunukan 77483'),
(525,	'SOK',	'Saonek',	'RAJA AMPAT',	'KUPP KELAS II RAJA AMPAT',	'Jl. Trikora No. 19 Saonek Kab. Raja Ampat Prov. Papua Barat'),
(526,	'SOQ',	'Sorong',	'SORONG',	'KSOP KELAS I SORONG',	'Jl.Jendral A Yani No 19 Sorong Papua Barat 98413'),
(527,	'SOU',	'Siompu',	'BUTON',	'KUPP KELAS I BAU-BAU',	'Jl. Yos Sudarso No. 5 Kel. Wale Kec. Wolio Kota Baubau Provinsi Sultra 93711'),
(528,	'SPK',	'P. Sapuka',	'PANGKAJENE KEPULAUAN',	'KUPP KELAS II MACCINI BAJI',	'Jl. Pelabuhan BiringKasie Pengkeb Sulsel 90651'),
(529,	'SPN',	'Sapeken',	'SUMENEP',	'KUPP KELAS III PELABUHAN SAPEKEN',	'Jl. Pelabuhan No. 01 Sapeken Suminto Madura Jatim'),
(530,	'SQN',	'Sanana',	'KEPULAUAN SULA',	'KUPP KELAS II SANANA',	'Jl.Komplek Pelabuhan Sanana Maluku Utara 97795'),
(531,	'SQQ',	'Tanjung Selor Kayu  Kayan I',	'BULUNGAN',	'KUPP KELAS II TANJUNG SELOR',	'Jl. Jend Sudirman Rt.VIII No. 16 Tanjung Selor Kalimantan Utara 77212'),
(532,	'SRG',	'Tanjung Emas',	'SEMARANG',	'KSOP KELAS I TANJUNG EMAS SEMARANG',	'Jl. Yos Sudarso No. 30 Kel. Tanjung Emas Kec. Semarang Jateng 50174 TelpFax. 024-3852335 ksoptanjungemas@dephub.go.id'),
(533,	'SRI',	'Samarinda',	'KOTA SAMARINDA',	'KSOP KELAS II SAMARINDA',	'Jl. Yos Sudarso No. 2 Samarinda Kalimantan Timur 75113'),
(534,	'SRS',	'Serasan',	'NATUNA',	'KUPP KELAS II TAREMPA',	'PASIR PANJANG - KEPULAUAN RIAU'),
(535,	'SRU',	'Sirombu',	'NIAS BARAT',	'KUPP KELAS III SIROMBU',	'SIROMBU - NIAS BARAT'),
(536,	'SRX',	'Seira',	'MALUKU TENGGARA BARAT',	'KUPP KELAS II SAUMLAKI',	'Jl.Pelabuhan Saumlaki Kec. Tanibar Selatan Kab. Saumlaki Maluku 97762'),
(537,	'SSR',	'Sausapor',	'TAMBRAUW',	'KUPP KELAS II RAJA AMPAT',	'Jl. Trikora No. 19 Saonek Kab. Raja Ampat Prov. Papua Barat'),
(538,	'STA',	'Selat Lampa',	'NATUNA',	'KUPP KELAS II TAREMPA',	'PASIR PANJANG - KEPULAUAN RIAU'),
(539,	'SUB',	'Tanjung Perak',	'KOTA SURABAYA',	'KANTOR SYAHBANDAR UTAMA TANJUNG PERAK SURABAYA',	'Jl. Kalimas Baru No. 194 Surabaya Jawa Timur 60165'),
(540,	'SUI',	'Subi',	'NATUNA',	'KUPP KELAS II TAREMPA',	'PASIR PANJANG - KEPULAUAN RIAU'),
(541,	'SUQ',	'Sungai Guntung',	'INDRAGIRI HILIR',	'KUPP KELAS III SUNGAI GUNTUNG',	'INDRAGIRI HILIR'),
(542,	'SUR',	'SatuiBatu licin',	'TANAH BUMBU',	'KUPP KELAS III SEI DANAUSATUI',	'Jl. Kuripan No. 5 Rt.24Sungai Danau Satui Kab. Tanah Bumbu Sungai Danau Satui Kalsel 72175'),
(543,	'SUS',	'Susoh',	'ACEH BARAT DAYA',	'KUPP KELAS III SUSOH',	'Jl. Datuk Digaduang No.167 Susoh Nanggroe Aceh Darussalam 23765'),
(544,	'SWA',	'SiwaBangsalae',	'WAJO',	'KUPP KELAS III SIWA',	'Jl. Pelabuhan No. 1 Kec. Pitumpanua Kab. Wajo Siwa Sulsel 90992'),
(545,	'SWG',	'Sawang',	'SITARO',	'KUPP KELAS III ULU SIAU',	'Jl. Komp. Pelabuhan Ulu Siau Kel. Tatahadeng Kec. Siau Timur Kep. Tagulandang Biaro Sultra 95861'),
(546,	'SWU',	'Serwaru',	'MALUKU BARAT DAYA',	'UPP KELAS III WONRELI',	'Jl. Pelabuhan Wonreli Maluku 97653'),
(547,	'SXK',	'Saumlaki',	'MALUKU TENGGARA BARAT',	'KUPP KELAS II SAUMLAKI',	'Jl.Pelabuhan Saumlaki Kec. Tanibar Selatan Kab. Saumlaki Maluku 97762'),
(548,	'SYG',	'Senayang',	'LINGGA',	'KUPP KELAS III SENAYANG',	'SENAYANG - KEPULAUAN RIAU'),
(549,	'SYP',	'Sesayap',	'TANAH TIDUNG',	'KSOP KELAS III TARAKAN',	'Jl. Yos Sudarso No. 8 Lingkas Ujug Tarakan Kalimantan Utara 77126'),
(550,	'TAA',	'Tilamuta',	'BOALEMO',	'UPP KELAS III TILAMUTA',	'Jl. Pelabuhan No. 106 Kec. Tilamuta Kab. Boalemo Gorontalo 96263'),
(551,	'TAG',	'Kota Agung',	'TANGGAMUS',	'KUPP KELAS III KOTA AGUNG',	'LAMPUNG SELATAN'),
(552,	'TAI',	'Tanjung Satai',	'KAYONG UTARA',	'KUPP KELAS III TELUK MELANO',	'Jl. Gusti Aplos No. 93 Rt.8RwIII Kalbar 78853'),
(553,	'TBD',	'Tanjung Batu Kundur',	'KARIMUN',	'KUPP KELAS II TANJUNG BATU KUNDUR',	'Jl. Pemuda No. 21 Tanjung Batu Kota Kec. Kundur Kab. Karimun Kepulauan Riau 29662 Telp. 0779-21020 Fax. 0779-21001 upptanjungbatukundur@dephub.go.id'),
(554,	'TBE',	'Tanjung Beringin',	'SERDANG BEDAGAI',	'KUPP KELAS II TANJUNG BERINGIN',	'ASAHAN'),
(555,	'TBG',	'Teluk Betung',	'BANDAR LAMPUNG',	'KUPP KELAS III TELUK BETUNG',	'BANDAR LAMPUNG'),
(556,	'TBL',	'Toboali',	'BANGKA SELATAN',	'UNIT PENYELENGGARA PELABUHAN KELAS III SADAI',	'BANGKA'),
(557,	'TBO',	'Tobelo',	'HALMAHERA UTARA',	'KUPP KELAS I TOBELO',	'Jl. Pelabuhan No.1 Tobelo Kab. Halmahera Utara Prov. Maluku Utara'),
(558,	'TBY',	'Teluk Bayur',	'KOTA PADANG',	'KSOP KELAS II TELUK BAYUR',	'Jl. Tanjung Priok No. 4 Teluk Bayur Sumatera Barat 25217'),
(559,	'TDA',	'Teluk Dalam',	'NIAS SELATAN',	'KUPP KELAS III TELUK DALAM NIAS',	'NIAS SELATAN'),
(560,	'TEE',	'Tabarfane',	'KAB. TUAL',	'KUPP KELAS II DOBO',	'Jl.Pelabuhan No. 3 Dobo Maluku 97662'),
(561,	'TEG',	'Tegal',	'TEGAL',	'KSOP KELAS IV TEGAL',	'-'),
(562,	'TEI',	'Ternate',	'KOTA TERNATE',	'KSOP KELAS II TERNATE',	'Jl. Jend. Ahmad Yani Kompleks Pelabuhan Ahmad Yani Ternate Maluku Utara 97724'),
(563,	'TEK',	'Parlimbungan Ketek',	'MANDAILING NATAL',	'KUPP KELAS III BATAHAN',	'Mandailing Natal-Sumatera Utara'),
(564,	'TFE',	'Tifure',	'KOTA TERNATE',	'KUPP KELAS III SOA-SIU',	'Jl. Yos Sudarso Kel. Indonesiana Kota Tidore Kepulauan 97813'),
(565,	'TFG',	'Teluk Tapang',	'PASAMAN BARAT',	'KSOP KELAS II TELUK BAYUR',	'Jl. Tanjung Priok No. 4 Teluk Bayur Sumatera Barat 25217'),
(566,	'TGL',	'Tagulandang',	'SITARO',	'KUPP KELAS III ULU SIAU',	'Jl. Komp. Pelabuhan Ulu Siau Kel. Tatahadeng Kec. Siau Timur Kep. Tagulandang Biaro Sultra 95861'),
(567,	'TGP',	'Tanjung Api-Api',	'BANYUASIN',	'PEMBANGUNAN FASILITAS PELABUHAN TANJUNG API-API',	'Kab. Banyuasin Rimau Sungsang Palembang Kabupaten Banyu Asin Sumatera Selatan 30971'),
(568,	'TGU',	'Telaga Biru',	'BANGKALAN',	'KUPP KELAS III TELAGA BIRU',	'Jl. Pelabuhan No. 54 Telagabiru Bangkalan Jawa Timur 69156'),
(569,	'THA',	'Tahuna',	'KEPULAUAN SANGIHE',	'KUPP KELAS II TAHUNA',	'Jl.Pelabuhan Tahuna No.1 Kab .Kepl.Sangihe Tahuna Sulawesi Utara 95851'),
(570,	'THH',	'Tuhaha',	'MALUKU TENGAH',	'KUPP KELAS II TULEHU',	'Jl.Pelabuhan Hurmala Tulehu Maluku 97582'),
(571,	'TJB',	'Tanjung Balai Karimun',	'KARIMUN',	'KSOP KELAS I TANJUNG BALAI KARIMUN',	'-'),
(572,	'TJP',	'Tanjung Pakis',	'LAMONGAN',	'UPP KELAS III BRONDONG',	'Jl. Pelabuhan No. 1 Sedayulawas Kec. Brondong Lamongan Jawa Timur - 662814'),
(573,	'TJQ',	'Tanjung Pandan',	'BELITUNG',	'KSOP KELAS IV TANJUNG PANDAN',	'Jl. Pelabuhan No. 1 Tanjung Pandan Belitung 33411'),
(574,	'TKM',	'Tutu Kembong',	'MALUKU TENGGARA BARAT',	'KUPP KELAS II SAUMLAKI',	'Jl.Pelabuhan Saumlaki Kec. Tanibar Selatan Kab. Saumlaki Maluku 97762'),
(575,	'TLA',	'Tanjung Laut',	'KOTA BONTANG',	'KUPP KELAS I TANJUNG LAUT',	'Jl. Pelabuahan No.28 Rt.10 Tanjung Laut Indah Bontang Kalimantan Timur 75321'),
(576,	'TLI',	'Toli-toli',	'TOLI-TOLI',	'KSOP KELAS IV TOLI-TOLI',	'Jl. Komp. Pelabuhan Tolo-toli Sulawesi Tengah 94500'),
(577,	'TLN',	'Tembilahan',	'INDRAGIRI HULU',	'KSOP KELAS IV TEMBILAHAN',	'Jl. Jend. Sudirman No. 75 Tembilahan Kab. Indragiri Hilir - Riau 29212 TelpFax. 0768-22033 Email : ksoptembilahan@gmail.com'),
(578,	'TMD',	'Tanjung Medang',	'BENGKALIS',	'KUPP KELAS III TANJUNG MEDANG',	'BENGKALIS'),
(579,	'TMP',	'Tarempa',	'KEPULAUAN ANAMBAS',	'KUPP KELAS II TAREMPA',	'PASIR PANJANG - KEPULAUAN RIAU'),
(580,	'TNJ',	'Tanjung Pinang',	'KOTA TANJUNG PINANG',	'KSOP KELAS II TANJUNG PINANG',	'Jl. SM. Amin No. 18 Kota Tanjung Pinang Kepulauan Riau 29111 TelpFax. 0771-21014 ksoptanjungpinang@dephub.go.id'),
(581,	'TNL',	'Taniwel',	'SERAM BAGIAN BARAT',	'KUPP KELAS III KAIRATU',	'Jl. Kompleks PT. IMJ Waisarisa Maluku'),
(582,	'TNU',	'Talang Duku',	'MUARO JAMBI',	'KSOP KELAS III TALANG DUKU JAMBI',	'Jl. Raya Pelabuhan Km. 9 Talang Dukuh - Jambi 36381 Telp. 0741-22844 22020 Fax. 0741-25280 ksopjambi@dephub.go.id'),
(583,	'TOK',	'Torosik',	'BOLAANG MONGONDO SELATAN',	'KUPP KELAS III KOTABUNAN',	'Jl. Komp. Pelabuhan Kotabaru Kec. Kotabunan Kab. Bomlang Kotabunan Sulut 95782'),
(584,	'TPA',	'Tepa',	'MALUKU BARAT DAYA',	'KUPP KELAS II SAUMLAKI',	'Jl.Pelabuhan Saumlaki Kec. Tanibar Selatan Kab. Saumlaki Maluku 97762'),
(585,	'TPK',	'Tapaktuan',	'ACEH SELATAN',	'KUPP KELAS III TAPAK TUAN',	'ACEH SELATAN'),
(586,	'TPR',	'Tanjung Priok',	'JAKARTA UTARA',	'KANTOR SYAHBANDAR UTAMA TANJUNG PRIOK',	'Jl. Padamarang No. 4 Tanjung Priok Jakarta Utara 14310'),
(587,	'TPT',	'Tua Pejat',	'KEPULAUAN MENTAWAI',	'KUPP KELAS III SIUBAN',	'MENTAWAI'),
(588,	'TPU',	'Tanjung Pura',	'LANGKAT',	'KSOP KELAS IV PANGKALAN SUSU',	'-'),
(589,	'TQG',	'Tangkiang',	'BANGGAI',	'KUPP KELAS II LUWUK',	'Jl. Yos Sudarso No. 1 Kel. Karaton Kec. Luwuk Kab. Banggai Sulteng 94715'),
(590,	'TQO',	'Tikong',	'KEPULAUAN SULA',	'KUPP KELAS II SANANA',	'Jl.Komplek Pelabuhan Sanana Maluku Utara 97795'),
(591,	'TQP',	'Kupang',	'KUPANG',	'KSOP KELAS V TENAU KUPANG',	'Jl. Yos Sudarso No. 27 Tenau Kupang NTT 85351'),
(592,	'TRE',	'Tanjung Redeb',	'BERAU',	'KUPP KELAS II TANJUNG REDEP',	'Jl. P. Antasari No. 27 Rt.01Rw.01 Tanjung Redep Kaltim 77312'),
(593,	'TRQ',	'Tanjung Berakit',	'KEPULAUAN RIAU',	'KUPP KELAS I TANJUNG UBAN',	'KOTA TANJUNG PINANG'),
(594,	'TSH',	'Tanjung Balai Asahan',	'ASAHAN',	'KSOP KELAS IV TANJUNG BALAI ASAHAN',	'Jl. Pelabuhan Teluk Nibung 21351'),
(595,	'TSL',	'Tanjung Sarang Elang',	'LABUAN BATU',	'KUPP KELAS III TANJUNG SARANG',	'LABUHAN BATU'),
(596,	'TSX',	'Tanjung Santan',	'KUTAI KERTANEGARA',	'KUPP KELAS III TANJUNG SANTAN',	'Jl. Chevron Tanjung Santan Terminal Balik papan P.O BOX276'),
(597,	'TTK',	'NunukanTunon Taka',	'NUNUKAN',	'KSOP KELAS IV NUNUKAN',	'Jl. Pelabuhan Baru No. 142 Nunukan - Kalimantan Timur 77482'),
(598,	'TTN',	'Teluk SigintungSeruyan',	'SERUYAN',	'KSOP KELAS III TELUK SIGINTUNG',	'Jl. AIS Nasution Kuala Pembuang Kalimantan Tengah 74211'),
(599,	'TUA',	'Tual',	'KAB. TUAL',	'KUPP KELAS II TUAL',	'Jl.Pidnang Armau No1 Komp.Pelabuhan Tual Maluku 97613'),
(600,	'TUH',	'Tulehu',	'MALUKU TENGAH',	'KUPP KELAS II TULEHU',	'Jl.Pelabuhan Hurmala Tulehu Maluku 97582'),
(601,	'UAA',	'Una-Una',	'TOJO UNA-UNA',	'KUPP KELAS III AMPANA',	'Jl. Yos Sudarso No. 25 Ampana Sulteng 94683'),
(602,	'UIA',	'ErayUpisera',	'MALUKU BARAT DAYA',	'KUPP KELAS II SAUMLAKI',	'Jl.Pelabuhan Saumlaki Kec. Tanibar Selatan Kab. Saumlaki Maluku 97762'),
(603,	'UJB',	'Ujung Jabung',	'TANJUNG JABUNG TIMUR',	'KUPP KELAS III MENDAHARA',	'-'),
(604,	'UOA',	'Belopa',	'KEPULAUAN SELAYAR',	'KUPP KELAS II PALOPO',	'LUWU'),
(605,	'USI',	'Ulu Siau',	'SITARO',	'KUPP KELAS III ULU SIAU',	'Jl. Komp. Pelabuhan Ulu Siau Kel. Tatahadeng Kec. Siau Timur Kep. Tagulandang Biaro Sultra 95861'),
(606,	'WAK',	'Wakai',	'TOJO UNA-UNA',	'KUPP KELAS III AMPANA',	'Jl. Yos Sudarso No. 25 Ampana Sulteng 94683'),
(607,	'WAM',	'TerongWaiwerang',	'FLORES TIMUR',	'KUPP KELAS II LARANTUKA',	'Flores Timus-Nusa Tenggara Timur'),
(608,	'WBA',	'Wahai',	'MALUKU TENGAH',	'KUPP KELAS III BULA',	'Jl. Pelabuhan Teluk Hatiling Wahai Maluku 97557'),
(609,	'WCI',	'Wanci',	'WAKATOBI',	'KUPP KELAS I BAU-BAU',	'Jl. Yos Sudarso No. 5 Kel. Wale Kec. Wolio Kota Baubau Provinsi Sultra 93711'),
(610,	'WDI',	'Wendesi',	'TELUK WONDAMA',	'UPP KELAS III WASIOR',	'Jl. Kuri Pasai No. 1 Rt.1Rw.1 Wasior Papua Barat 98362'),
(611,	'WDO',	'Wulandoni',	'LEMBATA',	'KUPP KELAS II LARANTUKA',	'Flores Timus-Nusa Tenggara Timur'),
(612,	'WED',	'Weda',	'HALMAHERA TENGAH',	'KUPP KELAS III WEDA',	'Jl. Pulau Fao Kec. Pilau Gebe Kab. Halmahera Tengah Komp. Pelabuhan Gebe Maluku Utara'),
(613,	'WGK',	'Wamengkoli',	'KOLAKA',	'KUPP KELAS I BAU-BAU',	'Jl. Yos Sudarso No. 5 Kel. Wale Kec. Wolio Kota Baubau Provinsi Sultra 93711'),
(614,	'WGP',	'Waingapu',	'SUMBA TIMUR',	'KSOP KELAS IV WAINGAPU',	'Jl. Nangamesi No. 11 Waingapu Nusa Tenggara Timur 87110'),
(615,	'WIA',	'Waigama',	'RAJA AMPAT',	'KUPP KELAS II RAJA AMPAT',	'Jl. Trikora No. 19 Saonek Kab. Raja Ampat Prov. Papua Barat'),
(616,	'WIE',	'Waiwole',	'MANGGARAI TIMUR',	'KUPP KELAS II REO',	'Jl. Pelabuhan Reo Kec. Reo Kab. Manggarai Kediri Nusa Tenggara Timur - 86592'),
(617,	'WII',	'Wini',	'TIMOR TENGAH UTARA',	'KUPP KELAS II ATAPUPU',	'Jl. Pelabuhan No. 1 Atapupu Nusa Tenggara Timur'),
(618,	'WIO',	'Waikelo',	'SUMBA BARAT DAYA',	'KUPP KELAS III WAIKELO',	'Jl. Waikelo Kec. Luara Kab. Sumba Barat Waikelo Nusa Tenggara Timur - 87254'),
(619,	'WNI',	'Wonreli',	'MALUKU BARAT DAYA',	'UPP KELAS III WONRELI',	'Jl. Pelabuhan Wonreli Maluku 97653'),
(620,	'WNQ',	'Wani',	'DONGGALA',	'KUPP KELAS III WANI',	'Jl. Pelabuhan No. 6 Wani Sulteng 94352'),
(621,	'WOA',	'Waworada',	'BIMA',	'KUPP KELAS III SAPE',	'Jl. Pelabuhan Niaga No. 1 Sape Bima Kab. Bima Nusa Tenggara Barat'),
(622,	'WRG',	'Wuring',	'SIKA',	'KSOP KELAS IV LAURENTIUS SAYMAUMERE',	'Jl. R. E Marthadinata No. 7 Maumere - Nusa Tenggara Timur 86113'),
(623,	'WRN',	'Waren',	'WAROPEN',	'KUPP KELAS III WAREN',	'Jl. Infres Waren Ureifaisei Waren Papua'),
(624,	'WRS',	'Waisarisa',	'SERAM BAGIAN BARAT',	'KUPP KELAS III KAIRATU',	'Jl. Kompleks PT. IMJ Waisarisa Maluku'),
(625,	'WSA',	'Waisai',	'RAJA AMPAT',	'KUPP KELAS II RAJA AMPAT',	'Jl. Trikora No. 19 Saonek Kab. Raja Ampat Prov. Papua Barat'),
(626,	'WSR',	'Wasior',	'TELUK WONDAMA',	'UPP KELAS III WASIOR',	'Jl. Kuri Pasai No. 1 Rt.1Rw.1 Wasior Papua Barat 98362'),
(627,	'WUR',	'Wulur',	'MALUKU BARAT DAYA',	'UPP KELAS III WONRELI',	'Jl. Pelabuhan Wonreli Maluku 97653'),
(628,	'WUU',	'Watunohu',	'KOLAKA UTARA',	'UPP KELAS III KOLAKA',	'Jl. Dermaga No. 1 Kolaka Sultra 93512'),
(629,	'WWN',	'Waiwadan',	'FLORES TIMUR',	'KUPP KELAS II LARANTUKA',	'Flores Timus-Nusa Tenggara Timur'),
(630,	'WWR',	'Waiwuring',	'FLORES TIMUR',	'KUPP KELAS II LARANTUKA',	'Flores Timus-Nusa Tenggara Timur'),
(631,	'WYA',	'Wayaua',	'HALMAHERA SELATAN',	'KUPP KELAS II LABUHABABANG',	'Jl.Pelabuhan No. 25 Desa Babang Kec. Bacan Timur 97791'),
(632,	'WYB',	'WayabulaPosi-Posi',	'PULAU MOROTAI',	'KUPP KELAS III DARUBA',	'Jl. Komp. Pelabuhan Imam Lastori Kab. Pulau Morotai Prov. Malut 97771'),
(633,	'YAR',	'SelayarBentengRauf Rahman',	'KEPULAUAN SELAYAR',	'UPP KELAS III SELAYAR',	'Jl. Pelabuhan No. 1 anteng Selayar Sulsel 92812'),
(634,	'YBA',	'Yaba',	'HALMAHERA SELATAN',	'KUPP KELAS II LABUHABABANG',	'Jl.Pelabuhan No. 25 Desa Babang Kec. Bacan Timur 97791'),
(635,	'ZRI',	'Serui',	'KEPULAUAN YAPEN',	'KUPP KELAS II SERUI',	'Jl. Moh. Hatta No. 2 Serui Papua 98201'),
(636,	'ZRM',	'Sarmi',	'SARMI',	'KUPP KELAS III SARMI',	'Jl. Brasilsdi No. 1 Sarmi Kota Papua 99373');

DROP TABLE IF EXISTS `m_perusahaan`;
CREATE TABLE `m_perusahaan` (
  `perusahaan_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `nama_perusahaan` varchar(200) DEFAULT NULL,
  `pic` varchar(200) DEFAULT NULL,
  `alamat` tinytext,
  `no_izin` varchar(200) DEFAULT NULL,
  `dok_siup` tinytext,
  `jenis_usaha` varchar(10) DEFAULT NULL,
  `no_telp_kantor` varchar(20) DEFAULT NULL,
  `npwp` varchar(50) DEFAULT NULL,
  `no_tel_pic` varchar(20) DEFAULT NULL,
  `surat_penunjukan_pic` tinytext,
  `email_perusahaan` varchar(100) DEFAULT NULL,
  `flag` char(1) DEFAULT NULL,
  PRIMARY KEY (`perusahaan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_perusahaan` (`perusahaan_id`, `user_id`, `nama_perusahaan`, `pic`, `alamat`, `no_izin`, `dok_siup`, `jenis_usaha`, `no_telp_kantor`, `npwp`, `no_tel_pic`, `surat_penunjukan_pic`, `email_perusahaan`, `flag`) VALUES
(1,	NULL,	'PT KARANA LINE',	'DHARMAWAN',	'JLN YOSSUDARSO SAMARINDA',	'-',	'-',	'PBM',	'22553',	'01.001.827.3-032.000',	'081',	NULL,	'ff@karana@gmail.com',	'Y'),
(2,	NULL,	'PT M SANTOSO',	'SORIPADA',	'JLN JEND. SUDIRMAN SAMARINDA',	'-',	'-',	'PBM',	'20442',	'01.145.882.5-722.000',	'081',	NULL,	'sori@gmail.com',	'Y'),
(3,	NULL,	'PT BARITO PASIFIC',	'berto',	'JLN PANGLIMA BATUR',	'-',	NULL,	'JPT',	'5555',	'00.000.000.000',	'081',	NULL,	'pbm@gmail.com',	'Y'),
(4,	NULL,	'PT SAMUDRA INDONESIA',	'samudra',	'JALAN MULAWARMAN BLOK II/08',	'-',	NULL,	'AGEN',	'32966',	'01.001.895.0-722.000',	'081',	NULL,	'AGEN@GMAIL.COM',	'Y'),
(5,	NULL,	'PT ADMIRAL LINES',	'xxx',	'JALAN NIAGA TIMUR',	'-',	NULL,	'0',	'42182',	'00.000.000.000',	'081',	NULL,	'JPT@GMAIL.COM',	'Y');

DROP TABLE IF EXISTS `m_satuan`;
CREATE TABLE `m_satuan` (
  `satuan_id` decimal(10,0) NOT NULL,
  `satuan` varchar(100) DEFAULT NULL,
  `flag` char(1) DEFAULT 'Y',
  PRIMARY KEY (`satuan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_satuan` (`satuan_id`, `satuan`, `flag`) VALUES
(1,	'Gram Per Square',	'Y'),
(2,	'Piece',	'Y'),
(3,	'Dozen',	'Y'),
(4,	'Small Spray',	'Y'),
(5,	'Empty Car',	'Y'),
(6,	'Kilogram Per Square',	'Y'),
(7,	'Box',	'Y');

DROP TABLE IF EXISTS `m_tarif_penumpukan`;
CREATE TABLE `m_tarif_penumpukan` (
  `tarif_penumpukan_id` int NOT NULL,
  `nama_tarif_penumpukan` varchar(200) DEFAULT NULL,
  `trf_penumpukan` decimal(10,0) DEFAULT NULL,
  `flag` int DEFAULT NULL,
  PRIMARY KEY (`tarif_penumpukan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_tarif_penumpukan` (`tarif_penumpukan_id`, `nama_tarif_penumpukan`, `trf_penumpukan`, `flag`) VALUES
(1,	'ALAT BERAT',	900000,	0),
(2,	'KARGO',	2000,	0),
(3,	'GUDANG',	1000,	0),
(4,	'LAPANGAN-HEWAN',	1750,	0),
(5,	'LAPANGAN-UMUM/PALET/CURAH',	1400,	0),
(6,	'MOBIL SEDAN',	400000,	0),
(7,	'MOTOR',	1500,	0),
(8,	'PETIKEMAS 20 FEET -ISI',	4500,	0),
(9,	'PETIKEMAS 20 FEET - KOSONG',	2250,	0),
(10,	'PETIKEMAS 40 FEET -ISI',	9000,	0),
(11,	'PETIKEMAS 40 FEET -KOSONG',	3900,	0),
(12,	'TRUCK BESAR/KECIL',	750000,	0);

DROP TABLE IF EXISTS `m_trf_air`;
CREATE TABLE `m_trf_air` (
  `trf_air_id` int NOT NULL,
  `nama_tarif_air` varchar(100) DEFAULT NULL,
  `trf_air_rp` decimal(10,0) DEFAULT NULL,
  `trf_air_us` decimal(10,0) DEFAULT NULL,
  `kode_rek` varchar(50) DEFAULT NULL,
  `minimal_volume_pengisian` decimal(10,0) DEFAULT NULL,
  `flag` char(1) DEFAULT NULL,
  PRIMARY KEY (`trf_air_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_trf_air` (`trf_air_id`, `nama_tarif_air`, `trf_air_rp`, `trf_air_us`, `kode_rek`, `minimal_volume_pengisian`, `flag`) VALUES
(0,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(2,	'PIPA -10M3',	17500,	6,	'701.05.00.00',	5,	'Y'),
(3,	'TONGKANG',	17500,	5,	'7001.05.00.00',	50,	'Y');

DROP TABLE IF EXISTS `m_trf_labuh`;
CREATE TABLE `m_trf_labuh` (
  `trf_labuh_id` int NOT NULL,
  `nama_trf` varchar(100) DEFAULT NULL,
  `trf_labuh_rp` decimal(10,0) DEFAULT NULL,
  `trf_labuh_rp_us` decimal(10,0) DEFAULT NULL,
  `persentase_bayar` decimal(10,0) DEFAULT NULL,
  `kode_rek` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`trf_labuh_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_trf_labuh` (`trf_labuh_id`, `nama_trf`, `trf_labuh_rp`, `trf_labuh_rp_us`, `persentase_bayar`, `kode_rek`) VALUES
(0,	NULL,	NULL,	NULL,	NULL,	NULL),
(2,	'NIAGA LUAR NEGERI',	66,	0,	100,	'704.01.00.00');

DROP TABLE IF EXISTS `m_trf_pandu`;
CREATE TABLE `m_trf_pandu` (
  `trf_pandu_id` int NOT NULL,
  `nama_tarif` varchar(100) DEFAULT NULL,
  `trf_us` decimal(10,0) DEFAULT NULL,
  `trf_rp` decimal(10,0) DEFAULT NULL,
  `trf_variable_us` decimal(10,0) DEFAULT NULL,
  `trf_variable_rp` decimal(10,0) DEFAULT NULL,
  `flag` float DEFAULT NULL,
  PRIMARY KEY (`trf_pandu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_trf_pandu` (`trf_pandu_id`, `nama_tarif`, `trf_us`, `trf_rp`, `trf_variable_us`, `trf_variable_rp`, `flag`) VALUES
(1,	'ZONA A',	86,	123840,	0,	56,	0),
(2,	'ZOBA B',	110,	148608,	0,	67,	0),
(3,	'ZONA C',	135,	178329,	0,	80,	0),
(4,	'MASUK',	106,	86000,	0,	53,	0),
(5,	'KELUAR',	53,	86000,	0,	39,	0);

DROP TABLE IF EXISTS `m_trf_tambat`;
CREATE TABLE `m_trf_tambat` (
  `trf_tambat_id` int NOT NULL,
  `nama_tambatan` varchar(200) DEFAULT NULL,
  `tarif_rp` decimal(10,0) DEFAULT NULL,
  `tarif_us` decimal(10,0) DEFAULT NULL,
  `kode_rek` varchar(50) DEFAULT NULL,
  `flag` char(1) DEFAULT NULL,
  PRIMARY KEY (`trf_tambat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_trf_tambat` (`trf_tambat_id`, `nama_tambatan`, `tarif_rp`, `tarif_us`, `kode_rek`, `flag`) VALUES
(1,	'DERMAGA',	58,	0,	'701.02.00.00',	'Y'),
(2,	'DERMAGA KHUSUS',	58,	0,	'709.02.00.00',	'Y');

DROP TABLE IF EXISTS `m_trf_tunda`;
CREATE TABLE `m_trf_tunda` (
  `trf_tunda_id` int NOT NULL,
  `awal_grt` decimal(10,0) DEFAULT NULL,
  `tarif_jasa_tunda_rp` decimal(10,0) DEFAULT NULL,
  `tarif_jasa_tunda_us` decimal(10,0) DEFAULT NULL,
  `tarif_variable_rp` decimal(10,0) DEFAULT NULL,
  `tarif_variable_us` decimal(10,0) DEFAULT NULL,
  `flag` char(1) DEFAULT NULL,
  PRIMARY KEY (`trf_tunda_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_trf_tunda` (`trf_tunda_id`, `awal_grt`, `tarif_jasa_tunda_rp`, `tarif_jasa_tunda_us`, `tarif_variable_rp`, `tarif_variable_us`, `flag`) VALUES
(1,	0,	238050,	276,	5,	0,	'Y'),
(2,	1501,	634800,	713,	5,	0,	'Y'),
(3,	3001,	1031550,	1260,	5,	0,	'Y'),
(4,	4501,	1440720,	1824,	5,	0,	'Y'),
(5,	6001,	1872660,	2303,	5,	0,	'Y');

DROP TABLE IF EXISTS `mt_simlala_rpk`;
CREATE TABLE `mt_simlala_rpk` (
  `simlala_rpk_id` int NOT NULL AUTO_INCREMENT,
  `tanggal_rpk` date DEFAULT NULL,
  `tgl_surat` date DEFAULT NULL,
  `no_rpk` varchar(50) DEFAULT NULL,
  `jenis_trayek` varchar(50) DEFAULT NULL,
  `trayek` tinytext,
  `kode_kapal` varchar(50) DEFAULT NULL,
  `nama_kapal` varchar(200) DEFAULT NULL,
  `nama_perusahaan` varchar(200) DEFAULT NULL,
  `tanda_pendaftaran_kapal` varchar(200) DEFAULT NULL,
  `tgl_awal__berlaku` date DEFAULT NULL,
  `tgl_akhir_berlaku` date DEFAULT NULL,
  `imo` varchar(10) DEFAULT NULL,
  `call_sign` varchar(10) DEFAULT NULL,
  `muatan` tinytext,
  `flag` char(1) DEFAULT 'Y',
  `bendera` varchar(50) DEFAULT NULL,
  `grt` decimal(10,0) DEFAULT NULL,
  `loa` decimal(10,0) DEFAULT NULL,
  `dwt` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`simlala_rpk_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `mt_simlala_rpk` (`simlala_rpk_id`, `tanggal_rpk`, `tgl_surat`, `no_rpk`, `jenis_trayek`, `trayek`, `kode_kapal`, `nama_kapal`, `nama_perusahaan`, `tanda_pendaftaran_kapal`, `tgl_awal__berlaku`, `tgl_akhir_berlaku`, `imo`, `call_sign`, `muatan`, `flag`, `bendera`, `grt`, `loa`, `dwt`) VALUES
(1,	'2023-10-11',	'2023-10-14',	'AL.103/2000/313005/292282/23',	'TRAMPER',	'Sangkulirang',	'1',	'ROYAL TB 4',	'PT. ALAM RAYA INDONESIA',	'2014 Ba No. 4030/L',	'2023-10-14',	'2024-01-02',	NULL,	'YDB.4656',	NULL,	'Y',	'INDONESIA',	1600,	50,	2000),
(2,	'2023-10-14',	'2023-10-14',	'AL.103/2000/310545/292269/23',	'TRAMPER',	'Subaim, Molawe, Ambon, Sikeli, Wanci, Liana Banggai, Dongkala, Luwuk, Pulau Pakal/ANTAM, Bantaeng, Tobelo, P. Gebe, Batam/Sekupang, Jeneponto/Bunging, Raha, Saonek, Lapuko, Pomalaa, Kolaka, Kendari/Bungkutoko, Balantang/Malili, Langara, Morowali, Torobulu',	'2',	'BUANA EXPRESS 8',	'PT. BUANA BENUA SHIPPING',	'2014 PPm No. 3419/L',	'2023-10-14',	'2024-01-12',	NULL,	NULL,	NULL,	'Y',	NULL,	NULL,	NULL,	NULL),
(3,	'2023-10-13',	'2023-10-14',	'AL.103/2000/312598/292259/23',	'TRAMPER',	'Tanjung Perak, Tanjung Pandan, Pangkal Balam, Gresik, Boom Baru/Palembang, Panjang, Dumai, Ketapang, Kumai, Sampit, Samarinda, Bontang, Kendawangan, Pontianak, Semarang/Tanjung Emas, Tanjung Priok, Sunda Kelapa, Belawan, Banjarmasin, Kotabaru, Batulicin, ',	'3',	'ROKAN PERMAI',	'PT. PELAYARAN BAHTERAPERMAI EKATAMA',	'2011 Ka No. 4463/L',	'2023-10-13',	'2024-01-12',	NULL,	'YEZY',	'ADF (Automotive Diesel Fuel) Oil, Alat-alat Konstruksi, Bahan Bangunan, Barang Kelontong, Beras, Biji Sawit, Inti Sawit, Gula Pasir, Hasil Pertambangan, Jagung, Kopra, Pasir, Pasir Kwarsa, Pupuk, Sembako, Semen, Tepung Tapioka, Tepung Terigu',	'Y',	NULL,	NULL,	NULL,	NULL);

DROP TABLE IF EXISTS `s_referensi_barang`;
CREATE TABLE `s_referensi_barang` (
  `ref_barang_id` int NOT NULL,
  `kelompok_data` varchar(50) NOT NULL,
  `detail_data` varchar(50) NOT NULL,
  `flag` char(1) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `work_station` varchar(30) NOT NULL,
  `cabang_id` char(2) NOT NULL,
  `last_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `s_referensi_barang` (`ref_barang_id`, `kelompok_data`, `detail_data`, `flag`, `user_name`, `work_station`, `cabang_id`, `last_update`) VALUES
(68,	'JENIS BARANG',	'Pupuk',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-05-15'),
(69,	'JENIS BARANG',	'Semen dan sejenisnya',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-05-15'),
(41,	'JENIS KEMASAN',	'Lain Lain',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-07-09'),
(37,	'JENIS KEMASAN',	'Bahan Pokok',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-07-09'),
(38,	'JENIS KEMASAN',	'Bahan Strategis',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-07-09'),
(12,	'JENIS KEMASAN',	'Ball',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-07-09'),
(13,	'JENIS KEMASAN',	'Break Bulk',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-07-09'),
(15,	'JENIS KEMASAN',	'Curah Cair',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-07-09'),
(16,	'JENIS KEMASAN',	'Curah Kering',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-07-09'),
(57,	'JENIS BARANG',	'Hasil Besi/Baja',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-05-15'),
(58,	'JENIS BARANG',	'Hasil Industri',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-05-15'),
(59,	'JENIS BARANG',	'Hasil Perikanan',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-05-15'),
(60,	'JENIS BARANG',	'Kacang-Kacangan',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-05-15'),
(61,	'JENIS BARANG',	'Kayu dan sejenisnya',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-05-15'),
(62,	'JENIS BARANG',	'Kendaraan/alat berat',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-05-15'),
(63,	'JENIS BARANG',	'Kopi, rempah',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-05-15'),
(64,	'JENIS BARANG',	'Logam',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-05-15'),
(65,	'JENIS BARANG',	'Material Besi/Baja',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-05-15'),
(66,	'JENIS BARANG',	'Mesin Kantor',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-05-15'),
(77,	'TEMPAT PENUMPUKAN',	'Gudang',	'Y',	'Administrator',	'BITUNG',	'2',	'5687-01-31'),
(78,	'TEMPAT PENUMPUKAN',	'Lapangan',	'Y',	'Administrator',	'BITUNG',	'2',	'5687-01-31'),
(79,	'TEMPAT PENUMPUKAN',	'Kandang',	'Y',	'Administrator',	'BITUNG',	'2',	'5687-01-31'),
(80,	'LOKASI PENUMPUKAN',	'Lini I',	'Y',	'Administrator',	'BITUNG',	'2',	'5687-01-31'),
(81,	'LOKASI PENUMPUKAN',	'Lini II',	'Y',	'Administrator',	'BITUNG',	'2',	'5687-01-31'),
(82,	'STATUS PENGOPERASIAN',	'PELRA',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-02-20'),
(83,	'STATUS PENGOPERASIAN',	'NORMAL',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-02-20'),
(84,	'STATUS PENGOPERASIAN',	'LUMPSUM',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-02-20'),
(95,	'KONDISI BONGKAR/MUAT',	'Tender Melalui Dermaga',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-03-10'),
(94,	'KONDISI BONGKAR/MUAT',	'Tender Tanpa Melalui Dermaga',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-03-10'),
(97,	'KONDISI BONGKAR/MUAT',	'Normal',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-03-10'),
(93,	'KONDISI BONGKAR/MUAT',	'Ship to Ship',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-03-10'),
(96,	'KONDISI BONGKAR/MUAT',	'Rade Transport',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-03-10'),
(85,	'STATUS MILIK',	'Alat PBM/EMKL',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-03-10'),
(86,	'STATUS MILIK',	'Non Pelabuhan',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-03-10'),
(87,	'STATUS MILIK',	'Pelabuhan',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-03-10'),
(88,	'TIPE BONGKAR/MUAT',	'Pipa',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-03-10'),
(89,	'TIPE BONGKAR/MUAT',	'Conveyor',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-03-10'),
(90,	'TIPE BONGKAR/MUAT',	'Transhipment',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-03-10'),
(91,	'TIPE BONGKAR/MUAT',	'Angkutan Langsung',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-03-10'),
(98,	'STATUS PK',	'Non Peti Kemas',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-03-22'),
(99,	'STATUS PK',	'Peti Kemas',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-03-22'),
(100,	'STATUS UPER',	'UPER',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-03-22'),
(102,	'LINTAS BARANG',	'Export',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-03-22'),
(103,	'LINTAS BARANG',	'Antar Pulau',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-03-22'),
(104,	'LINTAS BARANG',	'Import',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-05-02'),
(105,	'JENIS KOMODITI',	'Hasil Industri Lainnya',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-05-26'),
(106,	'JENIS KOMODITI',	'Kebutuhan Rumah Tangga',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-05-26'),
(107,	'JENIS KOMODITI',	'Bahan Baku Industri',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-05-26'),
(108,	'JENIS KOMODITI',	'Mesin/Kendaraan/Alat Industri',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-05-26'),
(109,	'JENIS KOMODITI',	'Bahan Bangunan',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-05-26'),
(110,	'JENIS KOMODITI',	'Bahan Kimia / Obat',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-05-26'),
(111,	'JENIS KOMODITI',	'Hasil Pertanian / Peternakan',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-05-26'),
(112,	'JENIS KOMODITI',	'Hasil Laut',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-05-26'),
(113,	'JENIS KOMODITI',	'Hasil Tambang',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-05-26'),
(114,	'JENIS KOMODITI',	'Hasil Industri Kayu',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-05-26'),
(115,	'JENIS KOMODITI',	'Hasil Perkebunan',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-05-26'),
(116,	'JENIS KOMODITI',	'Hasil Hutan',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-05-26'),
(73,	'JENIS KOMODITI',	'Bahan Lainnya',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-05-26'),
(71,	'JENIS KOMODITI',	'Bahan Pokok',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-05-26'),
(72,	'JENIS KOMODITI',	'Bahan Strategis',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-05-26'),
(74,	'JENIS KOMODITI',	'Hewan',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-05-26'),
(75,	'JENIS KOMODITI',	'Migas',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-05-26'),
(76,	'JENIS KOMODITI',	'Non Migas',	'Y',	'Administrator',	'BITUNG',	'2',	'2008-05-26'),
(67,	'JENIS BARANG',	'Perkakas Mesin',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-05-15'),
(1,	'JENIS DERMAGA',	'Dermaga Umum',	'Y',	'Administrator',	'BITUNG',	'2',	'5687-01-31'),
(2,	'JENIS DERMAGA',	'Dermaga Khusus',	'Y',	'Administrator',	'BITUNG',	'2',	'5687-01-31'),
(6,	'JENIS PELABUHAN',	'Pelabuhan Umum',	'Y',	'Administrator',	'BITUNG',	'2',	'5687-01-31'),
(17,	'JENIS KEMASAN',	'drum',	'Y',	'Administrator',	'BITUNG',	'2',	'5687-01-31'),
(18,	'JENIS KEMASAN',	'general cargo',	'Y',	'Administrator',	'BITUNG',	'2',	'5687-01-31'),
(19,	'JENIS KEMASAN',	'hewan',	'Y',	'Administrator',	'BITUNG',	'2',	'5687-01-31'),
(20,	'JENIS KEMASAN',	'non peti kemas',	'Y',	'Administrator',	'BITUNG',	'2',	'5687-01-31'),
(21,	'JENIS KEMASAN',	'palet',	'Y',	'Administrator',	'BITUNG',	'2',	'5687-01-31'),
(22,	'JENIS KEMASAN',	'peti kemas',	'Y',	'Administrator',	'BITUNG',	'2',	'5687-01-31'),
(23,	'JENIS KEMASAN',	'peti kemas 20 chassis',	'Y',	'Administrator',	'BITUNG',	'2',	'5687-01-31'),
(24,	'JENIS KEMASAN',	'peti kemas 20 chs muat',	'Y',	'Administrator',	'BITUNG',	'2',	'5687-01-31'),
(25,	'JENIS KEMASAN',	'peti kemas 20 isi',	'Y',	'Administrator',	'BITUNG',	'2',	'5687-01-31'),
(26,	'JENIS KEMASAN',	'peti kemas 20 kosong',	'Y',	'Administrator',	'BITUNG',	'2',	'5687-01-31'),
(27,	'JENIS KEMASAN',	'peti kemas 20 over',	'Y',	'Administrator',	'BITUNG',	'2',	'5687-01-31'),
(28,	'JENIS KEMASAN',	'peti kemas 20 reefer',	'Y',	'Administrator',	'BITUNG',	'2',	'5687-01-31'),
(29,	'JENIS KEMASAN',	'peti kemas 40 chassis',	'Y',	'Administrator',	'BITUNG',	'2',	'5687-01-31'),
(11,	'JENIS KEMASAN',	'Bag. Cargo',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-07-09'),
(30,	'JENIS KEMASAN',	'peti kemas 40 chs muat',	'Y',	'Administrator',	'BITUNG',	'2',	'5687-01-31'),
(31,	'JENIS KEMASAN',	'peti kemas 40 isi',	'Y',	'Administrator',	'BITUNG',	'2',	'5687-01-31'),
(32,	'JENIS KEMASAN',	'peti kemas 40 kosong',	'Y',	'Administrator',	'BITUNG',	'2',	'5687-01-31'),
(33,	'JENIS KEMASAN',	'peti kemas 40 over',	'Y',	'Administrator',	'BITUNG',	'2',	'5687-01-31'),
(34,	'JENIS KEMASAN',	'peti kemas 40 reefer',	'Y',	'Administrator',	'BITUNG',	'2',	'5687-01-31'),
(35,	'JENIS KEMASAN',	'roll',	'Y',	'Administrator',	'BITUNG',	'2',	'5687-01-31'),
(36,	'JENIS KEMASAN',	'unitisasi',	'Y',	'Administrator',	'BITUNG',	'2',	'5687-01-31'),
(39,	'JENIS KEMASAN',	'migas',	'Y',	'Administrator',	'BITUNG',	'2',	'5687-01-31'),
(40,	'JENIS KEMASAN',	'non migas',	'Y',	'Administrator',	'BITUNG',	'2',	'5687-01-31'),
(51,	'JENIS BARANG',	'Alat listrik',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-05-15'),
(123,	'JENIS DERMAGA',	'Area Labuh',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-05-26'),
(52,	'JENIS BARANG',	'Alat optik',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-05-15'),
(44,	'JENIS BARANG',	'Bahan bakar minyak',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-05-15'),
(70,	'JENIS BARANG',	'Bahan kimia',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-05-15'),
(42,	'JENIS BARANG',	'Bahan makan pokok',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-05-15'),
(43,	'JENIS BARANG',	'Bahan makan ternak',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-05-15'),
(46,	'JENIS BARANG',	'Barang beku',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-05-15'),
(48,	'JENIS BARANG',	'Barang Dalam Bar/Roll',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-05-15'),
(47,	'JENIS BARANG',	'Barang Dalam Keranjang',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-05-15'),
(49,	'JENIS BARANG',	'Barang fibre',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-05-15'),
(50,	'JENIS BARANG',	'Barang Galian/Tambang',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-05-15'),
(45,	'JENIS BARANG',	'Besi Bekas',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-05-15'),
(53,	'JENIS BARANG',	'Buah/Biji Minyak',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-05-15'),
(54,	'JENIS BARANG',	'Curah Cair',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-05-15'),
(125,	'TIPE BONGKAR/MUAT',	'Pinggiran',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-09-08'),
(126,	'JENIS KEMASAN',	'Box',	'Y',	'Administrator',	'BITUNG',	'2',	'2010-02-09'),
(92,	'TIPE BONGKAR/MUAT',	'Gudang',	'Y',	'Administrator',	'BITUNG',	'2',	'2010-03-07'),
(127,	'TIPE BONGKAR/MUAT',	'Lapangan',	'Y',	'Administrator',	'BITUNG',	'2',	'2010-03-07'),
(55,	'JENIS BARANG',	'Curah Kering',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-05-15'),
(56,	'JENIS BARANG',	'Gelas/Keramik',	'Y',	'Administrator',	'BITUNG',	'2',	'2009-05-15'),
(128,	'JENIS BARANG',	'Petikemas',	'Y',	'Administrator',	'BITUNG',	'2',	'2010-04-29'),
(5,	'JENIS DERMAGA',	'REDE/Pinggiran/DOLPHIN',	'Y',	'Administrator',	'BITUNG',	'2',	'2010-11-24'),
(129,	'JENIS DERMAGA',	'PELABUHAN KHUSUS',	'Y',	'Administrator',	'BITUNG',	'2',	'2010-11-24'),
(130,	'JENIS DERMAGA',	'LOADING POINT',	'Y',	'Administrator',	'BITUNG',	'2',	'2010-11-24'),
(7,	'JENIS PELABUHAN',	'NON Pelabuhan Umum',	'Y',	'Administrator',	'BITUNG',	'2',	'2010-11-24'),
(131,	'TIPE BONGKAR/MUAT',	'Kade Loosing/Truck Loosing',	'Y',	'Administrator',	'BITUNG',	'2',	'2010-12-17'),
(101,	'STATUS UPER',	'WD',	'N',	'GIGATECH_vino',	'GIGATECH_KG',	'2',	'2011-11-04'),
(132,	'JENIS KOMODITI',	'Barang Lainnya',	'Y',	'GIGATECH_vino',	'GIGATECH_KG',	'99',	'2011-11-15');

DROP TABLE IF EXISTS `s_referensi_kapal`;
CREATE TABLE `s_referensi_kapal` (
  `ref_kapal_id` int NOT NULL,
  `kelompok_data` varchar(50) NOT NULL,
  `detail_data` varchar(50) NOT NULL,
  `flag` char(1) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `work_station` varchar(30) NOT NULL,
  `last_update` date NOT NULL,
  `cabang_id` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `s_referensi_kapal` (`ref_kapal_id`, `kelompok_data`, `detail_data`, `flag`, `user_name`, `work_station`, `last_update`, `cabang_id`) VALUES
(86,	'JENIS KAPAL',	'GENERAL CARGO ',	'Y',	'Administrator',	'BITUNG',	'2011-03-25',	'2'),
(87,	'JENIS KAPAL',	'PENUMPANG ',	'Y',	'Administrator',	'BITUNG',	'2011-03-25',	'2'),
(88,	'JENIS KAPAL',	'PETIKEMAS ',	'Y',	'Administrator',	'BITUNG',	'2011-03-25',	'2'),
(94,	'JENIS KAPAL',	'RO-RO/FERRY ',	'Y',	'Administrator',	'BITUNG',	'2011-03-25',	'2'),
(97,	'JENIS KAPAL',	'TUG BOAT ',	'Y',	'Administrator',	'BITUNG',	'2011-03-25',	'2'),
(99,	'JENIS KAPAL',	'KAPAL NEGARA ',	'Y',	'Administrator',	'BITUNG',	'2011-03-25',	'2');

DROP TABLE IF EXISTS `t_au_bunker`;
CREATE TABLE `t_au_bunker` (
  `au_bunker_id` int NOT NULL,
  `no_permohonan` varchar(50) DEFAULT NULL,
  `tgl_permohonan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kode_perusahaan` varchar(10) DEFAULT NULL,
  `nama_perusahaan` varchar(200) DEFAULT NULL,
  `alamat_perusahaan` tinytext,
  `npwp` varchar(50) DEFAULT NULL,
  `no_nota3` varchar(50) DEFAULT NULL,
  `tgl_nota3` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `no_nota4g` varchar(50) DEFAULT NULL,
  `tgl_nota4g` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `total_biaya` decimal(10,0) DEFAULT NULL,
  `mata_uang_id` int DEFAULT NULL,
  `flag` char(1) DEFAULT NULL,
  PRIMARY KEY (`au_bunker_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_au_bunker_detail`;
CREATE TABLE `t_au_bunker_detail` (
  `au_bunker_detail_id` int NOT NULL,
  `au_bunker_id` int DEFAULT NULL,
  `kode_kapal` varchar(10) DEFAULT NULL,
  `nama_kapal` varchar(200) DEFAULT NULL,
  `tgl_jam_mulai` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tgl_jam_selesai` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `jlh_produksi` decimal(10,0) DEFAULT NULL,
  `tarif` decimal(10,0) DEFAULT NULL,
  `flag` char(1) DEFAULT NULL,
  PRIMARY KEY (`au_bunker_detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_au_lahan`;
CREATE TABLE `t_au_lahan` (
  `au_lahan_id` int NOT NULL,
  `no_kontrak` varchar(100) DEFAULT NULL,
  `tgl_kontrak` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nama_perusahaan` varchar(200) DEFAULT NULL,
  `npwp_perusahaan` varchar(50) DEFAULT NULL,
  `kode_perusahaan` varchar(20) DEFAULT NULL,
  `alamat` tinytext,
  `telephone` varchar(20) DEFAULT NULL,
  `contact_person` varchar(100) DEFAULT NULL,
  `lokasi_id` int DEFAULT NULL,
  `jenis_properti` varchar(50) DEFAULT NULL COMMENT 'TANAH,BANGUNAN,DERMAGA',
  `luas_lahan` decimal(10,0) DEFAULT NULL,
  `jangka_waktu` decimal(10,0) DEFAULT NULL,
  `periode_pakai_mulai` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `periode_pakai_selesai` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `keterangan` tinytext,
  `tarif` decimal(10,0) DEFAULT NULL,
  `biaya_sewa` decimal(10,0) DEFAULT NULL,
  `flag` char(1) DEFAULT NULL,
  `no_pranota` varchar(50) DEFAULT NULL,
  `tgl_pranota` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `no_nota4e` varchar(50) DEFAULT NULL,
  `tgl_nota4e` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `kode_rek` varchar(50) DEFAULT NULL,
  `status_lunsum` char(1) DEFAULT 'Y' COMMENT 'jika Y maka all in,kalau N hitung tarif kali jangaka waktu',
  PRIMARY KEY (`au_lahan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_data_barang_peb`;
CREATE TABLE `t_data_barang_peb` (
  `data_barang_peb_id` decimal(10,0) NOT NULL,
  `header_peb_id` decimal(10,0) DEFAULT NULL,
  `no_seri` varchar(10) DEFAULT NULL,
  `hs_code` varchar(20) DEFAULT NULL,
  `lartas` varchar(20) DEFAULT NULL,
  `kode` varchar(20) DEFAULT NULL,
  `uraian` tinytext,
  `merk` varchar(100) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `ukuran` decimal(10,0) DEFAULT NULL,
  `negara_asal_barang` varchar(100) DEFAULT NULL,
  `daerah_asal_barang` varchar(100) DEFAULT NULL,
  `satuan_id` decimal(10,0) DEFAULT NULL,
  `satuan` varchar(100) DEFAULT NULL,
  `kemasan_id` decimal(10,0) DEFAULT NULL,
  `kemasan` varchar(100) DEFAULT NULL,
  `harga_fob` decimal(10,0) DEFAULT NULL,
  `volume` decimal(10,0) DEFAULT NULL,
  `berat_bersih` decimal(10,0) DEFAULT NULL,
  `harga_satuan_fob` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`data_barang_peb_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_data_barang_peb_dok_fasilitas_lartas`;
CREATE TABLE `t_data_barang_peb_dok_fasilitas_lartas` (
  `data_barang_peb_dok_fasilitas_lartas_id` decimal(10,0) NOT NULL,
  `data_barang_peb_id` decimal(10,0) DEFAULT NULL,
  `no_seri` varchar(10) DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `nomor` varchar(50) DEFAULT NULL,
  `tanggal_dok` date DEFAULT NULL,
  `fasilitas` varchar(200) DEFAULT NULL,
  `izin` varchar(100) DEFAULT NULL,
  `nama_file` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`data_barang_peb_dok_fasilitas_lartas_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_data_barang_pib`;
CREATE TABLE `t_data_barang_pib` (
  `data_barang_pib_id` decimal(10,0) NOT NULL,
  `header_pib_id` decimal(10,0) DEFAULT NULL,
  `no_seri_barang` varchar(10) DEFAULT NULL,
  `hs_code_barang` varchar(20) DEFAULT NULL,
  `lartas_barang` varchar(200) DEFAULT NULL,
  `uraian_barang` varchar(200) DEFAULT NULL,
  `merk_barang` varchar(100) DEFAULT NULL,
  `type_barang` varchar(100) DEFAULT NULL,
  `kondisi_barang` varchar(200) DEFAULT NULL,
  `negara` varchar(100) DEFAULT NULL,
  `berat_bersih` decimal(10,0) DEFAULT NULL,
  `dokumen_lartas` varchar(200) DEFAULT NULL,
  `satuan_id` decimal(10,0) DEFAULT NULL,
  `satuan` varchar(100) DEFAULT NULL,
  `kemasan_id` decimal(10,0) DEFAULT NULL,
  `kemasan` varchar(100) DEFAULT NULL,
  `amount` decimal(10,0) DEFAULT NULL,
  `jatuh_tempo` date DEFAULT NULL,
  `voluntary_declaration` varchar(200) DEFAULT NULL,
  `biaya_tambahan` decimal(10,0) DEFAULT NULL,
  `fob` decimal(10,0) DEFAULT NULL,
  `harga_satuan` decimal(10,0) DEFAULT NULL,
  `freight` decimal(10,0) DEFAULT NULL,
  `asuransi` decimal(10,0) DEFAULT NULL,
  `cif_rupiah` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`data_barang_pib_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_data_transaksi_peb`;
CREATE TABLE `t_data_transaksi_peb` (
  `data_transaksi_peb_id` decimal(10,0) DEFAULT NULL,
  `header_peb_id` decimal(10,0) DEFAULT NULL,
  `valuta` varchar(100) DEFAULT NULL,
  `ndpbm` decimal(10,0) DEFAULT NULL,
  `cara_pembayaran_id` decimal(10,0) DEFAULT NULL,
  `cara_pembayaran` varchar(100) DEFAULT NULL,
  `nilai_ekspor` decimal(10,0) DEFAULT NULL,
  `freight` decimal(10,0) DEFAULT NULL,
  `asuransi` decimal(10,0) DEFAULT NULL,
  `nilai_maklan` decimal(10,0) DEFAULT NULL,
  `nilai_bea_keluar` decimal(10,0) DEFAULT NULL,
  `ppn` decimal(10,0) DEFAULT NULL,
  `berat_kotor` decimal(10,0) DEFAULT NULL,
  `berat_bersih` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_data_transaksi_peb_bank_devisa`;
CREATE TABLE `t_data_transaksi_peb_bank_devisa` (
  `data_transaksi_peb_bank_devisa_id` decimal(10,0) DEFAULT NULL,
  `data_transaksi_peb_id` decimal(10,0) DEFAULT NULL,
  `no_seri` varchar(10) DEFAULT NULL,
  `kode_bank` varchar(10) DEFAULT NULL,
  `nama_bank` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_data_transaksi_pib`;
CREATE TABLE `t_data_transaksi_pib` (
  `data_transaksi_pib_id` decimal(10,0) DEFAULT NULL,
  `valuta_pib` varchar(100) DEFAULT NULL,
  `ndpbm_pib` decimal(10,0) DEFAULT NULL,
  `jenis_transaksi` varchar(100) DEFAULT NULL,
  `biaya_tambahan` decimal(10,0) DEFAULT NULL,
  `diskon` decimal(10,0) DEFAULT NULL,
  `freight` decimal(10,0) DEFAULT NULL,
  `asuransi` decimal(10,0) DEFAULT NULL,
  `voluntary_declaration` varchar(100) DEFAULT NULL,
  `rupian` decimal(10,0) DEFAULT NULL,
  `berat_kotor` decimal(10,0) DEFAULT NULL,
  `berat_bersih` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_dokument_pendukung_peb`;
CREATE TABLE `t_dokument_pendukung_peb` (
  `dokumen_pendukung_peb_id` decimal(10,0) DEFAULT NULL,
  `header_peb_id` decimal(10,0) DEFAULT NULL,
  `no_seri` varchar(10) DEFAULT NULL,
  `jenis_dokumen` varchar(50) DEFAULT NULL,
  `nomor_dokumen` varchar(50) DEFAULT NULL,
  `izin` varchar(50) DEFAULT NULL,
  `tgl_dokumen` date DEFAULT NULL,
  `nama_file` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_dokument_pendukung_pib`;
CREATE TABLE `t_dokument_pendukung_pib` (
  `header_pib_id` decimal(10,0) NOT NULL,
  `dokumen_pendukung_pib_id` varchar(200) DEFAULT NULL,
  `no_seri` varchar(10) DEFAULT NULL,
  `jenis_dokumen` varchar(200) DEFAULT NULL,
  `nomor_dokumen` varchar(50) DEFAULT NULL,
  `tgl_dokumen` date DEFAULT NULL,
  `nama_file` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`header_pib_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_entitas_peb`;
CREATE TABLE `t_entitas_peb` (
  `entitas_peb_id` decimal(10,0) NOT NULL,
  `header_peb_id` decimal(10,0) DEFAULT NULL,
  `npwp_eksportir` varchar(20) DEFAULT NULL,
  `nama_eksportir` varchar(150) DEFAULT NULL,
  `alamat_eksportir` tinytext,
  `npwp_penerima` varchar(20) DEFAULT NULL,
  `negara_penerima` varchar(100) DEFAULT NULL,
  `alamat_penerima` tinytext,
  `npwp_pembeli` varchar(20) DEFAULT NULL,
  `negara_pembeli` varchar(100) DEFAULT NULL,
  `alamat_pembeli` tinytext,
  `flag` char(1) DEFAULT NULL COMMENT '1 awal pengisian,2 dikirim,N delete',
  PRIMARY KEY (`entitas_peb_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_entitas_peb_pemilik_barang`;
CREATE TABLE `t_entitas_peb_pemilik_barang` (
  `entitas_peb_pemilik_barang_id` decimal(10,0) NOT NULL,
  `entitas_peb_id` decimal(10,0) DEFAULT NULL,
  `no_identitas` varchar(50) DEFAULT NULL,
  `alamat` tinytext,
  `nama` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`entitas_peb_pemilik_barang_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_entitas_pib`;
CREATE TABLE `t_entitas_pib` (
  `entitas_pib_id` decimal(10,0) DEFAULT NULL,
  `header_pib_id` decimal(10,0) DEFAULT NULL,
  `npwp_importir` varchar(20) DEFAULT NULL,
  `nama_importir` varchar(200) DEFAULT NULL,
  `alamat_importir` tinytext,
  `nib_importir` varchar(100) DEFAULT NULL,
  `status_importir` varchar(100) DEFAULT NULL,
  `npwp_pemilik_barang` varchar(20) DEFAULT NULL,
  `nama_pemilik_barang` varchar(200) DEFAULT NULL,
  `alamat_pemilik_barang` tinytext,
  `npwp_pemusatan` varchar(20) DEFAULT NULL,
  `nama_pemusatan` varchar(200) DEFAULT NULL,
  `alamat_pemusatan` tinytext,
  `npwp_pengirim` varchar(20) DEFAULT NULL,
  `nama_pengirim` varchar(200) DEFAULT NULL,
  `alamat_pengirim` tinytext,
  `negara_pengirim` varchar(100) DEFAULT NULL,
  `npwp_penjual` varchar(20) DEFAULT NULL,
  `nama_penjual` varchar(200) DEFAULT NULL,
  `alamat_penjual` tinytext,
  `negara_penjual` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_header_peb`;
CREATE TABLE `t_header_peb` (
  `header_peb_id` decimal(10,0) NOT NULL,
  `no_pengajuan` varchar(10) DEFAULT NULL,
  `kantor_pabean_muat_asal_id` decimal(10,0) DEFAULT NULL,
  `kantor_pabean_muat_asal` varchar(200) DEFAULT NULL,
  `pelabuhan_muat_ekspor_id` decimal(10,0) DEFAULT NULL,
  `pelabuhan_muat_ekspor` varchar(200) DEFAULT NULL,
  `jenis_ekspor_id` decimal(10,0) DEFAULT NULL,
  `jenis_ekspor` varchar(100) DEFAULT NULL,
  `kategori_ekspor_id` decimal(10,0) DEFAULT NULL,
  `kategori_ekspor` varchar(100) DEFAULT NULL,
  `cara_dagang_id` decimal(10,0) DEFAULT NULL,
  `cara_dagang` varchar(100) DEFAULT NULL,
  `cara_bayar_id` decimal(10,0) DEFAULT NULL,
  `cara_bayar` varchar(100) DEFAULT NULL,
  `jenis_komoditi` varchar(100) DEFAULT NULL,
  `jenis_curah` varchar(100) DEFAULT NULL,
  `flag` char(1) DEFAULT 'Y' COMMENT '1 pengisian awal,2 dikirim, N delete',
  PRIMARY KEY (`header_peb_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_header_pib`;
CREATE TABLE `t_header_pib` (
  `header_pib_id` decimal(10,0) NOT NULL,
  `no_pengajuan` varchar(20) DEFAULT NULL,
  `pelabuhan_tujuan_id` decimal(10,0) DEFAULT NULL,
  `pelabuhan_tujuan` varchar(100) DEFAULT NULL,
  `jenis_pib` varchar(50) DEFAULT NULL,
  `jenis_import_id` decimal(10,0) DEFAULT NULL,
  `jenis_import` varchar(100) DEFAULT NULL,
  `cara_bayar_id` decimal(10,0) DEFAULT NULL,
  `cara_bayar` varchar(100) DEFAULT NULL,
  `flag` char(1) DEFAULT '1' COMMENT '1 awal pengisian,2 kirim,N delete',
  PRIMARY KEY (`header_pib_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_kemasan_peb`;
CREATE TABLE `t_kemasan_peb` (
  `kemasan_peb_id` decimal(10,0) NOT NULL,
  `header_peb_id` decimal(10,0) DEFAULT NULL,
  `seri_kemasan` varchar(10) DEFAULT NULL,
  `jumlah_kemasan` decimal(10,0) DEFAULT NULL,
  `jenis_kemasan` varchar(100) DEFAULT NULL,
  `merk_kemasan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`kemasan_peb_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_kemasan_pib`;
CREATE TABLE `t_kemasan_pib` (
  `kemasan_pib_id` decimal(10,0) NOT NULL,
  `header_pib_id` decimal(10,0) DEFAULT NULL,
  `seri_kemasan` varchar(10) DEFAULT NULL,
  `jumlah_kemasan` decimal(10,0) DEFAULT NULL,
  `jenis_kemasan` varchar(100) DEFAULT NULL,
  `merk_kemasan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`kemasan_pib_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_kontainer_peb`;
CREATE TABLE `t_kontainer_peb` (
  `kontainer_peb_id` decimal(10,0) NOT NULL,
  `header_peb_id` decimal(10,0) DEFAULT NULL,
  `seri_kontainer` varchar(10) DEFAULT NULL,
  `no_kontainer` varchar(50) DEFAULT NULL,
  `ukuran_kontainer` varchar(50) DEFAULT NULL,
  `type_kontainer` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kontainer_peb_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_kontainer_pib`;
CREATE TABLE `t_kontainer_pib` (
  `kontainer_pib_id` decimal(10,0) NOT NULL,
  `header_pib_id` decimal(10,0) DEFAULT NULL,
  `seri_kontainer` varchar(10) DEFAULT NULL,
  `no_kontainer` varchar(20) DEFAULT NULL,
  `ukuran_kontainer` decimal(10,0) DEFAULT NULL,
  `type_kontainer` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kontainer_pib_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_monitoring_pelayanan_kapal`;
CREATE TABLE `t_monitoring_pelayanan_kapal` (
  `monitoring_pelayanan_kapal_id` int NOT NULL AUTO_INCREMENT,
  `pelayanan_kapal_id` int DEFAULT NULL,
  `keagenan` int DEFAULT '0' COMMENT '0 putih,1 kuning,2 hijau(2 sudah selesai, 1 ongoing',
  `pkk` int DEFAULT '0' COMMENT '0 putih,1 kuning,2 hijau(2 sudah selesai, 1 ongoing',
  `spm` int DEFAULT '0' COMMENT '0 putih,1 kuning,2 hijau(2 sudah selesai, 1 ongoing',
  `rkbm` int DEFAULT '0' COMMENT '0 putih,1 kuning,2 hijau(2 sudah selesai, 1 ongoing',
  `rpkro` int DEFAULT '0' COMMENT '0 putih,1 kuning,2 hijau(2 sudah selesai, 1 ongoing',
  `ppk` int DEFAULT '0' COMMENT '0 putih,1 kuning,2 hijau(2 sudah selesai, 1 ongoing',
  `spog` int DEFAULT '0' COMMENT '0 putih,1 kuning,2 hijau(2 sudah selesai, 1 ongoing',
  `kepelautan` int DEFAULT '0' COMMENT '0 putih,1 kuning,2 hijau(2 sudah selesai, 1 ongoing',
  `lk3` int DEFAULT '0' COMMENT '0 putih,1 kuning,2 hijau(2 sudah selesai, 1 ongoing',
  `spb` int DEFAULT '0' COMMENT '0 putih,1 kuning,2 hijau(2 sudah selesai, 1 ongoing',
  PRIMARY KEY (`monitoring_pelayanan_kapal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_nota_4a`;
CREATE TABLE `t_nota_4a` (
  `nota_4a_id` int NOT NULL,
  `pelayanan_kapal_id` int DEFAULT NULL,
  `no_nota4a` varchar(50) DEFAULT NULL,
  `kode_rek_labuh` varchar(50) DEFAULT NULL,
  `biaya_labuh` decimal(10,0) DEFAULT NULL,
  `kode_rek_tambat` varchar(50) DEFAULT NULL,
  `biaya_tambat` decimal(10,0) DEFAULT NULL,
  `kode_rek_pandu` varchar(50) DEFAULT NULL,
  `biaya_pandu` decimal(10,0) DEFAULT NULL,
  `kode_rek_tunda` varchar(50) DEFAULT NULL,
  `biaya_tunda` decimal(10,0) DEFAULT NULL,
  `kode_rek_air` varchar(50) DEFAULT NULL,
  `biaya_air` decimal(10,0) DEFAULT NULL,
  `flag` char(1) DEFAULT NULL,
  PRIMARY KEY (`nota_4a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_pbau_alat`;
CREATE TABLE `t_pbau_alat` (
  `pbau_alat_1c_id` int NOT NULL,
  `periode_1c` varchar(100) DEFAULT NULL,
  `noform_1c` varchar(200) DEFAULT NULL,
  `tgl_noform_1c` char(1) DEFAULT NULL,
  `periode_2c` varchar(10) DEFAULT NULL,
  `noform_2c` varchar(50) DEFAULT NULL,
  `tgl_noform_2c` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `periode_nota3c` varchar(10) DEFAULT NULL,
  `nonota3c` varchar(50) DEFAULT NULL,
  `tgl_nota3c` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `periode_nota4c` varchar(10) DEFAULT NULL,
  `nonota4c` varchar(50) DEFAULT NULL,
  `tgl_nota4c` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nama_perusahaan` varchar(200) DEFAULT NULL,
  `perusahaan_id` int DEFAULT NULL,
  `lokasi` int DEFAULT NULL,
  `kapal_id` int DEFAULT NULL,
  `nama_kapal` varchar(200) DEFAULT NULL,
  `keperluan` varchar(200) DEFAULT NULL,
  `flag` char(1) DEFAULT NULL,
  PRIMARY KEY (`pbau_alat_1c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_pbau_alat_1c_detail`;
CREATE TABLE `t_pbau_alat_1c_detail` (
  `pbau_alat_1c_detail` int NOT NULL,
  `pbau_alat_1c_id` int DEFAULT NULL,
  `alat_id` int DEFAULT NULL,
  `nama_alat` varchar(200) DEFAULT NULL,
  `jumlah_alat` decimal(10,0) DEFAULT NULL,
  `satuan_tarif` varchar(50) DEFAULT NULL,
  `minimal_pakai` decimal(10,0) DEFAULT NULL,
  `tgl_mulai_mohon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tgl_selesai_mohon` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tgl_mulai_realisasi` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tgl_selesai_realisasi` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `kode_rek` varchar(50) DEFAULT NULL,
  `biaya_sewa` decimal(10,0) DEFAULT NULL,
  `flag` char(1) DEFAULT NULL,
  PRIMARY KEY (`pbau_alat_1c_detail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_pbau_pengeluaran_2b2`;
CREATE TABLE `t_pbau_pengeluaran_2b2` (
  `pbau_pengeluaran_2b2_id` int NOT NULL,
  `pbau_penumpukan_2b1` int DEFAULT NULL,
  `no_form_2b2` varchar(50) DEFAULT NULL,
  `tgl_2b2` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `no_nota3b` varchar(20) DEFAULT NULL,
  `tgl_nota3b` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `no_nota4b` varchar(20) DEFAULT NULL,
  `tgl_nota4b` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `kode_rek_dermaga` varchar(50) DEFAULT NULL,
  `kode_rek_penumpukan` varchar(50) DEFAULT NULL,
  `flag` char(1) DEFAULT NULL,
  PRIMARY KEY (`pbau_pengeluaran_2b2_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_pbau_penumpukan_2b1`;
CREATE TABLE `t_pbau_penumpukan_2b1` (
  `pbau_penumpukan_2b1` int NOT NULL,
  `pelayanan_kapal_id` int DEFAULT NULL,
  `pelayanan_kapal_rkbm_id` int DEFAULT NULL,
  `no_form2b1` varchar(50) DEFAULT NULL,
  `tgl_2b1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `flag` char(1) DEFAULT NULL,
  PRIMARY KEY (`pbau_penumpukan_2b1`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_pelayanan_kapal`;
CREATE TABLE `t_pelayanan_kapal` (
  `pelayanan_kapal_id` int NOT NULL,
  `no_layanan_kapal` varchar(50) DEFAULT NULL,
  `no_pkk` varchar(50) DEFAULT NULL,
  `tanggal_registrasi_permohonan` date DEFAULT NULL,
  `kode_kapal` varchar(50) DEFAULT NULL,
  `tanda_pendaftaran_kapal` varchar(200) DEFAULT NULL,
  `nama_kapal` varchar(200) DEFAULT NULL,
  `imo` varchar(50) DEFAULT NULL,
  `call_sign` varchar(50) DEFAULT NULL,
  `bendera` varchar(50) DEFAULT NULL,
  `perusahaan_pemilik_kapal` varchar(200) DEFAULT NULL,
  `penanggung_jawab` varchar(200) DEFAULT NULL,
  `alamat` tinytext,
  `keperluan` varchar(200) DEFAULT NULL,
  `mata_uang` varchar(10) DEFAULT NULL,
  `keterangan` tinytext,
  `grt_kapal` decimal(10,2) NOT NULL,
  `loa_kapal` decimal(10,2) NOT NULL,
  `dwt_kapal` decimal(10,2) NOT NULL,
  `draft_muka` decimal(10,2) NOT NULL,
  `jumlah_palka` decimal(10,2) NOT NULL,
  `jenis_kapal_id` int DEFAULT NULL,
  `jenis_kapal` varchar(50) DEFAULT NULL,
  `nama_cso` varchar(200) DEFAULT NULL,
  `no_telp_cso` varchar(100) DEFAULT NULL,
  `no_voyage` varchar(100) DEFAULT NULL,
  `tenaga_pendorong` varchar(200) DEFAULT NULL,
  `gros_tonase` decimal(10,0) NOT NULL,
  `deadweight_tonase` decimal(10,0) NOT NULL,
  `ketinggian_udara` decimal(10,0) NOT NULL,
  `draft_maksimum` decimal(10,0) NOT NULL,
  `draft_belakang` decimal(10,0) NOT NULL,
  `panjang_kapal` decimal(10,0) NOT NULL,
  `lebar_kapal` decimal(10,0) NOT NULL,
  `kode_agen` varchar(50) DEFAULT NULL,
  `nama_agen` varchar(200) DEFAULT NULL,
  `penanggung_jawab_agen` varchar(200) DEFAULT NULL,
  `siupal_pemilik` varchar(100) DEFAULT NULL,
  `alamat_agen` tinytext,
  `file_dokumen_keagenan` tinytext,
  `file_manifest_penumpang` tinytext,
  `file_manifest_bongkar_muat` tinytext,
  `file_manifest_barang_berbahaya` tinytext,
  `file_manifest_barang_khusus` tinytext,
  `pelabuhan_asal` int DEFAULT NULL,
  `waktu_tiba` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `waktu_berangkat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `permintaan_lokasi_tambat` int DEFAULT NULL,
  `pelabuhan_tujuan` int DEFAULT NULL,
  `waktu_aktual_kedatangan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `waktu_aktual_berangkat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lokasi_tambat_terakhir` int DEFAULT NULL,
  `flag` char(1) DEFAULT NULL,
  `flag_spm` char(1) DEFAULT NULL,
  `no_spm` varchar(100) DEFAULT NULL,
  `flag_berangkat` char(1) DEFAULT '0',
  `flag_lk3` char(1) DEFAULT NULL,
  `flag_spb` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_pelayanan_kapal_air`;
CREATE TABLE `t_pelayanan_kapal_air` (
  `pelayanan_kapal_air_id` int NOT NULL,
  `pelayanan_kapal_id` int DEFAULT NULL,
  `pelayanan_kapal_rpkro_id` int DEFAULT NULL,
  `nama_pengisian` varchar(200) DEFAULT NULL,
  `minimal_volume_pengisian` decimal(10,0) DEFAULT NULL,
  `volume_air` decimal(10,0) DEFAULT NULL,
  `tarif_air` decimal(10,0) DEFAULT NULL,
  `flag` char(1) DEFAULT NULL,
  PRIMARY KEY (`pelayanan_kapal_air_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_pelayanan_kapal_bm_brgberbahaya`;
CREATE TABLE `t_pelayanan_kapal_bm_brgberbahaya` (
  `pelayanan_kapal_bm_brgberbahaya_id` int NOT NULL,
  `pelayanan_kapal_id` int DEFAULT NULL COMMENT 'foreign ke ke t_pelayanan_kapal',
  `nama_pengirim` varchar(200) DEFAULT NULL,
  `nama_barang` varchar(200) DEFAULT NULL,
  `nomor_un` varchar(100) DEFAULT NULL,
  `jenis_kemasan` int DEFAULT NULL,
  `nama_kemasan` varchar(100) DEFAULT NULL,
  `kelas_bb` varchar(10) DEFAULT NULL,
  `jumlah_muatan` decimal(10,2) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `jenis_barang` int DEFAULT NULL,
  `nama_jenis_barang` varchar(100) DEFAULT NULL,
  `type_barang` int DEFAULT NULL,
  `nama_type_barang` varchar(100) DEFAULT NULL,
  `flag` char(1) DEFAULT NULL,
  PRIMARY KEY (`pelayanan_kapal_bm_brgberbahaya_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_pelayanan_kapal_bm_brgtercemar`;
CREATE TABLE `t_pelayanan_kapal_bm_brgtercemar` (
  `pelayanan_kapal_bm_brgtercemar_id` int NOT NULL,
  `anex1_kapasitas_kg` decimal(10,2) DEFAULT NULL,
  `anex1_kapasitas_metrik` decimal(10,2) DEFAULT NULL,
  `anex1_bongkar_kg` decimal(10,2) DEFAULT NULL,
  `anex1_bongkar_metrik` decimal(10,2) DEFAULT NULL,
  `anex1_simpan_kg` decimal(10,2) DEFAULT NULL,
  `anex1_simpan_metrik` decimal(10,2) DEFAULT NULL,
  `anex2_kapasitas_kg` decimal(10,2) DEFAULT NULL,
  `anex2_kapasitas_metrik` decimal(10,2) DEFAULT NULL,
  `anex2_bongkar_kg` decimal(10,2) DEFAULT NULL,
  `anex2_bongkar_metrik` decimal(10,2) DEFAULT NULL,
  `anex2_simpan_kg` decimal(10,2) DEFAULT NULL,
  `anex2_simpan_metrik` decimal(10,2) DEFAULT NULL,
  `anex3_kapasitas_kg` decimal(10,2) DEFAULT NULL,
  `anex3_kapasitas_metrik` decimal(10,2) DEFAULT NULL,
  `anex3_bongkar_kg` decimal(10,2) DEFAULT NULL,
  `anex3_bongkar_metrik` decimal(10,2) DEFAULT NULL,
  `anex3_simpan_kg` decimal(10,2) DEFAULT NULL,
  `anex3_simpan_metrik` decimal(10,2) DEFAULT NULL,
  `anex4_kapasitas_kg` decimal(10,2) DEFAULT NULL,
  `anex4_kapasitas_metrik` decimal(10,2) DEFAULT NULL,
  `anex4_bongkar_kg` decimal(10,2) DEFAULT NULL,
  `anex4_bongkar_metrik` decimal(10,2) DEFAULT NULL,
  `anex4_simpan_kg` decimal(10,2) DEFAULT NULL,
  `anex4_simpan_metrik` decimal(10,2) DEFAULT NULL,
  `anex5_kapasitas_kg` decimal(10,2) DEFAULT NULL,
  `anex5_kapasitas_metrik` decimal(10,2) DEFAULT NULL,
  `anex5_bongkar_kg` decimal(10,2) DEFAULT NULL,
  `anex5_bongkar_metrik` decimal(10,2) DEFAULT NULL,
  `anex5_simpan_kg` decimal(10,2) DEFAULT NULL,
  `anex5_simpan_metrik` decimal(10,2) DEFAULT NULL,
  `anex6_kapasitas_kg` decimal(10,2) DEFAULT NULL,
  `anex6_kapasitas_metrik` decimal(10,2) DEFAULT NULL,
  `anex6_bongkar_kg` decimal(10,2) DEFAULT NULL,
  `anex6_bongkar_metrik` decimal(10,2) DEFAULT NULL,
  `anex6_simpan_kg` decimal(10,2) DEFAULT NULL,
  `anex6_simpan_metrik` decimal(10,2) DEFAULT NULL,
  `anex7_kapasitas_kg` decimal(10,2) DEFAULT NULL,
  `se_kapasitas_metrik` decimal(10,2) DEFAULT NULL,
  `se_bongkar_kg` decimal(10,2) DEFAULT NULL,
  `se_bongkar_metrik` decimal(10,2) DEFAULT NULL,
  `se_simpan_kg` decimal(10,2) DEFAULT NULL,
  `se_simpan_metrik` decimal(10,2) DEFAULT NULL,
  `nama_file` tinytext,
  `pelayanan_kapal_id` int NOT NULL,
  PRIMARY KEY (`pelayanan_kapal_bm_brgtercemar_id`,`pelayanan_kapal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_pelayanan_kapal_bm_kargo`;
CREATE TABLE `t_pelayanan_kapal_bm_kargo` (
  `pelayanan_kapal_bm_kargo_id` int NOT NULL,
  `pelayanan_kapal_id` int NOT NULL,
  `jenis_kemasan` int DEFAULT NULL,
  `nama_kemasan` varchar(100) DEFAULT NULL,
  `nama_komoditas` varchar(100) DEFAULT NULL,
  `jenis_kegiatan` int DEFAULT NULL,
  `nama_kegiatan` varchar(20) DEFAULT NULL,
  `jlh_satuan_unit` decimal(10,2) NOT NULL,
  `jlh_satuan_ton` decimal(10,2) NOT NULL,
  `jlh_satuan_metrik` decimal(10,2) NOT NULL,
  `no_bl` varchar(20) DEFAULT NULL,
  `file_bl` tinytext,
  `flag` char(1) DEFAULT NULL,
  PRIMARY KEY (`pelayanan_kapal_bm_kargo_id`,`pelayanan_kapal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_pelayanan_kapal_bm_kontainer`;
CREATE TABLE `t_pelayanan_kapal_bm_kontainer` (
  `pelayanan_kapal_bm_kontainer_id` int NOT NULL,
  `pelayanan_kapal_id` int NOT NULL,
  `jenis_kemasan` int DEFAULT NULL,
  `nama_kemasan` varchar(100) DEFAULT NULL,
  `nama_komoditas` varchar(100) DEFAULT NULL,
  `jenis_kegiatan` int DEFAULT NULL,
  `nama_kegiatan` varchar(20) DEFAULT NULL,
  `no_kontainer` varchar(20) DEFAULT NULL,
  `ukuran_kontainer` varchar(20) DEFAULT NULL,
  `jlh_satuan_unit` decimal(10,2) DEFAULT NULL,
  `jlh_satuan_ton` decimal(10,2) DEFAULT NULL,
  `no_bl` varchar(20) DEFAULT NULL,
  `file_bl` tinytext,
  `flag` char(1) DEFAULT NULL,
  PRIMARY KEY (`pelayanan_kapal_bm_kontainer_id`,`pelayanan_kapal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_pelayanan_kapal_brg_mayoritas`;
CREATE TABLE `t_pelayanan_kapal_brg_mayoritas` (
  `pelayanan_kapal_brg_mayoritas_id` int NOT NULL,
  `pelayanan_kapal_id` int NOT NULL,
  `jenis_barang_mayoritas` int DEFAULT NULL,
  `nama_jenis_barang` varchar(100) DEFAULT NULL,
  `tonase_40_feet_isi` decimal(10,2) DEFAULT NULL,
  `box_40_feet_isi` decimal(10,2) DEFAULT NULL,
  `tonase_20_feet_isi` decimal(10,2) DEFAULT NULL,
  `box_20_feet_isi` decimal(10,2) DEFAULT NULL,
  `tonase_45_feet_isi` decimal(10,2) DEFAULT NULL,
  `box_45_feet_isi` decimal(10,2) DEFAULT NULL,
  `tonase_40_feet_kosong` decimal(10,2) DEFAULT NULL,
  `box_40_feet_kosong` decimal(10,2) DEFAULT NULL,
  `tonase_20_feet_kosong` decimal(10,2) DEFAULT NULL,
  `box_20_feet_kosong` decimal(10,2) DEFAULT NULL,
  `tonase_45_feet_kosong` decimal(10,2) DEFAULT NULL,
  `box_45_feet_kosong` decimal(10,2) DEFAULT NULL,
  `tonase_kargo_brg_campur` decimal(10,2) DEFAULT NULL,
  `tonase_kargo_brg_curah` decimal(10,2) DEFAULT NULL,
  `tonase_kargo_brg_berbahaya` decimal(10,2) DEFAULT NULL,
  `tonase_kargo_brg_karung` decimal(10,2) DEFAULT NULL,
  `tonase_kargo_brg_cair` decimal(10,2) DEFAULT NULL,
  `roda_dua` decimal(10,2) DEFAULT NULL,
  `roda_empat` decimal(10,2) DEFAULT NULL,
  `bus` decimal(10,2) DEFAULT NULL,
  `truk` decimal(10,2) DEFAULT NULL,
  `alat_berat` decimal(10,2) DEFAULT NULL,
  `jenis_brg_lain` varchar(100) DEFAULT NULL,
  `tonase_brg_lain` decimal(10,2) DEFAULT NULL,
  `total_tonase_brg_lain` decimal(10,2) DEFAULT NULL,
  `jlh_penumpang` decimal(10,2) DEFAULT NULL,
  `jlh_hewan` decimal(10,2) DEFAULT NULL,
  `jenis_kegiatan` varchar(20) DEFAULT NULL,
  `flag` char(1) DEFAULT NULL,
  PRIMARY KEY (`pelayanan_kapal_brg_mayoritas_id`,`pelayanan_kapal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_pelayanan_kapal_crew_list`;
CREATE TABLE `t_pelayanan_kapal_crew_list` (
  `pelayanan_kapal_id` int NOT NULL,
  `kode_pelaut` varchar(50) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `kebangsaan` int DEFAULT NULL,
  `no_buku_pelaut` varchar(50) DEFAULT NULL,
  `tgl_expired_sertifikasi` date DEFAULT NULL,
  `jabatan` varchar(200) DEFAULT NULL,
  `flag` char(1) DEFAULT NULL,
  `kapal_masuk_keluar` varchar(10) DEFAULT 'MASUK' COMMENT 'MASUK = PADA SAAT WARTA KEDATANGAN,KELUAR PADA SAAT PERMOHONAN KEBERANGKATAN KAPAL',
  PRIMARY KEY (`pelayanan_kapal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_pelayanan_kapal_dokumen`;
CREATE TABLE `t_pelayanan_kapal_dokumen` (
  `pelayanan_kapal_dokumen_id` int NOT NULL,
  `pelayanan_kapal_id` int NOT NULL,
  `nama_dokumen` varchar(200) DEFAULT NULL,
  `no_dokumen` varchar(50) DEFAULT NULL,
  `jenis_dokumen` varchar(50) DEFAULT NULL,
  `tempat_dikeluarkan` varchar(100) DEFAULT NULL,
  `tgl_dikeluarkan` date DEFAULT NULL,
  `tgl_endorsment` date DEFAULT NULL,
  `tanggal_expired` date DEFAULT NULL,
  `nama_file` tinytext,
  `flag` char(1) DEFAULT NULL,
  PRIMARY KEY (`pelayanan_kapal_dokumen_id`,`pelayanan_kapal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_pelayanan_kapal_pandu_tunda`;
CREATE TABLE `t_pelayanan_kapal_pandu_tunda` (
  `pelayanan_kapal_pandu_tunda` int NOT NULL,
  `pelayanan_kapal_id` int DEFAULT NULL,
  `pelayanan_kapal_rpkro_id` int DEFAULT NULL,
  `pandu_id` int DEFAULT NULL,
  `tgl_pandu_awal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tgl_pandu_selesai` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tunda_id` int DEFAULT NULL,
  `tgl_tunda_awal` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tgl_tunda_selesai` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `trf_pandu` decimal(10,0) DEFAULT NULL,
  `trf_pandu_variable` decimal(10,0) DEFAULT NULL,
  `trf_tunda` decimal(10,0) DEFAULT NULL,
  `trf_tunda_variable` decimal(10,0) DEFAULT NULL,
  `persentase_tarif_pandu` decimal(10,0) DEFAULT NULL,
  `persentase_tarif_tunda` decimal(10,0) DEFAULT NULL,
  `flag` char(1) DEFAULT NULL,
  PRIMARY KEY (`pelayanan_kapal_pandu_tunda`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_pelayanan_kapal_pbm`;
CREATE TABLE `t_pelayanan_kapal_pbm` (
  `pelayanan_kapal_id` int NOT NULL,
  `pelayanan_kapal_pbm_id` int NOT NULL,
  `kode_pbm` varchar(50) DEFAULT NULL,
  `nama_perusahaan` varchar(200) DEFAULT NULL,
  `type_pbm` varchar(50) DEFAULT NULL,
  `kegiatan` varchar(20) DEFAULT NULL,
  `flag` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_pelayanan_kapal_rkbm`;
CREATE TABLE `t_pelayanan_kapal_rkbm` (
  `pelayanan_kapal_rkbm_id` int NOT NULL AUTO_INCREMENT,
  `perusahaan_pbm_jpt_id` int NOT NULL COMMENT 'id_perusahaan refers ke m_perusahaan',
  `pelayanan_kapal_id` int NOT NULL,
  `tgl_rencana` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tgl_mulai` timestamp NOT NULL,
  `tgl_selesai` timestamp NOT NULL,
  `jlh_group` int DEFAULT NULL,
  `nama_dok_upload` tinytext,
  `dermaga_id` int DEFAULT NULL,
  `flag` char(1) DEFAULT NULL,
  PRIMARY KEY (`pelayanan_kapal_rkbm_id`,`perusahaan_pbm_jpt_id`,`pelayanan_kapal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_pelayanan_kapal_rkbm_barang`;
CREATE TABLE `t_pelayanan_kapal_rkbm_barang` (
  `pelayanan_kapal_rkbm_barang_id` int NOT NULL,
  `pelayanan_kapal_rkbm_id` int DEFAULT NULL,
  `jenis_kegiatan` varchar(100) DEFAULT NULL,
  `nama_barang` varchar(200) DEFAULT NULL,
  `npwp_shipper_pbm_jpt` varchar(50) DEFAULT NULL,
  `jlh_palka` int DEFAULT NULL,
  `sistem_penyaluran` varchar(50) DEFAULT NULL,
  `no_bl` int DEFAULT NULL,
  `jlh_satuan_unit` decimal(10,0) DEFAULT NULL,
  `jlh_satuan_ton` decimal(10,0) DEFAULT NULL,
  `jlh_satuan_metrik` decimal(10,0) DEFAULT NULL,
  `jlh_buruh` int DEFAULT NULL,
  `flag` char(1) DEFAULT 'Y',
  `nama_trf_dermaga` varchar(200) DEFAULT NULL,
  `trf_dermaga` decimal(10,0) DEFAULT NULL,
  `nama_trf_penumpukan` varchar(200) DEFAULT NULL,
  `trf_penumpukan` decimal(10,0) DEFAULT NULL,
  `masa_penumpukan` decimal(10,0) DEFAULT NULL,
  `jlh_brg_trf` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`pelayanan_kapal_rkbm_barang_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_pelayanan_kapal_rkbm_tkbm`;
CREATE TABLE `t_pelayanan_kapal_rkbm_tkbm` (
  `pelayanan_kapal_rkbm_tkbm_id` int NOT NULL,
  `pelayanan_kapal_rkbm_id` int DEFAULT NULL,
  `tgl_permohonan_tkbm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jlh_shift_total` int DEFAULT NULL,
  `no_spk_tkbm` varchar(100) DEFAULT NULL,
  `jlh_group` int DEFAULT NULL,
  `jlh_buruh_group` int DEFAULT NULL,
  `sifat_kerja` varchar(50) DEFAULT NULL,
  `flag` char(1) DEFAULT NULL,
  PRIMARY KEY (`pelayanan_kapal_rkbm_tkbm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_pelayanan_kapal_rpkro`;
CREATE TABLE `t_pelayanan_kapal_rpkro` (
  `pelayanan_kapal_rpkro_id` int NOT NULL,
  `pelayanan_kapal_id` int DEFAULT NULL,
  `no_rpkro` varchar(50) DEFAULT NULL,
  `jenis_rpk_ro` varchar(50) DEFAULT NULL,
  `lokasi_dermaga_id` int DEFAULT NULL,
  `nama_dermaga` varchar(100) DEFAULT NULL,
  `waktu_rencana` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `keterangan` text,
  `pelayanan_kapal_rkbm_id` int DEFAULT NULL,
  `no_ppkb` varchar(50) DEFAULT NULL,
  `flag` char(1) DEFAULT NULL,
  `flag_ppk` char(1) DEFAULT NULL,
  `no_ppk` varchar(50) DEFAULT NULL,
  `flag_spog` char(1) DEFAULT NULL,
  `no_permohonan_spog` varchar(50) DEFAULT NULL,
  `wkt_permohonan_spog` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`pelayanan_kapal_rpkro_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_pelayanan_kapal_tambat`;
CREATE TABLE `t_pelayanan_kapal_tambat` (
  `pelayanan_kapal_tambat_id` int NOT NULL,
  `pelayanan_kapal_id` int DEFAULT NULL,
  `pelayanan_kapal_rpkro_id` int DEFAULT NULL,
  `nama_tarif_tambat` varchar(200) DEFAULT NULL,
  `trf_tambat` decimal(10,0) DEFAULT NULL,
  `batas_etmal` decimal(10,0) DEFAULT NULL,
  `flag` char(1) DEFAULT NULL,
  PRIMARY KEY (`pelayanan_kapal_tambat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_penerimaan_barang`;
CREATE TABLE `t_penerimaan_barang` (
  `penerimaan_barang_id` decimal(10,0) NOT NULL,
  `no_penerimaan` varchar(20) DEFAULT NULL,
  `nama_pbm` varchar(200) DEFAULT NULL,
  `dokumen_pendukung` varchar(200) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `nama_kapal` varchar(200) DEFAULT NULL,
  `nama_pic_gudang` varchar(200) DEFAULT NULL,
  `nama_pic_pbm` varchar(200) DEFAULT NULL,
  `flag` char(1) DEFAULT 'Y' COMMENT 'Y aktive,N delete',
  PRIMARY KEY (`penerimaan_barang_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_penerimaan_barang_kontainer`;
CREATE TABLE `t_penerimaan_barang_kontainer` (
  `penerimaan_barang_id` decimal(10,0) NOT NULL,
  `penerimaan_barang_kontainer_id` decimal(10,0) DEFAULT NULL,
  `no_container` varchar(20) DEFAULT NULL,
  `type_kontainer` varchar(100) DEFAULT NULL,
  `lokasi_id` decimal(10,0) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `posisi_id` decimal(10,0) DEFAULT NULL,
  `posisi` varchar(100) DEFAULT NULL,
  `row` varchar(2) DEFAULT NULL,
  `column` varchar(2) DEFAULT NULL,
  `flag` char(1) DEFAULT 'Y',
  PRIMARY KEY (`penerimaan_barang_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_pengangkutan_peb`;
CREATE TABLE `t_pengangkutan_peb` (
  `pengangkutan_peb_id` decimal(10,0) DEFAULT NULL,
  `header_peb_id` decimal(10,0) DEFAULT NULL,
  `tempat_penimbunan` varchar(100) DEFAULT NULL,
  `pelabuhan_muat_asal_id` decimal(10,0) NOT NULL,
  `pelabuhan_muat_asal` varchar(100) DEFAULT NULL,
  `pelabuhan_muat_ekspor_id` decimal(10,0) DEFAULT NULL,
  `pelabuhan_muat_ekspor` varchar(100) DEFAULT NULL,
  `pelabuhan_muat_bongkar` varchar(100) DEFAULT NULL,
  `negara_tujuan_ekspor` varchar(100) DEFAULT NULL,
  `pelabuhan_muat_tujuan` varchar(100) DEFAULT NULL,
  `tanggal_perkiraan_ekspor` date DEFAULT NULL,
  `lokasi_pemeriksaan` varchar(100) DEFAULT NULL,
  `tgl_pemeriksaan` date DEFAULT NULL,
  `kantor_pemeriksa` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pelabuhan_muat_asal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_pengangkutan_peb_sarana`;
CREATE TABLE `t_pengangkutan_peb_sarana` (
  `pengangkutan_peb_sarana_id` decimal(10,0) NOT NULL,
  `pengangkutan_peb_id` decimal(10,0) DEFAULT NULL,
  `no_seri` varchar(10) DEFAULT NULL,
  `no_pengangkut` varchar(10) DEFAULT NULL,
  `nama_pengangkut` varchar(200) DEFAULT NULL,
  `bendera` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pengangkutan_peb_sarana_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_pengangkutan_pib`;
CREATE TABLE `t_pengangkutan_pib` (
  `pengangkutan_pib_id` decimal(10,0) NOT NULL,
  `header_pib_id` decimal(10,0) DEFAULT NULL,
  `no_bc11_pib` varchar(20) DEFAULT NULL,
  `no_post_bc11_pib` varchar(20) DEFAULT NULL,
  `cara_pengangkutan_pib` varchar(5) DEFAULT 'LAUT',
  `nama_sarana_pengangkut` varchar(200) DEFAULT NULL,
  `no_voyage` varchar(20) DEFAULT NULL,
  `bendera` varchar(100) DEFAULT NULL,
  `perkiraan_tgl_tiba` date DEFAULT NULL,
  `pelabuhan_muat` varchar(100) DEFAULT NULL,
  `pelabuhan_transit` varchar(100) DEFAULT NULL,
  `tempat_penimbunan` varchar(100) DEFAULT NULL,
  `pelabuhan_tujuan_id` decimal(10,0) DEFAULT NULL,
  `pelabuhan_tujuan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pengangkutan_pib_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_pengeluaran_barang`;
CREATE TABLE `t_pengeluaran_barang` (
  `pengeluaran_barang_id` decimal(10,0) DEFAULT NULL,
  `penerimaan_barang_id` decimal(10,0) DEFAULT NULL,
  `no_pengeluaran` varchar(20) DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `dokumen_pendukung` varchar(200) DEFAULT NULL,
  `pic_pbm` varchar(200) DEFAULT NULL,
  `pic_gudang` varchar(200) DEFAULT NULL,
  `flag` char(1) DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_pengeluaran_barang_kontainer`;
CREATE TABLE `t_pengeluaran_barang_kontainer` (
  `pengeluaran_barang_kontainer_id` decimal(10,0) NOT NULL,
  `pengeluaran_barang_id` decimal(10,0) DEFAULT NULL,
  `penerimaan_barang_kontainer_id` decimal(10,0) DEFAULT NULL,
  `flag` char(1) DEFAULT 'Y',
  PRIMARY KEY (`pengeluaran_barang_kontainer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_pengeluaran_rkbm_barang`;
CREATE TABLE `t_pengeluaran_rkbm_barang` (
  `pengeluaran_rkbm_barang_id` int NOT NULL,
  `pelayanan_kapal_rkbm_barang_id` int DEFAULT NULL,
  `jlh_brg_trf_keluar` decimal(10,0) DEFAULT NULL,
  `flag` char(1) DEFAULT NULL,
  PRIMARY KEY (`pengeluaran_rkbm_barang_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_pernyataan_peb`;
CREATE TABLE `t_pernyataan_peb` (
  `pernyataan_peb_id` decimal(10,0) NOT NULL,
  `header_peb_id` decimal(10,0) DEFAULT NULL,
  `tempat` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pernyataan_peb_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_pernyataan_pib`;
CREATE TABLE `t_pernyataan_pib` (
  `pernyataan_pib_id` decimal(10,0) NOT NULL,
  `header_pib_id` decimal(10,0) DEFAULT NULL,
  `tempat_pernyataan` varchar(100) DEFAULT NULL,
  `tanggal_pernyataan` date DEFAULT NULL,
  `nama_pernyataan` varchar(100) DEFAULT NULL,
  `jabatan_pernyataan` varbinary(100) DEFAULT NULL,
  PRIMARY KEY (`pernyataan_pib_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2023-11-22 13:16:33