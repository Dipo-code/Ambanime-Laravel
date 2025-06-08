<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    /** @use HasFactory<\Database\Factories\AnimeFactory> */
    use HasFactory;

    protected $primaryKey = 'id_anime'; // Tambahkan ini

    public function genres()
{
    return $this->belongsToMany(Genre::class, 'anime_genres', 'id_anime', 'id_genre');
}

}
