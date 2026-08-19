<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // Menampilkan semua data siswa
    public function index()
    {
        $siswas = Siswa::all();

        return view('siswa.index', compact('siswas'));
    }

    // Menampilkan form tambah
    public function create()
    {
        return view('siswa.create');
    }

    // Menyimpan data siswa
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'nisn' => 'required',
        ]);

        Siswa::create([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'nisn' => $request->nisn,   
        ]);

        return redirect()->route('siswa.index');
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);

        return view('siswa.edit', compact('siswa'));
    }

    // Mengupdate data
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'nisn' => 'required',
        ]);

        $siswa = Siswa::findOrFail($id);

        $siswa->update([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'nisn' => $request->nisn,
        ]);

        return redirect()->route('siswa.index');
    }

    // Menghapus data
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);

        $siswa->delete();

        return redirect()->route('siswa.index');
    }
}