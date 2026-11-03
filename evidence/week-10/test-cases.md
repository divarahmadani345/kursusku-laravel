# Test Matrix Week 10 - CRUD Course

| No | Skenario Uji | Input Utama | Hasil yang Diharapkan | Status |
|----|--------------|-------------|-----------------------|--------|
| 1  | Simpan data valid | Semua field valid | Data tersimpan, redirect ke index, muncul pesan sukses | Lulus |
| 2  | Kode kosong | `code` kosong | Validasi gagal, muncul pesan error (required) | Lulus |
| 3  | Kode duplikat | `WEB-101` diinput 2x | Ditolak oleh rule unique | Lulus |
| 4  | Nama kosong | `name` kosong | Validasi gagal, muncul pesan error | Lulus |
| 5  | Biaya negatif | `fee` = -1000 | Ditolak karena rule min:0 | Lulus |
| 6  | Kuota 0 | `quota` = 0 | Ditolak karena rule min:1 | Lulus |
| 7  | Status tidak valid | Mengubah nilai status lewat inspect element menjadi "active" | Ditolak karena hanya menerima draft/open/closed | Lulus |
| 8  | Daftar tampil ulang | Reload halaman `/courses` | Data tetap ada karena diambil langsung dari MySQL | Lulus |