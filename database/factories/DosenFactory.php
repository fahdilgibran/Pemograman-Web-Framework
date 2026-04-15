<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DosenFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nik'      => $this->faker->bothify('19##############'),  // 18 digit
            'nama'     => $this->faker->name(),
            'email'    => $this->faker->unique()->safeEmail(),
            'no_telp'  => $this->faker->numerify('08##########'),     // format Indonesia, max 13 digit
            'prodi'    => $this->faker->randomElement(['TRPL', 'MI', 'Teknik Komputer']),
            'alamat'   => $this->faker->address(),
        ];
    }
}