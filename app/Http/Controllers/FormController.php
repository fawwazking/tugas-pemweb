<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:mahasiswas,email',
            'password' => 'required|min:6|same:konfirmasi',
            'konfirmasi' => 'required|min:6',
            'jurusan' => 'required|string',
            'kelas' => 'required|string',
        ]);

        Mahasiswa::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'jurusan' => $request->jurusan,
            'kelas' => $request->kelas,
        ]);

        return redirect()->route('form.table')->with('success', 'Data berhasil disimpan!');
    }

    public function table()
    {
        $data = Mahasiswa::all();
        return view('table', compact('data'));
    }
}
