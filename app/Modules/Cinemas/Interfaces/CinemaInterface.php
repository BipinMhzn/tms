<?php

namespace App\Modules\Cinemas\Interfaces;

use App\Modules\Cinemas\Database\Models\Cinema;
use Ensue\Snap\Interfaces\SnapCrudInterface;

/**
 * Interface CinemaInterface
 * @package App\Modules\Cinemas\Interfaces
 */
interface CinemaInterface extends SnapCrudInterface
{

    public function createCinema(array $attributes): Cinema;

    public function updateCinema(int $cinemaId, array $attributes);

    public function destroyCinema(int $cinemaId);

    public function getCinemaById(int $cinemaId): Cinema;

    public function toggleCinemaStatus(int $cinemaId);
}
