# Log Penggunaan AI - Pertemuan 10

| Waktu | Masalah/Tujuan | Prompt Singkat | Saran Diterima/Ditolak & Alasan | Test/Verifikasi |
|-------|----------------|----------------|---------------------------------|-----------------|
| [Tanggal] | Membuat migration dan model Course | "Berikan kode migration untuk tabel courses sesuai blueprint" | Diterima. Kode sesuai dengan tipe data yang dibutuhkan. | `php artisan migrate` berhasil (DONE) |
| [Tanggal] | Mengatasi error `ViteManifestNotFoundException` | "Kenapa Laravel error manifest not found?" | Diterima. Ternyata `npm run dev` belum menyala. | Menjalankan `npm run dev` dan web kembali normal. |
| [Tanggal] | Membuat fungsi controller (index, create, store) | "Tolong buatkan implementasi method store dengan validasi" | Diterima. Validasi dan `Course::create` bekerja dengan baik. | Mengisi form di web dan data masuk ke MySQL. |
| [Tanggal] | Membuat form dan tabel view | "Buatkan view index dan create menggunakan Bootstrap" | Diterima. Tampilan rapi dan terhubung ke route. | Mengetes form tambah kursus dan melihat daftar kursus. |