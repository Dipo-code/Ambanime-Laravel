<?php


namespace Database\Factories;

use App\Models\Episode;
use Illuminate\Database\Eloquent\Factories\Factory;

class EpisodeFactory extends Factory
{
    protected $model = Episode::class;

    public function definition(): array
    {
        return [
            'judul_episode' => $this->faker->sentence(3),
            'nomor_episode' => 1, // Akan di-set manual di Seeder agar berurutan
        ];
    }
}
