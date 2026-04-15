<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        // 100 data dummy pakai Factory + Faker
        Mahasiswa::factory(100)->create();
    }
}