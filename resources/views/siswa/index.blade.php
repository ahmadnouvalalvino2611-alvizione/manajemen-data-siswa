@extends('layouts.app')

@section('title', 'Data Siswa')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h3 class="fw-bold">Data Siswa</h3>
        <p class="text-muted">Kelola seluruh data siswa.</p>
    </div>

    <a href="{{ route('siswa.create') }}" class="btn btn-primary">
        + Tambah Siswa
    </a>
</div>

<form action="{{ route('siswa.index') }}" method="GET"
    class="mb-3">

    <div class="input-group">
        <input type="text"
            name="search"
            class="form-control"
            placeholder="Cari NIS, nama, kelas, atau jurusan..."
            value="{{ request('search') }}">

        <button class="btn btn-primary" type="submit">
            Cari
        </button>

        <a href="{{ route('siswa.index') }}"
            class="btn btn-secondary">
            Reset
        </a>
    </div>
</form>

<div class="card shadow-sm border-0">
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama Siswa</th>
                        <th>Jenis Kelamin</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($siswas as $siswa)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $siswa->nis }}</td>
                        <td>{{ $siswa->nama }}</td>
                        <td>{{ $siswa->jenis_kelamin }}</td>
                        <td>{{ $siswa->kelas }}</td>
                        <td>{{ $siswa->jurusan }}</td>
                        <td>
                            <div class="d-flex gap-1">
                                <a href="{{ route('siswa.show', $siswa->id) }}"
                                    class="btn btn-sm btn-info text-white">
                                    Detail
                                </a>

                                <a href="{{ route('siswa.edit', $siswa->id) }}"
                                    class="btn btn-sm btn-warning">
                                    Edit
                                </a>

                                <form action="{{ route('siswa.destroy', $siswa->id) }}"
                                    method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-sm btn-danger">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted py-4">
                            Belum ada data siswa.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-3">
            {{ $siswas->links('pagination::bootstrap-5') }}
        </div>

    </div>
</div>

@endsection