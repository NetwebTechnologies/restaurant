<?php

namespace Netweb\Restaurant;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class RestaurantServiceProvider extends ServiceProvider {
    public function boot() {
        Log::error('RestaurantServiceProvider Working 1');

        $this->loadRoutesFrom(__DIR__ . '/routes/nwt-restaurant.php');
        Log::error('RestaurantServiceProvider Working 2');

        $this->loadViewsFrom(__DIR__.'/views', 'restaurant');
        Log::error('RestaurantServiceProvider Working 3');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        Log::error('RestaurantServiceProvider Working 4');

        $this->mergeConfigFrom(__DIR__.'/config/restaurant.php', 'restaurant');
        Log::error('RestaurantServiceProvider Working 5');

        // Publish Config
        // $this->publishes([
        //     __DIR__.'/config/restaurant.php' => config_path('restaurant.php')
        // ], 'nwt-restaurant');

        // $this->publishes([
        //    // Publish views
        //     __DIR__.'/views/assets/' => public_path('vendor/nwt-restaurant'),
        // ], 'nwt-restaurant');

        // Publish Migrations
        $this->publishes([
            __DIR__ . '/database/migrations/2024_02_21_113013_create_restaurant_names_table.php' =>
            database_path('/migrations/2024_02_21_113013_create_restaurant_names_table.php'),
            __DIR__ . '/database/migrations/2024_02_27_054842_create_restaurant_types_table.php' =>
            database_path('/migrations/2024_02_27_054842_create_restaurant_types_table.php')
        ], 'nwt-restaurant');
        Log::error('RestaurantServiceProvider Working 6');


    }


    public function register()
    {

    }
}
