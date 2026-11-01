@extends('layouts.app')

@section('title', 'Edit Siswa')

@section('content')

<div class="card shadow-sm border-0">
    <div class="card-header bg-warning">
        <h5 class="mb-0">Edit Data Siswa</h5>
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

        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">NIS</label>
                    <input type="text" name="nis"
                        class="form-control"
                        value="{{ old('nis', $siswa->nis) }}" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama"
                        class="form-control"
                        value="{{ old('nama', $siswa->nama) }}" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-select" required>
                        <option value="Laki-laki"
                            {{ old('jenis_kelamin', $siswa->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>
                            Laki-laki
                        </option>
                        <option value="Perempuan"
                            {{ old('jenis_kelamin', $siswa->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>
                            Perempuan
                        </option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir"
                        class="form-control"
                        value="{{ old('tempat_lahir', $siswa->tempat_lahir) }}" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir"
                        class="form-control"
                        value="{{ old('tanggal_lahir', $siswa->tanggal_lahir) }}" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Nomor HP</label>
                    <input type="text" name="no_hp"
                        class="form-control"
                        value="{{ old('no_hp', $siswa->no_hp) }}">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Kelas</label>
                    <input type="text" name="kelas"
                        class="form-control"
                        value="{{ old('kelas', $siswa->kelas) }}" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Jurusan</label>
                    <input type="text" name="jurusan"
                        class="form-control"
                        value="{{ old('jurusan', $siswa->jurusan) }}" required>
                </div>

                <div class="col-12 mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control"
                        rows="3" required>{{ old('alamat', $siswa->alamat) }}</textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-warning">
                Update Data
            </button>

            <a href="{{ route('siswa.index') }}" class="btn btn-secondary">
                Kembali
            </a>
        </form>
    </div>
</div>

@endsection