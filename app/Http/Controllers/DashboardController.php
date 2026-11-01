<?php

namespace App\Http\Controllers;

use App\Models\Siswa;

class DashboardController extends Controller
{
    public function index()
    {
        $totalSiswa = Siswa::count();

        $lakiLaki = Siswa::where('jenis_kelamin', 'Laki-laki')->count();

        $perempuan = Siswa::where('jenis_kelamin', 'Perempuan')->count();

        $totalKelas = Siswa::distinct('kelas')->count('kelas');

        return view('dashboard', compact(
            'totalSiswa',
            'lakiLaki',
            'perempuan',
            'totalKelas'
        ));
    }
}
