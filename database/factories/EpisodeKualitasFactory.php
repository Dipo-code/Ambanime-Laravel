<?php

namespace Database\Factories;

use App\Models\EpisodeKualitas;
use Illuminate\Database\Eloquent\Factories\Factory;

class EpisodeKualitasFactory extends Factory
{
    protected $model = EpisodeKualitas::class;

    public function definition(): array
    {
        return [
            'link_streaming' => $this->faker->url(),
            'link_download_gdrive' => $this->faker->url(),
            'link_download_zippy' => $this->faker->url(),
        ];
    }
}
