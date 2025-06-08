<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VidioKualitas;
class VidioKualitasSeeder extends Seeder
{
    public function run(): void
    {
        $kualitas = ['360p','480p','720p','1080p'];

        foreach ($kualitas as $k){
            VidioKualitas::create([
                'nama_kualitas' => $k
            ]);
        }
    }
}
