<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Anime;
use App\Models\Genre;

class AnimeGenreSeeder extends Seeder
{
    public function run(): void
    {
        $allGenres = Genre::pluck('id_genre'); // ambil semua ID genre
        
        Anime::all()->each(function ($anime) use ($allGenres) {
            // Ambil 1–3 genre secara random
            $randomGenreIds = $allGenres->random(rand(1, 3))->toArray();

            // Attach genre ke anime
            $anime->genres()->attach($randomGenreIds);
        });
    }
}