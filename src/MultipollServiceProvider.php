<?php

namespace Mutationevent\Multipolls;

use Illuminate\Support\ServiceProvider;

class MultipollServiceProvider extends ServiceProvider {
    public function register()
    {
        $this->register();
    }

    public function boot()
    {
        // migrations
        $this->publishes([
            __DIR__ . '/database/migrations/0000_00_00_000000_create_polls_table.php'
            => base_path('database/migrations/0000_00_00_000000_create_polls_table.php'),

        ]);
        // routes
        $this->loadRoutesFrom(__DIR__ . '/Http/routes.php');
        // views
        $this->loadViewsFrom(__DIR__ . '/views', 'multipoll');

        $this->publishes([
            __DIR__ . '/config/config.php' => config_path('mutilpoll_config.php'),
        ]);

    }

    protected function registerMultiPoll()
    {
        $this->app->singleton('multipoll', function ($app) {
            return new MultiPoll();
        });
    }
}