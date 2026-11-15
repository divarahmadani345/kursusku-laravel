# Test Matrix Week 12 - Relasi Database

| No | Skenario | Hasil yang Diharapkan | Status |
|----|----------|-----------------------|--------|
| 1  | Buka `/enrollments/create` | Dropdown peserta dan kursus tampil | Pass |
| 2  | Submit tanpa memilih peserta | Ditolak (validation error) | Pass |
| 3  | Submit tanpa memilih kursus | Ditolak (validation error) | Pass |
| 4  | Alya -> Laravel Dasar | Tersimpan, status `registered` | Pass |
| 5  | Alya -> Laravel Dasar (lagi) | Ditolak (duplikasi) | Pass |
| 6  | Alya -> PHP Dasar | Berhasil tersimpan | Pass |
| 7  | Bima -> Laravel Dasar | Berhasil tersimpan | Pass |
| 8  | Buka `/enrollments` | Data relasional tampil lengkap | Pass |
| 9  | Delete Course Dummy | Enrollment ikut terhapus (Cascade) | Pass |
| 10 | Delete Participant Dummy | Enrollment ikut terhapus (Cascade) | Pass |