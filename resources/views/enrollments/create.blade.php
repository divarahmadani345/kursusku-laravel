@extends('layouts.app')
@section('title', 'Tambah Pendaftaran')
@section('content')
<div class="container py-4">
    <h1 class="h3 mb-3">Tambah Pendaftaran</h1>
    <form method="POST" action="{{ route('enrollments.store') }}" class="card card-body">
        @csrf
        
        <div class="mb-3">
            <label class="form-label">Pilih Peserta</label>
            <select name="participant_id" class="form-select" required>
                <option value="">-- Pilih Peserta --</option>
                @foreach ($participants as $p)
                    <option value="{{ $p->id }}" @selected(old('participant_id') == $p->id)>
                        {{ $p->name }} - {{ $p->email }}
                    </option>
                @endforeach
            </select>
            @error('participant_id') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Pilih Kursus</label>
            <select name="course_id" class="form-select" required>
                <option value="">-- Pilih Kursus --</option>
                @foreach ($courses as $c)
                    <option value="{{ $c->id }}" @selected(old('course_id') == $c->id)>
                        {{ $c->name }} ({{ $c->code }})
                    </option>
                @endforeach
            </select>
            @error('course_id') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
        </div>

        <button class="btn btn-primary" type="submit">Simpan Pendaftaran</button>
    </form>
</div>
@endsection