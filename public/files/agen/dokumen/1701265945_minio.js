const Minio = require("minio");
const minioClient = new Minio.Client({
    // endPoint: '10.48.0.10',
    // port: 9000,
    // useSSL: false,
    // accessKey: 'simpegkey',
    // secretKey: 'h3psyx7f2YCgsB2idaQAlgGwxxGsSGe6ZEhVzBd7'
    endPoint: process.env.MINIO_ENDPOINT,
    port: parseInt(process.env.MINIO_PORT),
    useSSL: String(process.env.MINIO_USE_SSL).toLowerCase() == "true", // false,
    accessKey: process.env.MINIO_ACCESS_KEY,
    secretKey: process.env.MINIO_SECRET_KEY,
});

const monioBucker = process.env.MINIO_BUCKET

module.exports = { minioClient, monioBucker };
/* 
administrasi_pns/
-file_foto/
-file_kerpeg/
-file_kis/
-file_npwp/
-file_tespen/
karis_karsu/
-file_buku_nikah_istri/
-file_buku_nikah_suami/
-file_foto_suami_istri/
-ttd/
kelola_pensiun/
-file_sk/
kenaikan_pangkat/
-file_surat_keterangan_hukdis/
-file_surat_pengantar_skpd/
-sk/
-ttd/
peserta_ujian_dinas/
-sk_peserta/
-ttd_peserta/
prajabatan/
-peserta/file_sertifikat/
usul_ijin_belajar/
-ijazah/
-ket_eselon/
-ket_univ/
-ttd/
-ttd_peserta/
usul_tugas_belajar/
-ijazah/
-ket_eselon/
-ket_univ/
-ttd/ */