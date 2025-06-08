<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    /** @use HasFactory<\Database\Factories\EpisodeFactory> */
    use HasFactory;

    public function anime()
{
    return $this->belongsTo(Anime::class, 'id_anime');
}

    public function kualitas()
    {
        return $this->hasMany(EpisodeKualitas::class,'id_episode');
    }
}
