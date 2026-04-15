<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosens';   // pastikan nama tabel sesuai
    protected $fillable = [
        'nik', 'nama', 'email', 'no_telp', 'prodi', 'alamat'
    ];
}