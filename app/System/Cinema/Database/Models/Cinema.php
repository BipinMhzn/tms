<?php

namespace App\System\Cinema\Database\Models;

use Database\Factories\CinemaFactory;
use Ensue\Snap\Foundation\Database\SnapModel;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cinema extends SnapModel
{
    use HasFactory;
    use HasUuids;

    protected $table = 'cinemas';

    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'location',
        'thumbnail_url',
        'status',
    ];

    protected string $defaultSortColumn = 'title';

    protected string $defaultSortOrder = 'asc';

    protected array $sortableColumns = [
        'title',
        'status',
        'created_at',
    ];

    protected static function newFactory(): CinemaFactory
    {
        return new CinemaFactory();
    }

    protected function casts(): array
    {
        return [
            'status' => 'boolean',
        ];
    }
}
