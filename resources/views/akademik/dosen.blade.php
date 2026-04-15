@extends('layouts.main')

@section('title', 'Data Dosen')
@section('container')
    <h1 class="mb-4">Daftar Dosen</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No Telp</th>
                <th>Prodi</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dosens as $index => $dosen)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $dosen->nik }}</td>
                <td>{{ $dosen->nama }}</td>
                <td>{{ $dosen->email }}</td>
                <td>{{ $dosen->no_telp }}</td>
                <td>{{ $dosen->prodi }}</td>
                <td>{{ $dosen->alamat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center mt-4">
        {{ $dosens->links() }}
    </div>
@endsection