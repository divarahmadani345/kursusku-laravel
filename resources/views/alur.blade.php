@extends('layouts.app')

@section('title', 'Alur MVC - KursusKu')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Alur Kerja MVC di Laravel</h1>
    <div class="card p-4">
        <p>Berikut adalah alur request di aplikasi KursusKu:</p>
        <ol>
            <li><strong>Browser</strong> meminta halaman (contoh: <code>/alur-mvc</code>).</li>
            <li><strong>Route</strong> menerima request dan mengarahkannya ke Controller.</li>
            <li><strong>Controller</strong> menyiapkan data yang dibutuhkan.</li>
            <li><strong>Blade View</strong> merender HTML dan mengirimkannya kembali ke browser.</li>
        </ol>
        <a href="{{ route('alur') }}" class="btn btn-secondary">Lihat Alur MVC</a>
    </div>
</div>
@endsection