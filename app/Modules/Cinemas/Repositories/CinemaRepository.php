<?php

namespace App\Modules\Cinemas\Repositories;

use App\Modules\Cinemas\Filters\CinemasFilter;
use App\Modules\Cinemas\Interfaces\CinemaInterface;
use App\Modules\Cinemas\Database\Models\Cinema;
use Ensue\Snap\Repositories\SnapRepository;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class CinemaRepository
 * @package App\Modules\Cinemas\Repositories
 */
final class CinemaRepository extends SnapRepository implements CinemaInterface
{
    /**
     * CinemaRepository constructor.
     * @param Cinema $model
     */
    public function __construct(Cinema $model)
    {
        parent::__construct($model);
    }

    /**
     * @param Builder $builder
     * @return CinemasFilter
     */
    public function getFilter(Builder $builder): CinemasFilter
    {
        return new CinemasFilter($builder);
    }

}
