<?php

Namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        return "Ini adalah halaman index mahasiswa";
    }

    public function insertSql(){
        $query = DB::insert("INSERT INTO student (nim, nama, tempat_lahir, tgl_lahir, prodi, ipk, alamat, created_at, updated_at)
        VALUES ('2401092004', 'Fahdil Muhammad Gibran', 'Padang', '2006-04-22', 'Teknik Informatika', 3.75, 'Jl. Kelok Kuranji', now(), now())");
        return "Data berhasil disimpan";
    }

    public function insertPrepared(){
        $query = DB::insert("INSERT INTO student (nim, nama, tempat_lahir, tgl_lahir, prodi, ipk, alamat, created_at, updated_at)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)", ['2401092004', 'Pajok', 'Padang', '2005-03-12', 'Teknik Informatika', 3.25, 'Jl. Pariaman', now(), now()]);
        return "Data berhasil disimpan";
    }

    public function insertBinding(){
        $nim = '2401092003';
        $nama = 'Farhan Aziz';
        $tempat_lahir = 'Padang';
        $tgl_lahir = '2006-06-08';
        $prodi = 'Teknik Informatika';
        $ipk = 3.80;
        $alamat = 'Jl. Alahan Panjang';
        $query = DB::insert("INSERT INTO student (nim, nama, tempat_lahir, tgl_lahir, prodi, ipk, alamat, created_at, updated_at)
        VALUES (:nim, :nama, :tempat_lahir, :tgl_lahir, :prodi, :ipk, :alamat, :created_at, :updated_at)", 
        [
            'nim' => $nim,
            'nama' => $nama,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_lahir,
            'prodi' => $prodi,
            'ipk' => $ipk,
            'alamat' => $alamat,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return "Data berhasil disimpan";
    }

    public function update(){
        $query = DB::update("UPDATE student SET tempat_lahir = 'Jakarta' WHERE nim = '2401092003'");
        return "Data berhasil diupdate";
    }

    public function delete(){
        $query = DB::delete("DELETE FROM student WHERE nim = '2401092004'");
        return "Data berhasil dihapus";
    }
}