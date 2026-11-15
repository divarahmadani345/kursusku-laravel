<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;

// --- Rute Halaman Utama & Statis ---
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/alur-mvc', function () {
    return view('alur');
})->name('alur');

// --- Rute Availability (Ajax Dummy dari Pertemuan 9) ---
Route::get('/courses/{course}/availability', function (int $course) {
    $availability = [
        1 => ['course' => 'Web Dasar',     'remaining' => 12],
        2 => ['course' => 'PHP Dasar',     'remaining' => 8],
        3 => ['course' => 'Laravel Dasar', 'remaining' => 4],
    ];

    abort_unless(isset($availability[$course]), 404);

    return response()->json($availability[$course]);
})->name('courses.availability');


// --- Rute Resource ---
Route::resource('courses', CourseController::class);
Route::resource('enrollments', EnrollmentController::class)->only(['index', 'create', 'store']);

// --- Rute Alias (Opsional) ---
// Agar tombol/menu lama yang mengarah ke '/pendaftaran' tetap bisa berfungsi 
// dan diarahkan ke form pendaftaran database yang baru.
Route::get('/pendaftaran', [EnrollmentController::class, 'create'])->name('enrollments.create.alias');