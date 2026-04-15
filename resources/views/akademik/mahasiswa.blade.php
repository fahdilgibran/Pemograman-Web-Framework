@extends('layouts.main')

@section('title', 'Daftar Mahasiswa')
@section('container')
    <h1 class="mb-4">Daftar Mahasiswa</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}
            <div class="d-flex justify-content-center mt-4">
                {{ $mahasiswas->links() }}
            </div>
        </div>
    @endif  

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tgl Lahir</th>
                <th>Prodi</th>
                <th>IPK</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswas as $index => $mhs)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $mhs->nim }}</td>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->tempat_lahir }}</td>
                <td>{{ $mhs->tgl_lahir }}</td>
                <td>{{ $mhs->prodi }}</td>
                <td>{{ $mhs->ipk }}</td>
                <td>{{ $mhs->alamat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection