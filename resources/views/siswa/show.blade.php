@extends('layouts.app')

@section('title', 'Detail Siswa')

@section('content')

<div class="card shadow-sm border-0">
    <div class="card-header bg-info text-white">
        <h5 class="mb-0">Detail Data Siswa</h5>
    </div>

    <div class="card-body">

        <table class="table table-bordered">
            <tr>
                <th width="30%">NIS</th>
                <td>{{ $siswa->nis }}</td>
            </tr>
            <tr>
                <th>Nama Lengkap</th>
                <td>{{ $siswa->nama }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{ $siswa->jenis_kelamin }}</td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <td>{{ $siswa->tempat_lahir }}</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>{{ $siswa->tanggal_lahir }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{ $siswa->alamat }}</td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>{{ $siswa->kelas }}</td>
            </tr>
            <tr>
                <th>Jurusan</th>
                <td>{{ $siswa->jurusan }}</td>
            </tr>
            <tr>
                <th>Nomor HP</th>
                <td>{{ $siswa->no_hp ?? '-' }}</td>
            </tr>
        </table>

        <a href="{{ route('siswa.index') }}"
            class="btn btn-secondary">
            Kembali
        </a>

        <a href="{{ route('siswa.edit', $siswa->id) }}"
            class="btn btn-warning">
            Edit Data
        </a>

    </div>
</div>

@endsection