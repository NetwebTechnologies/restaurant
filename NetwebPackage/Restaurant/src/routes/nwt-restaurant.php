<?php

use Illuminate\Support\Facades\Route;
use Netweb\Restaurant\Http\Controllers\AjaxController;
use Netweb\Restaurant\Http\Controllers\RestaurantController;
use Netweb\Restaurant\Http\Controllers\RestaurantControlller;
use Netweb\Restaurant\Http\Controllers\FoodCategoryController;
use Netweb\Restaurant\Http\Controllers\RestaurantFoodController;
use Netweb\Restaurant\Http\Controllers\RestaurantNameController;
use Netweb\Restaurant\Http\Controllers\RestaurantTypeController;

Route::group(['middleware' => 'web'], function() {
    Route::group(['middleware' => 'auth'], function () {

        Route::resource('restaurant-name', RestaurantNameController::class);
        Route::resource('restaurant_types', RestaurantTypeController::class);
        Route::resource('restaurant_food_categories', FoodCategoryController::class);
        Route::resource('restaurants', RestaurantController::class);
        Route::resource('restaurant_foods', RestaurantFoodController::class);

        Route::get('restaurants/{id}/upload/images', [RestaurantController::class, 'imagesIndex'])->name('restaurant.images.index');
        Route::post('restaurants/{id}/images/upload', [RestaurantController::class, 'imagesUploaded'])->name('restaurant.images.upload');

        Route::name('ajax.')->prefix('ajax/')->group(function () {
            Route::post('suppliers/country', [AjaxController::class, 'getSupplierCountry'])->name('suppliers.country');
            Route::post('country/cities', [AjaxController::class, 'getCountryCities'])->name('country.cities');
        });
    });
});
