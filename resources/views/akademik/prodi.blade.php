@extends('layouts.main')

@section('title', 'Data Prodi')
@section('container')
    <h1 class="mb-4">Daftar Jurusan {{ $jurusan }} - Prodi {{ $prodi }}</h1>
    
    <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <img src="https://picsum.photos/id/1015/300/200" class="card-img-top" alt="Logo">
                <div class="card-body">
                    <h5 class="card-title">Manajemen Informatika</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet...</p>
                    <a href="#" class="btn btn-primary">More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <img src="https://picsum.photos/id/201/300/200" class="card-img-top" alt="Logo">
                <div class="card-body">
                    <h5 class="card-title">Teknik Komputer</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet...</p>
                    <a href="#" class="btn btn-primary">More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <img src="https://picsum.photos/id/301/300/200" class="card-img-top" alt="Logo">
                <div class="card-body">
                    <h5 class="card-title">Teknologi Rekayasa Perangkat Lunak</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet...</p>
                    <a href="#" class="btn btn-primary">More</a>
                </div>
            </div>
        </div>
    </div>
@endsection