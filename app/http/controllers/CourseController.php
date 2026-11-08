<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Menampilkan daftar semua kursus.
     */
    public function index()
    {
        $courses = Course::latest()->get();
        return view('courses.index', compact('courses'));
    }

    /**
     * Menampilkan form untuk membuat kursus baru.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Menyimpan kursus baru ke database.
     */
    public function store(StoreCourseRequest $request)
    {
        Course::create($request->validated());
        return to_route('courses.index')->with('success', 'Kursus berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail satu kursus.
     */
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    /**
     * Menampilkan form untuk mengedit kursus.
     */
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    /**
     * Menyimpan perubahan kursus ke database.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        $course->update($request->validated());
        return to_route('courses.show', $course)->with('success', 'Kursus berhasil diperbarui.');
    }

    /**
     * Menghapus kursus dari database.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return to_route('courses.index')->with('success', 'Kursus berhasil dihapus.');
    }
}