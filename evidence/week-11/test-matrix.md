# Tabel Pengujian Praktikum Pertemuan 11

Course CRUD Lanjutan (Show, Form Request, Edit/Update, Delete) - Proyek KursusKu

Nama: [Diva rahmadani] | NIM: [2524212] | PTIK 5G | Pemrograman Web III

| No. | Skenario Pengujian | Data Uji | Hasil yang Diharapkan | Actual | Status | Bukti |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| 1 | Menambah kursus valid | Semua data valid | Kursus berhasil ditambahkan | Berhasil masuk ke database | Pass | `06-update-success.png` |
| 2 | Kode kursus duplikat | Kode yang sudah ada (PHP-101) | Validasi menolak data | Ditolak; pesan "The code has already been taken." tampil | Pass | `04-validation-duplicate-code.png` |
| 3 | Nama kursus kosong | Nama dikosongkan | Validasi menolak data | Ditolak; pesan required tampil | Pass | - |
| 4 | Nama kursus terlalu pendek | Nama 2 karakter ("AI") | Validasi menolak data | Ditolak; pesan minimal 3 karakter | Pass | - |
| 5 | Biaya negatif | Fee: -1000 | Validasi menolak data | Ditolak; pesan minimal 0 | Pass | - |
| 6 | Biaya bukan angka | Fee: "abc" | Validasi menolak data | Ditolak; pesan harus integer | Pass | - |
| 7 | Kuota nol | Kuota: 0 | Validasi menolak data | Ditolak; pesan between 1-500 | Pass | - |
| 8 | Kuota melebihi batas | Kuota: 501 | Validasi menolak data | Ditolak; pesan "The quota field must be between 1 and 500." | Pass | `05-validation-quota-501.png` |
| 9 | Batas kuota minimum | Kuota: 1 | Data diterima | Berhasil disimpan | Pass | - |
| 10 | Batas kuota maksimum | Kuota: 500 | Data diterima | Berhasil disimpan | Pass | - |
| 11 | Status tidak valid | Status: "active" (via inspect) | Validasi menolak data | Ditolak; hanya draft/open/closed | Pass | - |
| 12 | Edit tanpa ubah kode | Edit PHP-101, ubah nama | Berhasil disimpan | Data berubah, pesan sukses tampil | Pass | `06-update-success.png` |
| 13 | Edit ke kode lain | Ubah code PHP-101 ke LRV-101 | Validasi menolak data | Ditolak; pesan unique tampil | Pass | - |
| 14 | Update normal | Ubah nama, fee, kuota | Berhasil disimpan | Data berubah, pesan sukses tampil | Pass | `06-update-success.png` |
| 15 | Hapus kursus | Klik hapus pada data dummy | Data terhapus | Data hilang dari index, pesan sukses tampil | Pass | `07-delete-success.png` |