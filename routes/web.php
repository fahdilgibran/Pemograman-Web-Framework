<?php

use App\Http\Controllers\Auth\DosenController;
use App\Http\Controllers\Auth\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/dosen', [DosenController::class, 'index']);


// Route::get('/home', function(){
//     echo "Halaman Home <br>";
//     echo "Baris Kedua";
// })->name('home');

// Route::get('/mahasiswa', function () {
//     $mhs = ['Bill Gates', 'Linus Benedict Torvalds', 'Taylor Otwell', 'Elon Musk', 'Muhammad Yazid'];
//     return view('akademik.mahasiswa', compact('mhs'));
// })->name('mahasiswa');

// Route::get('/dosen', function () {
//     $dosen = ['Ronal Hadi', 'Deni S', 'Fazrol R', 'Deddy P', 'Ervan A', 'Cipto P'];
//     return view('akademik.dosen', compact('dosen'));
// })->name('dosen');

// Route::get('/pnp/{jurusan}/{prodi}', function ($jurusan, $prodi) {
//     return view('akademik.prodi', compact('jurusan', 'prodi'));
// })->name('prodi');

// Route::get('/mahasiswa/ti/udin', function (){
//     echo "Selamat Datang Udin";
// });

// Route::get('/mahasiswa/{nama}', function ($nama){
//     return "Selamat Datang $nama";
// });

// Route::get('/mahasiswa/{nama}/{nim}', function ($nama, $nim){
//     return "Selamat Datang $nama, NIM: $nim";
// });

// Route::get('/dosen-param/{nama?}/{nip?}', function ($nama = "", $nip = ""){
//     return "Selamat Datang $nama, NIP: $nip";
// });

// Route::redirect('/home', '/');