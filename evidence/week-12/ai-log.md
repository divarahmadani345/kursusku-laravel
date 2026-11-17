# AI Usage Log - Pertemuan 12

Dokumen ini mencatat penggunaan AI selama pengerjaan Praktikum Pemrograman Web III Pertemuan 12 (Relasi Database).

| Prompt / pertanyaan | Saran AI |
| :--- | :--- |
| Kenapa muncul error `Table 'courses' already exists` saat menjalankan `php artisan migrate` ? | AI menyarankan untuk menjalankan migration secara spesifik berdasarkan path untuk tabel `participants` dan `enrollments` saja, tanpa menyentuh tabel `courses` yang sudah ada. |
| Kenapa muncul error `View [enrollments.index] not found` setelah memindahkan file ke folder `admin` ? | AI menyarankan untuk memeriksa kembali awalan `admin.` pada pemanggilan `view()` dan `redirect()` di dalam `EnrollmentController`. |
| Kenapa form enrollment yang muncul malah form pendaftaran user yang panjang? | AI menyarankan untuk memeriksa file `create.blade.php` di folder `enrollments` dan menggantinya dengan form baru yang hanya berisi 2 dropdown (Participant dan Course). |
| Bagaimana cara menguji efek *Cascade Delete* pada database? | AI memberikan contoh perintah Tinker untuk membuat data dummy, menghapus Course, dan memeriksa apakah Enrollment terkait ikut terhapus. |
| Bagaimana cara membuat relasi antara Course, Participant, dan Enrollment? | AI menyarankan penggunaan `hasMany` pada model Course dan Participant, serta `belongsTo` pada model Enrollment. |
| Kenapa validasi duplikasi pendaftaran tidak berjalan? | AI menyarankan untuk menambahkan `Rule::unique('enrollments')->where(...)` pada validasi di Controller dan memastikan pesan error kustom ditambahkan. |