@extends('layouts.app')
@section('title', 'Laporan Pendaftaran')
@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0">Laporan Pendaftaran Kursus</h1>
        <a href="{{ route('enrollments.create') }}" class="btn btn-primary">+ Tambah Pendaftaran</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="table-responsive">
            <table class="table table-striped mb-0">
                <thead>
                    <tr>
                        <th>Nama Peserta</th>
                        <th>Kursus</th>
                        <th>Tanggal Mulai</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($enrollments as $e)
                        <tr>
                            <td>{{ $e->participant->name }}</td>
                            <td>{{ $e->course->name }}</td>
                            <td>{{ $e->course->start_date->format('d/m/Y') }}</td>
                            <td>{{ ucfirst($e->status) }}</td>
                        </tr>
                    @empty
                        <tr><td colspan="4" class="text-center py-4">Belum ada data pendaftaran.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection