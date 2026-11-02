@extends('layouts.app')

@section('title', 'Pendaftaran Kursus')

@section('content')
<style>
    .form-container { max-width: 650px; margin: 40px auto; background: white; padding: 35px; border-radius: 8px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); }
    .form-title { font-weight: 700; color: #0f172a; margin-bottom: 5px; }
    .form-subtitle { color: #64748b; font-size: 0.9rem; margin-bottom: 25px; }
    .form-label { font-weight: 600; font-size: 0.85rem; color: #334155; margin-bottom: 5px; }
    .form-control, .form-select { border: 1px solid #cbd5e1; border-radius: 4px; padding: 10px 12px; font-size: 0.95rem; }
    .form-control:focus, .form-select:focus { border-color: #0d9488; box-shadow: 0 0 0 3px rgba(13, 148, 136, 0.1); }
    .radio-group { display: flex; gap: 15px; flex-wrap: wrap; margin-top: 5px; }
    .radio-group label { display: flex; align-items: center; gap: 5px; font-size: 0.9rem; color: #334155; cursor: pointer; }
</style>

<div class="container">
    <div class="form-container">
        <h3 class="form-title">Pendaftaran Kursus</h3>
        <p class="form-subtitle">Gunakan data pribadi. Field bertanda <span class="text-danger">*</span> wajib diisi.</p>

        @if (session('success'))
            <div class="alert alert-success mb-4">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('enrollments.preview') }}">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
                @error('name') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" name="email" value="{{ old('email') }}" class="form-control" required>
                @error('email') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Nomor HP</label>
                <input type="text" name="phone" value="{{ old('phone') }}" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Program Studi</label>
                <input type="text" name="prodi" value="{{ old('prodi') }}" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Pilih Kursus <span class="text-danger">*</span></label>
                <select id="course_id" name="course_id" class="form-select" required>
                    <option value="">-- Pilih Kursus --</option>
                    @foreach ($courses as $id => $course)
                        <option value="{{ $id }}" @selected(old('course_id') == $id)>{{ $course['name'] }}</option>
                    @endforeach
                </select>
                @error('course_id') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Metode Belajar</label>
                <select name="method" class="form-select">
                    <option value="">-- Pilih metode --</option>
                    <option value="Offline">Offline (Tatap Muka)</option>
                    <option value="Online">Online (Zoom/Meet)</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Peserta</label>
                <div class="radio-group">
                    <label><input type="radio" name="participant_type" value="Mahasiswa" checked> Mahasiswa</label>
                    <label><input type="radio" name="participant_type" value="Umum"> Umum</label>
                    <label><input type="radio" name="participant_type" value="Guru"> Guru</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Minat Tambahan</label>
                <div class="radio-group">
                    <label><input type="checkbox" name="interests[]" value="UI/UX"> UI/UX</label>
                    <label><input type="checkbox" name="interests[]" value="Database"> Database</label>
                    <label><input type="checkbox" name="interests[]" value="Backend"> Backend</label>
                    <label><input type="checkbox" name="interests[]" value="Frontend"> Frontend</label>
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label">Catatan</label>
                <textarea name="notes" class="form-control" rows="3" placeholder="Tambahkan catatan jika perlu..."></textarea>
            </div>

            <div id="availability" class="alert alert-secondary py-2 mb-4" style="font-size: 0.9rem;">
                Pilih kursus untuk melihat sisa kursi.
            </div>

            <!-- Tombol Kirim -->
            <button type="submit" class="btn btn-primary w-100 py-2 fw-bold">Kirim Pendaftaran</button>
        </form>
    </div>
</div>
@endsection