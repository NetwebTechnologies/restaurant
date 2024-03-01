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
        ], Settings::$KEY_PROVIDER);

        $this->publishes([
           // Publish views
            __DIR__.'/views/assets/' => public_path('vendor/nwt-restaurant'),
        ], Settings::$KEY_PROVIDER);

        // Publish Migrations
        $this->publishes([
            __DIR__ . '/database/migrations/2024_02_21_113013_create_restaurant_names_table.php' =>
            database_path('/migrations/2024_02_21_113013_create_restaurant_names_table.php'),
            __DIR__ . '/database/migrations/2024_02_27_054842_create_restaurant_types_table.php' =>
            database_path('/migrations/2024_02_27_054842_create_restaurant_types_table.php')
        ], Settings::$KEY_PROVIDER);


    }


    public function register()
    {

    }
}
