//Query JOIN pengajuan_cuti

SELECT pegawai.nama_pegawai, type_cuti.type, pengajuan_cuti.tgl_sekarang, pengajuan_cuti.tgl_mulai, pengajuan_cuti.tgl_selesai, kota.nama_kota, pengajuan_cuti.alasan, pengajuan_cuti.disetujui_pimpinan, pengajuan_cuti.disetujui_hr
FROM pengajuan_cuti
JOIN pegawai ON pengajuan_cuti.id_pegawai = pegawai.id_pegawai
JOIN type_cuti ON pengajuan_cuti.id_type_cuti = type_cuti.id_type_cuti
JOIN kota ON pengajuan_cuti.id_kota = kota.id_kota