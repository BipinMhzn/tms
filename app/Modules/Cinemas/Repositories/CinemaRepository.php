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
    public function __construct(private Cinema $cinema)
    {
        parent::__construct($cinema);
    }

    /**
     * @param Builder $builder
     * @return CinemasFilter
     */
    public function getFilter(Builder $builder): CinemasFilter
    {
        return new CinemasFilter($builder);
    }

    public function createCinema(array $attributes): Cinema
    {
        $model = $this->cinema->newInstance();
        $model->fill($attributes);
        $model->save();

        return $model;
    }

    public function updateCinema(int $cinemaId, array $attributes)
    {
        dd($cinemaId);
    }

    public function destroyCinema(int $cinemaId)
    {
        // TODO: Implement destroyCinema() method.
    }

    public function getCinemaById(int $cinemaId): Cinema
    {
        return $this->model->newQuery()->findOrFail($cinemaId);
    }

    public function toggleCinemaStatus(int $cinemaId)
    {
        // TODO: Implement toggleCinemaStatus() method.
    }
}
