<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $jurusanList = ['Informatika', 'Sistem Informasi', 'Teknik Elektro', 'Sains Data', 'Rekayasa Perangkat Lunak', 'Bisnis Digital'];

        return [
            'nim' => fake()->numberBetween(10, 10),
            'nama' => fake()->name(),
            'slug' => fake()->slug(),
            'email' => fake()->email(),
            'noHp' => fake()->phoneNumber(),
            'jurusan' => fake()->randomElement($jurusanList),
            'fotoDiri' => fake()->imageUrl(),
        ];
    }
}
