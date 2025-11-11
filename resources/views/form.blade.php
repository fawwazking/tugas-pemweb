@extends('welcome')

@section('title', 'Form Mahasiswa')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4 text-center">Form Input Mahasiswa</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('form.store') }}" method="POST" class="p-4 border rounded bg-light shadow-sm">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Masukkan email" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Konfirmasi Password</label>
            <input type="password" name="konfirmasi" class="form-control" placeholder="Konfirmasi password" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Jurusan</label>
            <select name="jurusan" class="form-select" required>
                <option value="">-- Pilih Jurusan --</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Teknik Komputer">Teknik Komputer</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Kelas</label>
            <input type="text" name="kelas" class="form-control" placeholder="Contoh: TI-1A" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Simpan</button>
    </form>
</div>
@endsection
