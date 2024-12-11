<?php

namespace App\System\Movie\Database\Models;

use App\Enums\Movie\MovieGenreEnum;
use App\Enums\Movie\MovieRatingEnum;
use Database\Factories\MovieFactory;
use Ensue\Snap\Foundation\Database\SnapModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends SnapModel
{
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
