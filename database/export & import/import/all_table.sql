ALTER TABLE t_data_transaksi_peb 
MODIFY COLUMN data_transaksi_peb_id INT AUTO_INCREMENT PRIMARY KEY;

ALTER TABLE t_header_peb 
MODIFY COLUMN header_peb_id INT AUTO_INCREMENT PRIMARY KEY;

ALTER TABLE t_entitas_peb_pemilik_barang 
MODIFY COLUMN entitas_peb_pemilik_barang_id INT AUTO_INCREMENT PRIMARY KEY;

ALTER TABLE t_dokument_pendukung_peb 
MODIFY COLUMN dokumen_pendukung_peb_id INT AUTO_INCREMENT PRIMARY KEY;

ALTER TABLE t_pengangkutan_peb 
MODIFY COLUMN pengangkutan_peb_id INT AUTO_INCREMENT PRIMARY KEY;

ALTER TABLE t_pengangkutan_peb_sarana 
MODIFY COLUMN pengangkutan_peb_sarana_id INT AUTO_INCREMENT PRIMARY KEY;

ALTER TABLE t_kemasan_peb 
MODIFY COLUMN kemasan_peb_id INT AUTO_INCREMENT PRIMARY KEY;

ALTER TABLE t_kontainer_peb 
MODIFY COLUMN kontainer_peb_id INT AUTO_INCREMENT PRIMARY KEY;

ALTER TABLE t_data_transaksi_peb_bank_devisa 
MODIFY COLUMN data_transaksi_peb_bank_devisa_id INT AUTO_INCREMENT PRIMARY KEY;

ALTER TABLE t_data_barang_peb 
MODIFY COLUMN data_barang_peb_id INT AUTO_INCREMENT PRIMARY KEY;

ALTER TABLE t_data_barang_peb_dok_fasilitas_lartas 
MODIFY COLUMN data_barang_peb_dok_fasilitas_lartas_id INT AUTO_INCREMENT PRIMARY KEY;

ALTER TABLE t_pernyataan_peb 
MODIFY COLUMN pernyataan_peb_id INT AUTO_INCREMENT PRIMARY KEY;
 


 


