<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EpisodeKualitas extends Model
{
    /** @use HasFactory<\Database\Factories\EpisodeKualitasFactory> */
    use HasFactory;
    
    public function vidioKualitas()
    {
        return $this->belongsTo(VidioKualitas::class,'id_kualitas');
    }
}
