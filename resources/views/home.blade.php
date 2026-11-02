@extends('layouts.app')

@section('title', 'Beranda - KursusKu')

@section('content')
<style>
    /* CSS Khusus untuk halaman ini agar rapi seperti desain */
    .hero-section {
        background-color: #f8fafc;
        padding: 60px 0;
    }
    .hero-text h1 {
        font-weight: 700;
        color: #0f172a;
        font-size: 2.5rem;
        margin-bottom: 1rem;
    }
    .hero-text p {
        color: #475569;
        font-size: 1.1rem;
        margin-bottom: 2rem;
    }
    .btn-custom-primary {
        background-color: #0d9488; /* Warna Teal */
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 6px;
        font-weight: 500;
    }
    .btn-custom-primary:hover {
        background-color: #0f766e;
        color: white;
    }
    .btn-custom-outline {
        border: 1px solid #0d9488;
        color: #0d9488;
        background: transparent;
        padding: 10px 20px;
        border-radius: 6px;
        font-weight: 500;
    }
    .btn-custom-outline:hover {
        background-color: #f0fdfa;
    }
    .feature-card {
        background: white;
        border: 1px solid #e2e8f0;
        border-radius: 10px;
        padding: 24px;
        height: 100%;
        transition: 0.3s;
    }
    .feature-card:hover {
        box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1);
    }
</style>

<!-- Bagian Hero (Atas) -->
<div class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- Kiri: Teks -->
            <div class="col-lg-6 hero-text mb-4 mb-lg-0">
                <h1>Selamat Datang di KursusKu</h1>
                <p>Platform belajar teknologi untuk mahasiswa yang ingin meningkatkan kemampuan pemrograman web.</p>
                <div class="d-flex gap-2 flex-wrap">
                    <a href="{{ route('enrollments.create') }}" class="btn btn-custom-primary">Lihat Kursus</a>
                    <a href="#" class="btn btn-custom-outline">Lihat Estimasi Biaya</a>
                    <a href="{{ route('enrollments.create') }}" class="btn btn-custom-primary">Daftar Kursus</a>
                </div>
            </div>
            <!-- Kanan: Gambar -->
            <div class="col-lg-6 text-center">
                <img src="{{ asset('images/hero-kursus.jpg') }}" alt="Belajar Coding" class="img-fluid rounded shadow" style="max-height: 350px; object-fit: cover;">
            </div>
        </div>
    </div>
</div>

<!-- Bagian Fitur (Bawah) -->
<div class="container py-5">
    <h3 class="mb-4 fw-bold">Mengapa Memilih KursusKu?</h3>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="feature-card">
                <h5 class="fw-bold text-teal" style="color: #0d9488;">Materi Terarah</h5>
                <p class="text-muted mb-0">Belajar dari dasar hingga mahir dengan kurikulum yang tersusun rapi.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card">
                <h5 class="fw-bold" style="color: #0d9488;">Belajar dengan Proyek</h5>
                <p class="text-muted mb-0">Praktik langsung membuat aplikasi nyata, bukan hanya teori.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card">
                <h5 class="fw-bold" style="color: #0d9488;">Pendampingan Praktik</h5>
                <p class="text-muted mb-0">Dibimbing oleh instruktur yang berpengalaman di bidangnya.</p>
            </div>
        </div>
    </div>
</div>
@endsection