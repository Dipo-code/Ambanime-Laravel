<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Genre;

class AnimeGenreFactory extends Factory
{
   
    protected $model = Genre::class;

    public function definition(): array
    {
        return [
            'nama_genre' => $this->faker->unique()->randomElement(['Action','Comedy','Romance','Fantasy','Isekai']),   
        ];
    }
}
