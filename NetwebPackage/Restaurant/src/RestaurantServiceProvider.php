<?php

namespace Netweb\Restaurant;

use Illuminate\Support\ServiceProvider;
use Settings;

class RestaurantServiceProvider extends ServiceProvider {
    public function boot() {
        // Load Routes
        $this->loadRoutesFrom(__DIR__ . '/routes/nwt-restaurant.php');

        $this->loadViewsFrom(__DIR__.'/views', 'restaurant');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->mergeConfigFrom(__DIR__.'/config/restaurant.php', 'restaurant');

        // Publish Config
        $this->publishes([
            __DIR__.'/config/restaurant.php' => config_path('restaurant.php')
        ], 'nwt-restaurant');

        $this->publishes([
           // Publish views
           public_path('vendor/nwt-restaurant') => public_path('vendor/nwt-restaurant'),
        ], 'nwt-restaurant');

        // Publish Migrations
        $this->publishes([
            __DIR__ . '/database/migrations/2024_02_21_113013_create_restaurant_names_table.php' =>
            database_path('migrations/2024_02_21_113013_create_restaurant_names_table.php'),
            __DIR__ . '/database/migrations/2024_02_27_054842_create_restaurant_types_table.php' =>
            database_path('migrations/2024_02_27_054842_create_restaurant_types_table.php')
        ], 'nwt-restaurant');

    }


    public function register()
    {

    }
}
