<?php

use Illuminate\Support\Facades\Route;
use Netweb\Restaurant\Http\Controllers\RestaurantNameController;
use Netweb\Restaurant\Http\Controllers\RestaurantTypeController;

Route::resource('restaurant-name', RestaurantNameController::class);


Route::group(['middleware' => 'web'], function() {
    Route::group(['middleware' => 'auth'], function () {
        Route::resource('restaurant_types', RestaurantTypeController::class);
    });
});
