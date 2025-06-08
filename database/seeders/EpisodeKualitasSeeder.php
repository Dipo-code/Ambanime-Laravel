<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Episode;
use App\Models\VidioKualitas;
use App\Models\EpisodeKualitas;

class EpisodeKualitasSeeder extends Seeder
{
    public function run(): void
    {
        $episodes = Episode::all();
        $kualitasList = VidioKualitas::all();

        foreach($episodes as $episode){

                $randomKualitas =$kualitasList->random(rand(2,3));

            foreach($randomKualitas as $kualitas){

                EpisodeKualitas::create([
                    'id_episode' => $episode->id_episode,
                    'id_kualitas' => $kualitas->id_kualitas,
                    'link_streaming' => 'https://streaming.example.com/' . uniqid(),
                    'link_download_gdrive' => 'https://drive.google.com/' . uniqid(),
                    'link_download_zippy' => 'https://zippyshare.com/' . uniqid(),
                ]);
            }
        }
    }
}
