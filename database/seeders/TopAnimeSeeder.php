<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TopAnime;
use App\Models\Anime;

class TopAnimeSeeder extends Seeder
{
    public function run(): void
    {
        $animes = Anime::inRandomOrder()->take(5)->get();

        foreach($animes as $anime){
            TopAnime::create(['id_anime' => $anime->id_anime]);
        }
    }
}
