@extends('layouts.app')

@section('content')

<div class="container py-4">

    {{-- Header Dashboard --}}
    <div class="mb-4">
        <h3 class="fw-bold text-dark mb-1">Dashboard</h3>
        <p class="text-secondary mb-0">
            Selamat datang di Sistem Manajemen Data Siswa.
        </p>
    </div>

    {{-- Banner Sambutan --}}
    <div class="alert alert-primary border-0 shadow-sm p-4 mb-4">
        <h5 class="fw-bold mb-2">Selamat Datang!</h5>
        <p class="mb-0">
            Pantau dan kelola data siswa dengan mudah melalui
            Sistem Manajemen Data Siswa.
        </p>
    </div>

    {{-- Ringkasan Data --}}
    <h5 class="fw-semibold mb-3">Ringkasan Data</h5>

    <div class="row g-3">

        {{-- Total Siswa --}}
        <div class="col-md-3 col-sm-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-secondary mb-2">Total Siswa</p>
                            <h2 class="fw-bold text-primary mb-0">
                                {{ $totalSiswa }}
                            </h2>
                        </div>
                        <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                            <span class="fs-3 fw-bold text-primary">S</span>
                        </div>
                    </div>
                    <small class="text-muted">Seluruh siswa terdaftar</small>
                </div>
            </div>
        </div>

        {{-- Siswa Laki-laki --}}
        <div class="col-md-3 col-sm-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-secondary mb-2">Siswa Laki-laki</p>
                            <h2 class="fw-bold text-success mb-0">
                                {{ $lakiLaki }}
                            </h2>
                        </div>
                        <div class="bg-success bg-opacity-10 rounded-3 p-3">
                            <span class="fs-3 fw-bold text-success">L</span>
                        </div>
                    </div>
                    <small class="text-muted">Jumlah siswa laki-laki</small>
                </div>
            </div>
        </div>

        {{-- Siswa Perempuan --}}
        <div class="col-md-3 col-sm-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-secondary mb-2">Siswa Perempuan</p>
                            <h2 class="fw-bold text-danger mb-0">
                                {{ $perempuan }}
                            </h2>
                        </div>
                        <div class="bg-danger bg-opacity-10 rounded-3 p-3">
                            <span class="fs-3 fw-bold text-danger">P</span>
                        </div>
                    </div>
                    <small class="text-muted">Jumlah siswa perempuan</small>
                </div>
            </div>
        </div>

        {{-- Jumlah Kelas --}}
        <div class="col-md-3 col-sm-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-secondary mb-2">Jumlah Kelas</p>
                            <h2 class="fw-bold text-warning mb-0">
                                {{ $totalKelas }}
                            </h2>
                        </div>
                        <div class="bg-warning bg-opacity-10 rounded-3 p-3">
                            <span class="fs-3 fw-bold text-warning">K</span>
                        </div>
                    </div>
                    <small class="text-muted">Kelas terdaftar</small>
                </div>
            </div>
        </div>

    </div>

    {{-- Manajemen Data Siswa --}}
    <div class="card border-0 shadow-sm mt-4">
        <div class="card-body p-4">
            <h5 class="fw-bold mb-2">Manajemen Data Siswa</h5>

            <p class="text-secondary">
                Lihat dan kelola informasi siswa yang tersimpan
                di dalam sistem.
            </p>

            <a href="{{ route('siswa.index') }}" class="btn btn-primary">
                Kelola Data Siswa
            </a>
        </div>
    </div>

    {{-- Informasi Tambahan --}}
    <div class="row g-3 mt-2">

        <div class="col-md-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <h6 class="fw-bold mb-3">Tentang Aplikasi</h6>
                    <p class="text-secondary mb-0">
                        Sistem Manajemen Data Siswa digunakan
                        untuk membantu pengelolaan informasi
                        siswa dan kelas secara teratur.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <h6 class="fw-bold mb-3">Panduan Penggunaan</h6>
                    <p class="text-secondary mb-0">
                        Gunakan menu Data Siswa untuk menambah,
                        melihat, mengedit, dan menghapus data siswa.
                    </p>
                </div>
            </div>
        </div>

    </div>

    {{-- Footer --}}
    <div class="text-center border-top mt-5 pt-3">
        <small class="text-secondary">
            &copy; {{ date('Y') }} Sistem Manajemen Data Siswa.
            All rights reserved.
        </small>
    </div>

</div>

@endsection
