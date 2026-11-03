@extends('layouts.app')
@section('title', 'Daftar Kursus')
@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0">Daftar Kursus</h1>
        <a href="{{ route('courses.create') }}" class="btn btn-primary">+ Tambah Kursus</a>
    </div>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="card">
        <div class="table-responsive">
            <table class="table table-striped mb-0">
                <thead>
                    <tr><th>Kode</th><th>Nama</th><th>Biaya</th><th>Kuota</th><th>Mulai</th><th>Status</th></tr>
                </thead>
                <tbody>
                    @forelse ($courses as $course)
                        <tr>
                            <td>{{ $course->code }}</td>
                            <td>{{ $course->name }}</td>
                            <td>Rp {{ number_format($course->fee, 0, ',', '.') }}</td>
                            <td>{{ $course->quota }}</td>
                            <td>{{ $course->start_date->format('d/m/Y') }}</td>
                            <td>{{ ucfirst($course->status) }}</td>
                        </tr>
                    @empty
                        <tr><td colspan="6" class="text-center py-4">Belum ada data.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection