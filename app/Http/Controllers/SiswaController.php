<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // Menampilkan daftar siswa
    public function index(Request $request)
    {
        $query = Siswa::query();

        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('nis', 'like', "%{$search}%")
                    ->orWhere('nama', 'like', "%{$search}%")
                    ->orWhere('kelas', 'like', "%{$search}%")
                    ->orWhere('jurusan', 'like', "%{$search}%");
            });
        }

        $siswas = $query->latest()
            ->paginate(10)
            ->withQueryString();

        return view('siswa.index', compact('siswas'));
    }


    // Menampilkan form tambah siswa
    public function create()
    {
        return view('siswa.create');
    }

    // Menyimpan data siswa
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nis' => 'required|unique:siswas,nis',
            'nama' => 'required|string|max:100',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'kelas' => 'required|string|max:20',
            'jurusan' => 'required|string|max:50',
            'no_hp' => 'nullable|string|max:15',
        ]);

        Siswa::create($validated);

        return redirect()->route('siswa.index')
            ->with('success', 'Data siswa berhasil ditambahkan!');
    }

    // Menampilkan detail siswa
    public function show(Siswa $siswa)
    {
        return view('siswa.show', compact('siswa'));
    }

    // Menampilkan form edit siswa
    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    // Memperbarui data siswa
    public function update(Request $request, Siswa $siswa)
    {
        $validated = $request->validate([
            'nis' => 'required|unique:siswas,nis,' . $siswa->id,
            'nama' => 'required|string|max:100',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'kelas' => 'required|string|max:20',
            'jurusan' => 'required|string|max:50',
            'no_hp' => 'nullable|string|max:15',
        ]);

        $siswa->update($validated);

        return redirect()->route('siswa.index')
            ->with('success', 'Data siswa berhasil diperbarui!');
    }

    // Menghapus data siswa
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        return redirect()->route('siswa.index')
            ->with('success', 'Data siswa berhasil dihapus!');
    }

    public function dashboard()
    {
        $totalSiswa = Siswa::count();

        $lakiLaki = Siswa::where(
            'jenis_kelamin',
            'Laki-laki'
        )->count();

        $perempuan = Siswa::where(
            'jenis_kelamin',
            'Perempuan'
        )->count();

        return view('dashboard', compact(
            'totalSiswa',
            'lakiLaki',
            'perempuan'
        ));
    }
}
