<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Anime;

class AnimeSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Anime::factory(10)->create();
    }
}
