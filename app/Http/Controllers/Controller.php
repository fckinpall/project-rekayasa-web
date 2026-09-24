<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nim' => '251011700252',
            'nama' => 'Naupal Tistiawan',
            'prodi' => 'Sistem Informasi',
            'kampus' => 'Universitas Pamulang',
            'email' => 'naupaltistiawan30@gmail.com',
            'status' => 'Aktif',
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}