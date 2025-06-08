<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Anime;
use App\Models\Rekomendasi;

class RekomendasiSeeder extends Seeder
{

    public function run(): void
    {
        $animes = Anime::inRandomOrder()->take(5)->get();

        foreach($animes as $anime){
            Rekomendasi::create(['id_anime' => $anime->id_anime]);
        }
    }
}
