<?php

namespace App\Models;

use App\Enums\Movie\MovieGenreEnum;
use App\Enums\Movie\MovieRatingEnum;
use Database\Factories\MovieFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    /** @use HasFactory<\Database\Factories\MovieFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'release_at',
        'languages',
        'genre',
        'rating',
        'thumbnail_url',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
        'genre' => MovieGenreEnum::class,
        'rating' => MovieRatingEnum::class,
    ];

    protected $maps = [
        'release_at' => 'releaseAt',
        'thumbnail_url' => 'thumbnailUrl',
    ];

    protected static function newFactory(): MovieFactory
    {
        return MovieFactory::new();
    }
}
