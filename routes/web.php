<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/alur-mvc', function () {
    return view('alur');
})->name('alur');

Route::get('/pendaftaran', function () {
    $courses = [
        1 => ['name' => 'Web Dasar'],
        2 => ['name' => 'PHP Dasar'],
        3 => ['name' => 'Laravel Dasar'],
    ];

    return view('enrollments.create', compact('courses'));
})->name('enrollments.create');

Route::post('/pendaftaran/preview', function (Request $request) {
    // 1. Tambahkan validasi untuk field yang ada di form kamu
    $data = $request->validate([
        'name'            => ['required', 'string', 'min:3', 'max:100'],
        'email'           => ['required', 'email'],
        'phone'           => ['nullable', 'string', 'max:20'], // Nomor HP
        'prodi'           => ['nullable', 'string', 'max:100'], // Program Studi
        'course_id'       => ['required', 'integer', 'in:1,2,3'], // Wajib pilih (1, 2, atau 3)
        'method'          => ['nullable', 'string'],
        'participant_type'=> ['nullable', 'string'],
        'interests'       => ['nullable', 'array'], // Checkbox (array)
        'notes'           => ['nullable', 'string'],
    ]);

    // 2. Kembalikan ke halaman form dengan pesan sukses dan data lama
    return back()
        ->with('success', 'Form lolos validasi. Database akan ditambahkan pada pertemuan berikutnya.')
        ->withInput();
})->name('enrollments.preview');

Route::get('/courses/{course}/availability', function (int $course) {
    $availability = [
        1 => ['course' => 'Web Dasar',     'remaining' => 12],
        2 => ['course' => 'PHP Dasar',     'remaining' => 8],
        3 => ['course' => 'Laravel Dasar', 'remaining' => 4],
    ];

    abort_unless(isset($availability[$course]), 404);

    return response()->json($availability[$course]);
})->name('courses.availability');
Route::resource('courses', CourseController::class);