<?php

namespace App\Modules\Public;

use \Illuminate\Support\ServiceProvider as BaseServiceProvider;
use App\Modules\Public\Interfaces\MovieInterface;
use App\Modules\Public\Repositories\MovieRepository;

/**
 * Class ServiceProvider
 * @package App\Modules\Publics
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
