<?php

use App\Http\Controllers\Auth\DosenController;
use App\Http\Controllers\Auth\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

// Route Dosen (dari modul layout sebelumnya)
Route::get('/dosen', [App\Http\Controllers\Auth\DosenController::class, 'index'])
     ->name('dosen');


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

// === DB FACADE - RAW SQL (Modul 8) ===
Route::get('/insert-sql', [App\Http\Controllers\Auth\MahasiswaController::class, 'insertSql']);
Route::get('/insert-prepared', [App\Http\Controllers\Auth\MahasiswaController::class, 'insertPrepared']);
Route::get('/insert-binding', [App\Http\Controllers\Auth\MahasiswaController::class, 'insertBinding']);
Route::get('/update', [App\Http\Controllers\Auth\MahasiswaController::class, 'update']);
Route::get('/delete', [App\Http\Controllers\Auth\MahasiswaController::class, 'delete']);
Route::get('/select', [App\Http\Controllers\Auth\MahasiswaController::class, 'select']);
Route::get('/select-tampil', [App\Http\Controllers\Auth\MahasiswaController::class, 'selectTampil']);
Route::get('/select-view', [App\Http\Controllers\Auth\MahasiswaController::class, 'selectView']);
Route::get('/select-where', [App\Http\Controllers\Auth\MahasiswaController::class, 'selectWhere']);
Route::get('/statement', [App\Http\Controllers\Auth\MahasiswaController::class, 'statement']);

// Route untuk navbar Mahasiswa
Route::get('/mahasiswa', [App\Http\Controllers\Auth\MahasiswaController::class, 'selectView'])
    ->name('mahasiswa');

    // Route Prodi
Route::get('/prodi', function () {
    return view('akademik.prodi');
})->name('prodi');

// === QUERY BUILDER DOSEN (Modul 9) ===
Route::get('/insert-dosen', [App\Http\Controllers\Auth\DosenController::class, 'insertDosen']);
Route::get('/insert-banyak-dosen', [App\Http\Controllers\Auth\DosenController::class, 'insertBanyakDosen']);
Route::get('/update-dosen', [App\Http\Controllers\Auth\DosenController::class, 'updateDosen']);
Route::get('/update-where-dosen', [App\Http\Controllers\Auth\DosenController::class, 'updateWhereDosen']);
Route::get('/update-or-insert', [App\Http\Controllers\Auth\DosenController::class, 'updateOrInsert']);
Route::get('/delete-dosen', [App\Http\Controllers\Auth\DosenController::class, 'deleteDosen']);
Route::get('/get', [App\Http\Controllers\Auth\DosenController::class, 'get']);
Route::get('/get-tampil', [App\Http\Controllers\Auth\DosenController::class, 'getTampil']);
Route::get('/get-view', [App\Http\Controllers\Auth\DosenController::class, 'getView']);
Route::get('/get-where', [App\Http\Controllers\Auth\DosenController::class, 'getWhere']);
Route::get('/select-dosen', [App\Http\Controllers\Auth\DosenController::class, 'selectDosen']);
Route::get('/take', [App\Http\Controllers\Auth\DosenController::class, 'take']);
Route::get('/first', [App\Http\Controllers\Auth\DosenController::class, 'first']);
Route::get('/find', [App\Http\Controllers\Auth\DosenController::class, 'find']);
Route::get('/raw', [App\Http\Controllers\Auth\DosenController::class, 'raw']);

// === ELOQUENT ORM (Modul 10) ===
Route::get('/cek-objek', [App\Http\Controllers\Auth\MahasiswaController::class, 'cekObjek']);
Route::get('/insert', [App\Http\Controllers\Auth\MahasiswaController::class, 'insert']);
Route::get('/mass-assignment', [App\Http\Controllers\Auth\MahasiswaController::class, 'massAssignment']);
Route::get('/update', [App\Http\Controllers\Auth\MahasiswaController::class, 'update']);
Route::get('/update-where', [App\Http\Controllers\Auth\MahasiswaController::class, 'updateWhere']);
Route::get('/mass-update', [App\Http\Controllers\Auth\MahasiswaController::class, 'massUpdate']);
Route::get('/delete', [App\Http\Controllers\Auth\MahasiswaController::class, 'delete']);
Route::get('/destroy', [App\Http\Controllers\Auth\MahasiswaController::class, 'destroy']);
Route::get('/mass-delete', [App\Http\Controllers\Auth\MahasiswaController::class, 'massDelete']);
Route::get('/all', [App\Http\Controllers\Auth\MahasiswaController::class, 'all']);
Route::get('/all-view', [App\Http\Controllers\Auth\MahasiswaController::class, 'allView']);
Route::get('/get-where', [App\Http\Controllers\Auth\MahasiswaController::class, 'getWhere']);
Route::get('/first', [App\Http\Controllers\Auth\MahasiswaController::class, 'first']);
Route::get('/find', [App\Http\Controllers\Auth\MahasiswaController::class, 'find']);
Route::get('/latest', [App\Http\Controllers\Auth\MahasiswaController::class, 'latest']);
Route::get('/limit', [App\Http\Controllers\Auth\MahasiswaController::class, 'limit']);
Route::get('/skip-take', [App\Http\Controllers\Auth\MahasiswaController::class, 'skipTake']);
Route::get('/soft-delete', [App\Http\Controllers\Auth\MahasiswaController::class, 'softDelete']);
Route::get('/with-trashed', [App\Http\Controllers\Auth\MahasiswaController::class, 'withTrashed']);
Route::get('/restore', [App\Http\Controllers\Auth\MahasiswaController::class, 'restore']);
Route::get('/force-delete', [App\Http\Controllers\Auth\MahasiswaController::class, 'forceDelete']);

Route::get('/mhs', [App\Http\Controllers\Auth\MahasiswaController::class, 'index'])
     ->name('mahasiswa.paging');
     
Route::get('/dosen-paging', [App\Http\Controllers\Auth\DosenController::class, 'index'])
     ->name('dosen.paging');
