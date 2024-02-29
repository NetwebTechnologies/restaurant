<?php

namespace Netweb\Restaurant;

use Illuminate\Support\ServiceProvider;

class RestaurantServiceProvider extends ServiceProvider {
    public function boot() {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'restaurant');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        // $this->mergeConfigFrom(__DIR__.'/config/restaurant.php', 'restaurant');

        // $this->publishes(__DIR__.'/config/restaurant.php', config_path('restaurant.php'));

    }


    public function register()
    {

    }
}
