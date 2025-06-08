<?php

namespace Database\Factories;

use App\Models\VidioKualitas;
use Illuminate\Database\Eloquent\Factories\Factory;

class VidioKualitasFactory extends Factory
{
    protected $model = VidioKualitas::class; 

    public function definition(): array
    {
        return [
            'nama_kualitas' => $this->faker->unique()->randomElement(['480p','720P','1080P']),
        ];
    }
}
