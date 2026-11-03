@extends('layouts.app')
@section('title', 'Tambah Kursus')
@section('content')
<div class="container py-4" style="max-width: 760px;">
    <h1 class="h3 mb-3">Tambah Kursus</h1>
    <form method="POST" action="{{ route('courses.store') }}" class="card card-body">
        @csrf
        <div class="mb-3">
            <label class="form-label">Kode Kursus</label>
            <input class="form-control" name="code" value="{{ old('code') }}" required>
            @error('code') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Kursus</label>
            <input class="form-control" name="name" value="{{ old('name') }}" required>
            @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="description" rows="3">{{ old('description') }}</textarea>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Biaya</label>
                <input class="form-control" type="number" name="fee" value="{{ old('fee') }}" required>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Kuota</label>
                <input class="form-control" type="number" name="quota" value="{{ old('quota') }}" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Tanggal Mulai</label>
                <input class="form-control" type="date" name="start_date" value="{{ old('start_date') }}" required>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Status</label>
                <select class="form-select" name="status" required>
                    <option value="draft" @selected(old('status') == 'draft')>Draft</option>
                    <option value="open" @selected(old('status') == 'open')>Open</option>
                    <option value="closed" @selected(old('status') == 'closed')>Closed</option>
                </select>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Simpan Kursus</button>
    </form>
</div>
@endsection