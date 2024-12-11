<?php

namespace App\Modules\Movies\Repositories;

use App\Modules\Movies\Filters\MoviesFilter;
use App\Modules\Movies\Interfaces\MovieInterface;
use App\Modules\Movies\Database\Models\Movie;
use Ensue\Snap\Repositories\SnapRepository;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class MovieRepository
 * @package App\Modules\Movies\Repositories
 */
final class MovieRepository extends SnapRepository implements MovieInterface
{
    /**
     * MovieRepository constructor.
     * @param Movie $model
     */
    public function __construct(Movie $model)
    {
        parent::__construct($model);
    }

    /**
     * @param Builder $builder
     * @return MoviesFilter
     */
    public function getFilter(Builder $builder): MoviesFilter
    {
        return new MoviesFilter($builder);
    }

}
