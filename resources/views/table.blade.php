@extends('welcome')

@section('title', 'Table')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4 text-center">Data Mahasiswa</h1>

    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped mt-3">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->jurusan }}</td>
                    <td>{{ $item->kelas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
