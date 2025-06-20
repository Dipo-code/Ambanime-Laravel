<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VidioKualitas extends Model
{
    /** @use HasFactory<\Database\Factories\VidioKualitasFactory> */
    use HasFactory;
    public function episodeKualitas()
    {
        return $this->hasmany(EpisodeKualitas::class,'id_kualitas');
    }
}
