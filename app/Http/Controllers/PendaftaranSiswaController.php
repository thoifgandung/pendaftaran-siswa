<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendaftaranSiswa;

class PendaftaranSiswaController extends Controller
{
    public function create()
    {
        return view('pendaftaran_siswa.create');
    }
    
    public function store(Request $request)
    {
        PendaftaranSiswa::create($request->all());
        return redirect()->route('pendaftaran_siswa.create')->with('success', 'Data siswa berhasil disimpan.');
    }
}
