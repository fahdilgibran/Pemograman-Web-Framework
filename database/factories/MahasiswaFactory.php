<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nim'          => $this->faker->bothify('2022######'),
            'nama'         => $this->faker->name(),
            'tempat_lahir' => $this->faker->city(),
            'tgl_lahir'    => $this->faker->date('Y-m-d'),
            'prodi'        => $this->faker->randomElement(['TRPL', 'MI', 'Teknik Komputer']),
            'ipk'          => $this->faker->randomFloat(2, 2.50, 4.00),
            'alamat'       => $this->faker->address(),
        ];
    }
}