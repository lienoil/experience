<?php

namespace Travel\Providers;

use Pluma\Support\Providers\ServiceProvider;

class TravelServiceProvider extends ServiceProvider
{
    /**
     * Array of observable models.
     *
     * @var array
     */
    protected $observables = [
        [\Travel\Models\Travel::class, '\Travel\Observers\TravelObserver'],
    ];

    /**
     * Registered middlewares on the
     * Service Providers Level.
     *
     * @var mixed
     */
    protected $middlewares = [
        //
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->bootObservables();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
