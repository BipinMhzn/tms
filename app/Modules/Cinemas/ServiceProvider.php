<?php

namespace App\Modules\Cinemas;

use \Illuminate\Support\ServiceProvider as BaseServiceProvider;
use App\Modules\Cinemas\Interfaces\CinemaInterface;
use App\Modules\Cinemas\Repositories\CinemaRepository;

/**
 * Class ServiceProvider
 * @package App\Modules\Cinemas
 */
class ServiceProvider extends BaseServiceProvider
{
    /**
     * @type bool
     */
    protected $defer = true;

    /**
     * Register your binding
     */
    public function register(): void
    {
        $this->app->bind(CinemaInterface::class, CinemaRepository::class);
    }
}
