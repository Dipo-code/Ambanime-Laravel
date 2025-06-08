<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
     $this->call([
        GenreSeeder::class,
        AnimeSeeder::class,
        EpisodeSeeder::class,
        AnimeGenreSeeder::class,
        VidioKualitasSeeder::class,
        EpisodeKualitasSeeder::class,
        TopAnimeSeeder::class,
        RekomendasiSeeder::class,
        AdminSeeder::class,
     ]);   
    }
}
