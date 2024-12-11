<?php

namespace App\Modules\Public\Repositories;

use App\Modules\Public\Filters\MoviesFilter;
use App\Modules\Public\Interfaces\MovieInterface;
use App\Modules\Public\Database\Models\Movie;
use Ensue\Snap\Repositories\SnapRepository;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class PublicRepository
 * @package App\Modules\Publics\Repositories
 */
final class MovieRepository extends SnapRepository implements MovieInterface
{
    /**
     * PublicRepository constructor.
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
