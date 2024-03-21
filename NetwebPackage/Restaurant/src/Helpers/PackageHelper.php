<?php

use App\User;
use Illuminate\Support\Facades\DB;
use Netweb\Restaurant\Models\FoodCategory;
use Netweb\Restaurant\Models\RestaurantType;

function getRestaurantTypes($active = true) {
    return RestaurantType::when($active, function ($query) {
        return $query->where('status', 1);
    })->get();
}
function getFoodCategories($active = true) {
    return FoodCategory::when($active, function ($query) {
        return $query->where('status', 1);
    })->get();
}

function getSuppliersList($active = true)
{
    return DB::table('suppliers')->where(function($query) {
        return $query->where('status', null)->orWhere('status', 1);
    })->where('approved_status', 1)->get();
}
