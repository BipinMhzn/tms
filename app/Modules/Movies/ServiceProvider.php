<?php

namespace App\Modules\Movies;

use \Illuminate\Support\ServiceProvider as BaseServiceProvider;
use App\Modules\Movies\Interfaces\MovieInterface;
use App\Modules\Movies\Repositories\MovieRepository;

/**
 * Class ServiceProvider
 * @package App\Modules\Movies
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
        $this->app->bind(MovieInterface::class, MovieRepository::class);
    }
}
