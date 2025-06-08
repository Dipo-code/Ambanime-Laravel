<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    /** @use HasFactory<\Database\Factories\GenreFactory> */
    use HasFactory;

    protected $primaryKey = 'id_genre'; // Tambahkan ini

    public function animes()
{
    return $this->belongsToMany(Anime::class, 'anime_genres', 'id_genre', 'id_anime');
}
}
