<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'student';           // ← penting! table kamu bernama student
    protected $primaryKey = 'id';
    public $timestamps = true;

    // Kolom yang boleh diisi mass assignment
    protected $fillable = [
        'nim', 'nama', 'tempat_lahir', 'tgl_lahir', 
        'prodi', 'ipk', 'alamat'
    ];

    // Kolom yang otomatis diisi timestamp oleh soft delete
    protected $dates = ['deleted_at'];
}