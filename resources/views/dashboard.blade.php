@extends('layouts.app')

@section('content')
<div class="container py-4">

    <h2 class="mb-2">Dashboard</h2>
    <p class="text-muted">Selamat datang di Sistem Manajemen Data Siswa.</p>

    <div class="row g-3 mt-3">

        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6 class="text-muted">Total Siswa</h6>
                    <h2>{{ $totalSiswa }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6 class="text-muted">Siswa Laki-laki</h6>
                    <h2>{{ $lakiLaki }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6 class="text-muted">Siswa Perempuan</h6>
                    <h2>{{ $perempuan }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6 class="text-muted">Jumlah Kelas</h6>
                    <h2>{{ $totalKelas }}</h2>
                </div>
            </div>
        </div>

    </div>

    <div class="card shadow-sm mt-4">
        <div class="card-body">
            <h5>Manajemen Data Siswa</h5>
            <p class="text-muted">
                Kelola informasi siswa melalui menu Data Siswa.
            </p>
            <a href="{{ route('siswa.index') }}" class="btn btn-primary">
                Buka Data Siswa
            </a>
        </div>
    </div>

</div>
@endsection