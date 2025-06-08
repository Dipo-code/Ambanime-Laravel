<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Anime;
use function Laravel\Prompts\text;

class AnimeFactory extends Factory
{
    
    protected $model = Anime::class;

    public function definition(): array
    {
        return [
            'judul' => $this->faker->unique()->words(3, true),
            'sinopsis' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement(['On-going', 'Completed']),
            'cover_image' => $this->faker->imageUrl(640, 480, 'anime', true),
            'durasi' => $this->faker->numberBetween(20, 60),
            'jumlah_episode' => $this->faker->numberBetween(12, 24),
        ];
    }
}
