@extends('layouts.main')

@section('title', 'Data Mahasiswa')
@section('container')
    <h1 class="mb-4">Daftar Mahasiswa Jurusan TI</h1>
    
    <ol class="list-group list-group-numbered">
        @foreach ($mhs as $nama)
            <li class="list-group-item">{{ $nama }}</li>
        @endforeach
    </ol>
@endsection