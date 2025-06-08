<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Anime;
use App\Models\Episode;

class EpisodeSeeder extends Seeder
{
    public function run(): void
    {
        $animes = Anime::all();

        foreach ($animes as $anime){
            $jumlahEpisode = rand(10,14);
            for($i = 1; $i <= $jumlahEpisode; $i++){
                Episode::create([
                    'id_anime' => $anime->id_anime,
                    'judul_episode' => fake()->sentence(),
                    'nomor_episode' => $i
                ]);
            }
        }
    }
}
