@extends('layouts.app')

@section('title', 'Edit Kursus')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0">Edit Kursus</h1>
        <a href="{{ route('courses.show', $course) }}" class="btn btn-outline-secondary">Batal</a>
    </div>

    <form method="POST" action="{{ route('courses.update', $course) }}" class="card card-body">
        @csrf
        @method('PUT') <!-- Wajib untuk update -->
        
        <div class="mb-3">
            <label class="form-label">Kode Kursus</label>
            <input class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code', $course->code) }}" required>
            @error('code') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Kursus</label>
            <input class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $course->name) }}" required>
            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="3">{{ old('description', $course->description) }}</textarea>
            @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Biaya</label>
                <input class="form-control @error('fee') is-invalid @enderror" type="number" name="fee" value="{{ old('fee', $course->fee) }}" required>
                @error('fee') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Kuota</label>
                <input class="form-control @error('quota') is-invalid @enderror" type="number" name="quota" value="{{ old('quota', $course->quota) }}" required>
                @error('quota') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Tanggal Mulai</label>
                <input class="form-control @error('start_date') is-invalid @enderror" type="date" name="start_date" value="{{ old('start_date', $course->start_date->format('Y-m-d')) }}" required>
                @error('start_date') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Status</label>
                <select class="form-select @error('status') is-invalid @enderror" name="status" required>
                    <option value="draft" @selected(old('status', $course->status) === 'draft')>Draft</option>
                    <option value="open" @selected(old('status', $course->status) === 'open')>Open</option>
                    <option value="closed" @selected(old('status', $course->status) === 'closed')>Closed</option>
                </select>
                @error('status') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
    </form>
</div>
@endsection