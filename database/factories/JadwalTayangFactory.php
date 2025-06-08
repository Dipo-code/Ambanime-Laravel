<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\JadwalTayang;
class JadwalTayangFactory extends Factory
{
    protected $model = JadwalTayang::class; 

    public function definition(): array
    {
        return [
            'hari' => $this->faker->randomElement(['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu']),
            'jam_tayang' => $this->faker->time('H:i:s'),
        ];
    }
}
