@extends('layouts.main')

@section('title', 'Data Dosen')
@section('container')
    <h1 class="mb-4">Daftar Dosen</h1>
    <ol class="list-group list-group-numbered">
        @forelse ($dosen as $namaDosen)
            <li class="list-group-item">{{ $namaDosen }}</li>
        @empty
            <div class="alert alert-warning">Data dosen kosong</div>
        @endforelse
    </ol>
@endsection