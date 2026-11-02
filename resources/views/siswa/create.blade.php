@extends('layouts.app')

@section('title', 'Tambah Siswa')

@section('content')

<div class="container mt-2">
    <div class="card">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Form Tambah Siswa</h5>
            </div>

            <div class="card-body">

                @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('siswa.store') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">NIS</label>
                            <input type="text" name="nis"
                                class="form-control"
                                value="{{ old('nis') }}" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama"
                                class="form-control"
                                value="{{ old('nama') }}" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-select" required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir"
                                class="form-control" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir"
                                class="form-control" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nomor HP</label>
                            <input type="text" name="no_hp"
                                class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Kelas</label>
                            <input type="text" name="kelas"
                                class="form-control" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Jurusan</label>
                            <input type="text" name="jurusan"
                                class="form-control" required>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea name="alamat"
                                class="form-control" rows="3" required></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Simpan Data
                    </button>

                    <a href="{{ route('siswa.index') }}" class="btn btn-secondary">
                        Kembali
                    </a>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
